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
</head>
<body style="background-image: url(Imagens/fundo.jpg);">
<img id="drinks" style="padding-top: 0px;margin-left: 150px;" 
             width="450" height="265" src="Imagens/drinks11.png" alt="drinks1" title="Drinks">
 
<?php
	session_start();
	session_destroy();

?>

<?php

$new_login = $_POST['new_login'];
$new_email = $_POST['new_email'];
$new_senha = $_POST['new_senha'];
$new_idade = $_POST['new_idade'];
$id = $_POST['id'];

$altera = mysql_query("UPDATE usuarios SET nome = '$new_login', email = '$new_email', idade = '$new_idade', senha = '$new_senha' WHERE id = $id");

if(mysql_affected_rows() > 0){
	print '<script> alert("Conta alterada com sucesso");</script>';
}
else{
	print '<script> alert("Erro ao alterar conta");</script>';
}
?>   
				<form action="login.php" method="post">
				<center><input type="submit" value="Fazer Login" name="perfil" style="
                   padding: 9px 16px;
                   border-radius: 15px;
                   color: #2CB1FE;
                   background-color: transparent;
                   font-weight: 900;
                   font-size: 18px;
                   border-color: #FF0266;
                   ">
         </center></form>
    </body>
</html>