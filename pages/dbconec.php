<?php 
 
$host = "gameterapia.database.windows.net"; $user = "gamej55terapia"; $password = "z12345678:"; $database = "gameterapia"; 
 
sqlsrv_connect($host,$user,$password) or die("Falha na conexão com o Banco de Dados"); 
 
sqlsrv_select_db($database) or die("Falha ao selecionar o database"); 
 
?>