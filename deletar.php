<?php
  session_start();
  if(!isset($_SESSION["nome"]) || !isset($_SESSION["senha"])){
      header("Location: login.php");
      exit;
  }
 
?>

<html>
<head>
	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Drinks</title>
</head>
<body style="background-image: url(Imagens/fundo.jpg);">
<img id="drinks" style="padding-top: 0px;margin-left: 150px;" 
             width="450" height="265" src="Imagens/drinks11.png" alt="drinks1" title="Drinks">
             <br><center>Realmente deseja deletar essa conta?</center></br>
        <form action="deletando.php" method="post">
            <center><input type="submit" value="SIM" name="alterar_conta" style="
                   border-style: outset;
                   padding: 9px 21px;
                   border-radius: 15px;
                   color: #2CB1FE;
                   background-color: transparent;
                   font-weight: 900;
                   font-size: 18px;
                   border-color: #2CB1FE;
                   ">
            </center>
        </form><br><br>
        
        <form action="logado.php" method="post">
           <center><input type="submit" value="NÃO" name="deletar_conta" style="
                   border-style: outset;
                   padding: 9px 21px;
                   border-radius: 15px;
                   color: #2CB1FE;
                   background-color: transparent;
                   font-weight: 900;
                   font-size: 18px;
                   border-color: #2CB1FE;
                   ">
            </center> 
        </form>
     
        <form action="favoritos.php" style="margin-top: -426px;">
            <input type="submit" value="Favoritos" name="favoritos" style="
                   border-style: outset;
                   padding: 9px 21px;
                   border-radius: 15px;
                   color: #EA044D;
                   background-color: transparent;
                   font-weight: 900;
                   font-size: 18px;
                   margin-left: 1060px;
                   border-color: #2CB1FE;
                   ">
        </form>

            <form action="logout.php" style="margin-top: -65px;">
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
        


            <form action="mensagem.php" style="margin-top: 550px;">
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
       
        
        
    </body>
</html>