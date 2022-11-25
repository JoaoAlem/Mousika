<?php
  include("./header.php");
  require_once('../assets/php/functions.php');

  $musica = getMusica();
  if(!empty($_SESSION['id'])){
    $favoritado = checkFavoritar($_SESSION['id']);
  }
  
  $extensao = pathinfo($caminhoAbsoluto . "/assets/uploads/files/" . $musica['arquivo'], PATHINFO_EXTENSION);
?>

    <main class="container-fluid mx-auto my-3">
      <section class="container-fluid">
          <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 col-8 overflow-scroll border border-warning" style="height: 75vh;">
                    
                        <?php if(strcmp($extensao, "mxl") == 0 || strcmp($extensao, "musicxml") == 0 || strcmp($extensao, "xml") == 0): ?>
                            <div id="osmdContainer">
                            <?php if(!empty($_GET['id']) && !empty($musica)): ?>
                                <?php echo("<script> let arquivo = '" . $caminhoAbsoluto . "/assets/uploads/files/" . $musica['arquivo'] . "'; </script>"); ?>
                                <script>
                                    window.onload = function(){
                                        var osmd = new opensheetmusicdisplay.OpenSheetMusicDisplay("osmdContainer");
                                        osmd.setOptions({
                                            backend: "svg",
                                            drawTitle: true,
                                        });
                                        osmd.load(arquivo).then(function() {
                                            osmd.render();
                                        });
                                    }
                                </script>
                            </div>
                            <?php endif; ?>
                        <?php else: ?>
                            <iframe src=<?php echo($caminhoAbsoluto . "/assets/uploads/files/" . $musica['arquivo'] ) ?> width="100%" height="100%"></iframe>
                        <?php endif; ?>
                    
                </div>
                <div class="col-lg-4 col-md-4 col-4">
                    <div class="border border-warning h-100">
                        <div class="w-100">
                            <h4 class="text-center my-2"><?php echo(htmlentities($musica['nome_musica']));?></h4>
                        </div>
                        <div class="w-100">
                            <img class="w-50 rounded mx-auto d-block" src=<?php echo("../assets/uploads/images/" . $musica['imagem']);?> alt="thumbnail da musica">
                        </div>
                        <div class="w-100">
                            <p class="text-center m-2">Postado por: <?php echo(htmlentities($musica['nome'] . " " . $musica['sobrenome']));?></p>
                            <p class="text-center m-2">Autor: <?php echo(htmlentities($musica['nome_autor']));?></p>
                            <p class="text-center m-2">Instrumento: <?php echo(htmlentities($musica['instrumento']));?></p>
                            <p class="text-center m-2">Dificuldade: <?php echo(htmlentities($musica['dificuldade']));?></p>
                            <button class="btn btn-warning mx-auto d-flex"><a class="w-100 p-0 text-dark text-decoration-none" href= <?php echo($caminhoAbsoluto . "/assets/uploads/files/" . $musica['arquivo']); ?> download=<?php echo($musica['arquivo']); ?>>Download</a></button>
                            <?php if(!empty($_SESSION['email']) && !empty($_SESSION['senha'])): ?>
                                <button id="favorito" class="btn mt-2 mb-2 btn-warning mx-auto d-flex" onclick="favoritar(<?php echo($_SESSION['id'] . ',' . $musica['id_musica'] . ', favorito');?>);" <?php if($favoritado == true){ echo "disabled";} ?>>
                                <?php if($favoritado == true){ echo "Favoritado";} else{echo "Favoritar";} ?>
                            </a></button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </section>
    </main>

    <script src="<?php echo $caminhoAbsoluto . '/assets/js/opensheetmusicdisplay.min.js';?>"></script>
    
<?php
  include("footer.php");
?>