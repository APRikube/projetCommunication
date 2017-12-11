<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8"/>

    <!-- Bootstrap-->
    <link rel="stylesheet" href="./../BootStrap/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <title>Share Your Time</title>
</head>

<body>
<?php
define('pagencours', $_SERVER['PHP_SELF'], true);
$page = explode("/", pagencours);
?>

<?php include 'modal_connexion.include.php' ?>
<link href="./../css/style.css" rel="stylesheet">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Barre de navigation déroulante</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php if (end($page) == "index.php") {
                echo '#';
            } else {
                echo 'index.php';
            } ?>"><img src="../img/logo.png" class="iconeNavbar" alt="Share Your Time"/></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <!-- Vérification si la page index.php est la page active -->
            <ul class="nav navbar-nav navbar-right">;
                <li class="nav-item" data-toggle="modal" data-target="#modalConnexion"><a href="#">Connexion</a></li>
            </ul>

        </div>
    </div>
</nav>

<script>

</script>

<script src="../BootStrap/js/bootstrap.min.js"></script>
</body>


</html>