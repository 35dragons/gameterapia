<?php
$serverName = "192.168.100.102, 1433";
$connectionInfo = array( "Database"=>"ATP", "UID"=>"raihan", "PWD"=>"temp123#");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>