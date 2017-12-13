<?php

//Salarié RH en vrai

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Manage your team</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href="assets/js/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link href="assets/css/table-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modalAjoutEmploye"
     class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Formulaire ajout</h4>
            </div>
            <div class="modal-body">
                <p>Nom</p>
                <input type="text" name="inputNom" placeholder="Nom" autocomplete="off"
                       class="form-control placeholder-no-fix">
                <p style="padding-top: 10px">Prénom</p>
                <input type="text" name="inputPrenom" placeholder="Prénom" autocomplete="off"
                       class="form-control placeholder-no-fix">
                <p style="padding-top: 10px">Téléphone</p>
                <input type="text" name="inputTel" placeholder="Téléphone" autocomplete="off"
                       class="form-control placeholder-no-fix">
                <p style="padding-top: 10px">Email</p>
                <input type="email" name="inputEmail" placeholder="Email" autocomplete="off"
                       class="form-control placeholder-no-fix">
                <p style="padding-top: 10px">Adresse</p>
                <input type="text" name="inputAdresse" placeholder="Adresse" autocomplete="off"
                       class="form-control placeholder-no-fix">
                <p style="padding-top: 10px">Ville</p>
                <input type="text" name="inputVille" placeholder="Ville" autocomplete="off"
                       class="form-control placeholder-no-fix">
                <p style="padding-top: 10px">Code Postal</p>
                <input type="text" name="inputCP" placeholder="Code Postal" autocomplete="off"
                       class="form-control placeholder-no-fix">
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Annuler</button>
                <button class="btn btn-theme" type="button">Envoyer</button>
            </div>
        </div>
    </div>
</div>

<!-- modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modalEntrerHoraires"
     class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Formulaire ajout</h4>
            </div>
            <div class="modal-body">
                <p>Nom</p>
                <input type="text" name="inputNom" placeholder="Nom" autocomplete="off"
                       class="form-control placeholder-no-fix">
                <p style="padding-top: 10px">Heure début</p>
                <input type="text" name="inputDebut" placeholder="Heure début" autocomplete="off"
                       class="form-control placeholder-no-fix">
                <p style="padding-top: 10px">Heure fin</p>
                <input type="text" name="inputFin" placeholder="Heure fin" autocomplete="off"
                       class="form-control placeholder-no-fix">
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Annuler</button>
                <button class="btn btn-theme" type="button">Envoyer</button>
            </div>
        </div>
    </div>
</div>

<section id="container">
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index.php" class="logo"><b>SHARE YOUR TEAM</b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-theme">2</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">Vous avez deux nouveaux messages</p>
                        </li>
                        <li>
                            <a href="index.php#">
                                <span class="photo"><img alt="avatar" src="assets/img/imageProfil2.PNG"></span>
                                <span class="subject">
                                    <span class="from">Gare Saint-Jean</span>
                                    <span class="time">Il y a 3 heure</span>
                                    </span>
                                <span class="message">
                                        Entrer horaires
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php#">
                                <span class="photo"><img alt="avatar" src="assets/img/imageProfil2.PNG"></span>
                                <span class="subject">
                                    <span class="from">Jean-Eudes Dupont</span>
                                    <span class="time">Il y a 1 heure</span>
                                    </span>
                                <span class="message">
                                        Demande de congés
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php#">Voir toutes les notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="login.php">Déconnexion</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">

                <p class="centered"><a href="#"><img style="background-color: #eee" src="assets/img/imageProfil2.PNG" class="img-circle" width="60"></a></p>
                <h5 class="centered">Jeanne Darque</h5>

                <li class="mt">
                    <a data-toggle="modal" href="lndex.php#modalAjoutEmploye">
                        <i class="fa fa-cogs"></i>
                        <span>Ajout employé</span>
                    </a>
                </li>
                <li>
                    <a data-toggle="modal" href="lndex.php#modalEntrerHoraires">
                        <i class="fa fa-dashboard"></i>
                        <span>Entrer horaires</span>
                    </a>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-9 main-chart">

                    <div class="row mt">
                        <div class="col-lg-12">
                            <div class="content-panel">
                                <h4><i class="fa fa-angle-right"></i> Demandes en cours</h4>
                                <section id="no-more-tables">
                                    <table class="table table-bordered table-striped table-condensed cf">
                                        <thead>
                                        <tr>
                                            <th class="numeric">~</th>
                                            <th class="numeric">NbJours</th>
                                            <th class="numeric">Début</th>
                                            <th class="numeric">Fin</th>
                                            <th class="numeric">Prénom</th>
                                            <th class="numeric">Nom</th>
                                            <th class="numeric">Poste</th>
                                            <th class="numeric">Email</th>
                                            <th class="numeric">Jours pris</th>
                                            <th class="numeric" colspan="2"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th data-title="~" scope="row">1</th>
                                            <td class="numeric" data-title="NbJours">3</td>
                                            <td class="numeric" data-title="Début">21/01/2018</td>
                                            <td class="numeric" data-title="Fin">24/01/2018</td>
                                            <td class="numeric" data-title="Prénom">Jean-Jacques</td>
                                            <td class="numeric" data-title="Nom">Dupont</td>
                                            <td class="numeric" data-title="Poste">Ouvrier</td>
                                            <td class="numeric" data-title="Email">jean-jacques@gmail.com</td>
                                            <td class="numeric" data-title="jours pris">21</td>
                                            <td class="numeric" colspan="2" style="background-color: #5cb85c"></td>
                                        </tr>
                                        <tr>
                                            <th data-title="~" scope="row">2</th>
                                            <td class="numeric" data-title="NbJours">1</td>
                                            <td class="numeric" data-title="Début">14/02/2018</td>
                                            <td class="numeric" data-title="Fin">14/02/2018</td>
                                            <td class="numeric" data-title="Prénom">Jean-Eudes</td>
                                            <td class="numeric" data-title="Nom">Dupont</td>
                                            <td class="numeric" data-title="Poste">Chef de projet</td>
                                            <td class="numeric" data-title="Email">jean-eudes@gmail.com</td>
                                            <td class="numeric" data-title="jours pris">9</td>
                                            <td>
                                                <button type="button" class="btn btn-success">Accepter</button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger">Refuser</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th data-title="~" scope="row">3</th>
                                            <td class="numeric" data-title="NbJours">2</td>
                                            <td class="numeric" data-title="Début">25/07/2018</td>
                                            <td class="numeric" data-title="Fin">27/07/2018</td>
                                            <td class="numeric" data-title="Prénom">Jean-Luc</td>
                                            <td class="numeric" data-title="Nom">Dupont</td>
                                            <td class="numeric" data-title="Poste">Fonction support</td>
                                            <td class="numeric" data-title="Email">jean-luc@gmail.com</td>
                                            <td class="numeric" data-title="jours pris">33</td>
                                            <td class="numeric" colspan="2" style="background-color: #d9534f"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </section>
                            </div>
                            <! --/content-panel -->
                        </div><!-- /col-md-12 -->
                    </div>

                    <h3><i class="fa fa-angle-right"></i> Calendrier</h3>
                    <div class="row mt">
                        <aside class="col-lg-12 mt">
                            <section class="panel">
                                <div class="panel-body">
                                    <div id="calendar" class="has-toolbar"></div>
                                </div>
                            </section>
                        </aside>
                    </div>

                    <div class="row mt">
                        <div class="col-lg-12">
                            <!-- TWITTER PANEL -->

                            <h3 style="text-align: center">Jean-Jacques Moyoumed Semaine 10</h3>
                            <div class="col-md-4 mb">
                                <div class="darkblue-panel pn">
                                    <div class="darkblue-header">
                                        <h5>Conges restants</h5>
                                    </div>
                                    <canvas id="serverstatus" height="120" width="120"></canvas>
                                    <script>
                                        var doughnutData = [
                                            {
                                                value: 6,
                                                color: "#68dff0"
                                            },
                                            {
                                                value: 12,
                                                color: "#444c57"
                                            }
                                        ];
                                        var myDoughnut = new Chart(document.getElementById("serverstatus").getContext("2d")).Doughnut(doughnutData);
                                    </script>
                                    <p>6heures restantes sur 12</p>
                                </div>
                                <! -- /darkblue panel -->
                            </div>
                            <!-- /col-md-4 -->

                            <div class="showback">
                                <h4><i class="fa fa-angle-right"></i> Graphique des heures</h4>
                                <output>Faria Da Costa</output>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                        <span class="sr-only">90% Complete (success)</span>
                                    </div>
                                </div>
                                <output>Jean-Jacques Moyoumed</output>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                        <span class="sr-only">50% Complete (warning)</span>
                                    </div>
                                </div>
                                <output>Victor Alves</output>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div><!--/showback -->
                    </div>

                    <div class="row mt">

                        <div class="col-md-12">
                            <div class="content-panel">
                                <h4><i class="fa fa-angle-right"></i> Liste salarié congés</h4>
                                <hr>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Prénom</th>
                                        <th>Nom</th>
                                        <th>Congés</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Jean-Jacques</td>
                                        <td>Moyoumed</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Victor</td>
                                        <td>Alves</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Faria</td>
                                        <td>Da Costa</td>
                                        <td>2</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <! --/content-panel -->
                        </div><!-- /col-md-12 -->
                    </div>

                </div><!-- /col-lg-9 END SECTION MIDDLE -->


                <!-- **********************************************************************************************************************************************************
                RIGHT SIDEBAR CONTENT
                *********************************************************************************************************************************************************** -->

                <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
                    <h3>NOTIFICATIONS</h3>

                    <!-- First Action -->
                    <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                            <p>
                                <muted>Il y a 1 heure</muted>
                                <br/>
                                <a href="#">Jean-Eudes Dupont</a> a effectué une demande de congés.<br/>
                            </p>
                        </div>
                    </div>
                    <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                            <p>
                                <muted>Il y a 3 heures</muted>
                                <br/>
                                Horaires chantier<a href="#"> Gare Saint-Jean</a> à entrer.<br/>
                            </p>
                        </div>
                    </div>


                    <!-- USERS ONLINE SECTION -->
                    <h3>MEMBRES</h3>
                    <!-- First Member -->
                    <div class="desc">
                        <div class="thumb">
                            <img class="img-circle" src="assets/img/imageProfil2.PNG" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                            <p><a href="#">Jeanne DARQUE</a><br/>
                                <muted>Ressources Humaines</muted>
                            </p>
                        </div>
                    </div>
                    <!-- Second Member -->
                    <div class="desc">
                        <div class="thumb">
                            <img class="img-circle" src="assets/img/imageProfil2.PNG" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                            <p><a href="#">Yves AHOMARCHE</a><br/>
                                <muted>Chef de chantier</muted>
                            </p>
                        </div>
                    </div>
                    <!-- Third Member -->
                    <div class="desc">
                        <div class="thumb">
                            <img class="img-circle" src="assets/img/imageProfil2.PNG" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                            <p><a href="#">Jean-Eudes DUPONT</a><br/>
                                <muted>Chef de chantier</muted>
                            </p>
                        </div>
                    </div>
                    <!-- Fourth Member -->
                    <div class="desc">
                        <div class="thumb">
                            <img class="img-circle" src="assets/img/imageProfil2.PNG" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                            <p><a href="#">Jean-Jacques DUPONT</a><br/>
                                <muted>Ouvrier</muted>
                            </p>
                        </div>
                    </div>
                    <!-- Fifth Member -->
                    <div class="desc">
                        <div class="thumb">
                            <img class="img-circle" src="assets/img/imageProfil2.PNG" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                            <p><a href="#">Jean-Jacques MOYOUMED</a><br/>
                                <muted>Ouvrier</muted>
                            </p>
                        </div>
                    </div>
                    <div class="desc">
                        <div class="thumb">
                            <img class="img-circle" src="assets/img/imageProfil2.PNG" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                            <p><a href="#">Victor ALVES</a><br/>
                                <muted>Ouvrier</muted>
                            </p>
                        </div>
                    </div>
                    <div class="desc">
                        <div class="thumb">
                            <img class="img-circle" src="assets/img/imageProfil2.PNG" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                            <p><a href="#">Faria DA COSTA</a><br/>
                                <muted>Ouvrier</muted>
                            </p>
                        </div>
                    </div>
                    <div class="desc">
                        <div class="thumb">
                            <img class="img-circle" src="assets/img/imageProfil2.PNG" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                            <p><a href="#">Jean-Luc DUPONT</a><br/>
                                <muted>Fonction support</muted>
                            </p>
                        </div>
                    </div>
                </div><!-- /col-lg-3 -->
            </div>
            <! --/row -->
        </section>
    </section>

    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2014 - Alvarez.is
            <a href="index.php#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/jquery-1.8.3.min.js"></script>
<script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="assets/js/fullcalendar/fullcalendar.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="assets/js/jquery.sparkline.js"></script>


<!--common script for all pages-->
<script src="assets/js/common-scripts.js"></script>

<script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="assets/js/gritter-conf.js"></script>

<!--script for this page-->
<script src="assets/js/sparkline-chart.js"></script>
<script src="assets/js/zabuto_calendar.js"></script>
<script src="assets/js/calendar-conf-events.js"></script>

<script type="application/javascript">
    $(document).ready(function () {
        $("#date-popover").popover({html: true, trigger: "manual"});
        $("#date-popover").hide();
        $("#date-popover").click(function (e) {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function () {
                return myDateFunction(this.id, false);
            },
            action_nav: function () {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [
                {type: "text", label: "Special event", badge: "00"},
                {type: "block", label: "Regular event",}
            ]
        });
    });


    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>

<script>
    //custom select box

    $(function () {
        $("select.styled").customSelect();
    });

</script>


</body>
</html>

