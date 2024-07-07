<?php
    global $conn;
    require_once("db.php");//подключение к бд
    $mysql = $conn;
    $result = $mysql->query("SELECT * FROM `comments`");
    //запрос всех коментариев
    while($comments = $result->fetch_assoc())//цикл на вывод коментариев
    {
        //обработка полученных из запроса данных и вывод
        echo '
            <div class="row col-lg-12">
                <div class="container-fluid col-1">
                </div>
                <div 
                    class="container-fluid col-10" 
                    style="background-color:#ffffff; border: 2px solid gray;"
                >
                    <h4 style="color: #00aeff;">' .$comments['user_name'].'</h4>
                    <p>
                        '.$comments['text'].'
                        <br>
                        '.$comments['date_time'].'
                    </p>
                </div>
                <div class="container-fluid col-1">
                </div>
            </div>
            <br>';
    }
?>