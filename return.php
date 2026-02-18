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
            <h1 data-aos="fade-up">Политика возврата средств</h1>
            
            <div class="pages__content" data-aos="fade-up" data-aos-delay="100">
                <h2>Условия для оформления возврата</h2>
                <p>
                    Вы можете претендовать на полный или частичный возврат средств в
                    следующих ситуациях:
                </p>
                <ul>
                    <li>
                        <strong>Несоответствие программы описанию:</strong> Если содержание
                        предоставленного учебного модуля или экспертного материала существенно отличается от программы IT-курса,
                        заявленной на сайте <strong><?= $domainTitle ?></strong> на момент покупки.
                    </li>
                    <li>
                        <strong>Технические неисправности с нашей стороны:</strong> При
                        возникновении критических технических проблем на платформе
                        <strong><?= $fullDomain ?></strong>, которые делают доступ к обучающим материалам или сессиям невозможным и не были
                        устранены нашей командой в разумные сроки.
                    </li>
                    <li>
                        <strong>Отказ в течение «периода охлаждения»:</strong> Согласно законодательству Великобритании, если вы
                        решили отказаться от участия в программе в течение 14 (четырнадцати) календарных
                        дней с момента оплаты, при условии, что вы еще не получили доступ
                        к значительному объему материалов (см. раздел «Исключения»).
                    </li>
                </ul>

                <h2>Процедура запроса на возврат</h2>
                <p>
                    Чтобы инициировать процедуру возврата на платформе <strong><?= $domainTitle ?></strong>, пожалуйста, выполните
                    следующие шаги:
                </p>
                <ol class="custom-list">
                    <li>
                        Составьте письмо и отправьте его на наш официальный email:
                        <a href="mailto:hello@<?= $fullDomain ?>" class="text-primary">hello@<?= $fullDomain ?></a>.
                    </li>
                    <li>
                        В теме письма обязательно укажите: «Запрос на возврат средств».
                    </li>
                    <li>
                        В теле письма предоставьте полную информацию: ваше имя и фамилию,
                        email, который использовался при регистрации на курс, и точное название выбранного направления.
                    </li>
                    <li>
                        Четко и подробно опишите причину, по которой вы запрашиваете
                        возврат, со ссылкой на один из пунктов наших условий.
                    </li>
                    <li>
                        После получения письма наша служба поддержки рассмотрит ваш запрос
                        и свяжется с вами для предоставления дальнейших инструкций в течение 3-х рабочих дней.
                    </li>
                </ol>

                <h2>Сроки и способ возврата</h2>
                <p>
                    После одобрения вашего запроса, возврат денежных средств будет
                    произведен в течение 7–14 рабочих дней. Средства будут возвращены
                    тем же способом, которым была совершена оплата. Обратите внимание, что фактический срок зачисления
                    может зависеть от регламента работы вашего банка или платежной системы в <strong>Великобритании</strong> или стране вашего пребывания.
                </p>

                <h2>Исключения и ограничения</h2>
                <p>Возврат средств не может быть осуществлен, если:</p>
                <ul>
                    <li>
                        Запрос подан по истечении 14 календарных дней с момента оплаты.
                    </li>
                    <li>
                        Вы уже изучили, просмотрели или скачали более 50% материалов образовательной программы, независимо
                        от времени, прошедшего с момента покупки.
                    </li>
                    <li>
                        Причиной невозможности пройти обучение являются технические
                        проблемы на стороне пользователя (например, проблемы с интернет-соединением, несовместимое ПО или отсутствие навыков владения ПК).
                    </li>
                    <li>
                        Были нарушены другие условия Пользовательского соглашения <strong><?= $domainTitle ?></strong> с вашей
                        стороны.
                    </li>
                </ul>

                <h2>Изменения в политике</h2>
                <p>
                    <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения в настоящую
                    Политику возврата в соответствии с актуальными нормами потребительского права. Актуальная версия всегда доступна на этой
                    странице <strong><?= $fullDomain ?></strong>.
                </p>

                <h2>Свяжитесь с нами</h2>
                <p>
                    По всем вопросам, связанным с возвратом средств или условиями
                    обучения, пожалуйста, обращайтесь в нашу службу поддержки:
                    <br><br>
                    <strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>" class="text-primary">hello@<?= $fullDomain ?></a><br>
                    <strong>Телефон:</strong> <a href="tel:+442074573172" class="text-primary">+44 20 7457 3172</a><br>
                    <strong>Адрес:</strong> 10 York Rd, Bishop's, London SE1 7ND, United Kingdom
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