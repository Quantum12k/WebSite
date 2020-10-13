<?php

$blocks = array("Kazan", "Tech", "Sports", "Science", "Politics", "Music", "Cars");

generateThemes($blocks);

function generateThemes($blocks)
{
	
	foreach ($blocks as $name) 
	{
		echo '<div class="input-group-text"><div class="col">';
	 	echo "$name"." news";
	 	echo '</div><input type="checkbox" name="'.strtoupper($name).'_box"></div><br></br>';
	} 
	
}

?>