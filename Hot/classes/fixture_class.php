<?php

require(dirname(__FILE__).'/../classes/database_class.php');

class Fixture extends Connection{


	function add_fixture($match,$teamA,$teamB,$score,$date){
		return $this->query("insert into Matchday(Match_ID,Team_ID_A,Team_ID_B,scoreline,match_date) 
								values('$match','$teamA','$teamB','$score','$date')");
	}

	function delete_one_fixture($id){
		return $this->query("delete from fixture where Match_ID = '$id'");
	}

	function update_one_fixture($match,$teamA,$teamB,$score,$date)
    {
        return $this->query(
            "update matchday set Match_ID='$match',Team_ID_A='$teamA',Team_ID_B='$teamB',scoreline='$score',match_date='$date'");
    }

	function get_team($id){
		return $this->fetchOne("SELECT * FROM team where Team_ID = '$id' ");
	}

	function get_top_goal_scorers(){
		return $this->fetch("select first_name as player, player_ID, goals, jersey_number
								from player
								order by goals desc
								limit 5");
	}

	function get_top_assists(){
		return $this->fetch("select first_name as player, player_ID, assists, jersey_number
								from player
								order by assists desc
								limit 5");
	}
	

	function select_all_fixtures(){
		return $this->fetch("SELECT * from matchday 
							INNER JOIN team
							on team.Team_ID = matchday.Team_ID_A 
							");
	}

	function staff($team_id){
		return $this->fetch("SELECT * from team
							INNER JOIN player
							ON team.Team_ID = player.Team_ID
							INNER JOIN coach
							ON team.Team_ID = coach.Team_ID
							where team.Team_ID = '$team_id'");
	}

	function player_details($id){
		return $this->fetchOne("SELECT * 
								FROM player
								INNER join team
								ON team.Team_ID = player.Team_ID
								WHERE Player_ID = '$id'");
	}


	function search_fixture($word)
    {
        return $this->fetch("Select * From matchday where Match_ID Like '%$word%'");
    }

	function pick_random()
	{
		return $this->fetch("select * from matchday order by rand() limit 3");	

	}

	

}

?>