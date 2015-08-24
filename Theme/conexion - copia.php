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
        <select name='tramo'>
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

$sql = "SELECT distinct LTRIM(RTRIM(A.cartera)) AS gestion,substring(A.cartera,1,3) as cluster, substring(A.cartera,4,2) as tramo,
        RTRIM(A.negocio) as negocio,A.agencia, iif(getDate() <= b.fin_ges, 'NO', 'SI') As Cerrada, substring(a.cartera,charindex('201',a.cartera,10),7) as mes, 
      iif(substring(a.cartera,6,3) = 'RPP','Residencial RPP',iif(substring(a.cartera,6,3) = 'RES', 'Residencial RES', iif(substring(a.cartera,6,3) = 'NPP',
   'Negocio NPP', iif(substring(a.cartera,6,3) = 'SER', 'Sertel', 'RNP')))) as segmento
   from metricas_operaciones A inner join EFECTIVIDADES B
   on A.cartera=B.cartera
   where (substring(A.cartera,6,3) IN ('RPP','NPP','RES') or substring(A.cartera,1,3) IN ('FIN','APC')) and not substring(A.cartera,1,8)='AN0T1NPP'
   and not a.cartera like '%_AD%' and not a.cartera like '%_ESP%' and not (substring(A.cartera,1,3) in ('asp','cxr','imo','plt','an0','bc0','mm0')
   and A.negocio='MOVIL') and charindex('201',a.cartera) > 0 and substring(a.cartera,charindex('201',a.cartera),10) >= '2015-01-01'
   and not substring(a.cartera,1,3) in ('CBA') and (not (substring(a.cartera,4,2) in ('T3') and a.negocio in ('CABLE')))
   GROUP BY LTRIM(RTRIM(A.cartera)), substring(A.cartera,1,3), substring(A.cartera,4,2), substring(a.cartera,charindex('201',a.cartera,10),7),
   iif(substring(a.cartera,6,3) = 'RPP','Residencial RPP',iif(substring(a.cartera,6,3) = 'RES', 'Residencial RES',
   iif(substring(a.cartera,6,3) = 'NPP','Negocio NPP',iif(substring(a.cartera,6,3) = 'SER', 'Sertel', 'RNP')))), RTRIM(A.negocio) ,A.agencia, b.fin_ges";

//$params = array(1, "some data");
$stmt = sqlsrv_query( $conn, $sql);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}
  //foreach ($stmt as $row) {
    //echo '<option value="'.$row['tramo'].'">'.$row['tramo'].'</option>';

    while ( $row = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC))
    {
      echo '<option value="'.$row['gestion'].'">'.$row['gestion'].'</option>';
    }
?>
      </select>
    </div>
  </body>

