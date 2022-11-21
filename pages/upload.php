<?php
  require_once('../assets/php/functions.php');
  include("./header.php");

  usuarioLogado();
?>

    <main class="container-fluid mx-auto my-3">
      <section class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 col-md-10 col-12">
            <form class="row border pb-3" action="validaUpload.php" name="fUpload" method="POST" onsubmit="return validaUpload();" enctype="multipart/form-data">
              <input class="d-none" type="text" value="<?php echo("teste") ?>" name="id_usuario">
              <div class="col-lg-8 col-md-8 col-12">
                <div class="w-100">
                  <label for="nome_musica" class="form-label">Nome da Musica</label>
                  <input type="text" class="form-control" name="nome_musica" id="fNomeMusica" placeholder="The Lotto">
                </div>
                <div class="w-100">
                  <label for="nome_autor" class="form-label">Nome do autor</label>
                  <input type="text" class="form-control" name="nome_autor" id="fNomeAutor" placeholder="Ingrid Michaelson">
                </div>
                <div class="w-100">
                  <label for="dificuldade" class="form-label">Dificuldade</label>
                  <select class="form-select" name="dificuldade" id="fDificuldade">
                    <option value="Fácil">Fácil</option>
                    <option value="Fácil">Médio</option>
                    <option value="Fácil">Difícil</option>
                    <option value="Fácil">Expert</option>
                  </select>
                </div>
                <div class="w-100">
                  <label for="instrumento" class="form-label">Instrumento</label>
                  <input type="text" class="form-control" name="instrumento" id="fInstrumento" placeholder="Piano">
                </div>
                <div class="w-100">
                  <label for="arquivo" class="form-label">Selecione um arquivo (.musicxml, .mxl ou .xml)</label>
                  <input class="form-control" type="file" accept=".xml, .musicxml, .mxl" name="arquivo" required>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                <div class="row">
                  <img class="w-100 my-2" id="file-ip-1-preview">
                  <div class="col-lg-8 col-md-8 col-12">
                    <label id="labelImagem" for="imagem" class="form-label w-75">Selecione uma Imagem: </label>
                    
                    <input class="form-control" type="file" accept="image/*" name="imagem" onchange="showPreview(event);" required>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12 d-flex justify-content-center align-items-end">
                    <button type="submit" class="btn btn-warning">Enviar</button>            
                  </div>
                </div>
              </div>
            </form>
            
          </div>
        </div>
      </section>
    </main>

<?php
  include("footer.php");
?>