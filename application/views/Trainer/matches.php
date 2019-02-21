<div class="container" style="width:100%; height: 100%">
	<?php for($i=0;$i<count($match);$i++):?>
			<div class="card-columns" >
				<form method="POST"  action="<?= site_url('TrainerController/InsertPlayerToMatch');?>" style="width: 21.8rem;">
					<div class="card card-columns-3">
						<img src="<?=base_url()?>/php/codeigniter/FirstTask/public/img/stadium.png" class="card-img-top" style="width:200px;height: 220px; margin:10px 77px;">
						<div class="card-body">
							<?php if(isset($his)&&$his==1) echo'<input  type="text" class="card-title" name="IDPlayer" value="'.$ID.'" hidden readonly style="width: 230px;margin:5px 50px;padding:0 10px;border-style: inherit;background: white;text-align: center;font-weight: bold;font-size: 1.4em;">'?>
							<input  type="text" class="card-title" name="IDMatch" value="<?=$match[$i]['ID']?>" hidden readonly style="width: 230px;margin:5px 50px;padding:0 10px;border-style: inherit;background: white;text-align: center;font-weight: bold;font-size: 1.4em;">
							<input  type="text" class="card-title" name="MatchName" value="<?=$match[$i]['Name']?>" readonly style="width: 230px;margin:5px 50px;padding:0 10px;border-style: inherit;background: white;text-align: center;font-weight: bold;font-size: 1.4em;">
							<input  type="text" class="card-text" name="MatchTime" value="<?=$match[$i]['Time']?>" style="width: 230px;margin:5px 50px;padding:0 10px;border-style: inherit;background: white;text-align: center;" readonly>
							<button  type="submit" name="action" value="Delete" class="btn btn-primary" style="margin:10px  56px;" <?php if(!isset($his)||$his!=1) echo "hidden"?>>Add Player To This Match</button>
						</div>
					</div>
				</form>
			</div>
	<?php endfor;?>
</div>
