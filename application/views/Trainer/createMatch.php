<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<div class="container" style="width:30%;">
	<div id="insert_Match_error" class="alert alert-danger"></div>
	<form id="CreateMatch" method="POST" action="<?=site_url('TrainerController/insertMatch');?>";" >
		<div class="form-group" >

			<label for="FirstNameLabel">Match name</label>
			<input type="text" class="form-control" name="MatchName" id="MName" placeholder="Enter Match name" class="name" value=<?php if(isset($_SESSION['name'])) echo $_SESSION['name'];?>>
		</div>
		<label for="Time">Time</label>
		<div class='col-md-5' style="padding-left:0;width:20rem;">
			<div class="form-group">
				<div class="input-group date" id="datetimepicker7" data-target-input="nearest" style="width: 27rem">
					<input type="text" name="DateTime" class="form-control datetimepicker-input" data-target="#datetimepicker7">
					<div class="input-group-append" data-target="#datetimepicker7" data-toggle="datetimepicker">
						<div class="input-group-text"><i class="fa fa-calendar"></i></div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">

			$(function () {
				$("#insert_Match_error").hide();
				$("#CreateMatch").submit(function (evt) {
					evt.preventDefault();
					var url=$(this).attr('action');
					var postData= $(this).serialize();
					$.post(url, postData, function (o) {
						if(o.result==1){
							window.location.href="<?=site_url('TrainerController')?>"
						}else{
							$("#insert_Match_error").show();
							var output="<ul>";
							for(var key in o.error) {
								output+="<li>"+o.error[key]+"</li>";
							}
							output+="</ul>";
							$("#insert_Match_error").html(output);
						}
					},'json');
				})
			})
		</script>
		<script type="text/javascript">
			$(function () {
				$('#datetimepicker7').datetimepicker();
				$('#datetimepicker8').datetimepicker({
					useCurrent: false
				});
				$("#datetimepicker7").on("change.datetimepicker", function (e) {
					$('#datetimepicker8').datetimepicker('minDate', e.date);
				});
				$("#datetimepicker8").on("change.datetimepicker", function (e) {
					$('#datetimepicker7').datetimepicker('maxDate', e.date);
				});
			});
		</script>
		<button type="submit" class="btn btn-primary" name="submit" id="submit">Sign Up</button>
	</form>
</div>


