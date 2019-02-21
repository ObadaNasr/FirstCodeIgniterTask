<div class="container" style="width:100%; height: 100%">
	<?php for($i=0;$i<count($match);$i++):?>
		<?php if($match[$i]['type']==1):?>
			<div class="card-columns" >
				<form method="POST"  action="<?= site_url('TrainerController/deletePlayer');?>" style="width: 22rem;">
					<div class="card card-columns-3">
						<img src="<?=base_url()?>/php/codeigniter/FirstTask/public/img/player.png" class="card-img-top" style="width:200px;height: 220px; margin:10px 77px;">
						<div class="card-body">
							<input  type="text" class="card-title" name="ID" value="<?=$match[$i]['user_id']?>" hidden readonly style="width: 230px;margin:5px 50px;padding:0 10px;border-style: inherit;background: white;text-align: center;font-weight: bold;font-size: 1.4em;">
							<input  type="text" class="card-title" name="playerName" value="<?=$match[$i]['Name']?>" readonly style="width: 230px;margin:5px 50px;padding:0 10px;border-style: inherit;background: white;text-align: center;font-weight: bold;font-size: 1.4em;">
							<input  type="text" class="card-text" name="EmailPlayer" value="<?=$match[$i]['email']?>" style="width: 230px;margin:5px 50px;padding:0 10px;border-style: inherit;background: white;text-align: center;" readonly>
							<button  type="submit" name="action" formaction="<?= site_url('TrainerController/AddPlayerToMatch');?>" value="Add" class="btn btn-primary" style="margin:10px  12px;" >Add to matches</button>
							<button  type="submit" name="action" value="Delete" class="btn btn-primary" style="margin:10px  12px; ">Delete Player</button>
						</div>
					</div>
				</form>

			</div>
		<?php endif;?>
	<?php endfor;?>
</div>
