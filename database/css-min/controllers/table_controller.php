<?php

require(dirname(__FILE__).'/../classes/table_class.php');


if(!function_exists('update_one__team_position_controller')){
function update_one__team_position_controller($team_id){
    $table_instance = new Table();
    return $table_instance->update_one_team_position_fixture($team_id,$position,$club,$wins,$draws,$defeats,$points);

}
}

if(!function_exists('select_whole_table_controller')){
function select_whole_table_controller(){
    $table_instance = new Table();
    return $table_instance->select_whole_table();

}
}

if(!function_exists('search_table_controller')){
function search_table_controller($word){
    $table_instance = new Table();
    return $table_instance->search_table($word);

}
}

if(!function_exists('pick_random_controller')){
function pick_random_controller(){
    $table_instance = new Table();
    return $table_instance->pick_random();

}
}

?>