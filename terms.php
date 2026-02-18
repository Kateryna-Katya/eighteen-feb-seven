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
            <h1 data-aos="fade-up">Условия использования</h1>

            <div class="pages__content" data-aos="fade-up" data-aos-delay="100">
                <p>
                    Добро пожаловать на платформу <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                    (далее — «Условия» или «Соглашение») представляют собой юридически
                    обязывающий договор между вами (далее — «Пользователь») и <strong><?= $domainTitle ?></strong>
                    (далее — «Компания», «мы», «нас»). Пожалуйста, внимательно
                    ознакомьтесь с ними. Используя наш сайт и любые образовательные
                    услуги, вы подтверждаете свое полное согласие с
                    данными Условиями. Если вы не согласны, вы должны немедленно
                    прекратить использование сайта.
                </p>

                <h2>1. Предмет Соглашения</h2>
                <p>
                    Компания предоставляет Пользователю доступ к использованию сайта
                    <strong><?= $fullDomain ?></strong> и его функционала, включая: доступ к
                    учебным материалам, статьям в блоге, практическим сессиям и другим инструментам 
                    профессионального развития (далее — «Услуги»). Настоящее Соглашение регулирует все аспекты
                    взаимодействия Пользователя с образовательной платформой.
                </p>

                <h2>2. Обязанности и права Пользователя</h2>
                <p>
                    Вы обязуетесь использовать сайт исключительно в законных и личных
                    целях. При использовании платформы <strong><?= $domainTitle ?></strong>
                    <strong>запрещается</strong>:
                </p>
                <ul>
                    <li>
                        Публиковать или распространять информацию, которая является незаконной, 
                        нарушает авторские права или разжигает ненависть.
                    </li>
                    <li>
                        Предпринимать действия, которые могут нарушить работу сайта или привести к 
                        перегрузке цифровой инфраструктуры <strong><?= $domainTitle ?></strong>.
                    </li>
                    <li>
                        Использовать автоматизированные скрипты (ботов) для сбора
                        информации без нашего предварительного разрешения.
                    </li>
                    <li>
                        Предоставлять недостоверную информацию при регистрации на курсы или программы.
                    </li>
                </ul>

                <h2>3. Интеллектуальная собственность</h2>
                <p>
                    Весь контент, включая тексты, программный код, графику и видео (далее — «Контент»), является объектом интеллектуальной
                    собственности Компании. Вам предоставляется ограниченная
                    лицензия на использование Контента в личных целях для обучения. 
                    Любое копирование или распространение Контента без письменного 
                    разрешения правообладателя строго запрещено.
                </p>

                <h2>4. Ограничение ответственности</h2>
                <p>
                    Услуги предоставляются по принципу «как есть». Мы не даем гарантий, что сайт будет работать бесперебойно или что его контент является абсолютно точным в контексте динамически 
                    меняющегося IT-рынка в <strong>Великобритании</strong> и мире.
                </p>
                <p>
                    Компания не несет ответственности за любые убытки, возникшие в результате использования 
                    или невозможности использования платформы <strong><?= $domainTitle ?></strong>. 
                </p>

                <h2>5. Изменения в Условиях</h2>
                <p>
                    Мы оставляем за собой право изменять настоящие Условия. 
                    Все изменения вступают в силу с момента их публикации. 
                    Дальнейшее использование сайта <strong><?= $fullDomain ?></strong> после правок 
                    означает ваше согласие с новой редакцией.
                </p>

                <h2>6. Разрешение споров</h2>
                <p>
                    Все споры стороны стремятся разрешить путем переговоров.
                    В случае невозможности достижения согласия, спор подлежит рассмотрению в соответствии 
                    с действующим законодательством <strong>Великобритании</strong> (England and Wales jurisdiction).
                </p>

                <h2>7. Контактная информация</h2>
                <p>
                    Если у вас возникли вопросы, связанные с настоящими Условиями:
                    <br><br>
                    <strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>" class="text-primary">hello@<?= $fullDomain ?></a><br>
                    <strong>Телефон:</strong> <a href="tel:+442074573172" class="text-primary">+44 20 7457 3172</a><br>
                    <strong>Адрес:</strong> 10 York Rd, Bishop's, London SE1 7ND, United Kingdom
                </p>
            </div>

            <div class="pages-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.05);" data-aos="fade-in">
                <p style="font-size: 0.9rem; opacity: 0.5;">Последнее обновление: Февраль 2026</p>
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