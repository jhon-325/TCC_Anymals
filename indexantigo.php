<?php include_once("settings/dbconnect.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!--<link rel="stylesheet" type="text/css" href="carrossel/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="carrossel/css/slick-theme.css"/>
   -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
   integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
   crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
   integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
   crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
    <title>Anymals</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>
<body>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
      </div>
        <!--<div class="w3-dropdown-hover">
          <a class="w3-button" href="javascript:void(0)">Dropdown <i class="fa fa-caret-down"></i></a>
          <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 3</a>
          </div>
        </div>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Support</a>-->
        </div>
      </div>
    <div id="im">
        <div id="top">
            <div id="topMenu">
                <p class="ptopmenu">Página Inicial</p>
                <p class="ptopmenu">Consultas</p>
                <p class="ptopmenu">Clínicas</p>
                <a href="pets/index.php"class="ptopmenu"><p>Pets</p></a>
                </ul>
            </div>   
        </div>        
        <div id="Cmenu">
            <div id="barra">
                <form method="GET" action="./pesquisa/index.php" class="fmenu">
                <!--<div id="centro-barra">-->
                    <img src="imgs/me.png" alt="" width="50px" onclick="openNav()">
                    <div class="input-box">
                        <i class="uil uil-search"></i>
                        <input type="text" placeholder="Pesquise aqui..." onkeyup="carregar_produtos(this.value)" name="produto" id="produto"/>
                        <span id="resultado_pesquisa"></span>
                        <button type="submit" class="button">Search</button>
                    </div> 
                    <img src="imgs/per3c.png" alt="" width="50px">
               <!-- </div>--->
               </form>
            </div>
            <span id="listar_produtos"></span>
        </div>
        <div id="contaiBloco">
            <div id="bloco">
                <div id="Tbloco">
                    <h1>Seja Bem-Vindo ao Anymals</h1>
                    <p>NÓS DO ANYMALS FICAMOS MUITOS FELIZES EM CONFIAR EM NOSSO PROGRARMA</p>
                </div>
            </div>
        </div>
        <div id="case">
            <button id="adcCaso">Adicionar Caso</button>
        </div>
    </div>
    <?php $sql = "SELECT * FROM clinicas";
       $result = $con->query($sql);
    ?>
    <div id="corpo">
        <h1>Clínicas Perto de Você</h1>
        <div class="ajusteCarrossel">
            <div class="carrossel">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $imagem = $row['imagem'];
                        $nome = $row['nome'];
                        $descricao = $row['descricao'];
                        $rating = $row['rating'];
                
                        echo '<div class="slider">';
                        echo '<div class="fav">';
                        echo '<div class="favIcon"></div>';
                        echo '</div>';
                        echo '<div class="clinicas">';
                        echo '<div class="cliniImg">';
                        echo '<img src="' . $imagem . '" width="100%" max-width="300px" max-height="300px" alt="Foto do produto: '.$nome.'"/>';
                        echo '</div>';
                        echo '<h4 class="nome" title="'.$nome.'">' . $nome . '</h4>';
                        echo '<div class="rating">' . rate($rating) . '</div>';
                        echo '<div class="descrição">';
                        echo '<h5>' . $descricao . '</h5>';
                        echo '</div>';
                        echo '<a>Adicionar ao Carrinho</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "Nenhum slide encontrado.";
                }
                
                // Feche a conexão
                $con->close();
                ?>           
                <!--<div class="slider">
                    <div class= "fav">
                        <div class="favIcon"></div>
                    </div>
                    <div class="clinicas">
                        <div class="cliniImg">
                            <img src="imgs/f1.jpg" width="100%" max-width="300px" height="300px"/>
                        </div>
                        <h4>Nome</h4>
                        <div class="rating">estrelas</div>
                        <div class="descrição">
                            <h5>txt</h5>
                        </div>
                        <a>Adicionar ao Carrinho</a>
                    </div>
                </div>
                <div class="slider">
                    <div class= "fav">
                        <div class="favIcon"></div>
                    </div>
                    <div class="clinicas">
                        <div class="cliniImg">
                            <img src="imgs/f2.jpg" width="100%" max-width="300px" height="300px"/>
                        </div>
                        <h4>Nome</h4>
                        <div class="rating">estrelas</div>
                        <div class="descricao">
                            <h5>txt</h5>
                        </div>
                        <a>Adicionar ao Carrinho</a>
                    </div>
                </div>
                <div class="slider">
                    <div class= "fav">
                        <div class="favIcon"></div>
                    </div>
                    <div class="clinicas">
                        <div class="cliniImg">
                            <img src="imgs/f3.jfif" width="100%"  max-width="300px" height="300px"/>
                        </div>
                        <h4>Nome</h4>
                        <div class="rating">estrelas</div>
                        <div class="descrição">
                            <h5>txt</h5>
                        </div>
                        <a>Adicionar ao Carrinho</a>
                    </div>
                </div>
                <div class="slider">
                    <div class= "fav">
                        <div class="favIcon"></div>
                    </div>
                    <div class="clinicas">
                        <div class="cliniImg">
                            <img src="imgs/f3.jfif" width="100%" max-width="300px" height="300px"/>
                        </div>
                        <h4>Nome</h4>
                        <div class="rating">estrelas</div>
                        <div class="descrição">
                            <h5>txt</h5>
                        </div>
                        <a>Adicionar ao Carrinho</a>
                    </div>
                </div>
                <div class="slider">
                    <div class= "fav">
                        <div class="favIcon"></div>
                    </div>
                    <div class="clinicas">
                        <div class="cliniImg">
                            <img src="imgs/f4.jpg" width="100%" max-width="300px" height="300px"/>
                        </div>
                        <h4>Nome</h4>
                        <div class="rating">estrelas</div>
                        <div class="descrição">
                            <h5>txt</h5>
                        </div>
                        <a>Adicionar ao Carrinho</a>
                    </div>
                </div>-->
            </div> 
        </div>   
    </div>   
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.js" integrity="sha512-5oyraQc2ixWY6Xu4b0SniN6j75SAq0oRD9IfKAvW36LOsds71Jp4GBbU94vvejM6CyDw0nFbeFFnVMmNbn4ZDA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.js" integrity="sha512-CDx6r3tzBLJhDtX/hR+EDV2ySZOBQSi4b0Lo5XSbducRf28VSoRl+08WPBEF7DxqV1fpxIuV6GnRAd6TmXgKDg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
    <script type="text/javascript"  src="scripts/script.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"
    integrity="sha512-h9kKZlwV1xrIcr2LwAPZhjlkx+x62mNwuQK5PAu9d3D+JXMNlGx8akZbqpXvp0vA54rz+DrqYVrzUGDMhwKmwQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js"
    integrity="sha512-fDGBclS3HUysEBIKooKWFDEWWORoA20n60OwY7OSYgxGEew9s7NgDaPkj7gqQcVXnASPvZAiFW8DiytstdlGtQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
    integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="scripts/script.js"></script>
    <script>
        /*window.onscroll = function() {scrollFunction()};
        document.getElementById("topMenu").style.top = "0";*/
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>

<?php
function rate($rating){
  $htmlToReturn = "";
  $maximumRatingStars = 5;

  for ($i = 0; $i < $rating; $i++) {
    $htmlToReturn = $htmlToReturn . "&#9733;";
  }

  for ($j = 0; $j < $maximumRatingStars - $rating; $j++) {
    $htmlToReturn = $htmlToReturn . "&#9734;";
  }

  return $htmlToReturn;
}
?>