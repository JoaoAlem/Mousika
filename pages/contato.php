<?php
  include("./header.php");
?>

    <main class="container-fluid mx-auto my-3">
      <section class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-12">
              <h4>Contato</h4>
              <form action="" name="formContato" onsubmit="return validaFormContato()" method="post">
                <div class="form-floating mb-3">
                  <input type="email" name="fEmail" class="form-control" id="formEmail" placeholder="name@example.com" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">Seus dados são confidenciais, não compartilharemos seu e-mail com ninguem!.</div>
                  <label for="formEmail">Endereço de e-mail</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" name="fNome" class="form-control" id="formNome" placeholder="Jonh Doe">
                  <label for="formNome">Nome</label>
                </div>
                <div class="form-floating">
                  <textarea class="form-control" name="fMensagem" placeholder="Digite o seu comentário" id="floatingTextarea"></textarea>
                  <label for="floatingTextarea">Sua Mensagem</label>
                </div>
                <button type="submit" id="btnEnviar" class="btn btn-primary my-3">Enviar</button>
              </form>
            </div>
          </div>
      </section>
    </main>

<?php
  include("footer.php");
?>