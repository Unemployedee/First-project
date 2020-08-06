<!DOCTYPE html>
<html lang="ru">

<head>
    <link rel="shortcut icon" href="../images/title_icon.png" type="image/png" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/review.css" />


    <title>Отзывы</title>
</head>

<body>
    <?php
    include("../php/menu.php");
    ?>

    <div id="wrapper">
        <div class="col-lg-12">
            <h2 class="text-center">Отзывы</h2>
        </div>
        <div class="col-lg-6">
            <div id="comment-field"></div>
        </div>
        <div class="col-log-6">
            <form class="comment-form">
                <div class="form-group">
                    <label for="comment-name">Имя:</label>
                    <input type="name" class="form-control comment-form" id="comment-name" placeholder="Ваше имя"
                        maxlength="35" />
                </div>

                <div class="form-group">
                    <label for="comment-body">Текст отзыва:</label>
                    <br>
                    <textarea type="name" class="form-control comment-form" id="comment-body" placeholder="Ваш отзыв"
                        cols="50" rows="3" maxlength="130"></textarea>
                </div>
                <p id="max-symbols">Макс. кол-во символов: 130</p>
                <div class="form-group text-right">
                    <button type="submit" id="comment-add" class="btn btn-primary">
                        Отправить
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>
    <?php
    include("../php/footer.php");
    ?>
    <script src="/js/review.js"></script>
</body>

</html>