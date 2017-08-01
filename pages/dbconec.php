
<?php  
/*  
Connect to the local server using Windows Authentication and specify  
the AdventureWorks database as the database in use. To connect using  
SQL Server Authentication, set values for the "UID" and "PWD"  
 attributes in the $connectionInfo parameter. For example:  */
$connectionInfo = array("gameterapia" => $uid, "z12345678:" => $pwd, "Database"=>"gameterapia");  

$serverName = "gameterapia.database.windows.net";  
 
$conn = sqlsrv_connect( $serverName, $connectionInfo);  

if( $conn )  
{  
     echo "Connection established.\n";  
}  
else  
{  
     echo "Connection could not be established.\n";  
     die( print_r( sqlsrv_errors(), true));  
}  

//-----------------------------------------------  
// Perform operations with connection.  
//-----------------------------------------------  

/* Close the connection. */  
sqlsrv_close( $conn);  
?>  