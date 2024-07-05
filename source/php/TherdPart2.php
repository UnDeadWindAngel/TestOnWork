<?php
    global $conn;
    require_once("db.php");
    $mysql = $conn;
    $nameSender = htmlspecialchars(trim($_POST['nickname']));
    $content = htmlspecialchars(trim($_POST['content']));
    echo $nameSender;
    echo $content;
    $mysql->query("INSERT INTO `comments`(`user_name`, `text`) VALUES ('$nameSender','$content')");
    header('Location: /TestOnWork/TherdTask.php');
?>