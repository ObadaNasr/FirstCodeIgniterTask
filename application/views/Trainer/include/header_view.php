<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Sport club</title>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
		<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="<?= base_url()?>/php/codeigniter/FirstTask/public/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?= base_url()?>/php/codeigniter/FirstTask/public/css/style.css" />
        <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
		<style>

			#submit{
				margin-left: 35%;
				margin-top: 5%;
			}
			#goToSignUp{
				margin-left: 15%;
			}
			.error {
				color: red;

			}
		</style>
        <script src="<?=base_url()?>/php/codeigniter/FirstTask/public/js/JQuery.js"></script>
        <script src="<?=base_url()?>/php/codeigniter/FirstTask/public/js/bootstrap.js"></script>

	</head>
<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <span class="navbar-brand" id="LOGO">SportClub</span>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
             </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 3rem; float: right;">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= site_url('TrainerController');?>">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('TrainerController/players');?>">Players</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('TrainerController/matches');?>">matches</a>
                        </li>
                    </ul>
                    <form method="POST" action="<?= site_url('TrainerController/logOut');?>">
                        <button type="submit" class="btn btn-info"  style="margin-left: 10px; width:90px;" name="signOut">Sign Out</button>
                    </form>

                </div>
            </div>
       </nav>
    </div>





