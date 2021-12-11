<?php

require(dirname(__FILE__).'/../classes/database_class.php');

class Table extends Connection{



	function update_one_team_position($position,$club,$wins,$draws,$defeats,$points)
    {
        return $this->query(
            "update League_standings set position='$position', Club='$club',wins='$wins',draws='$draws',defeats='$defeats',points='$points'");
    }


	

	function select_whole_table(){
		return $this->fetch("select * from League_standings");
	}


	function search_table($word)
    {
        return $this->fetch("Select * From League_standings where Club Like '%$word%'");
    }

	function pick_random()
	{
		return $this->fetch("select * from League_standings order by rand() limit 3");	

	}

	

}

?>