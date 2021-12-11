<?php

require(dirname(__FILE__).'/../classes/result_class.php');

if(!function_exists('add_result_controller')){
function add_result_controller($match,$teamA,$teamB,$score,$date){
    $result_instance = new Result();
    return $result_instance->add_result($match,$teamA,$teamB,$score,$date);

}
}


if(!function_exists('delete_result_controller')){
function delete_fixture_controller($id){
    $result_instance = new Result();
    return $result_instance->delete_one_result($id);

}
}

if(!function_exists('update_result_controller')){
function update_result_controller($result_id){
    $result_instance = new Result();
    return $result_instance->update_one_result($result_id,$match,$teamA,$teamB,$score,$date);

}
}

if(!function_exists('select_all_result_controller')){
function select_all_result_controller(){
    $results_instance = new Result();
    return $results_instance->select_all_result();

}
}

if(!function_exists('search_result_controller')){
function search_result_controller($word){
    $result_instance = new Result();
    return $result_instance->search_result($word);

}
}

if(!function_exists('pick_random_controller')){
function pick_random_controller(){
    $result_instance = new Result();
    return $result_instance->pick_random();

}
}

?>