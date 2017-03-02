<?php
$db = mysqli_connect("localhost", "root", "", "customer_shop_db");
if ($db->connect_error)
    die("$db->connect_errno: $db->connect_error");
$db->query("SET NAMES 'utf-8'");