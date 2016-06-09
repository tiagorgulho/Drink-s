<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>
<?php
  session_start();
  if(!isset($_SESSION["nome"]) || !isset($_SESSION["senha"])){
      header("Location: login.php");
      exit;
  }
 
?>

<?php
$busca_user = mysql_query("SELECT id, nome, email, idade, senha FROM usuarios WHERE nome = '$_SESSION[nome]'");
if(mysql_num_rows($busca_user) >= 1){
	$dado = mysql_fetch_array($busca_user);

}

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

             <form action="alterando.php" method="post">
                <div style="font-weight: 900; font-size: 18px; margin-left: 195px; color: #8A0460">
                    Alterar Usuário: <input type="text" name="new_login" value="<?php print $dado['nome'] ?>" size="8" style="
                   border-style: double;
                   padding: 5px 100px;
                   border-radius: 15px;
                   color: #8A0460;
                   background-color: transparent;
                   font-weight: 600;
                   font-size: 18px;
                   margin-left: 8px;
                   ">
                </div>

                <div style="font-weight: 900; font-size: 18px; margin-left: 195px; color: #8A0460">
                    Alterar Email: <input type="text" name="new_email" value="    <?php print $dado['email'] ?>" size="30" style="
                   border-style: double;
                   padding: 5px 0px;
                   border-radius: 15px;
                   color: #8A0460;
                   background-color: transparent;
                   font-weight: 600;
                   font-size: 18px;
                   margin-left: 8px;
                   margin-top: 15px;
                   ">
                </div>

                <div style="font-weight: 900; font-size: 18px; margin-left: 195px; color: #8A0460">
                    Alterar Idade: <input type="text" name="new_idade" value="<?php print $dado['idade'] ?>" size="3" style="
                   border-style: double;
                   padding: 5px 132px;
                   border-radius: 15px;
                   color: #8A0460;
                   background-color: transparent;
                   font-weight: 600;
                   font-size: 18px;
                   margin-left: 8px;
                   margin-top: 15px;
                   ">
                </div>

                <div style="font-weight: 900; font-size: 18px; margin-left: 195px; color: #8A0460">
                    Alterar Senha: <input type="password" name="new_senha" value="<?php print $dado['senha'] ?>" size="8" style="
                   border-style: double;
                   padding: 5px 105px;
                   border-radius: 15px;
                   color: #8A0460;
                   background-color: transparent;
                   font-weight: 600;
                   font-size: 18px;
                   margin-left: 8px;
                   margin-top: 15px;
                   ">
                </div>

				          <input type="hidden" name="id" value="<?php print $dado['id'] ?>"><br>

				          <input type="submit" value="Atualizar" style="
                        border-style: outset;
                        padding: 9px 21px;
                        border-radius: 15px;
                        color: #EA044D;
                        background-color: transparent;
                        font-weight: 900;
                        font-size: 18px;
                        margin-left: 318px;
                        margin-top: 15px;
                        border-color: #2CB1FE">

			</form>
    </body>
</html>