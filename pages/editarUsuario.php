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
                <form name="fEditarUsuario" onsubmit="return validaEditarUsuario();">
                  <input id="fNome" class="form-control mb-2 " type="text" placeholder="Nome" value="Nome do Usuário">
                  <input id="fSobrenome" class="form-control mb-2" type="text" placeholder="Sobrenome" value="Sobrenome do Usuário">
                  <input id="fEmail" class="form-control mb-2" type="email" value="email@gmail.com" placeholder="E-mail">
                  <input id="fSenha" class="form-control" type="password" value="atividade010203" placeholder="senha">
                  <div class="position-relative">
                    <button type="submit" class="btn btn-warning position-absolute bottom-0 end-0">Salvar Usuario</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
      </section>
    </main>
    
<?php
  include("footer.php");
?>