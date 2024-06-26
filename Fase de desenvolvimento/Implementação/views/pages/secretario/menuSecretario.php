<?php
session_start();

if (!isset($_SESSION['tipo_usuario']) || $_SESSION['tipo_usuario'] != "2") {
    header("Location: /");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="views/css/stylepagSecretário.css">
        <link rel="stylesheet" href="views/css/stlylemodal.css">
        <title>Biblioteca Científica Digital</title>
    </head>

    <body>
        <header>
            <div class = "container">
                <div class = "logo"><a href="/"><img src="views/img/logo.png" style="width: 200px; height: 120px;"></a></div>
                <div class = "menu">
                    <nav>
                        <a href="indexSecretário.html">Sobre</a>
                        <a href="indexSecretário.html">Quero ser colaborador</a>
                        <a href="indexSecretário.html">Submeta seu artigo</a>
                        <a href="indexSecretário.html">Eventos</a>
                        <a href="/home">Menu</a>
                    </nav>
                </div>

                <div class= "login">
                    <?php echo '<p>Bem-vindo, ' . $_SESSION['nome_usuario'] . '!</p>';?>
                    </br>
                    <button id="btn1">Sair</button>
                </div> 
                  
            <div>
        </header>  

        <section>
            <!-- Modal de logout-->
            <div id="modal1" style="display: none;">
                <div id="modal" class="modal">
                    <div class="modal-content">
                        <div class="fora-form">
                            <form method="post" action="/logout">
                                <div class="dentro-form">
                                    <h2>Deseja Sair do Sitema?</h2></br>
                                    <div style = "text-align:center; margin-left: auto; margin-right: auto;">
                                        <button type="submit" name="logout">Confirmar</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <button type="button" id ="cancel-button1">Cancelar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="conjunto">
                <div class = "navegacao">
                    <div class="blocos">
                        </br></br></br></br>
                        <div class="dentro_bloco" >
                            <a href="/organizadores"><h3>Gerenciar Organizadores</h3></a>
                        </div>
                        </br>
                        <div class="dentro_bloco">
                            <a href="/eventos"><h3>Gerenciar Eventos</h3></a>
                        </div>
                        </br>
                        <div class="dentro_bloco">
                            <a href="/autores"><h3>Gerenciar Autores</h3></a>
                        </div>
                        </br>
                        <div class="dentro_bloco" href="www.google.com">
                            <a href="google.com"><h3>Gerenciar Artigos</h3></a>
                        </div>
                        </br></br></br>
                    </div>
                </div>
            </div>   
        </section>

        
        <script src="views/js/jquery-3.6.0.min.js"></script> 
        <script>
            $(document).ready(function(){
                $("#btn1").click(function(){
                    $("#modal1").show();
                });              
                $("#confirmar1").click(function(){
                    alert("Confirmado Modal 1");
                    $("#modal1").hide();
                });
                $("#cancel-button1").click(function(){
                    $("#modal1").hide();
                });
            });        
        </script>

        <footer>
            <div class="wrapper">
                <div class="company-footer">
                    <img src="views/img/logo.png" style="width: 200px; height: 120px;">
                    <div class="text">   
                        <h2>BCD © 2023 | All rights reserved.</h2>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
