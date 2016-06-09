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
$texto=$_POST['mensagem'];


$sql = mysql_query("INSERT INTO mensagens (mensagem) VALUES ('$texto')");

if ($sql) {
  print '<script> alert("Sua mensagem foi enviada com sucesso!");</script>';
}
?>

        <form action="logado.php"  method="post"> 
        <center><input type="submit" value="Voltar" name="perfil" style="
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





    
        


