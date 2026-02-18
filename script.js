document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация иконок и анимаций
    lucide.createIcons();
    AOS.init({ duration: 1000, once: true });

    // 2. Мобильное меню
    const burger = document.getElementById('burger');
    const nav = document.getElementById('nav');
    const navLinks = document.querySelectorAll('.nav__link');

    if (burger && nav) {
        const toggleMenu = () => {
            burger.classList.toggle('active');
            nav.classList.toggle('active');
            document.body.classList.toggle('no-scroll');
        };

        burger.addEventListener('click', toggleMenu);
        navLinks.forEach(link => link.addEventListener('click', toggleMenu));
    }

    // 3. FAQ АККОРДЕОН (Исправлено)
    const faqQuestions = document.querySelectorAll('.faq__question');
    
    faqQuestions.forEach(button => {
        button.addEventListener('click', () => {
            const currentItem = button.parentElement;
            const isOpen = currentItem.classList.contains('active');

            // Закрываем все остальные вопросы
            document.querySelectorAll('.faq__item').forEach(item => {
                item.classList.remove('active');
                item.querySelector('.faq__answer').style.maxHeight = null;
            });

            // Если текущий был закрыт — открываем его
            if (!isOpen) {
                currentItem.classList.add('active');
                const answer = currentItem.querySelector('.faq__answer');
                // Используем scrollHeight для точного расчета высоты
                answer.style.maxHeight = answer.scrollHeight + "px";
            }
        });
    });

    // 4. Cookie Popup
    const cookiePopup = document.getElementById('cookiePopup');
    const acceptBtn = document.getElementById('acceptCookies');

    if (cookiePopup && !localStorage.getItem('cookiesAccepted')) {
        setTimeout(() => cookiePopup.classList.add('active'), 2000);
    }

    if (acceptBtn) {
        acceptBtn.addEventListener('click', () => {
            localStorage.setItem('cookiesAccepted', 'true');
            cookiePopup.classList.remove('active');
        });
    }

    // 5. Валидация телефона (только цифры)
    const phoneInput = document.getElementById('phoneInput');
    if (phoneInput) {
        phoneInput.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/[^0-9+]/g, '');
        });
    }

    // 6. Математическая капча
    const captchaText = document.getElementById('captchaQuestion');
    if (captchaText) {
        const num1 = Math.floor(Math.random() * 10) + 1;
        const num2 = Math.floor(Math.random() * 10) + 1;
        const correctAnswer = num1 + num2;
        captchaText.innerText = `${num1} + ${num2}`;

        // Логика формы
        const contactForm = document.getElementById('contactForm');
        const formMessage = document.getElementById('formMessage');

        if (contactForm) {
            contactForm.addEventListener('submit', async (e) => {
                e.preventDefault();
                const userAnswer = parseInt(document.getElementById('captchaAnswer').value);

                if (userAnswer !== correctAnswer) {
                    formMessage.innerText = 'Неверный ответ на капчу!';
                    formMessage.className = 'form__message error';
                    return;
                }

                const submitBtn = contactForm.querySelector('.form__submit');
                submitBtn.disabled = true;
                submitBtn.innerText = 'Отправка...';

                await new Promise(resolve => setTimeout(resolve, 1500));

                formMessage.innerText = 'Спасибо! Мы свяжемся с вами в ближайшее время.';
                formMessage.className = 'form__message success';
                contactForm.reset();
                submitBtn.disabled = false;
                submitBtn.innerText = 'Запросить доступ';
            });
        }
    }
});