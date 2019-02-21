<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Sport club</title>
        <link rel="stylesheet" href="<?= base_url()?>/php/codeigniter/FirstTask/public/css/bootstrap.min.css" /> 
        <link rel="stylesheet" href="<?= base_url()?>/php/codeigniter/FirstTask/public/css/style.css" />
        <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
        <script src="<?=base_url()?>/php/codeigniter/FirstTask/public/js/validation.js"></script>
        <script src="<?=base_url()?>/php/codeigniter/FirstTask/public/js/JQuery.js"></script>
        <script src="<?=base_url()?>/php/codeigniter/FirstTask/public/js/bootstrap.js"></script>
   </head>
<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <span class="navbar-brand" id="LOGO">SportClub</span>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
             </button>
                
               <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 3rem; float: right;">
               <ul class="navbar-nav mr-auto">
                 <li class="nav-item active">
                     <a class="nav-link" href=<?=  site_url('/');?>>Home <span class="sr-only">(current)</span></a>
                 </li>

               </ul>
                   <form method="POST" >
                       <button type="submit" formaction=<?=site_url('Main_controller/signIn');?> class="btn" style="background-color: #3a3a3a; color: white; width:90px;">Sign in</button>
                   <button type="submit" formaction=<?=site_url('Main_controller/signUp');?> class="btn btn-info" style="margin-left: 10px; width:90px;">Sign Up</button>
                   </form>
               </div>
            </div>
       </nav>
    </div>
    