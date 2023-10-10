<?php 
require_once "constants.php";
function load_header(String $title, Array $css = []) {?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>


    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="<?=base_url("assets/bootstrap/css/bootstrap.min.css")?>">

    <!-- fontawesome -->
    <link rel="stylesheet" href="<?=base_url("assets/fontawesome/css/all.min.css")?>">

    <!-- datatable -->
    <link rel="stylesheet" href="<?=base_url("assets/datatable/css/dataTables.dataTables.min.css")?>">
    
    <link rel="stylesheet" href="<?=base_url("assets/css/main.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/css/header.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/css/footer.css")?>">

    <?php foreach($css as $c) {?>
    <link rel="stylesheet" href="<?=base_url("assets/css/{$c}.css")?>">
    <?php }?>



    <!-- JQUERY -->
    <script src="<?=base_url("assets/jquery/jquery.min.js")?>"></script>

    
</head>


<body >
    

<header>

</header>

<?php }?>