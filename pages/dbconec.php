<?php
$serverName = "gameterapia.database.windows.net";
$connectionInfo = array( "UID"=>"gameterapia", "PWD"=>" z12345678:");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>