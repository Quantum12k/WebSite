<?php 
	
	generateMain(3, 3);


	function generateMain($cols, $rows)
	{
		echo "<table>";
		for ($i=0; $i<$rows; $i++) 
		{
			echo "<tr>";
			for ($j=0; $j<$cols; $j++) 
			{
				echo "<td>";
				echo '<div class="news-panel">', "Main content news panel", "</div>";
				echo "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}

?>