<?php
    global $conn;
    require_once("db.php");
    $mysql = $conn;
    $result = $mysql->query("SELECT * FROM `comments`");
    while($comments = $result->fetch_assoc())
    {
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