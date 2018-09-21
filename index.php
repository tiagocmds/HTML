<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width">
    <title>Mirror Fashion</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/stilo.css">
    <link rel="stylesheet" href="css/reset.css">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script'
     rel='stylesheet'>
   
</head>

<body>
<?php include("cabecalho.php"); ?>
    <div id="main" class="container">
        <div class="container destaque">

            <section class="busca">
                <h2>Busca</h2>

                <form>
                    <input type="search">
                    <button>Buscar</button>
                </form>
            </section>
            <section class="menu-departamentos">
                <h2>Departamentos</h2>

                <nav>
                    <ul>
                        <li>
                            <a href="#">Blusas e Camisas</a>
                        </li>
                        <li>
                            <a href="#">Calças</a>
                        </li>
                        <li>
                            <a href="#">Saias</a>
                        </li>
                        <li>
                            <a href="#">Vestidos</a>
                        </li>
                        <li>
                            <a href="#">Sapatos</a>
                        </li>
                        <li>
                            <a href="#">Bolsas e Carteiras</a>
                        </li>
                        <li>
                            <a href="#">Acessórios</a>
                        </li>
                    </ul>
                </nav>
            </section>
            <!-- fim .menu-departamentos -->

            <section class="banner-destaque">
                <figure>
                    <img src="img/destaque-home.jpg" alt="Promoção: Big City Night">
                </figure>
            </section>
            <!-- fim .banner-destaque -->

        </div>
    </div>

    <div id="destaques">
        <div class="container paineis">
            <section class="painel novidades">
                <h2>Novidades</h2>
                <ol>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura1.png" alt="miniatura1">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto2.html">
                            <figure>
                                <img src="img/produtos/miniatura2.png" alt="miniatura2">
                                <figcaption>Blusa azul por R$ 85,00</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto3.html">
                            <figure>
                                <img src="img/produtos/miniatura3.png" alt="miniatura3">
                                <figcaption>Blusa Verde por R$ 87,00</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto4.html">
                            <figure>
                                <img src="img/produtos/miniatura4.png" alt="miniatura4">
                                <figcaption>Jaqueta Sobrevivencia R$ 250,00</figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
                <button type="button">Mostrar mais</button>
            </section>
            <section class="painel vendidos">
                <h2>Mais Vendidos</h2>
                <ol>
                    <li>
                        <a href="produto5.html">
                            <figure>
                                <img src="img/produtos/miniatura5.png" alt="miniatura5">
                                <figcaption>Jaqueta Sobrevivencia R$ 250,00</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto6.html">
                            <figure>
                                <img src="img/produtos/miniatura6.png" alt="miniatura6">
                                <figcaption>Jaqueta Sobrevivencia R$ 250,00</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto7.html">
                            <figure>
                                <img src="img/produtos/miniatura7.png" alt="miniatura7">
                                <figcaption>Jaqueta Sobrevivencia R$ 250,00</figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
                <button type="button">Mostrar mais</button>
            </section>
        </div>
    </div>
<?php include("rodape.php"); ?>
    
    <script type="text/javascript" src="scripts/jquery.js"></script>
    <script type="text/javascript" src="scripts/home.js"></script>
</body>

</html>