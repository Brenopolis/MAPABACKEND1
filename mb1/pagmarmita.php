<?php
include("marmitas.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">    
<meta charset="UTF-8">
<title>Mensagem</title>
</head>   
<body>
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
    <?php 
        $id = $_GET['id'];
        foreach($produtos as $key => $value){   
            if ($value['id'] == $id){
        ?>
    <div class="divmenupag">
        <article class="menupag"><br>
            <h1><?=$value['titulo'];?></h1><br>
            <a href='pagmarmita.php?id=<?=$value['id'];?>'><img src=<?=$value['imagem'];?>></a><br>
            <p><?=$value['descricao'];?></p>
        </article>
        <?php 
                }
            }
            ?>
    <