<?php 
	
	$blocks = array("Main", "Kazan", "Tech", "Sport", "Science");

	generateTopMenu($blocks);


	function generateTopMenu($blocks)
	{
		foreach ($blocks as $name) 
		{
		 	echo '<div class="header-vertical-menus-line-news-section">', $name, "</div>";
		} 
	}

?>