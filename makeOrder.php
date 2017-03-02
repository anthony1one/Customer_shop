<?php
session_start();
?>
<html>
    <head>
        <title>Оформление заказа</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <div class="site-header">
            <a href="index.php"><img src="uploads/logo_n.png"></a>
        </div>
        <div class="site-body">
            <div class="site-intro">
                <h2>Оформление заказа</h2>
            </div>
            <div class="order-make">
                <form method="post" action="order.php">
                    <span>ФИО</span><br>
<!--                    <input type="text" name="name" required/><br>-->
                    <span>Адрес</span><br>
<!--                    <input type="text" name="address" required/><br>-->
                    <span>Телефон</span><br>
<!--                    <input type="text" name="phone_number" required/><br>-->
<!--                    <input type="submit" value="Отправить">-->
                </form>
            </div>
        </div>
    </body>
</html>
