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

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</script>
        <title>Drinks</title>
      <link rel="stylesheet" type="text/css" href="style.css"/> 

</head>
<body style="background-image: url(Imagens/fundo.jpg);">
      <p>
        <a target="_blank" href="https://www.facebook.com/Drinks-270784336645065"><img src="Imagens/face.png" width="35" height="35" alt="facebook do Drinks"></a>                           
        <a target="_blank" href="https://twitter.com/_Drinks_?lang=pt-br"><img src="Imagens/twitter.png" width="35" height="35" alt="twitter Drinks"></a>
      </p>
<img id="drinks" style="padding-top: 0px;margin-left: 150px;" 
             width="450" height="265" src="Imagens/drinks11.png" alt="drinks1" title="Drinks">
           
        <form action="conf.php" style="margin-top: -300px;">
            <input type="submit" value="Configurações" name="alt_conta" style="
                   border-style: outset;
                   padding: 9px 21px;
                   border-radius: 15px;
                   color: #EA044D;
                   background-color: transparent;
                   font-weight: 900;
                   font-size: 18px;
                   margin-left: 1020px;
                   border-color: #2CB1FE;
                   ">

        </form> 
        <form action="favoritos.php" style="margin-top: -60px;">
            <input type="submit" value="Favoritos" name="favoritos" style="
                   border-style: outset;
                   padding: 9px 21px;
                   border-radius: 15px;
                   color: #EA044D;
                   background-color: transparent;
                   font-weight: 900;
                   font-size: 18px;
                   margin-left: 870px;
                   border-color: #2CB1FE;
                   ">
        </form>

            <form action="logout.php" style="margin-top: -58px;">
            <input type="submit" value="Sair" name="logout_conta" style="
                   border-style: outset;
                   padding: 9px 21px;
                   border-radius: 15px;
                   color: #EA044D;
                   background-color: transparent;
                   font-weight: 900;
                   font-size: 18px;
                   margin-left: 1220px;
                   border-color: #2CB1FE;
                   ">
                   </form>
        


            <form action="mensagem.php" style="margin-top: 560px;">
            <input type="submit" value="Contato DRINKS" name="escr_msg" style="
                   border-style: outset;
                   padding: 9px 17px;
                   border-radius: 15px;
                   color: #EA044D;
                   background-color: transparent;
                   font-weight: 900;
                   font-size: 18px;
                   margin-left: 1100px;
                   margin-top: -50px;
                   border-color: #2CB1FE;
                   ">
        </form> 

        <select name="menu" style="
                   padding: 9px 16px;
                   border-radius: 15px;
                   color: #2CB1FE;
                   background-color: transparent;
                   font-weight: 900;
                   font-size: 18px;
                   border-color: #FF0266;
                   margin-top: -350px;
                   margin-left: 70px;
                   ">
            <option>Receitas </option>
          

            <option>Bebidas Caseiras</option>
        </select>
<?php
$SQL = " SELECT pontos FROM registro WHERE id = 1";
$RS = mysql_query($SQL);
$RF = mysql_fetch_array($RS);
?>


  <p style="margin-top: -60px; margin-left: 10px"> Avalie nossa ferramenta, sua opinião é muito importante para nós:

<div title="Average Rating" class="rating" style="margin-left: 10px">
    <div class="star">
    <a id="1" href="<?php $ponto="1"; $SQL = "INSERT INTO registro (pontos) VALUES ('$ponto')";
      ?>">1</a>
  </div>
  <div class="star">
    <a id="2" href="<?php  $ponto="2";  $SQL = "INSERT INTO registro (pontos) VALUES ('$ponto')";
     ?>">2</a>
  </div>
  <div class="star">
    <a id="3" href="<?php  $ponto="3";  $SQL = "INSERT INTO registro (pontos) VALUES ('$ponto')";
     ?>" >3</a>
  </div>
  <div class="star">
    <a id="4" href="<?php $ponto="4";  $SQL = "INSERT INTO registro (pontos) VALUES ('$ponto')";
     ?>" title="Give it 4/5">4</a>
  </div>
  <div class="star">
    <a id="5" href="<?php  $ponto="5";  $SQL = "INSERT INTO registro (pontos) VALUES ('$ponto')";
    ?>" title="Give it 5/5">5</a>
  </div>
  </div>
  <?php 
    mysql_query($SQL);
   ?>
    </body>
</html>

