<?php

//function prepare_basket_array($array){
//    $final_array = array();
//
//    foreach ($array as $value){
//        if (in_array($value, $final_array)){
//            die ("DIE!");
//            foreach ($final_array as $value_final){
//                if ($value == $value_final){
//                    $value_final['quantity']++;
//                }
//            }
//        }
//        else {
//            $final_array['id'] = $value['id'];
//            $final_array['name'] = $value['name'];
//            $final_array['price'] = $value['price'];
//            $final_array['image'] = $value['image'];
//            $final_array['consumer'] = $value['consumer'];
//            $final_array['quantity'] = 1;
//        }
//    }
//
//    return $final_array;
//}

function find_total_price($array){
    $total = 0;

    foreach ($array as $value){
        $total += $value['price'];
    }

    return $total;
}
