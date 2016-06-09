
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Cadastrar</title>
    </head>
    
   <body style="background-image: url(Imagens/fundo.jpg);">
        <img id="drinks" style="padding-top: 0px;margin-left: 150px;" 
             width="450" height="265" src="Imagens/drinks11.png" alt="drinks1" title="Drinks">
     <form action="cadastrado.php" name="signup" method="post" >
        <div style="
             font-weight: 900;
             font-size: 18px;
             margin-left: 195px;
             color: #8A0460;
             ">
            Nome do usuário: 
            <input type="text" name="nome" value="" size="8" style="
                   border-style: double;
                   padding: 5px 107px;
                   border-radius: 15px;
                   color: #8A0460;
                   background-color: transparent;
                   font-weight: 600;
                   font-size: 18px;
                   margin-left: 8px;
                   ">
        </div>
        
     <div style="
             font-weight: 900;
             font-size: 18px;
             margin-left: 195px;
             color: #8A0460;
             ">
         Email:
         <input type="text" name="email" value="" size="30" style="
                   border-style: double;
                   padding: 5px 47px;
                   border-radius: 15px;
                   color: #8A0460;
                   background-color: transparent;
                   font-weight: 600;
                   font-size: 18px;
                   margin-left: 8px;
                   margin-top: 15px;
                   ">
     </div>
        
        <div style="
             font-weight: 900;
             font-size: 18px;
             margin-left: 195px;
             color: #8A0460;
             ">
            Senha:
            <input type="password" name="senha" value="" size="8" style="
                   border-style: double;
                   padding: 5px 154px;
                   border-radius: 15px;
                   color: #8A0460;
                   background-color: transparent;
                   font-weight: 600;
                   font-size: 18px;
                   margin-left: 8px;
                   margin-top: 15px;
                   ">
        </div>
               
         <div style="
             font-weight: 900;
             font-size: 18px;
             margin-left: 195px;
             color: #8A0460;
             ">
         Idade:
         <input type="text" name="idade" value="" size="3" style="
                   border-style: double;
                   padding: 5px 107px;
                   border-radius: 15px;
                   color: #8A0460;
                   background-color: transparent;
                   font-weight: 600;
                   font-size: 18px;
                   margin-left: 8px;
                   margin-top: 15px;
                   ">
     </div> 
        
         <input type="submit" value="Cadastrar" name="cadastrar" style="
               border-style: outset;
               padding: 9px 21px;
               border-radius: 15px;
               color: #EA044D;
               background-color: transparent;
               font-weight: 900;
               font-size: 18px;
               margin-left: 318px;
               margin-top: 15px;
               border-color: #2CB1FE;
               ">
        </form>

    </body>
</html>
