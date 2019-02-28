<div class="container">
    <form method="POST" id="SignInForm" action="<?=site_url('Login/login');?>">
         <div class="form-group" >
               <label for="EmailLabel">Email address</label>
               <input type="text" class="form-control" id="Email" data-validation="email" name="Email" aria-describedby="emailHelp" placeholder="Enter email" margin="100">
         </div>
         <div class="form-group">
               <label for="PasswordLabel">Password</label>
               <input type="password" class="form-control" id="password" name="Password"placeholder="Password">
         </div>
        <button type="submit"   class="btn btn-primary submit" id="submit" >Sign In</button>
 </form>
</div>
<script type="text/javascript">
    $(function () {
        $("#SignInForm").submit(function (evt) {
            evt.preventDefault();
            var url=$(this).attr('action');
            var postData= $(this).serialize();
            $.post(url, postData, function (o) {
                if(o.result==1){
                    window.location.href="<?=site_url('PlayerController/index/');?>";
                    
                }else if(o.result==2){
                    window.location.href="<?=site_url('TrainerController');?>";
                    
                }else{
                    alert("invalid Login");
                }
            },'json');
        })
    })
</script>
