<?php
	
	generateSide();

	function generateSide()
    {
        $url = "http://news.yandex.ru/Kazan/index.rss";
        $content = file_get_contents($url);
        $items = new SimpleXmlElement($content);

        echo '
                <div class="d-flex flex-column flex-m-row align-items-center p-3 bg-secondary text-light rounded"> Yandex.Kazan</div>
                <div class="accordion" id="trend">    
	    ';

        for ($i = 0; $i<3; $i++)
        {
            {
                echo '
			        <div class= "row" style ="margin-bottom: 10px">
					';

                echo '
                        <div class="card">
                            <div class="card-header" id="heading'.$i.'">
                                <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse'.$i.'" aria-expanded="'.expanded($i).'" aria-controls="collapse'.$i.'">
                                    ' . $items->channel->item[$i]->title . '
                                </button>
                                </h2>
                            </div>
                            <div id="collapse'.$i.'" class="collapse show" aria-labelledby="heading'.$i.'" data-parent="#trend">
                            <div class="card-body">
                                ' . $items->channel->item[$i]->description . '
                                <br><br><a href="' . $items->channel->item[$i]->link . '" class="btn btn-primary">Source</a>
                            </div>
                        </div>
				';
                echo '
			        </div>
                </div>
			';
            }
        }
    }

    function expanded($i)
    {
        if ($i==0)
        {
            return 'true';
        }
        return 'false';
    }
?>