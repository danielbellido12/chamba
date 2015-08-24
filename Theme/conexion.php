<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - FREE Bootstrap Admin Template</title>

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
      <div id="content" class="container">
        <select name='cluster'>
          <?php
$myServer = "PC-DANIEL\SQLEXPRESS";
/*$myUser = "dbellidov";
$myPass = "ColaCoca14";
$myDB = "Chamba";*/
$connectionInfo = array("Database"=>"Chamba", "UID"=>"dbellidov", "PWD"=>"ColaCoca14");
$conn = sqlsrv_connect($myServer,$connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));



}

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


<select name='tramo'>
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

<select name='mes'>
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

<select name='negocio'>
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

<select name='cerrada'>
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
  </body>

