<?php
session_start();
include "db_functions.php";
//include "constants.php";

$goods_array = select_from_db("*", "goods_info");
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
            <div class="goods-list">
                <ul>
                    <?php
                    foreach ($goods_array as $item){
                        $image = $item['image'];
                        $id = $item['id'];

                        echo "<li>";
                        echo "<img src='$image' height='300px' width='300px'>";
                        echo "<p id='good_name'>".$item['name']."</p>";
                        echo "<div id='good_feature'>";
                        echo "<p>".$item['price']." &#8381;</p>";
                        echo "</div>";
                        echo "<input type='button' onclick=\"location.href='addBasket.php?id=$id'\" value='В корзину'/>";
                        echo "</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </body>
</html>