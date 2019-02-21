<div class="container">
	<?php if (count($match)==0):?>
		<p>No Matches</p>
	<?php endif;?>
	<?php for($i=0;$i<count($match);$i++):?>
		<ul class="list-group" style="margin: 15px 20px; width:320px;">
			<li class="list-group-item"><strong>Match: </strong><?= $match[$i][0]['Name']?></li>
			<li class="list-group-item"><strong>Time: </strong><?= $match[$i][0]['Time']?></li>
		</ul>
	<?php endfor;?>
</div>

