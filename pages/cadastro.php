<?php
  include("./header.php");
?>

    <main class="container-fluid mx-auto my-3">
      <section class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10 col-12">
              <div class="card">
                <div class="card-body m-auto">
                  <h4 class="text-center">Cadastro de novo usuário</h4>
                  <form action="validaCadastro.php" name="formCadastro" onsubmit="return validaCadastro()" method="post"  class="row g-2">
                    <div class="col-md-6">
                      <label for="nome" class="form-label">Nome</label>
                      <input type="text" class="form-control" name="nome" id="fNome" maxlength="30" size="30">
                    </div>
                    <div class="col-md-6">
                      <label for="sobrenome" class="form-label">Sobrenome</label>
                      <input type="text" class="form-control" name="sobrenome" id="fSobrenome" maxlength="30" size="30">
                    </div>
                    <div class="col-md-6">
                      <label for="email" class="form-label">E-mail</label>
                      <input type="email" class="form-control" name="email" id="fEmail" maxlength="100" size="100">
                    </div>
                    <div class="col-md-6">
                      <label for="fConfirmaEmail" class="form-label">Confirmar e-mail</label>
                      <input type="email" class="form-control" id="fConfirmaEmail" maxlength="100" size="100">
                    </div>
                    <div class="col-md-6">
                      <label for="senha" class="form-label">Senha</label>
                      <input type="password" class="form-control" name="senha" id="fSenha" maxlength="30" size="30">
                    </div>
                    <div class="col-md-6">
                      <label for="fConfirmaSenha" class="form-label">Confirmar senha</label>
                      <input type="password" class="form-control" id="fConfirmaSenha" maxlength="30" size="30">
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="politicaCheck" required>
                        <label class="form-check-label" for="politicaCheck">Declaro que li e aceito a <a class="text-decoration-none" href="./privacidade.html">Política de privacidade</a> e <a class="text-decoration-none" href="./terms.html">Termos de uso</a></label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-warning">Concluir cadastro</button>
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