<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- Mis estilos personalizados -->
    <link href="assets/css/estilos.css" rel="stylesheet">


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
            <a href="index.php" class="logo"><b>DASHGUM FREE</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <div class="task-info">
                                        <div class="desc">DashGum Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.php#">
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
                                <a href="index.php#">
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
                                <a href="index.php#">
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
                                <a href="index.php#">
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
                                <a href="index.php#">See all messages</a>
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
              
                  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Tu nombre</h5>
                    
                  <li class="mt">
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Principal</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Efectividades</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="general.html">Fija</a></li>
                          <li><a  href="buttons.html">Movil</a></li>
                          <li><a  href="panels.html">Cable</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Metricas</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="calendar.php">Call</a></li>
                          <li><a  href="gallery.html">Campo</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Cuartiles</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="#">ATC</a></li>
                          <li><a  href="#">ATENTO</a></li>
                          <li><a  href="#">AVAL</a></li>
                          <li><a  href="#">CLASA</a></li>
                          <li><a  href="#">CONTACT</a></li>
                          <li><a  href="#">HDEC</a></li>
                          <li><a  href="#">MTG</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>SIGS</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Otros 1</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Otros 2</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end
<?php
/*$myServer = "PC-DANIEL\SQLEXPRESS";
$myUser = "dbellidov";
$myPass = "ColaCoca14";
$myDB = "Chamba";
$connectionInfo = array("Database"=>"Chamba", "UID"=>"dbellidov", "PWD"=>"ColaCoca14");
$conn = sqlsrv_connect($myServer,$connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));



}

$sql = "SELECT distinct (agencia) FROM metricas_operaciones order by 1";
//$params = array(1, "some data");

$stmt = sqlsrv_query( $conn, $sql);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}*/
?>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->

      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Métricas de Call</h3>

                      <div id="content" class="container">
            <!--<table class="table-bordered">
            <thead>
              <tr>
                <th>Agencia</th>
              </tr>
            </thead>
            <tbody>-->
            <!--<?php /*while( $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC) ) {?>
            <tr>
                <td> <php echo $row['agencia']; ?> </td>
            </tr>
          <?php }*/?>
            </tbody>
            </table> -->
                    
          <?php
$myServer = "PC-DANIEL\SQLEXPRESS";
/*$myUser = "dbellidov";
$myPass = "ColaCoca14";
$myDB = "Chamba";*/
$connectionInfo = array("Database"=>"Chamba", "UID"=>"dbellidov", "PWD"=>"ColaCoca14");
$conn = sqlsrv_connect($myServer,$connectionInfo);

if( $conn ) {
     echo "<h4 class='text-center'>Elige la cartera con los siguientes filtros:</h2>";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));



}
?>
<form class="form-horizontal" role="form" id="formulario">
  <div class="form-group">
    <select class="form-control nonfluid center-block" onchange="cargarCarteras()" name='cluster' id="sCluster">
    <?php
    $sql = "SELECT distinct substring(A.cartera,1,3) as cluster
       from metricas_operaciones A inner join EFECTIVIDADES B
       on A.cartera=B.cartera
       where (substring(A.cartera,6,3) IN ('RPP','NPP','RES') or substring(A.cartera,1,3) IN ('FIN','APC')) and not substring(A.cartera,1,8)='AN0T1NPP'
       and not a.cartera like '%_AD%' and not a.cartera like '%_ESP%' and not (substring(A.cartera,1,3) in ('asp','cxr','imo','plt','an0','bc0','mm0')
       and A.negocio='MOVIL') and charindex('201',a.cartera) > 0 and substring(a.cartera,charindex('201',a.cartera),10) >= '2015-01-01'
       and not substring(a.cartera,1,3) in ('CBA') and (not (substring(a.cartera,4,2) in ('T3') and a.negocio in ('CABLE')))
       ORDER BY cluster";

    //$params = array(1, "some data");
    $stmt = sqlsrv_query( $conn, $sql);
    if( $stmt === false ) {
         die( print_r( sqlsrv_errors(), true));
    }
      //foreach ($stmt as $row) {
        //echo '<option value="'.$row['tramo'].'">'.$row['tramo'].'</option>';

        while ( $row = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC))
        {
          echo '<option value="'.$row['cluster'].'">'.$row['cluster'].'</option>';
        }
    ?>
      </select>
    </label>
  </div>

<div class="form-group">
<select class="form-control nonfluid center-block" onchange="cargarCarteras()" name='tramo' id="sTramo">
          <?php

$sql = "SELECT distinct substring(A.cartera,4,2) as tramo
   from metricas_operaciones A inner join EFECTIVIDADES B
   on A.cartera=B.cartera
   where (substring(A.cartera,6,3) IN ('RPP','NPP','RES') or substring(A.cartera,1,3) IN ('FIN','APC')) and not substring(A.cartera,1,8)='AN0T1NPP'
   and not a.cartera like '%_AD%' and not a.cartera like '%_ESP%' and not (substring(A.cartera,1,3) in ('asp','cxr','imo','plt','an0','bc0','mm0')
   and A.negocio='MOVIL') and charindex('201',a.cartera) > 0 and substring(a.cartera,charindex('201',a.cartera),10) >= '2015-01-01'
   and not substring(a.cartera,1,3) in ('CBA') and (not (substring(a.cartera,4,2) in ('T3') and a.negocio in ('CABLE')))
   ORDER BY tramo";

//$params = array(1, "some data");
$stmt = sqlsrv_query( $conn, $sql);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}
  //foreach ($stmt as $row) {
    //echo '<option value="'.$row['tramo'].'">'.$row['tramo'].'</option>';

    while ( $row = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC))
    {
      echo '<option value="'.$row['tramo'].'">'.$row['tramo'].'</option>';
    }
?>
      </select>
    </div>
<div class="form-group">
<select class="form-control nonfluid center-block" onchange="cargarCarteras()" name='mes' id="sMes">
          <?php

$sql = "SELECT distinct substring(a.cartera,charindex('201',a.cartera,10),7) as mes
   from metricas_operaciones A inner join EFECTIVIDADES B
   on A.cartera=B.cartera
   where (substring(A.cartera,6,3) IN ('RPP','NPP','RES') or substring(A.cartera,1,3) IN ('FIN','APC')) and not substring(A.cartera,1,8)='AN0T1NPP'
   and not a.cartera like '%_AD%' and not a.cartera like '%_ESP%' and not (substring(A.cartera,1,3) in ('asp','cxr','imo','plt','an0','bc0','mm0')
   and A.negocio='MOVIL') and charindex('201',a.cartera) > 0 and substring(a.cartera,charindex('201',a.cartera),10) >= '2015-01-01'
   and not substring(a.cartera,1,3) in ('CBA') and (not (substring(a.cartera,4,2) in ('T3') and a.negocio in ('CABLE')))
   ORDER BY mes";

//$params = array(1, "some data");
$stmt = sqlsrv_query( $conn, $sql);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}
  //foreach ($stmt as $row) {
    //echo '<option value="'.$row['tramo'].'">'.$row['tramo'].'</option>';

    while ( $row = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC))
    {
      echo '<option value="'.$row['mes'].'">'.$row['mes'].'</option>';
    }
?>
      </select>
    </div>

<div class="form-group">
<select class="form-control nonfluid center-block" onchange="cargarCarteras()" name='negocio' id="sNegocio">
          <?php


$sql = "SELECT distinct RTRIM(LTRIM(A.negocio)) as negocio
   from metricas_operaciones A inner join EFECTIVIDADES B
   on A.cartera=B.cartera
   where (substring(A.cartera,6,3) IN ('RPP','NPP','RES') or substring(A.cartera,1,3) IN ('FIN','APC')) and not substring(A.cartera,1,8)='AN0T1NPP'
   and not a.cartera like '%_AD%' and not a.cartera like '%_ESP%' and not (substring(A.cartera,1,3) in ('asp','cxr','imo','plt','an0','bc0','mm0')
   and A.negocio='MOVIL') and charindex('201',a.cartera) > 0 and substring(a.cartera,charindex('201',a.cartera),10) >= '2015-01-01'
   and not substring(a.cartera,1,3) in ('CBA') and (not (substring(a.cartera,4,2) in ('T3') and a.negocio in ('CABLE')))
   ORDER BY negocio";

//$params = array(1, "some data");
$stmt = sqlsrv_query( $conn, $sql);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}
  //foreach ($stmt as $row) {
    //echo '<option value="'.$row['tramo'].'">'.$row['tramo'].'</option>';

    while ( $row = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC))
    {
      echo '<option value="'.$row['negocio'].'">'.$row['negocio'].'</option>';
    }
?>
      </select>
    </div>

<div class="form-group">
<select class="form-control nonfluid center-block" onchange="cargarCarteras()" name='cerrada' id="sCerrada">
          <?php

$sql = "SELECT distinct iif(getDate() <= b.fin_ges, 'NO', 'SI') As Cerrada
   from metricas_operaciones A inner join EFECTIVIDADES B
   on A.cartera=B.cartera
   where (substring(A.cartera,6,3) IN ('RPP','NPP','RES') or substring(A.cartera,1,3) IN ('FIN','APC')) and not substring(A.cartera,1,8)='AN0T1NPP'
   and not a.cartera like '%_AD%' and not a.cartera like '%_ESP%' and not (substring(A.cartera,1,3) in ('asp','cxr','imo','plt','an0','bc0','mm0')
   and A.negocio='MOVIL') and charindex('201',a.cartera) > 0 and substring(a.cartera,charindex('201',a.cartera),10) >= '2015-01-01'
   and not substring(a.cartera,1,3) in ('CBA') and (not (substring(a.cartera,4,2) in ('T3') and a.negocio in ('CABLE')))
   ORDER BY Cerrada";

//$params = array(1, "some data");
$stmt = sqlsrv_query( $conn, $sql);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}
  //foreach ($stmt as $row) {
    //echo '<option value="'.$row['tramo'].'">'.$row['tramo'].'</option>';

    while ( $row = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC))
    {
      echo '<option value="'.$row['Cerrada'].'">'.$row['Cerrada'].'</option>';
    }
?>
      </select>
    </div>
    
        
        <div class="form-group text-center">
          <button type="button" class="btn btn-primary btn-lg" id="btnCarteras" onClick="cargarCarteras()">Obtener carteras</button>
        </div>
        </form>
      </div>

      <div class="container">
        <div id="display" class="row">
          
        </div>
      </div>

      <script>
          function cargarCarteras()
          {
            /*var valorCluster = $("#sCluster").val();
            var valorTramo = $("#sTramo").val();
            var valorMes = $("#sMes").val();
            var valorNegocio = $("#sNegocio").val();
            var valorCerrada = $("#sCerrada").val();

            console.log(valorCluster,valorTramo,valorMes,valorNegocio,valorCerrada);
            $.ajax({
                type: "GET",
                url: "getCarteras.php",
                data: {'cluster':'mas','tramo':'t2','mes':'2015-06','negocio':'fija','cerrada':'si'},
            }).done(function(data){
              $("#display").html(data);
            })*/

          var form = $('#formulario');

          $(form).submit(function(event) {
              // Stop the browser from submitting the form.
              event.preventDefault();

              // TODO
               });  
              var formData = $(form).serialize();


              $.ajax({
                    type: 'GET',
                    url: 'getCarteras.php',
                    data: formData
                    }).done(function(data){
              $("#display").html(data);
            })
          }

            
      </script>
              <!-- page end-->
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2015 - Daniel San
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="assets/js/fullcalendar/fullcalendar.min.js"></script>    
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
	<script src="assets/js/calendar-conf-events.js"></script>    
  
  <script>
      //custom select box

      $(function(){
          $("select.styled").customSelect();
      });

  </script>

  </body>
</html>
