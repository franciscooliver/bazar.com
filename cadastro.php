<?php
    $nome = isset($_GET["erro_nome"]) ? $_GET["erro_nome"] :0;
    $email = isset($_GET["erro_email"]) ? $_GET["erro_email"] :0;

?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
   

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
     <script src="bootstrap3/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap3/css/estilo_cadastro.css">
  </head>
  <body>
      
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <img src="imagens/img_logo.png" style="margin-top: 5px;" />
          </div>
          
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php"><span class="glyphicon glyphicon-home "></span> Home</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>

      <div class="container">
        
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <h3>Novo usuário</h3>
          <br />
        <form method="post" action="cadastra_usuario.php" id="formCadastrarse">
          <div class="form-group">
            <input type="text" class="form-control" id="usuario" name="usuario_cad" placeholder="Usuário" required="required">
            <?php

                if($nome == 1){
                  echo "<p style='color:#FF0000'>Nome de usuário já cadastrado em nosssa base de dados</p>";
                }
            ?>

          </div>

          <div class="form-group">
            <input type="email" class="form-control" id="email_cad" name="email_cad" placeholder="Email" required="required">
            <?php
            if($email ==1 ){
                echo "<p style='color:#FF0000'>Email de usuário já cadastrado em nosssa base de dados</p>";

            }
            ?>
            
          </div>
          
          <div class="form-group">
            <input type="password" class="form-control" id="senha_cad" name="senha_cad" placeholder="Senha" required="requiored">
          </div>
          
          <button type="submit" class="btn btn-primary form-control">Inscreva-se</button>
        </form>
      </div>
      <div class="col-md-4"></div>

      <div class="clearfix"></div>
      <br />
      <div class="col-md-4"></div>
      <div class="col-md-4"></div>
      <div class="col-md-4"></div>

    </div>
    </div>



      <footer>
  <div class="container">
        <div class="row">
          <div class="col-md-2">
            <span class="img-logo"><a href=""><img src="imagens/img_logo_oficial.png" class="img-responsive"></a></span>
          </div>

          <div class="col-md-2">
            <h4>Company</h4>
            <ul class="nav">
              <li><a href="#">Sobre</a></li>
               <li><a href="#">Empregos</a></li>
                <li><a href="#">Imprensa</a></li>
                 <li><a href="#">Novidades</a></li>
            </ul>
          </div>
          

          <div class="col-md-2">
            <h4>Comunidades</h4>
            <ul class="nav">
              <li><a href="#">Artistas</a></li>
               <li><a href="#">Desenvolvedores</a></li>
                <li><a href="#">Marcas</a></li>
                
            </ul>
          </div>

          <div class="col-md-2">
            <h4>Links úteis</h4>
            <ul class="nav">
              <li><a href="#">Ajuda</a></li>
               <li><a href="#">Presentes</a></li>
                <li><a href="#">Player da web</a></li>
                
            </ul>
          </div>

          <div class="col-md-4">
      
            <ul class="nav">
              <li class="item-rede-social"><a href="#"><img src="imagens/facebook.png" class="img-responsive"></a></li>
               <li class="item-rede-social"><a href="#"><img src="imagens/twitter.png" class="img-responsive"></a></li>
                <li class="item-rede-social"><a href="#"><img src="imagens/instagram.png" class="img-responsive"></a></li>
                
            </ul>
          </div>
        </div>
      </div>
</footer>

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    

  </body>
</html>