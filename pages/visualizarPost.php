<?php
  include("./header.php");
?>

    <main class="container-fluid mx-auto my-3">
      <section class="container-fluid">
          <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 col-8 overflow-scroll border border-warning" style="height: 75vh;">
                    <div id="osmdContainer">
                        <script>
                            window.onload = function(){
                                var osmd = new opensheetmusicdisplay.OpenSheetMusicDisplay("osmdContainer");
                                osmd.setOptions({
                                    backend: "svg",
                                    drawTitle: true,
                                });
                                osmd.load("../assets/uploads/Nanino,_Erano_i_capei.mxl").then(function() {
                                    osmd.render();
                                });
                            }
                        </script>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4">
                    <div class="border border-warning h-100">
                        <div class="w-100">
                            <h4 class="text-center my-2">Death of a bachelor</h4>
                        </div>
                        <div class="w-100">
                            <img class="w-50 rounded mx-auto d-block" src="../assets/images/posts/Death_of_a_bachelor.webp" alt="Capa do album death of a bachelor">
                        </div>
                        <div class="w-100">
                            <p class="text-center m-2">Postado por: João Alem</p>
                            <p class="text-center m-2">Instrumento: Violoncelo</p>
                            <p class="text-center m-2">Dificuldade: Médio</p>
                            <button class="btn btn-warning mx-auto d-flex"><a class="w-100 p-0 text-dark text-decoration-none" href="../assets/uploads/" download="MozaVeilSample.xml">Download</a></button>
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