<?php
include("marmitas.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <title>Restaurante</title>
    </head>   
    <body>
        <div class="all">
            <header>
                <div class="cabecalho">
                    <img src="img/logo2.png" alt="logo" width="200px">
                    
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Saiba Mais</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>
            </header>
            <div class="cabecalho2">
                <img src="img/background1.jpg" alt="background" title="nosso local" width="100%">
                <article class="textback">      
                    <h1 class="mensageinicial" > Seja Bem Vindo ao Restaurante da Dona Rita!!</h1><br>
                    <button><a href="#">CONHEÇA NOSSA HISTORIA</a></button>
                </article>
            </div>
            <section class="apresentacao">
                <header><br>
                <h2>Confira nossas deliciosas marmitas</h2>
                </header>
                <?php 
                    foreach($produtos as $key => $value){        
                ?>
                <article class="menu"><br>
                <a class="imgp" href='pagmarmita.php?id=<?=$value['id'];?>'><img src=<?=$value['imagem'];?>></a>
                <h3><?=$value['titulo'];?></h3>
                <p><?=$value['descricao'];?></p>

                </article><br>
                <?php 
                    }
                ?>
                <div class="rodape">Desenvolvido por Breno;RA200505035.</div> 
            </section>
        </div>
    </body>
</html>