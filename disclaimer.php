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
            <h1 data-aos="fade-up">Отказ от ответственности (Дисклеймер)</h1>

            <div class="pages__content" data-aos="fade-up" data-aos-delay="100">
                <p>
                    <strong>Общая информация:</strong> Все учебные материалы, статьи и сведения,
                    опубликованные на платформе <strong><?= $domainTitle ?></strong>, носят исключительно
                    информационно-ознакомительный характер. Они не являются и не должны
                    рассматриваться как персональная инвестиционная рекомендация,
                    профессиональный юридический или финансовый совет, публичная оферта или призыв к совершению
                    каких-либо финансовых операций в рамках законодательства Великобритании.
                </p>

                <p>
                    <strong>Отсутствие гарантий:</strong> Экспертная команда <strong><?= $domainTitle ?></strong> не дает никаких гарантий
                    относительно точности, полноты или актуальности представленной информации. Любые упоминания 
                    потенциального карьерного роста, программ пассивного дохода или прошлых
                    результатов наших студентов не гарантируют аналогичных результатов в будущем. 
                    Индивидуальные итоги вашей деятельности зависят от множества факторов, включая рыночные условия в 
                    <strong>Англии и Великобритании</strong>, ваш личный опыт и приложенные усилия, и могут существенно
                    отличиться от приведенных примеров.
                </p>

                <p>
                    <strong>Ограничение ответственности:</strong> Администрация сайта <strong><?= $fullDomain ?></strong>,
                    его владельцы и аффилированные лица не несут ответственности за
                    любые прямые или косвенные убытки, решения или действия,
                    предпринятые вами на основе информации с этого ресурса. Вся
                    ответственность за использование предложенных методологий обучения и возможные последствия
                    лежит исключительно на пользователе. Контент платформы <strong><?= $domainTitle ?></strong> собирается из
                    источников, которые считаются надежными и общедоступными в IT-индустрии на момент публикации.
                </p>

                <p>
                    <strong>Предупреждение о рисках:</strong> Любая деятельность, направленная на
                    изменение профессионального статуса или запуск новых технологических проектов, сопряжена с
                    определенным уровнем риска. Перед принятием
                    любых важных стратегических решений мы настоятельно рекомендуем провести
                    собственное исследование и проконсультироваться с квалифицированным
                    независимым специалистом в соответствующей области (IT-консалтинг, право, финансы).
                </p>

                <p>
                    <strong>Подтверждение пользователя:</strong> Продолжая использовать
                    образовательную платформу <strong><?= $domainTitle ?></strong>, вы подтверждаете, что вам исполнилось 18 лет, вы
                    действуете по собственной воле, полностью осознаете и принимаете все
                    упомянутые риски и условия данного отказа от ответственности.
                </p>
            </div>

            <div class="pages-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.05);" data-aos="fade-in" data-aos-delay="300">
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