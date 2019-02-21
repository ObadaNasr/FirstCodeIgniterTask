<div class="container">
    <div id="insert_error" class="alert alert-danger"></div>
    <form id="SignUpForm" method="POST" action="<?=site_url('UserDatabaseController/insert');?>" >
        <div class="form-group" >
            <label for="FirstNameLabel">First Name</label>
            <input type="text" class="form-control" name="first_Name" id="fname" placeholder="Enter first name" class="name">
        </div>
        <div class="form-group" >
            <label for="LastNameLabel">Last Name</label>
            <input type="text" class="form-control" name="last_Name"  id="lname" placeholder="Enter last name" class="name">
        </div>
        <div class="form-group" >
            <label for="EmailLabel">Email address</label>
            <input type="text" class="form-control" id="emailAddress" name="Email" aria-describedby="emailHelp" placeholder="Enter email" >
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend" >
                <label class="input-group-text" for="inputGroupSelect01">Type Users</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="choose">
                <option value="1" selected>Player</option>
                <option value="2" <?php if(isset($his)&&$his==1) echo "disabled";?>>Trainer</option>
            </select>
        </div>

        <div class="form-group">
            <label for="PasswordLabel">Password</label>
            <input type="password" class="form-control" id="pass" name="Password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="ConfirmPasswordLabel">Confirmed Password</label>
            <input type="password" class="form-control" name="Confirm_Password"  id="Cpass" placeholder="Password">

        </div>
        <button type="submit" class="btn btn-primary submit" name="submit" id="submit">Sign Up</button>
    </form>
</div>
<script type="text/javascript">

    $(function () {
        $("#insert_error").hide();
        $("#SignUpForm").submit(function (evt) {
            evt.preventDefault();
            var url=$(this).attr('action');
            var postData= $(this).serialize();
            $.post(url, postData, function (o) {
                if(o.result==1){
                	<?php if(isset($his)&&$his==1):?>
						window.location.href="<?=site_url('TrainerController')?>"
					<?php else:?>
						window.location.href="<?=site_url('Main_controller/signIn');?>";
                    <?php endif; ?>
                }else{
                    $("#insert_error").show();
                    var output="<ul>";
                    for(var key in o.error) {
                        output+="<li>"+o.error[key]+"</li>";
                    }
                    output+="</ul>";
                    $("#insert_error").html(output);
                }
            },'json');
        })
    })
</script>
