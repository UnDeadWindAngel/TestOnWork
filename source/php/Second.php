<?php
    echo"
        <div class='row'>
            <h2 style='text-align:center'>
                Запросы на удаление строк с нулевыми значениями
            </h2>
            <p style='text-align:center'>
                DELETE A,S,P,C
                <br>
                FROM availabilities A
                <br>
                RIGHT JOIN stocks S ON A.stock_id=S.id
                <br>
                RIGHT JOIN products P ON A.product_id=P.id
                <br>
                RIGHT JOIN categories C ON P.category_id=C.id
                <br>
                WHERE A.id is null;
                <br>
                DELETE A,S,P,C
                <br>
                FROM availabilities A
                <br>
                RIGHT JOIN stocks S ON A.stock_id=S.id
                <br>
                LEFT JOIN products P ON A.product_id=P.id
                <br>
                LEFT JOIN categories C ON P.category_id=C.id
                <br>
                WHERE A.id is null
            </p>
        </div>
        <div class='row col-lg-12' style='justify-content: center'>
            <img 
                src='./source/img/Result_Delete.jpg' 
                alt='Результат выполнения запросов' 
                style='max-height: 250px;width: auto'
            >
        </div>";
?>