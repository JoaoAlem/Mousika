<?php
  require_once('../assets/php/functions.php');
  include("./header.php");

  if(!empty($_SESSION['email']) && !empty($_SESSION['password'])){
    
  }else{
      global $caminhoAbsoluto;
      header('Location: ' . $caminhoAbsoluto . '/pages/login.php');
      die();
  }
?>

    <main class="container-fluid mx-auto my-3">
      <section class="container">
          <div class="row justify-content-center">
            <div class="col-md-4 col-12 d-flex justify-content-center">
              <img id="imagePlaceholder" class="w-75 my-2 rounded-5 border p-3" src="../assets/images/areaUsuario/user-regular.svg" alt="Foto do Usuario">
            </div>
            <div class="col-md-8 col-12 border rounded-3 h-50">
              <div class="container p-3">
                <input class="form-control mb-2 " type="text" value="Nome do Usuário" aria-label="readonly nome do usuario" readonly>
                <input class="form-control mb-2" type="text" value="Sobrenome do Usuário" aria-label="readonly sobrenome do usuario" readonly>
                <input class="form-control" type="text" value="E-mail" aria-label="readonly E-mail" readonly>
                <div class="position-relative">
                  <a class="btn btn-warning position-absolute bottom-0 end-0" href="./editarUsuario.php">Editar Usuario</a>
                </div>
              </div>
            </div>
          </div>
      </section>
    </main>

<?php
  include("footer.php");
?>