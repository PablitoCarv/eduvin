<?php
  include('ligacao.php');
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eduvin</title>
        <link rel="stylesheet" href="style.css">
        <script src="js/slideshow.js" defer></script>
    </head>
    <body>
        
    <?php include_once('menu.php');?>

    <?php include('cabecalho.php');?>

        
        <section id="inicio">
            <img class="slideEduvin" src="images/istockphoto-1360684256-612x612.jpg" alt="Slide1">
            <img class="slideEduvin" src="images/vintage-1595623922.jpg" alt="Slide2">
            <img class="slideEduvin" src="images/vintage-london.jpg" alt="Slide3">
            <img class="slideEduvin" src="images/vintage.jpg" alt="Slide4">
        </section>
        
        <section id="roupas">
            <hr>
            <h1>Roupas</h1>
            <div id="cards">
    <?php 
        $sql ='SELECT * from produtos WHERE tipo LIKE "roupa" LIMIT 0,3';
        $roupas= $ligacao->query($sql);
        while($r=$roupas->fetch_assoc()) {
    ?><div class="card_tshirts">
            <a href="produto.php?id=<?= $r['id'] ?>">
                
                    <img src="images/<?= $r['imagem'] ?>" alt="t-shirts e calças <?= $r['nome'] ?>">
                    <div class="card_container">
                        <h4><?= $r['nome'] ?></h4>
                        <p><?= $r['descricao'] ?></p>
                        <span class="preço"><p><?= $r['preco'] ?>€</p></span>
                    </div>
                
            </a>
        </div>
        <?php } ?>
        </div>
            <hr>
        </section>
    
        <section id="acessorios">
            <h1>Acessórios e Calçados</h1>
            <div id="cards">

            <?php 
        $sql ='SELECT * from produtos WHERE tipo LIKE "ace-cal" LIMIT 0,3';
        $aces= $ligacao->query($sql);
        while($a=$aces->fetch_assoc()) {
    ?><div class="card_acessorios">
            <a href="produto.php?id=<?= $a['id'] ?>">
                
                    <img src="images/<?= $a['imagem'] ?>" alt="Acessórios e calçados <?= $a['nome'] ?>">
                    <div class="card_container">
                        <h4><?= $a['nome'] ?></h4>
                        <p><?= $a['descricao'] ?></p>
                        <span class="preço"><p><?= $a['preco'] ?>€</p></span>
                    </div>
                
            </a>
        </div>
        <?php } ?>
        </div>
           
            <hr>
        </section>
    
        <section id="sobrenos">
            <h1>Sobre nós</h1>
            <div class="linha">
                <div class="coluna"><span class="text"><li> Somos uma pequena empresa de roupas antigas fundada em 2023, onde vendemos diversas peças de roupas que eram muito utilizadas nos anos 80, 90 e 2000.</li></span></div>
                <div class="coluna"><a href="#"><img id="sede" src="images/1-est-giorno.png" alt="Eduvin's logo"></a></div>
            </div>
            <hr>
        </section>
        
        <?php include_once('footer.php');?>

        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>    