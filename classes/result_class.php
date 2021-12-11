<?php

require(dirname(__FILE__).'/../classes/database_class.php');

class Results extends Connection{


	function add_result($match,$teamA,$teamB,$score,$date){
		return $this->query("insert into Matchday(Match_ID,Team_ID_A,Team_ID_B,scoreline,match_date) 
								values('$match','$teamA','$teamB','$score','$date')");
	}

	function delete_one_result($id){
		return $this->query("delete from fixture where Match_ID = '$id'");
	}

	function update_one_result($match,$teamA,$teamB,$score,$date)
    {
        return $this->query(
            "update Matchday set Match_ID='$match',Team_ID_A='$teamA',Team_ID_B='$teamB',scoreline='$score',match_date='$date'");
    }


	

	function select_all_result(){
		// return array or false
		return $this->fetch("select * from Matchday");
	}



	function search_result($word)
    {
        // return associative array or false
        return $this->fetch("Select * From Matchday where Match_ID Like '%$word%'");
    }

	function pick_random()
	{
		return $this->fetch("select * from Matchday order by rand() limit 3");	

	}

	

}

?>