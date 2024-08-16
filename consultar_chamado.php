<?php
require_once "validator.php";
  
?>

<?php
  //declarando um array vazio
  $chamados = array();

  //abrir um arquivo e le logo depois.
  $arquivo = fopen('arquivo.hd','r');

//esta parte o feof irá recupar as linhas descritas dentro do tópíco e percorrer as linhas dos mesmos, podendo retornar verdadeiro ou falso, caso ela encontre ou não o arquivo.
  while(!feof($arquivo)){ 
    $registro = fgets($arquivo);
    $chamados[ ] = $registro;
  }
?>

<!DOCTYPE html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

      <div class="card-body">
              //o primeiro chamado exibe os tres tópicos juntos e em seguida, o as vai para o segundo chamado que exibe eles separado.
              <?php foreach($chamados as $chamado){ ?>
              // a função chamado explora os dados e exibe o # para separar cada tópico, ou seja, o título, da categoria e da descrição.
              <?php
                $chamado_dados = explode('#', $chamado);
                // neste tópico ressalta que se o chamado for menor a 3 é para continuar e ir para a próxima estrutura.
                if(count($chamado_dados) < 3){
                  continue;
                }

              ?>
              //o chamado valor 0 representa o título.
              //o chamado do valor 1 representa a categoria.
              //o chamado do valor 2 representa a descrição na página.
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $chamado_dados[0]?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dados[1]?></h6>
                  <p class="card-text"><?= $chamado_dados[2]?></p>

                </div>
              </div>

              <?php } ?>


              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>