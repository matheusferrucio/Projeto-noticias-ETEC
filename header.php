<header>
    <div class="container">
        <a href="index.php">
            <div class="logo">
                <!-- <img src="imagens/logo.png" alt="logo site"> -->
            </div>
        </a>
        <div class="titulo-header">
            <h1>NOTÍCIAS ETEC</h1>
        </div>
        <nav>
            <div class="btn-hamburguer">
                <i class="fa-solid fa-bars-staggered botao"></i>
                <div class="links-header">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="pagina-enviar-noticia.php  ">ADICIONAR NOTÍCIA</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<script>
    // pega o botão hamburguer
    var menuBar = document.querySelector('i.botao');

    // função para adicionar uma classe quando o botão hamburguer for clicado
    menuBar.addEventListener('click', ()=>{
        // pega os meus links do menu drpodown
        let menuMobile = document.querySelector('.links-header');
        // se a div dos links do header possuírem a classe active...
        if(menuMobile.classList.contains('active')){
            // remova a classe active
            menuMobile.classList.remove('active')
        }else {
            // senão adicione a classe active
            menuMobile.classList.add('active');
        }
    });
</script>