<!DOCTYPE html>
<html lang="ru">

<head>
    <link rel="shortcut icon" href="../images/title_icon.png" type="image/png" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/gallery.css" />

    <title>Коллекция</title>
</head>

<body>
    <?php
    include("../php/menu.php");
    ?>
    <div id="wrapper">
        <h1>Фотогалерея</h1>
        <script src="../js/gallery.js"></script>
        <div class="button-switch">
            <span class="myButton" onclick="image(0)">&lt;</span> <span class="myButton" onclick="image(1)">&gt;</span>
        </div>
    </div>
    <?php
    include("../php/footer.php");
    ?>
</body>

</html>