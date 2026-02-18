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
            <h1 data-aos="fade-up">Политика конфиденциальности</h1>

            <div class="pages__content" data-aos="fade-up" data-aos-delay="100">
                <p>
                    Политика конфиденциальности распространяется на персональные данные,
                    предоставляемые студентами и клиентами <strong><?= $domainTitle ?></strong>, как для оказания 
                    образовательных услуг в сфере IT, так и для других взаимодействий в электронном
                    формате, включая участие в экспертных программах, акциях и получение технической поддержки.
                </p>

                <p>
                    <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения и дополнения
                    в действующие положения. Эти изменения будут иметь приоритет над текущими
                    версиями. Обратите внимание, что наши ресурсы могут содержать ссылки на сторонние сервисы (например, GitHub или аналитические платформы), которые имеют свои
                    собственные правила. В таких случаях <strong><?= $domainTitle ?></strong> не несет ответственности за соблюдение
                    конфиденциальности сторонними компаниями. Предоставляя свои данные, вы даете полное согласие
                    на их обработку способами, предусмотренными настоящей Политикой.
                </p>

                <h2>Порядок сбора, хранения и уничтожения данных</h2>
                <p>
                    <strong><?= $domainTitle ?></strong> собирает персональные данные исключительно с согласия
                    пользователя для предоставления качественного доступа к обучающей платформе,
                    участия в практических сессиях и внедрения инновационных методологий обучения. Для
                    предотвращения утечки данных мы используем комплекс мер безопасности в соответствии со стандартами <strong>Великобритании</strong>, включая протоколы шифрования.
                </p>

                <p>
                    Максимальный срок хранения данных составляет 75 лет с даты получения информации, если иное не предусмотрено требованиями законодательства. В остальных случаях компания хранит данные до
                    завершения своей деятельности или до момента официального отзыва согласия пользователем.
                </p>

                <p>
                    Уничтожение или обезличивание данных осуществляется для исключения возможности
                    их дальнейшей обработки, если цель обучения была достигнута или по запросу студента.
                </p>

                <h2>Категории собираемых данных:</h2>
                <ul>
                    <li>время доступа и IP-адрес;</li>
                    <li>источники перехода на ресурс <strong><?= $fullDomain ?></strong>;</li>
                    <li>посещаемые страницы и просмотры учебных модулей;</li>
                    <li>техническая информация, предоставляемая браузером;</li>
                    <li>номер телефона (в случае обращения в поддержку или заказа обратного звонка).</li>
                </ul>

                <p>
                    При регистрации на курсы мы собираем информацию для аутентификации:
                </p>
                <ul>
                    <li>имя пользователя;</li>
                    <li>контактный e-mail и номер телефона;</li>
                </ul>

                <h2>Информация о действиях пользователя:</h2>
                <ul>
                    <li>сведения о договорах на обучение между студентом и <strong><?= $domainTitle ?></strong>;</li>
                    <li>данные о запросах, отправленных через формы на сайте;</li>
                    <li>информация о пройденных программах и полученных экспертных консультациях;</li>
                    <li>произведенные платежи и иная финансовая информация, предусмотренная законодательством <strong>Великобритании и ЕС</strong>.</li>
                </ul>

                <h2>Цели обработки данных:</h2>
                <ul>
                    <li>предоставление доступа к образовательной платформе и учебным материалам;</li>
                    <li>учет пожеланий студентов при разработке новых курсов и IT-решений;</li>
                    <li>информирование о новых технологиях, скидках и материалах блога;</li>
                    <li>обеспечение экспертной поддержки на всех этапах обучения.</li>
                </ul>

                <h2>Передача данных третьим лицам:</h2>
                <p>
                    <strong><?= $domainTitle ?></strong> не передает данные клиентов третьим лицам, за исключением случаев:
                </p>
                <ul>
                    <li>получения прямого согласия пользователя;</li>
                    <li>требования компетентных органов <strong>Великобритании</strong> в соответствии с законом;</li>
                    <li>стратегического слияния или реорганизации компании.</li>
                </ul>

                <h2>Использование файлов cookie</h2>
                <p>
                    Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона Англия), 
                    чтобы сделать использование <strong><?= $fullDomain ?></strong> максимально эффективным. Вы можете в любое время отключить Cookies в настройках своего браузера.
                </p>

                <h2>Ваши права</h2>
                <p>
                    Если вы хотите отредактировать свои данные или полностью прекратить их обработку в соответствии с нормами <strong>UK GDPR</strong>, 
                    пожалуйста, свяжитесь с командой <strong><?= $domainTitle ?></strong> по адресу: 
                    <a href="mailto:hello@<?= $fullDomain ?>" class="text-primary">hello@<?= $fullDomain ?></a>.
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