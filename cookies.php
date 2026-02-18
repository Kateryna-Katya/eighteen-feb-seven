<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — IT-образование нового поколения
    </title>
<link rel="icon" type="image/svg+xml"
    href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect x='20' y='20' width='60' height='60' rx='15' fill='%2300f5d4'/><circle cx='50' cy='50' r='15' fill='%230f1115'/></svg>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Syne:wght@700;800&display=swap"
        rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/lucide@latest"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#home" class="logo">
                <span class="logo__icon"></span>
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>

            <nav class="nav" id="nav">
                <ul class="nav__list">
                    <li><a href="./#home" class="nav__link">Главная</a></li>
                    <li><a href="./#courses" class="nav__link">Курсы</a></li>
                    <li><a href="./#features" class="nav__link">Преимущества</a></li>
                    <li><a href="./#reviews" class="nav__link">Отзывы</a></li>
                    <li><a href="./#faq" class="nav__link">FAQ</a></li>
                </ul>
            </nav>

            <div class="header__actions">
                <a href="./#contact" class="btn btn--secondary">Связаться</a>
                <button class="burger" id="burger" aria-label="Menu">
                    <span></span>
                </button>
            </div>
        </div>
    </header>
<main>
    <section class="pages">
        <div class="container">
            <h1 data-aos="fade-up">Политика использования файлов cookie</h1>

            <p class="pages__intro" data-aos="fade-up" data-aos-delay="100">
                Добро пожаловать на платформу <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                взаимодействия с нашей IT-школой, обеспечить корректную работу сервисов и
                анализировать активность, мы используем файлы cookie. Настоящая политика объясняет, как 
                инновационная технология помогает нам делать обучение удобнее именно для вас.
            </p>

            <div class="pages__content" data-aos="fade-up" data-aos-delay="200">
                <h2>Что такое файлы cookie?</h2>
                <p>
                    Файл cookie — это небольшой фрагмент данных, который веб-сайт сохраняет на вашем устройстве, когда вы его посещаете. Это позволяет 
                    <strong><?= $domainTitle ?></strong> "помнить" ваши предпочтения (язык, настройки региона Великобритания и другие параметры), 
                    чтобы вам не приходилось вводить их повторно при каждом визите.
                </p>

                <h2>Какие типы файлов cookie мы используем?</h2>
                <p>
                    Мы классифицируем файлы cookie на сайте <strong><?= $fullDomain ?></strong> по следующим категориям:
                </p>
                <ul>
                    <li>
                        <strong>Строго необходимые:</strong> Критически важны для функционирования платформы. Без них невозможен доступ к личному кабинету и курсам.
                    </li>
                    <li>
                        <strong>Аналитические:</strong> Собирают анонимную информацию о том, как студенты используют наш сайт, помогая нам оптимизировать пошаговый путь обучения.
                    </li>
                    <li>
                        <strong>Функциональные:</strong> Позволяют запоминать ваш выбор для предоставления более персонализированного опыта в рамках наших программ.
                    </li>
                    <li>
                        <strong>Маркетинговые:</strong> Используются для показа предложений, соответствующих вашим интересам в сфере IT и технологий.
                    </li>
                </ul>

                <h2>Зачем мы их используем?</h2>
                <p>Основные цели использования файлов cookie на платформе:</p>
                <ul>
                    <li>Обеспечение стабильной и безопасной работы передовой цифровой инфраструктуры.</li>
                    <li>Анализ пользовательского поведения для улучшения структуры курсов.</li>
                    <li>Персонализация контента для удобства пользователей в Англии и странах ЕС.</li>
                    <li>Предоставление релевантных материалов о программе пассивного дохода.</li>
                </ul>

                <h2>Ваш выбор и управление</h2>
                <p>
                    Вы имеете полный контроль над файлами cookie. Вы можете в любой момент изменить настройки в своем браузере. Однако, обратите внимание: отключение строго необходимых cookie может привести к некорректной работе некоторых функций нашего сайта.
                </p>

                <h2>Сторонние сервисы</h2>
                <p>
                    На некоторых страницах <strong><?= $domainTitle ?></strong> мы можем использовать сервисы сторонних компаний (например, аналитические инструменты или библиотеки визуализации). Мы рекомендуем ознакомиться с их политиками конфиденциальности.
                </p>

                <h2>Контактная информация</h2>
                <p>
                    Если у вас возникли вопросы касательно нашей политики на <strong><?= $domainTitle ?></strong>, пожалуйста, свяжитесь с нами:
                    <br><br>
                    <strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>" class="text-primary">hello@<?= $fullDomain ?></a><br>
                    <strong>Телефон:</strong> <a href="tel:+442074573172" class="text-primary">+44 20 7457 3172</a><br>
                    <strong>Адрес:</strong> 10 York Rd, Bishop's, London SE1 7ND, United Kingdom
                </p>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#home" class="logo footer__logo">
                    <span class="logo__icon"></span>
                    <span class="logo__text">
                        <?= $domainTitle ?>
                    </span>
                </a>
                <p class="footer__description">
                    Инновационная технология обучения, которая меняет правила игры в IT-индустрии. Постройте карьеру,
                    которая работает на вас.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__list">
                    <li><a href="./#home">Главная</a></li>
                    <li><a href="./#courses">Направления</a></li>
                    <li><a href="./#features">Почему мы</a></li>
                    <li><a href="./#contact">Записаться</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__list">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contacts">
                    <li>
                        <i data-lucide="phone" class="footer__icon"></i>
                        <a href="tel:+442074573172">+44 20 7457 3172</a>
                    </li>
                    <li>
                        <i data-lucide="mail" class="footer__icon"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@
                            <?= $fullDomain ?>
                        </a>
                    </li>
                    <li>
                        <i data-lucide="map-pin" class="footer__icon"></i>
                        <span>10 York Rd, Bishop's, London SE1 7ND, United Kingdom</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer__bottom container">
            <p>&copy; 2026
                <?= $domainTitle ?>. Все права защищены. Программа пассивного дохода и профессионального роста.
            </p>
        </div>
    </footer>
        <div id="cookiePopup" class="cookie-popup">
            <div class="cookie-popup__content">
                <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                        политике</a>.</p>
                <button id="acceptCookies" class="btn btn--primary btn--small">Принять</button>
            </div>
        </div>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/curtainsjs/8.1.5/curtains.min.js"></script>
    <script src="script.js"></script>
</body>

</html>