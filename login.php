

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login</title>
    </head>

    <body style="background-image: url(Imagens/fundo.jpg);">
        <img id="drinks" style="padding-top: 0px;margin-left: 150px;" 
             width="450" height="265" src="Imagens/drinks11.png" alt="drinks1" title="Drinks">
        <form action="logando.php" name="signup1" method="post">
            <table border="0" style="margin-left: 195px">
                
                <tbody>
                    <tr>
                        <td style="font-weight: 900;
                                font-size: 18px;
                                color: #8A0460;">Usuário: </td>
                        <td><input type="text" name="login" value="" size="8" style="
                   border-style: double;
                   padding: 5px 77px;
                   border-radius: 15px;
                   color: #8A0460;
                   background-color: transparent;
                   font-weight: 600;
                   font-size: 18px;
                   margin-left: -170px;
                   "></td>
                    </tr>
                    
                    <tr style="font-weight: 900;
                                font-size: 18px;
                                color: #8A0460;">
                        <td id="senha">Senha: </td>
                        <td> <input type="password" name="senha" value="" size="8" style="
                   border-style: double;
                   padding: 5px 85px;
                   border-radius: 15px;
                   color: #8A0460;
                   background-color: transparent;
                   font-weight: 600;
                   font-size: 18px;
                   margin-left: -185px;
                   margin-top: 3px;
                   ">
         
                                     
                        </td>
                    </tr>
                    
                    <tr>
               <td><input type="submit" value="ENTRAR" name="entrar" style="
               border-style: outset;
               padding: 9px 21px;
               border-radius: 15px;
               color: #EA044D;
               background-color: transparent;
               font-weight: 900;
               font-size: 18px;
               margin-left: 125px;
               margin-top: 15px;
               border-color: #2CB1FE;
               "> </td>  
                    </tr>
                </tbody>
            </table>
        </form>        
   </body>
</html>
