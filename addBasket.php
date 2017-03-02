<?php
session_start();
include "db_functions.php";

$good_id = $_GET['id'];

add_new_purchase(session_id(), $good_id);

header("Location: goodsMenu.php");
die;


