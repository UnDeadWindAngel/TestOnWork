<?php
    global $conn;
    require_once("db.php");//подключение к бд
    $mysql = $conn;
    //обработка пользовательской строки имени отправителя
    $nameSender = htmlspecialchars(strip_tags(trim($_POST['nickname'])));
    //обработка пользовательской строки текст коментария
    $content = htmlspecialchars(strip_tags(trim($_POST['content'])));
    //запрос на добавление записи в таблицу коментариев
    $mysql->query("INSERT INTO `comments`(`user_name`, `text`) VALUES ('$nameSender','$content')");
    //переадресация на страницу вывода коментариев *возможно надо будет откорректировать ссылку
    header('Location: /TherdTask.php');
?>