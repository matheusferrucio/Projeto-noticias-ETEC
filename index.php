<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notícias ETEC</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/62e5760e2b.js" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
    </head>
    <body>
        <?php
            include('header.php')
        ?>

        <main>
            <div class="container">
                <div class="container-noticias">
                    <?php
                        for($i = 0; $i < 9; $i++){
                            echo "<div class='card-noticia'>
                            <div class='img-noticia'>
                                <img src='imagens/bolsonaro.jpg' alt=''>
                            </div>
                            <div class='noticia-conteudo'>
                                <h3>Bolsonaro ganha as eleiçoes 2022</h3>
                                <p>Bolsonaro ganha as eleições mais uma vez e cidadão vão as ruas comemorar a vitória de Bolsonaro</p>
                            </div>
                            <div class='saiba-mais'>
                                <a href='pagina-noticia.php'>Saiba mais</a>
                            </div>
                        </div>";
                        }
                    ?>
                </div> <!-- container-noticias -->
            </div>
        </main>

        <footer>
            <div class="container">
                <div class="footer">
                    <h3>CENTRO PAULA SOUZA ARAÇATUBA</h3>
                </div>
            </div>
        </footer>
    </body>
</html>