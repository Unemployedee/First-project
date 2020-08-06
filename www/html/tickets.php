<!DOCTYPE html>
<html lang="ru">

<head>
    <link rel="shortcut icon" href="../images/title_icon.png" type="image/png" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/tickets.css" />
    <title>Билеты и льготы</title>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='../js/spoilers.js'></script>

</head>


<body>
    <?php
    include("../php/menu.php");
    ?>
    <div id="wrapper">
        <header id="tickets-header">
            <h1>Билеты и льготы</h1>
            <a id="buy-ticket" href="feedback.php">Купить билет</a>
        </header>
        <div id="wrapper-cards-item">
            <div class="cards-item">
                <hr>
                <h2>ПОСТОЯННАЯ ЭКСПОЗИЦИЯ</h2>
                <p>
                    <h3>Входной билет в Главное здание:</h3>
                    <ul>
                        <li>400 рублей – входной билет;</li>
                        <li>200 рублей – льготный билет;</li>
                        <li>Бесплатно – дети до 18 лет и другие бесплатные категории.</li>
                    </ul>
                    <h3>Входной билет в Галерею искусства стран Европы и Америки XIX–XX веков:</h3>
                    <ul>
                        <li>400 рублей – входной билет;</li>
                        <li>200 рублей – льготный билет;</li>
                        <li>Бесплатно – дети до 18 лет и другие бесплатные категории.</li>
                    </ul>
                </p>
                <div class="spoiler-wrap disabled">
                    <div class="spoiler-head">Подробнее</div><br>
                    <div class="spoiler-body">Специальная цена в дни проведения фестиваля "Пятницы в Пушкинском"</div>
                </div>
            </div>

            <div class="cards-item">
                <hr>
                <h2>КОМПЛЕКСНЫЙ БИЛЕТ В ДВА ЗДАНИЯ</h2>
                <p>Комплексный входной билет дает право посетить постоянную экспозицию двух зданий музея в течение 2 дней.
                </p>
                <div class="spoiler-wrap disabled">
                    <div class="spoiler-head">Подробнее</div><br>
                    <div class="spoiler-body">
                        <h3>Комплексный входной билет в постоянную экспозицию Главного здания и Галереи компьютерной техники (действует 2 дня):"</h3>
                        <ul>
                            <li>600 рублей – входной билет;</li>
                            <li>300 рублей – льготный билет;</li>
                            <li>Бесплатно – дети до 18 лет и другие бесплатные категории.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cards-item">
                <hr>
                <h2 id="privileges">ЛЬГОТЫ</h2>
                <p>
                    Льготы на покупку входных билетов предоставляются при предъявлении подтверждающих документов. Если
                    нет с собой необходимых документов, посетить музей можно на общих основаниях.
                </p>
                <div class="spoiler-wrap disabled">
                    <div class="spoiler-head">Подробнее</div><br>
                    <div class="spoiler-body">
                        <h3>При условии предъявления документов льготы на покупку входных билетов предоставляются
                            следующим категориям посетителей:</h3>
                        <ul>
                            <li>лица от 18 до 24 лет включительно (граждане РФ);</li>
                            <li>студенты дневной формы обучения вузов и сузов РФ;</li>
                            <li>владельцы карты ISIC;</li>
                            <li>пенсионеры (граждане РФ);</li>
                            <li>члены многодетных семей (граждане РФ);*</li>
                            <li>члены Союза дизайнеров и архитекторов РФ.</li>
                        </ul>
                        <p>* льготы предоставляются детям в возрасте до 18 лет (студентам очной формы обучения - до 23
                            лет) и их родителям</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("../php/footer.php");
    ?>
</body>

</html>