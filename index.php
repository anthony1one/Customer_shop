<?php
session_start();
?>
<html>
    <head>
        <title>Уголок потребителя</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <div class="site-header">
            <a href="index.php"><img src="uploads/logo_n.png"></a>
        </div>
        <div class="site-menu">
            <ul>
                <li>
                    <a href="index.php">Главная</a>
                </li>
                <li>
                    <a href="goodsMenu.php">Товары</a>
                </li>
                <li>
                    <a href="about.php">О нас</a>
                </li>
                <li id="basket-menu">
                    <a href="basket.php">Корзина</a>
                </li>
            </ul>
        </div>
        <div class="site-body">
            <div class="site-intro">
                <h2>Добро пожаловать</h2>
                <h1>
                    &infin;<br>
                    Customer Shop<br>
                    &infin;
                </h1>
            </div>
        </div>
    </body>
</html>
