<?php
  require_once('../assets/php/functions.php');
  include("./header.php");

  usuarioLogado();
  $usuario = pesquisarUsuario();
?>

    <main class="container-fluid mx-auto my-3">
    <h4 class="mx-auto text-center">Seja bem-vindo! <?php echo(htmlentities($usuario->nome)); ?></h4>
      <section class="container">
          <div class="row justify-content-center">
            <div class="col-md-4 col-12 d-flex justify-content-center">
              <img id="imagePlaceholder" class="w-50 my-2 rounded-5 border p-3" src="../assets/icons/user.svg" alt="Foto do Usuario">
            </div>
            <div class="col-md-8 col-12 border rounded-3 h-50">
              <div class="container p-3">
                <input class="form-control mb-2 " type="text" value="<?php echo(htmlentities($usuario->nome)); ?>" aria-label="readonly nome do usuario" readonly>
                <input class="form-control mb-2" type="text" value="<?php echo(htmlentities($usuario->sobrenome)); ?>" aria-label="readonly sobrenome do usuario" readonly>
                <input class="form-control" type="text" value="<?php echo(htmlentities($usuario->email)); ?>" aria-label="readonly E-mail" readonly>
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