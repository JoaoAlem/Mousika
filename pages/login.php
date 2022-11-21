<?php
  include("./header.php");
?>

    <main class="container-fluid mx-auto my-3">
      <section class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10 col-12">
              <div class="card w-50 mx-auto">
                <div class="card-body m-auto">
                  <h4 class="text-center">Login</h4>
                  <form action="validaLogin.php" name="formLogin" onsubmit="return validaLogin()" method="POST" class="row g-2">
                    <div class="col-12">
                      <label for="fEmail" class="form-label">E-mail</label>
                      <input type="email" name="email" class="form-control" id="fEmail">
                    </div>
                    <div class="col-12">
                      <label for="fSenha" class="form-label">Senha</label>
                      <input type="password" name="senha" class="form-control" id="fSenha">
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-warning">Continuar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
      </section>
    </main>
    
<?php
  include("footer.php");
?>