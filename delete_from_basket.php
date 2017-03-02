<?php
session_start();
include "db_functions.php";

$id = $_GET['id'];
delete_good_from_basket($id, session_id());

header("Location: basket.php");
die;