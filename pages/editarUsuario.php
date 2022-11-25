<?php
  require_once('../assets/php/functions.php');
  include("./header.php");

  usuarioLogado();
  $usuario = pesquisarUsuario();

  if(!empty($_POST)){
    alteraUsuario();
  }
?>

    <main class="container-fluid mx-auto my-3">
      <section class="container">
          <div class="row justify-content-center">
          <div class="col-md-4 col-12 d-flex justify-content-center">
              <img id="imagePlaceholder" class="w-50 my-2 rounded-5 border p-3" src="../assets/icons/user.svg" alt="Foto do Usuario">
            </div>
            <div class="col-md-8 col-12 border rounded-3 h-50">
              <div class="container p-3">
                <form name="fEditarUsuario" onsubmit="return validaEditarUsuario();" action="validaAlteraUsuario.php" method="POST">
                  <input id="fNome" name="nome" class="form-control mb-2 " type="text" placeholder="Novo Nome" value="<?php echo($usuario->nome); ?>">
                  <input id="fSobrenome" name="sobrenome" class="form-control mb-2" type="text" placeholder="Novo Sobrenome" value="<?php echo($usuario->sobrenome); ?>">
                  <input id="fSenhaAntiga" name="senhaAntiga" class="form-control mb-2" type="password" placeholder="Senha Antiga">
                  <input id="fSenhaNova" name="senhaNova" class="form-control" type="password" placeholder="Nova Senha">
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