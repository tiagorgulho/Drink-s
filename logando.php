<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Drinks</title>
	<script type="text/javascript">
		function loginsuccessfully(){
			setTimeout("window.location='logado.php'", 5000);
		}
		function loginfailed(){
			setTimeout("window.location = 'login.php'", 5000);
		}
	</script>
</head>

<body style="background-image: url(Imagens/fundo.jpg);">
<img id="drinks" style="padding-top: 0px;margin-left: 150px;" 
             width="450" height="265" src="Imagens/drinks11.png" alt="drinks1" title="Drinks">


<?php

	$login = $_POST['login'];
	$senha = $_POST['senha'];




$sql = mysql_query("SELECT * FROM usuarios WHERE nome = '$login' and senha = '$senha'") or die (mysql_error()) ;

$row = mysql_num_rows($sql);
if($row > 0){
	session_start();
	$_SESSION['nome'] = $_POST['login'];
	$_SESSION['senha'] = $_POST['senha'];
	print '<script> alert("Você foi logado com sucesso! Aguarde um instante.");</script>';
	echo "<script>loginsuccessfully()</script>";
}
else{
	print '<script> alert("Nome de usuário ou senha inválidos! Aguarde um instante para tentar novamente.");</script>';
	echo"<script>loginfailed()</script>";
}

?>

</body>
</html>

