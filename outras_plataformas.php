<!DOCTYPE html>
<html>
    <head>
        <title> Multiplayer </title>
        <meta http-equiv="Content-Type" charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/style.css"/>
        <script type="text/js/js/javascript" src="js/jquery.js"> </script>
        <script type="text/js/js/javascript">
            $(document).ready(function(){
                $('.parent').mouseover(function(){
                    $('.submenu').slideDown('fast');
                });
                $('.parent').mouseleave(function(){
                    $('.submenu').slideUp('fast');
                });
            });
        </script>
    </head>
    <body>
        <container id="container">
            <section id="secao">
                <header id="cabecalho">
                    <a href="index.php"> <div id="logo"> <img src="imagens/logo004.png" alt="" id="img-logo"/> </div> </a>
                    <nav id="menu-outros"> 
                        <ul class="menu">
                            <li><a href="index.php"> Home </a></li>
                            <li><a href="colunas.php"> Colunas </a>
                                <ul class="submenu">
                                    <li><a href="#"> Personagens </a></li>
                                    <li><a href="#"> Gêneros </a></li>
                                    <li><a href="#"> Séries </a></li>
                                </ul>
                            </li>
                            <li><a href="#"> Playstation </a>
                                <ul class="submenu"> 
                                    <li><a href="ps3.php"> PS3 </a></li>
                                    <li><a href="ps4.php"> PS4 </a></li>
                                </ul>
                            </li>
                            <li><a href="#"> Nintendo </a>
                                <ul class="submenu"> 
                                    <li><a href="wii.php"> Nintendo Wii </a></li>
                                    <li><a href="wii_u.php"> Nintendo Wii U </a></li>
                                    <li><a href="#.php"> Nintendo 3DS </a></li>
                                </ul>
                            </li>
                            <li><a href="#"> XBOX </a>
                                <ul class="submenu"> 
                                    <li><a href="xbox_360.php"> XBOX 360 </a></li>
                                    <li><a href="xbox_one.php"> XBOX ONE </a></li>
                                </ul>
                            </li>
                            <li><a href="pc.php"> PC </a></li>
                            <li><a href="#"> Outras Plataformas </a>
                                <ul class="submenu"> 
                                    <li><a href="#"> Nintendinho </a></li>
                                    <li><a href="#"> Super Nintendo </a></li>
                                    <li><a href="#"> GameBoy </a></li>
                                    <li><a href="#"> Playstation 1 </a></li>
                                    <li><a href="#"> Playstation 2 </a></li>
                                </ul>
                            </li>
                            <li><a href="login_cadastro.php"> Login </a></li>
                        </ul>
                    </nav>
                    <div id="propaganda1"><a href="#"><img src="imagens/propaganda.jpg" alt="" id="img-propaganda1" > </a></div>
                </header>        
                <div id="busca"> 
                    <input type="text" placeholder="Buscar" id="caixa-busca" /> 
                    <a href="busca.php"> <img src="imagens/lupa.jpg" alt="" id="lupa"> </a>
                </div>
                <article id="conteudo">
                    <div id="colunas">
                        <div class="colunas"> Matéria 1 PC </div>
                        <div class="colunas"> Matéria 2 PC </div>
                        <div class="colunas"> Matéria 3 PC </div> 
                        <div class="colunas"> Matéria 4 PC </div>
                        <div class="colunas"> Matéria 5 PC </div>
                        <div class="colunas"> Matéria 6 PC </div>
                    </div>
                    <div id="coluna-lateral">
                        <div id="top-noticias"> Top Notícias </div> <br/>
                        <div id="top-jogos"> Top Jogos </div> <br/>
                        <div id="propaganda2"> Propaganda </div>
                    </div>
                </article>                
                <footer id="rodape"> 
                    <div id="informacao">
                        <a href="quem_somos.php"> <div id="quem-somos"> Quem somos </div> </a>
                        <a href="contato.php"> <div id="contato"> Contato </div> </a>
                        <a href="escreva.php"> <div id="escreva"> Escreva uma Matéria </div> </a>
                        <a href="duvidas.php"> <div id="duvidas"> Dúvidas </div> </a>
                    </div>
                    <div id="outros-links">
                        <div id="colunas-rodape"> 
                            Colunas <br/>
                            <a href="colunas.php"> Coluna 1 </a> <br/>
                            <a href="colunas.php"> Coluna 2 </a> <br/>
                            <a href="colunas.php"> Coluna 3 </a> <br/>
                            <a href="colunas.php"> Coluna 4 </a> <br/>                            
                        </div>
                        <div id="plataformas"> 
                            Plataformas <br/>
                            <a href="ps3.php"> PS3 </a> <br/>
                            <a href="pc.php"> PC </a> <br/>
                            <a href="wii.php"> Wii </a> <br/>
                            <a href="xbox_360.php"> Xbox 360 </a> <br/>                            
                        </div>
                        <div id="series"> 
                            Séries <br/>
                            <a href="#"> Série 1 </a> <br/>
                            <a href="#"> Série 2 </a> <br/>
                            <a href="#"> Série 3 </a> <br/>
                            <a href="#"> Série 4 </a> <br/>
                        </div>
                        <div id="generos"> 
                            Gêneros <br/>
                            <a href="#"> Gênero 1 </a> <br/>
                            <a href="#"> Gênero 2 </a> <br/>
                            <a href="#"> Gênero 3 </a> <br/>
                            <a href="#"> Gênero 4 </a> <br/>
                        </div>
                    </div>
                    <div id="forum"> 
                        Conheça nosso Fórum <br/>
                        <a href="forum.php"> Pergunta 1 </a> <br/>
                        <a href="forum.php"> Pergunta 2 </a> <br/>
                        <a href="forum.php"> Pergunta 3 </a> <br/>
                        <a href="forum.php"> Pergunta 4 </a> <br/>                        
                    </div>
                </footer>
                </section>
        </container>
    </body>
</html>
