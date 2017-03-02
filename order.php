<?php
session_start();
include "db_functions.php";

clean_order(session_id());
?>
<html>
    <head>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
    <div class="site-body">
        <div class="site-intro">
            <h1>Cпасибо</h1><br>
            <h1><a href="index.php">На главную</a></h1>
        </div>
    </div>
    </body>
</html>
