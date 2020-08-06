<!doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Ваше сообщение успешно отправлено</title>
</head>

<body>

    <?php
    $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";

    if (
        !empty($_POST['name']) and !empty($_POST['phone']) and !empty($_POST['mail'])
        and !empty($_POST['message'])
        and !empty($_POST['date'])
    ) {
        $name = trim(strip_tags($_POST['name']));
        $phone = trim(strip_tags($_POST['phone']));
        $mail = trim(strip_tags($_POST['mail']));
        $date = trim(strip_tags($_POST['date']));
        $message = trim(strip_tags($_POST['message']));

        mail(
            'test1@gmail.com',
            'Письмо с "Музей КТ"',
            'Имя: ' . $name . '<br />Номер телефона: ' . $phone . '<br />Электронная почта: ' . $mail
                . '<br />Дата планируемой экскурсии: ' . $date . '<br />
      Сообщение: ' . $message,
            "Content-type:text/html;charset=utf-8"
        );

        echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в 
      ближайшее время<Br> $back";

        exit;
    } else {
        echo "Для отправки сообщения заполните все поля! $back";
        exit;
    }
    ?>
</body>

</html>