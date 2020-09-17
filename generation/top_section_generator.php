<?php 
	
	$blocks = array("Main", "Kazan", "Tech", "Sport", "Science");

	generateTopMenu($blocks);


	function generateTopMenu($blocks)
	{
		echo '<div class="row">';
		foreach ($blocks as $name) 
		{
		 	echo '<div class="col-2"> <a href="#" class="text-secondary">', $name, "</a></div>";
		} 
		echo '</div>';
	}

?>