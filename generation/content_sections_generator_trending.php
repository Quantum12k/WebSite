<?php 
	
	generateSide(3);

	function generateSide($rows)
	{
		for ($i=0; $i<$rows; $i++) 
		{
			echo '<div class="news-panel-trending">', "Trending news panel", "</div>";
		}
	}

?>