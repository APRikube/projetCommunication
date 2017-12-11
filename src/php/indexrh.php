<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8"/>

    <!-- Bootstrap-->
    <link rel="stylesheet" href="./../BootStrap/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="../css/style.css">

    <title>A CHANGER</title>
</head>

<body>
<?php
define('pagencours', $_SERVER['PHP_SELF'], true);
$page = explode("/", pagencours);
?>

<?php include 'modal_ajout_salarie.include.php' ?>
<link href="./../css/style.css" rel="stylesheet">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item" data-toggle="modal" data-target="#modalAjout"><a href="#">Ajout</a></li>
            </ul>
        </div>
    </div>
</nav>

<script>

</script>

<script src="../BootStrap/js/bootstrap.min.js"></script>
</body>


</html>