<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Мой Тест</title>
        <base href="index.php">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        >
        <link href="source/css/carousel.css" rel="stylesheet">
        <link href="source/css/main.css" rel="stylesheet">
    </head>
    <body style="background-color: #ffffff;" class="px-0 py-0">
        <main class="px-0 py-0 g-0">
            <?php
            include 'source/blocks/Header.php';
            ?>
            <div class="container-fluid body col-lg-12 g-0">
                <?php
                include 'source/php/Therd.php';
                ?>
            </div>
            <div class="container-fluid body col-lg-12 g-0">
                <div class="row col-lg-12">
                    <div class="container-fluid col-1">
                    </div>
                    <div class="container-fluid col-10">
                        <div class="form-check" id="comment">
                            <h4 style="text-align: center;">Добавление коментария</h4>
                            <form class="row" id="commentator" name="commentator" action="source/php/TherdPart2.php" method="post">
                                <div class="row">
                                    <div class="container-fluid col-lg-1">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="nickname" class="form-label">Имя</label>
                                        <input type="text" class="form-control" name="nickname" id="nickname" required placeholder="Федоров Василий">
                                        <div class="invalid-feedback">
                                            Заполните поле.
                                        </div>
                                    </div>
                                    <div class="container-fluid col-lg-1">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="container-fluid col-lg-1">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="content" class="form-label">Коментарий</label>
                                        <textarea type="text" class="form-control" name="content" id="content" placeholder="Ваш коментарий" required></textarea>
                                        <div class="invalid-feedback">
                                            Заполните поле.
                                        </div>
                                    </div>
                                    <div class="container-fluid col-lg-1">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="container-fluid col-lg-1">
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="submit" form="commentator" value="Отправить" class="btn-primary btn">
                                    </div>
                                    <div class="container-fluid col-lg-1">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="container-fluid col-1">
                    </div>
                </div>
            </div>
            <?php
            include 'source/blocks/Footer.php';
            ?>
        </main>
        <script src="source/js/form-validation.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>