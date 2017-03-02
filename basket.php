<?php
session_start();
include "db_functions.php";
include "common_functions.php";

$array = select_goods_from_basket(session_id());

$total_price = find_total_price($array);

//print_r($array);
?>
<html>
    <head>
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
            <div id="basket">
                <?php
                if (empty($array)){
                    echo "<h1 id='basket-empty'>Корзина пуста</h1>";
                    die;
                }
                ?>
                <div class="basket-goods">
                    <div>
                        <span id="order-price">
                            Сумма заказа: <?=$total_price?> &#8381;
                        </span>
                    </div>
                    <br>
                    <?php
                    foreach ($array as $value){
                        $image = $value['image'];
                        $basket_id = $value['basket_id'];

                        echo "<div>";
                        echo "<img src='$image' height='200px' width='200px'>";
                        echo "<span id='basket-good-name'>".$value['name']."</span>";
                        echo "<span id='basket-good-price'>".$value['price']." &#8381;</span>";
                        echo "<br>";
                        echo "<input type='button' onclick=\"location.href='delete_from_basket.php?id=$basket_id'\" value='Удалить'/>";
                        echo "</div>";
                        echo "<br>";
                    }
                    ?>
                </div>
            </div>
            <div id="order-button">
                <input type='button' onclick="location.href='order.php'" value="Подтвердите заказ">
            </div>
        </div>
    </body>
</html>
