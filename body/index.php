<body>
    <div class="container">
      <header class="blog-header py-3">
      </header>

      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Teste de Desenvolvimento</h1>
          <p class="lead my-3">Teste PHP/JS/HTML para correção de itens com problemas, existe uma imagem que contém exatamente como deve ficar. Procure a imagem na pasta /img/layout/layout.jpg.  Todos os Links devem estar funcionando .</p>
        </div>
      </div>

<div class="row mb-2">
  <?php
$stringJson = file_get_contents("../json/posts.json");
                $jsonPost = json_encode($stringJson);
foreach($jsonPost->posts as $key=>$post){ ?>

if($key == 1)
  {
    <div class="col-md-6">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
    <strong class="d-inline-block mb-2 text-success"><?php echo $post["chapeu"] ?></strong>
    <h3 class="mb-0">
                <a class="text-dark" href="<?php echo $post["link"]?>"><?php echo $post["titulo"]?></a>
              </h3>
      <p class="card-text mb-auto"><?php echo $post["linhafina"] ?></p>
    </div>
  </div>
            </div>
          </div>
  }

                            <div class="col-md-6">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
    <strong class="d-inline-block mb-2 text-success"><?php echo $post["chapeu"] ?></strong>
    <h3 class="mb-0">
                <a class="text-dark" href="<?php echo $post["link"]?>"><?php echo $post["titulo"]?></a>
              </h3>
      <p class="card-text mb-auto"><?php echo $post["linhafina"] ?></p>
    </div>
  </div>
           </div>

           </div>
    <?php
      }?>


                            <div class="col-md-6">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
    <strong class="d-inline-block mb-2 text-warning">Cultura</strong>
    <h3 class="mb-0">
                <a class="text-dark" href="http://www.estadao.com.br">A banda Eva é sucesso nas paradas</a>
              </h3>
      <p class="card-text mb-auto">Novo disco de sucesso faz muito alarde na Bahia</p>
    </div>
  </div>
           </div>
       
          </div>
   
            </div>
 </div><!-- /.row -->
       <?php
      include 'footer/index.php'
    ?>

    </main><!-- /.container -->
  </body>