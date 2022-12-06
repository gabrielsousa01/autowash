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

            .localizacao{
                font-size: 30px;
                color: white;
                text-align: center;
                padding: 50px;
            
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
            <div class= "localizacao">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7309.300769870389!2d-46.71561856532123!3d-23.65268849903983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce51aa5f2eca95%3A0xfd9e09aabab3301b!2sR.%20Amador%20Bueno%2C%20389%20-%20Santo%20Amaro%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2004752-005!5e0!3m2!1spt-BR!2sbr!4v1669945421080!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> <br>
                
            <br>

            <p>Endereço: R. Amador Bueno, 389/491 - Santo Amaro, São Paulo - SP, 04752-900</p> 
              
            <br>
                
            </div>

            </body>
            
</html>