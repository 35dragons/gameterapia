<!DOCTYPE html>
<!--
Template Name: Devenna
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Game Terapia</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html">3D Virtual Care</a></h1>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li><strong>Gabriel Batista</strong><br>
          +55 (37) 99951-2428</li>
        
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/game.png');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article class="introtxt">
		<div class="input-group">
			<label for="usr">Nome:</label>
			<input type="text" class="form-control" aria-describedby="basic-addon1" id="usr" name="nome">
		</div>
		<div class="input-group">
			<label for="usr">Sobrenome:</label>
			<input type="text" class="form-control" aria-describedby="basic-addon1" id="usr" name="sobrenome">
		</div>
		<div class="input-group">
			<label for="usr">Email:</label>
			<input type="text" class="form-control" aria-describedby="basic-addon1" id="usr" name="email">
		</div>
		<div class="input-group">
			<label for="pwd">Senha:</label>
			<input type="password" class="form-control" aria-describedby="basic-addon1" id="pwd" name="senha">
		</div>
		
		<footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" name="acao" href="../home.html">Entrar</a></li>
        </ul>
      </footer>
    </article>
   </div>
</div>
<?php   
	if(isset($_POST['acao']))   
	{     
	//conexão com o banco de dados     
	include("bdconec.php");          
	//recebendo os valores digitados pelo usuário     
	$nome = $_POST['nome']; 
	$sobrenome = $_POST['sobrenome'];     
	$email = $_POST['email'];     
	$senha = $_POST['senha'];              
	//imprimindo o que foi digitado     
	echo "<b>Nome:</b> $nome";  
	echo "<b>Sobrenome:</b> $nome";   	
	echo "<br /><b>E-mail:</b> $email";     
	echo "<br /><b>Senha:</b> **";  
	//criando o comando sql a ser executado     
	$sql = "INSERT INTO Medico(ID,Nome,Sobrenome,Email,Senha) VALUES (NULL,'$nome','$sobrenome','$email', '$senha')"; 
	//executando o comando     
	$resultado = mysql_query($sql);     
	//verificando se o comando foi executado com sucesso     
	if($resultado)       
		echo "Dados inseridos com sucesso.";     
	else       
		echo "Falha ao inserir ".mysql_error();       
	}    
?>
<div class="wrapper bgded overlay" style="background-image:url('../images/demo/redwhite.jpg');">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
    </div>
    
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>