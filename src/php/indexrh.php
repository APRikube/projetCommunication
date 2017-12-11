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
<br/>
<div class="container-fluid">
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th>~</th>
            <th>NbJours</th>
            <th>Début</th>
            <th>Fin</th>
            <th>Nom</th>
            <th>Poste</th>
            <th>Email</th>
            <th>Jours pris</th>
            <th colspan="2"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>3</td>
            <td>21/01/2018</td>
            <td>24/01/2018</td>
            <td>Jean-Charles</td>
            <td>Ouvrier</td>
            <td>jean-charles@gmail.com</td>
            <td>15</td>
            <td colspan="2" style="background-color: #5cb85c"></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>1</td>
            <td>14/02/2018</td>
            <td>14/02/2018</td>
            <td>Jean-Eudes</td>
            <td>Chef de projet</td>
            <td>jean-eudes@gmail.com</td>
            <td>9</td>
            <td><button type="button" class="btn btn-success">Accepter</button></td>
            <td><button type="button" class="btn btn-danger">Refuser</button></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>2</td>
            <td>25/07/2018</td>
            <td>27/07/2018</td>
            <td>Jean-Luc</td>
            <td>Fonction support</td>
            <td>jean-luc@gmail.com</td>
            <td>33</td>
            <td colspan="2" style="background-color: #d9534f"></td>
        </tr>
        </tbody>
    </table>
</div>
<script src="../BootStrap/js/bootstrap.min.js"></script>
</body>


</html>