<div class="container">
    <div class="container">

        <ul class="list-group" style="width:320px;">
            <li class="list-group-item"><strong>ID: </strong> <?= $data['Number']?></li>
            <li class="list-group-item"><strong>Name:  </strong><?= $data['user_name']?></li>
            <li class="list-group-item"><strong>Email:  </strong><?= $data['Email']?></li>
            <li class="list-group-item"><strong> Type User is: </strong><?php if($data['type']==1) echo "Player"; else echo"Trainer";?></li>
        </ul>

    </div>
</div>
