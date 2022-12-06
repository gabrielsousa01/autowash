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
            }

            .contato{
                font-size: 30px;
                color: white;
                text-align: center;
                padding: 90px;
            
            }
            #menu a:hover{ background-color: royalblue }
            
            
            #box-banner{ display: block; width: 100%; text-align: center; }
            
            /estilo da imagem/
            #banner{ width: 400px; height: 150px; margin: 0 auto; color: black;}
            
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
            <div class= "contato">
                
                <p>Tel: (11) 99341-2829</p>
                <p>Tel: (11) 95834-5227</p>
                <p>Tel: (11) 98652-8063</p> 
                <br>
                 <E-mail>
                    gabriel.sousa482@uni9.edu.br <br>
                    brunolima57hp12@uni9.edu.br <br>
                    joao.cs@uni9.edu.br

                 </E-mail>  
                
            </div>

            </body>
            
</html>
        