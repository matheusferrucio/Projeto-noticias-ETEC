<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Adicionar Notícia</title>
        <link rel="stylesheet" href="css/style.css">
        <!-- <link rel="stylesheet" href="css/pagina-noticia.css"> -->
        <link rel="stylesheet" href="css/pagina-enviar-noticia.css">
        <script src="https://kit.fontawesome.com/62e5760e2b.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
            include('header.php');
        ?>

        <main>
            <div class="foto-noticia">
                <img src="#" alt="">
                <div class="overlay-titulo">
                    <input type="text" name="tituloNoticia" id="tituloNoticia" placeholder="Digite aqui o título da notícia...">
                    <input type="text" name="subtituloNoticia" id="subtituloNoticia" placeholder="Digite aqui o subtítulo da notícia...">
                </div>
            </div>
            <div class="container">
                <div class="container-noticia">
                    <p></p>                    
                    <div class="img-noticia">
                        <div class="adicionar-foto">
                            <label for="fotoNoticia">+ Adicionar foto</label>
                            <input type="file" name="fotoNoticia" id="fotoNoticia">
                        </div>
                    </div>
                    <p></p>
                </div>
            </div>
        </main>
    </body>
</html>