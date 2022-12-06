<?php
$paginas = [  
                ['pagina'=>'index.php', 'nome_pagina'=>"Serviços"], 
                ['pagina'=>'contato.php', 'nome_pagina'=>"Contato"],
                ['pagina'=>'localizacao.php', 'nome_pagina'=>"Localização"] 
                                                               
           ];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Auto Wash</title>
        <style type="text/css">
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                page color: black;
            }
            
            #menu{
                background-color: blue;
                text-align: center;
            }
           #menu a{ 
                display: inline-block;
                margin:0 10px;
                color: white;
                font-size: 30px;
                padding: 15px; text-decoration: none; 
                text-align: center;
             }
             #servicos { 
                e-block;
               color: white;
               text-align: center;
               font-size: 30px;
             }
             #servicos p{
                font-size: 20px;
             }

            #menu a:hover{ background-color: royalblue }
            
            #box-banner{ display: block; width: 100%; text-align: center; }
            
            /estilo da imagem/
            #banner{ width: 400px; height: 150px; margin: 0 auto; color: black;}
            
            #servicos{ width: 80%; margin: 0 auto; }
            
            /remove bolinha do li/
            ul li{ list-style: black; }

            #page {
                color: black;
            }
        </style>
    </head>
    <body bgcolor= "black" text="white">
        
        <div id="box-banner">
            <img id="banner" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT60Kms5P_fmOnZhdJSI5gVjDOROP__vISv5g&usqp=CAU">
        </div>
        <div id="menu">
            <?php
            //echo $titulo
            foreach ($paginas as $value) {
                echo '<a href="' . $value['pagina'] . '">' . $value['nome_pagina'] . '</a>';
            }
            ?>
        </div> 
        
        <div id="servicos">
            <br>
            <br>
            <br>
            <h2 >LAVAGEM DE CARRO</h2>
            <ul>
            <p>&nbsp;</p>
            <img 
            style="text-align: center;"
            src="lamborguini.jpg"
            width="500x" height= "250x" >
            <ul>
            <p>&nbsp;</p>
                <p>Lavagem simples&nbsp; R$ 20,00</p>
                <p>Lavagem com pretinho R$ 25,00</p>
                <p>Lavagem completa com aspirador 35,00</p>
            </ul>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <h2>LAVAGEM DE MOTO</h2>
            <ul>
            <p>&nbsp;</p>
            <img 
            style="text-align: center;"
            src="moto.jpg"
            width="500x" height= "250x" >
            <ul>
            <p>&nbsp;</p>
                <p>Lavagem simples R$ 15,00</p>
                <p>Lavagem com pretinho R$ 20,00</p>
                <p>lavagem completa R$ 25,00</p>
            </ul>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <h2>LAVAGEM DE CAMINH&Atilde;O</h2>
            <ul>
            <p>&nbsp;</p>
            <img 
            style="text-align: center;"
            src="caminhao.jpg"
            width="500x" height= "250x" >
            <ul>
            <p>&nbsp;</p>
                <p>Lavagem simples R$ 30,00</p>
                <p>Lavagem com pretinho R$ 40,00</p>
                <p>Lavagem completa R$ 50,00</p>
            </ul>
            <p>&nbsp;</p>
        </div>
    </body>
</html>