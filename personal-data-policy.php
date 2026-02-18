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
            <h1 data-aos="fade-up">Политика обработки персональных данных</h1>

            <div class="pages__content" data-aos="fade-up" data-aos-delay="100">
                <h2>1. Общие положения</h2>
                <p>
                    Настоящая политика обработки персональных данных (далее —
                    «Политика») определяет порядок и условия обработки персональных
                    данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                    устанавливает меры по обеспечению безопасности этих данных в соответствии с регламентом GDPR и законами Великобритании.
                </p>
                <p>
                    1.1. Важнейшей целью своей деятельности Оператор считает соблюдение прав и свобод человека при
                    обработке его персональных данных, включая защиту прав на неприкосновенность частной жизни и профессиональную тайну.
                </p>
                <p>
                    1.2. Настоящая Политика применяется ко всей информации, которую
                    Оператор может получить о посетителях (далее — «Пользователи»)
                    веб-сайта <strong><?= $fullDomain ?></strong>.
                </p>

                <h2>2. Основные понятия</h2>
                <ul>
                    <li>
                        <strong>Веб-сайт</strong> — совокупность графических и
                        информационных материалов, доступных в сети интернет по адресу
                        <strong><?= $fullDomain ?></strong>.
                    </li>
                    <li><strong>Пользователь</strong> — любой посетитель IT-платформы.</li>
                    <li>
                        <strong>Персональные данные</strong> — любая информация,
                        относящаяся прямо или косвенно к Пользователю.
                    </li>
                    <li>
                        <strong>Обработка данных</strong> — любое действие, совершаемое с персональными данными с использованием средств автоматизации или без них.
                    </li>
                </ul>

                <h2>3. Данные, которые мы обрабатываем</h2>
                <p>Оператор может обрабатывать следующие категории данных:</p>
                <ul>
                    <li>
                        <strong>Предоставляемые Пользователем:</strong>
                        <ul>
                            <li>Имя и фамилия;</li>
                            <li>Адрес электронной почты (Email);</li>
                            <li>Номера телефонов (валидация по стандартам <strong>Великобритании</strong>).</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Данные, собираемые автоматически:</strong>
                        <ul>
                            <li>
                                Сбор и обработка обезличенных данных (в т.ч. «cookie») с помощью сервисов
                                статистики. Эти данные включают IP-адрес, тип браузера и параметры доступа к материалам школы.
                            </li>
                        </ul>
                    </li>
                </ul>

                <h2>4. Цели обработки</h2>
                <ul>
                    <li>
                        Идентификация Пользователя для предоставления доступа к личному кабинету и курсам <strong>образовательной IT-платформы</strong>.
                    </li>
                    <li>
                        Установление обратной связи, включая уведомления о новых уроках и экспертную поддержку.
                    </li>
                    <li>
                        Заключение и исполнение договоров на предоставление <strong>образовательных услуг в Великобритании и ЕС</strong>.
                    </li>
                    <li>
                        Информирование о программе пассивного дохода и технологиях будущего через Email-рассылки.
                    </li>
                </ul>

                <h2>5. Правовые основания</h2>
                <p>
                    Оператор обрабатывает данные Пользователя только при наличии:
                </p>
                <ul>
                    <li>
                        Добровольного согласия, выраженного через заполнение форм на сайте <strong><?= $domainTitle ?></strong>.
                    </li>
                    <li>
                        Разрешения на использование файлов «cookie» в настройках вашего браузера.
                    </li>
                </ul>

                <h2>6. Безопасность и сроки хранения</h2>
                <ul>
                    <li>
                        Оператор принимает технические меры для защиты данных от неправомерного доступа в соответствии с нормами <strong>UK GDPR</strong>.
                    </li>
                    <li>
                        Данные никогда не передаются третьим лицам без законных на то оснований.
                    </li>
                    <li>
                        Срок обработки данных является неограниченным. Вы можете отозвать согласие, написав на 
                        <a href="mailto:hello@<?= $fullDomain ?>" class="text-primary">hello@<?= $fullDomain ?></a>.
                    </li>
                </ul>

                <h2>7. Контакты</h2>
                <p>
                    По всем вопросам касательно ваших данных на платформе <strong><?= $domainTitle ?></strong>:
                    <br><br>
                    Email: <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a><br>
                    Телефон: <a href="tel:+442074573172">+44 20 7457 3172</a><br>
                    Адрес: 10 York Rd, Bishop's, London SE1 7ND, United Kingdom
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