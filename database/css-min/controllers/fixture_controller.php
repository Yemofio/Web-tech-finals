<?php

require(dirname(__FILE__).'/../classes/fixture_class.php');

if(!function_exists('add_fixture_controller')){
function add_fixture_controller($match,$teamA,$teamB,$score,$date){
    $fixture_instance = new Fixture();
    return $fixture_instance->add_fixture($match,$teamA,$teamB,$score,$date);

}
}


if(!function_exists('delete_fixture_controller')){
function delete_fixture_controller($id){
    $fixture_instance = new Fixture();
    return $fixture_instance->delete_one_fixture($id);

}
}
if(!function_exists('get_team_controller')){
function get_team_controller($id){
    $fixture_instance = new Fixture();
    return $fixture_instance->get_team($id);
}
}
if(!function_exists('get_top_goal_scorer_controller')){
function get_top_goal_scorer_controller(){
    $fixture_instance = new Fixture();
    return $fixture_instance->get_top_goal_scorers();
}
}

if(!function_exists('get_top_assists_controller')){
    function get_top_assists_controller(){
        $fixture_instance = new Fixture();
        return $fixture_instance->get_top_assists();
    }
    }

if(!function_exists('get_player_controller')){
    function get_player_controller($id){
        $fixture_instance = new Fixture();
        return $fixture_instance->player_details($id);
    }
}

if(!function_exists('staff_controller')){
    function staff_controller($team_id){
        $fixture_instance = new Fixture();
        return $fixture_instance->staff($team_id);
    }
}


if(!function_exists('update_fixture_controller')){
function update_fixture_controller($fixture_id){
    $fixture_instance = new Fixture();
    return $fixture_instance->update_one_fixture($fixture_id,$match,$teamA,$teamB,$score,$date);

}
}

if(!function_exists('select_all_fixture_controller')){
function select_all_fixtures_controller(){
    $fixture_instance = new Fixture();
    return $fixture_instance->select_all_fixtures();

}
}

if(!function_exists('search_fixture_controller')){
function search_fixture_controller($word){
    $fixture_instance = new Fixture();
    return $fixture_instance->search_fixture($word);

}
}

if(!function_exists('pick_random_controller')){
function pick_random_controller(){
    $fixture_instance = new Fixture();
    return $fixture_instance->pick_random();

}
}

?>