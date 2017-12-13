<?php
//RH
?>

<!DOCTYPE html>
<html lang="fr">
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
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
        <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
        <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">

        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/style-responsive.css" rel="stylesheet">

        <script src="assets/js/chart-master/Chart.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <section id="container" >
            <!-- **********************************************************************************************************************************************************
            TOP BAR CONTENT & NOTIFICATIONS
            *********************************************************************************************************************************************************** -->
            <!--header start-->
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>
                <!--logo start-->
                <a href="index.html" class="logo"><b>SHARE YOUR TEAM</b></a>
                <!--logo end-->
                <div class="nav notify-row" id="top_menu">
                    <!--  notification start -->
                    <ul class="nav top-menu">
                        
                        <!-- settings end -->
                        <!-- inbox dropdown start-->
                        <li id="header_inbox_bar" class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-theme">5</span>
                            </a>
                            <ul class="dropdown-menu extended inbox">
                                <div class="notify-arrow notify-arrow-green"></div>
                                <li>
                                    <p class="green">You have 5 new messages</p>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                        <span class="subject">
                                            <span class="from">Zac Snider</span>
                                            <span class="time">Just now</span>
                                        </span>
                                        <span class="message">
                                            Hi mate, how is everything?
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                        <span class="subject">
                                            <span class="from">Divya Manian</span>
                                            <span class="time">40 mins.</span>
                                        </span>
                                        <span class="message">
                                            Hi, I need your help with this.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                        <span class="subject">
                                            <span class="from">Dan Rogers</span>
                                            <span class="time">2 hrs.</span>
                                        </span>
                                        <span class="message">
                                            Love your new Dashboard.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                        <span class="subject">
                                            <span class="from">Dj Sherman</span>
                                            <span class="time">4 hrs.</span>
                                        </span>
                                        <span class="message">
                                            Please, answer asap.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">See all messages</a>
                                </li>
                            </ul>
                        </li>
                        <!-- inbox dropdown end -->
                    </ul>
                    <!--  notification end -->
                </div>
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li><a class="logout" href="login.html">Logout</a></li>
                    </ul>
                </div>
            </header>
            <!--header end-->

            <!-- **********************************************************************************************************************************************************
            MAIN SIDEBAR MENU
            *********************************************************************************************************************************************************** -->
            <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">

                        <p class="centered"><a href="#"><img style="background-color: #eee" src="assets/img/imageProfil2.PNG" class="img-circle" width="60"></a></p>
                        <h5 class="centered">Jean-Jacques Dupont</h5>

                        <li class="mt">
                            <a class="active" href="#">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-calendar"></i>
                                <span>Emploi du temps</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="general.html">Semaine</a></li>
                                <li><a  href="buttons.html">Mois</a></li>
                                <li><a  href="panels.html">Année</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-unlock"></i>
                                <span>Congés</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="calendar.html">Poser</a></li>
                                <li><a  href="gallery.html">Demandes émises</a></li>
                                <li><a  href="todo_list.html">Congés acceptés</a></li>
                            </ul>
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
                        <div class="col-lg-10 col-lg-offset-1 main-chart">

                            <!-- CALENDAR-->
                            <div id="calendar" class="mb col-sm-10 col-sm-offset-1">
                                <div class="panel green-panel no-margin">
                                    <div class="panel-body">
                                        <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                            <div class="arrow"></div>
                                            <h3 class="popover-title" style="disadding: none;"></h3>
                                            <div id="date-popover-content" class="popover-content"></div>
                                        </div>
                                        <div id="my-calendar"></div>
                                    </div>
                                </div>
                            </div><!-- / calendar -->

                            <!-- SERVER STATUS PANELS -->
                            <div class="col-md-4 col-sm-4 mb">
                                <div class="darkblue-panel pn donut-chart">
                                    <div class="darkblue-header">
                                        <h5>CONGES PRIS</h5>
                                    </div>
                                    <canvas id="serverstatus01" height="120" width="120"></canvas>
                                    <script>
                                        var doughnutData = [
                                            {
                                                value: 70,
                                                color: "#ff7f7f"
                                            },
                                            {
                                                value: 30,
                                                color: "#fdfdfd"
                                            }
                                        ];
                                        var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                                    </script>
                                    <p>21 / 30</p>
                                </div> <! --/grey-panel -->
                            </div>


                            <div class="col-md-4 col-sm-4 mb">
                                <!-- REVENUE PANEL -->
                                <div class="darkblue-panel pn">
                                    <div class="darkblue-header">
                                        <h5>HORAIRES PAR MOIS</h5>
                                    </div>
                                    <div class="chart mt">
                                        <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[110,115,120,110,113,115,117,120,110,100,130,115]"></div>
                                    </div>
                                    <p class="mt"><b>1415</b><br/>Heures sur la derniere année</p>
                                </div>
                            </div><!-- /col-md-4 -->

                            <div class="col-md-4 mb">
                                <div class="darkblue-panel pn">
                                    <div class="darkblue-header">
                                        <h5>HEURES EFFECTUEES SEMAINE</h5>
                                    </div>
                                    <canvas id="serverstatus02" height="120" width="120"></canvas>
                                    <script>
                                        var doughnutData = [
                                            {
                                                value: 60,
                                                color: "#7fff7f"
                                            },
                                            {
                                                value: 40,
                                                color: "#fdfdfd"
                                            }
                                        ];
                                        var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
                                    </script>
                                    <p>December 13, 2017</p>
                                </div><! -- /darkblue panel -->
                            </div><!-- /col-md-4 -->

                            <div class="col-md-4 col-md-offset-4 mb">
                                <!-- WHITE PANEL - TOP USER -->
                                <div class="white-panel pn" style="height: 320px;">
                                    <div class="white-header">
                                        <h5 style="color:#444">Chef de chantier</h5>
                                    </div>
                                    <p><img style="background-color:#ddd" src="assets/img/imageProfil2.PNG" class="img-circle" width="80"></p>
                                    <p style="color:#444"><b>Yves Ahomarché</b></p>

                                    <p class="mt">
                                        Monday : 8h - 12h / 14h - 16h<br />
                                        Tuesday : 8h - 12h / 14h - 16h<br />
                                        Wednesday : 8h - 12h / 14h - 16h<br />
                                        Thursday : 8h - 12h / 14h - 16h<br />
                                        Friday : 8h - 12h / 14h - 16h<br />
                                        <input style="color:#444" type="submit" value="Modifier horaires" /><input style="color:#444" type="submit" value="Valider horaires" /><br />

                                    </p>
                                </div>
                            </div><!-- /col-md-4 -->


                        </div><!-- /row -->






                    </div><!-- /col-lg-3 -->
                    </div><! --/row -->
                </section>
            </section>

            <!--main content end-->
            <!--footer start-->
            <footer class="site-footer">
                <div class="text-center">
                    2014 - Alvarez.is
                    <a href="index.html#" class="go-top">
                        <i class="fa fa-angle-up"></i>
                    </a>
                </div>
            </footer>
            <!--footer end-->
        </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/jquery-1.8.3.min.js"></script>
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
            {type: "block", label: "Regular event", }
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


    </body>
</html>

