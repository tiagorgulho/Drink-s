<?php
  session_start();
  if(!isset($_SESSION["nome"]) || !isset($_SESSION["senha"])){
      header("Location: login.php");
      exit;
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


       <form action="conf.php" style="margin-top: -263px;">
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
        <form action="favoritos.php" style="margin-top: -48px;">
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

            <form action="logout.php" style="margin-top: -48px;">
            <input type="submit" value="Sair" name="logout_conta"  style="
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
        
        <form action="enviando.php" name="msg" method="post">
      	<div>
            <textarea name="mensagem" rows="6" cols="30" id="DrinksMensagem" required="required" style="
                   border-style: outset;
                   padding: 20px 25px;
                   border-radius: 20px;
                   color: #2CB1FE;
                   background-color: transparent;
                   font-weight: bold;
                   font-size: 18px;
                   margin-left: 200px;
                   margin-top: 200px;
                   ">Digite aqui sua mensagem aos desenvolvedores
            </textarea>
       </div>
            
      
            <input type="submit" value="Enviar" name="enviar_msg" style="
                   border-style: outset;
                   padding: 5px 155px;
                   border-radius: 15px;
                   color: #EA044D;
                   background-color: transparent;
                   font-weight: 900;
                   font-size: 18px;
                   margin-left: 200px;
                   border-color: #2CB1FE;
                   ">       
        </form>


    </body>
</html>
