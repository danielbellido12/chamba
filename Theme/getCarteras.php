<?php
$myServer = "PC-DANIEL\SQLEXPRESS";
/*$myUser = "dbellidov";
$myPass = "ColaCoca14";
$myDB = "Chamba";*/
$connectionInfo = array("Database"=>"Chamba", "UID"=>"dbellidov", "PWD"=>"ColaCoca14");
$conn = sqlsrv_connect($myServer,$connectionInfo);

if( $conn ) {
     echo "";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
 }


//obtenemos los valores del formulario

		$cluster = $_GET["cluster"];
		$tramo= $_GET["tramo"];
		$mes = $_GET["mes"];
		$negocio = $_GET["negocio"];
		$cerrada = $_GET["cerrada"];
		
		$sql = "SELECT distinct gestion from metricas WHERE cluster like '".$cluster."' and tramo like '".$tramo."' and negocio like '".$negocio."' and mes like '".$mes."' and cerrada like '".$cerrada."'";
		//echo $sql;


		$stmt = sqlsrv_query( $conn, $sql);
		if( $stmt === false ) {
		     die( print_r( sqlsrv_errors(), true));
		}


		echo "<div><table class='table'>
				<thead>
					<tr>
						<th class='text-center'>Carteras</th>
					</tr>
				</thead>
				<tbody>";

		    while ( $row = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC))
		    {
		      echo "<tr>";
		      echo "<td class='text-center'> <button type='submit' class='btn btn-info'>" .$row['gestion']."</button></td>";
		      echo "</tr>";
		    }

		echo "</div></tbody>
			</table>";
?>