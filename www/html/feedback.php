<!DOCTYPE html>
<html lang="ru">

<head>
    <link rel="shortcut icon" href="../images/title_icon.png" type="image/png">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/feedback.css">
    <title>Контакты</title>
</head>

<body>
    <title>Обратная связь</title>
    </head>

    <body>
        <?php
        include("../php/menu.php");
        ?>

        <div class="info-feedback">
            <h2>Билеты</h2>
            <ul>
                <h3>Записаться на экскурсию можно:</h3>
                <li>по телефону: +7 (495) 272-03-82</li>
                <li>отправив нам электронное письмо-заявку с вашими контактными данными: test@mail.ru</li>
                <li>заполнив форму обратной связи: </li>
            </ul>
            <p>Стоимость билета можно посмотреть: <em><a href="tickets.php">тут</a></em></p>
        </div>

        <form method="post" action="../php/feedback.php">
            <div class="feedback-form">
                <div class="feedback-form-input">
                    <label for="name">Имя</label>
                    <input maxlength="30" type="text" name="name" />
                </div>

                <div class="feedback-form-input">
                    <label for="phone">Телефон</label>
                    <input maxlength="11" type="tel" name="phone" />
                </div>

                <div class="feedback-form-input">
                    <label for="mail">Дата планируемой экскурсии</label>
                    <input maxlength="30" type="date" name="date" />
                </div>

                <div class="feedback-form-input">
                    <label for="mail">Электронная почта</label>
                    <input maxlength="30" type="email" name="mail" />
                </div>

                <div class="feedback-form-input">
                    <label for="message">Сообщение</label>
                    <textarea style="resize: none;" rows=" 7" cols="50" name="message" maxlength="150"></textarea>
                </div>

                <input id="button-feedback" type="submit" value="Отправить" />
            </div>

        </form>

        <?php
        include("../php/footer.php");
        ?>
    </body>

</html>