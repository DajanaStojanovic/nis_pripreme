<?php
session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link href='<?php echo $putanjaApp;?>css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='<?php echo $putanjaApp;?>css/style.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="<?php echo $putanjaApp;?>js/bootstrap.min.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="<?php echo $putanjaApp;?>images/favicon.ico">

</head>
<body>
<?php if(!isset($_SESSION["userData"])):?>
<div class="login_button">
  <button data-toggle="modal" data-target="#myModal">Prijava</button>
</div>

<div class="register_button">
  <button data-toggle="modal" data-target="#myModal1">Registracija</button>
</div>


<?php else:?>
<div class="login_button">
  <a href="<?php echo $putanjaApp;?>logout.php"><button>Odjava</button></a>
</div>
<?php endif;?>