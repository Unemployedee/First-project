<!DOCTYPE html>
<html lang="ru">

<head>
    <link rel="shortcut icon" href="../images/title_icon.png" type="image/png">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/worktime.css">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='../js/spoilers.js'></script>
    <title>Время работы</title>
</head>

<body>
    <title>Обратная связь</title>
    </head>

    <body>
        <?php
        include("../php/menu.php");
        ?>

        <div id="wrapper">

            <div class="work-time-info">
                <h2>Часы работы</h2>
                <p>Уважаемые посетители сайта!
                    В связи с неблагоприятной эпидемиологической ситуацией музей закрыт для посетителей с 17 марта по 30 июня (срок может быть продлен). Следите за новостями на сайте.
                    Приносим извинения за временные неудобства!</p>

                <p>На этой странице представлен стандартный режим работы музея. Обо всех временных изменениях в расписании работы зданий смотрите на страницах этих зданий. </p>
                <p><strong>Вход в музей и продажа билетов прекращаются за 1 час до закрытия музея, залы начинают закрываться за 15 минут до окончания работы музея!</strong></p>

                <ul id="table-worktime">
                    <div class="work-time">
                        <div class="spoiler-wrap disabled">
                            <h3 class="spoiler-head">Главное здание</h3>
                            <li class="spoiler-body">
                                ср, чт, пт, сб с 14:00 до 20:00
                                вс с 12:00 до 18:00
                                пн, вт - выходной
                                обязательна предварительная запись перед посещением по тел. +7(495) 695-83-46, +7(495) 697-47-05</li>
                        </div>
                    </div>

                    <div class="work-time">
                        <div class="spoiler-wrap disabled">
                            <h3 class="spoiler-head">Галерея компьютерной техники</h3>
                            <li class="spoiler-body">(мастерская открыта для посещения только в летний период) сб с 11:00 до 19:00 вс с 11:00 до 18:00 будние дни - не работает</li>
                        </div>
                    </div>

                    <div class="work-time">
                        <div class="spoiler-wrap disabled">
                            <h3 class="spoiler-head">Контактный зал</h3>
                            <li class="spoiler-body">cp, чт, пт, сб, вс: с 13:00 до 21:00 пн, вт: выходной</li>
                        </div>
                    </div>
                </ul>

            </div>

        </div>

        <?php
        include("../php/footer.php");
        ?>
    </body>

</html>