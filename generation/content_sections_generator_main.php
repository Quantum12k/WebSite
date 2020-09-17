<?php
	
	generateMain(3, 3);
	function generateMain($cols, $rows)
	{
		for ($i=0; $i<$rows; $i++)
		{
			echo '
			<div class= "row" style ="margin-bottom: 15px">
					';
				for ($j=0; $j<$cols; $j++)
				{
					echo '
					<div class="col">
							<div class="card" style="width: 16rem;">
									<img src="https://img.pagecloud.com/tWPboshK5zPVluKPHCb35v-BXTw=/175x0/filters:no_upscale()/puresalt/download-vb58a.jpg" class="card-img-top" alt="...">
									<div class="card-body">
											<p class="card-text">News text. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
									</div>
							</div>
					</div>
					';
				}
				echo '
			</div>
			';
		}
	}
?>