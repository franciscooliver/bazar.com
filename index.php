    <?php
      require_once('model/conexao.class.php');

      $objDB = new conexao();
      $link = $objDB->conectaBd();

      $sql = "select * from produtos ".
              "inner join img_vitrine iv on iv.id_imagem = produtos.fk_imagem";

      $resultado_id = mysqli_query($link , $sql);
     

    ?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bazar.com</title>
    <!-- jquery link cdn-->
     <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
     <script src="bootstrap3/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap -->
    <link href="bootstrap3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap3/css/estilo_index.css">
    <link rel="shortcut icon" href="imagens/icon_aba.ico" type="image/x-icon" />
    <script src="bootstrap3/js/js_index.js"></script>
  

    <script type="text/javascript">
      
      $(document).ready( function(){
          $("#btn_login").click( function(){

            var preencheu_campo = false;
            
              if($("#campo_usuario").val() == ""){
                  $("#campo_usuario").css({"border-color" : "#A94442"});
                  preencheu_campo =true;
              }else{
                $("#campo_usuario").css({"border-color" : "#00FA9A"});
              }


              if($("#campo_senha").val() == ""){
                  $("#campo_senha").css({"border-color" : "#A94442"});
              }else{
                $("#campo_senha").css({"border-color" : "#00FA9A"});
              }

              if (preencheu_campo) {return false;}



          });

          $(function(){

              $('#pesquisa').keyup( function(){
                var pesquisa = $(this).val();

                $(".resultado").html( pesquisa);
              });

          })

      });
    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    

     <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente">
      <div class="container">
        
        <!-- header -->
        <div class="navbar-header">
          
          <!-- botao toggle -->
          <button type="button" class="navbar-toggle collapsed" id="btn_entrar" 
                  data-toggle="collapse" data-target="#barra-navegacao">
            <span class="sr-only">alternar navegação</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a href="index.html" class="navbar-brand">
            <img src="imagens/img_logo.png" class="img-logo img-responsive">
          </a>

        </div>

        <!-- navbar -->
        <div class="collapse navbar-collapse" id="barra-navegacao">
          

          <div class="col-sm-4 col-md-4 navbar-right">
                    <form class="navbar-form" role="search" method="get" id="search-form" name="search-form">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Buscar por produtos" id="pesquisa" name="query" value="">
                            <div class="input-group-btn">
                                <button type="submit" value="Search" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                            </div>
                        </div>
                          <br>
                         <ul class="resultado">

                        </ul>

                    </form>


                </div>
                
          <ul class="nav navbar-nav navbar-right">
            
            <li><a href="">Início</a></li>
            <li><a href="">Produtos</a></li>
            <li><a href="">Contato</a></li>
            <li><a href="cadastro.php">Cadastre-se</a></li>
            <li><a href="#"  data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><button type="button" class="btn btn-warning" style="margin-top: -5px;">Sing-in</button></a>
              <ul class="dropdown-menu" aria-labelledby="entrar">
            <div class="col-md-12">
                <p>Você possui uma conta?</h3>
                <br />
              <form method="post" action="" id="valida_acesso.php" >
                <div class="form-group pull-left">
                  <input type="text" class="form-control "  style="margin-left: 1px;" id="campo_usuario" name="usuario" placeholder="Usuário" />
                </div>
                
                <div class="form-group">
                  <input type="password" class="form-control red " style="margin-left: 1px;" id="campo_senha" name="senha" placeholder="Senha" />
                </div>
                
                <button type="buttom" class="btn btn-primary pull-right" id="btn_login">Entrar</button>

                <br /><br />
            </form>

            </li>
          
          </ul>
                
        

        </div>
      </div><!-- /container -->
    </nav><!-- /nav -->

   

    <!-- sessao slide-->
    <div class="container" id="slide-div">

        <div class="row">
         
          <div class="col-md-12" >
            <div id="my-slider" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img class="img-responsive" src="imagens/sl1.png" alt="sl1">
                  
                </div>

                <div class="item">
                  <img class="img-responsive" src="imagens/sl2.png" alt="sl2">
                  
                </div>
        
              </div>

                <a class="left carousel-control"  href="#my-slider" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>

                <a class="right carousel-control"  href="#my-slider" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">next</span>
                </a>
            </div>
          </div>
      
        </div>
      </div>
    
     
    

    <!--sessao de produtos --> 

    <section id="imagens_smartphones">
    <div id="div_destaque" >
      <h3>Produtos em destaque</h3>
    </div>
    
      <div class="container" id="config_container_imagens">

      <?php while($linha = mysqli_fetch_assoc($resultado_id)) { ?>
        <div class=" col-sm-6 col-md-2  column productbox">
          <a href="view/detalhe_prod.php?id_produto=<?php echo$linha['id'] ?>"><img src="<?php echo $linha['imagem'].'.png' ?>" class="img-responsive "></a>
          <div class="producttitle"><?php echo $linha['nome']?></div>
          <div class="productprice"><div class="pull-right"><br><a href="#" class="btn btn-success btn-sm" role="button">COMPRAR</a></div><div class="pricetext">
              <?php 
                  
                    if($linha['id'] == 1 ){
                      echo 'R$ '.number_format($linha['preco'],3); 
                    }else{
                      echo 'R$ '.number_format($linha['preco'],2); 
                    }
                    

              ?>
            
          </div></div>
        </div>
        <?php } ?>
    
        
      </div>
    </section>

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

   
     
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap3/js/bootstrap.min.js"></script>
    <script>
      $('.carousel').carousel();
    </script>
   


  </body>
</html>