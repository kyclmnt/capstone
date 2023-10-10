<?php 
require_once "constants.php";
?>

<?php 
function set_title(String $title) { ?>
<title><?=$title?></title>
<?php }?>


<?php 
function set_css(Array $css = []) {
    foreach($css as $c) {?>
    <link rel="stylesheet" href="<?=base_url("assets/css/{$c}.css")?>">
<?php }
}?>



<?php
function load_header(String $title = "Document", Array $css = []) {?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?=set_Title($title)?>


    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="<?=base_url("assets/bootstrap/css/bootstrap.min.css")?>">

    <!-- fontawesome -->
    <link rel="stylesheet" href="<?=base_url("assets/fontawesome/css/all.min.css")?>">

    <!-- datatable -->
    <link rel="stylesheet" href="<?=base_url("assets/datatable/css/dataTables.dataTables.min.css")?>">
    
    <link rel="stylesheet" href="<?=base_url("assets/css/main.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/css/header.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/css/footer.css")?>">

    <?=set_css($css)?>    

    <!-- JQUERY -->
    <script src="<?=base_url("assets/jquery/jquery.min.js")?>"></script>

    
</head>


<body >
    

<header>

</header>

<?php }?>