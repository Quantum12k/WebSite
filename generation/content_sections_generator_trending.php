<?php
	
	generateSide(3);
	function generateSide($rows)
	{
		
		for ($i=0; $i<$rows; $i++)
		{
			echo '
			<div class= "row" style ="margin-bottom: 10px">
					';
				
				echo '
				<div class="card" style="width: 14rem;">
						<div class="card-body">
								<h5 class="card-title">Trending news card</h5>
								<p class="card-text">Some trending news text.</p>
								<a href="#" class="btn btn-primary">Ref to post</a>
						</div>
				</div>
				';
				echo '
			</div>
			';
		}
	}
?>