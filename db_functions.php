<?php
include "db_connect.php";

function select_from_db($selector, $table_name){
    global $db;
    $array = array();
    $query = "SELECT $selector FROM $table_name";

    $query_result = $db->query($query);

    if (!$query_result)
        die ("$db->errno: $db->error");

    while ($row = mysqli_fetch_assoc($query_result))
        $array[] = $row;

    return $array;
}

function add_new_purchase($session, $good_id){
    global $db;
    $query = "INSERT INTO purchases_info (consumer, good_id) VALUES ('$session', $good_id)";

    if (!$db->query($query)){
        die ("$db->errno: $db->error");
    }
}

function select_goods_from_basket($consumer){
    global $db;
    $array = array();
    $query = "SELECT g.id, g.name, g.price, g.image, p.consumer, p.id AS basket_id FROM goods_info g INNER JOIN purchases_info p ON g.id = p.good_id WHERE p.consumer='$consumer'";

    $query_result = $db->query($query);

    if (!$query_result)
        die ("$db->errno: $db->error");

    while ($row = mysqli_fetch_assoc($query_result))
        $array[] = $row;

    return $array;
}

function delete_good_from_basket($id, $consumer){
    global $db;
    $query = "DELETE FROM purchases_info WHERE id=$id AND consumer='$consumer'";

    if (!$db->query($query)){
        die ("$db->errno: $db->error");
    }
}

function clean_order($consumer){
    global $db;
    $query = "DELETE FROM purchases_info WHERE consumer='$consumer'";

    if (!$db->query($query)){
        die ("$db->errno: $db->error");
    }
}