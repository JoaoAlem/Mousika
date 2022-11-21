<?php
  include("./header.php");
?>

    <main class="container-fluid mx-auto my-3">
      <section class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-12">
              <h4>Questões Frequentes (FAQs)</h4>

              <!-- Primeira Pergunta -->
              <p><button class="btn btn-warning text-start border w-100" type="button" data-bs-toggle="collapse" data-bs-target="#pergunta1" aria-expanded="false" aria-controls="pergunta1">Q: Esse projeto será mantido por um longo tempo?</button></p>
              <div class="collapse" id="pergunta1">
                <div class="card card-body mb-3">
                  <p>R: Não sei por quanto tempo, por enquanto é só um projeto para a minha faculdade.</p>
                </div>
              </div>

              <!-- Segunda Pergunta -->
              <p><button class="btn btn-warning text-start border w-100" type="button" data-bs-toggle="collapse" data-bs-target="#pergunta2" aria-expanded="false" aria-controls="pergunta2">Q: Qual a inspiração desse projeto?</button></p>
              <div class="collapse" id="pergunta2">
                <div class="card card-body mb-3">
                  <p>R: Esse projeto começou em um outro curso que eu (João Alem) fiz, porém ele não saiu do jeito que eu esperava, por mais que estivesse orgulhoso, eu queria fazer mais. Então surgiu uma atividade da faculdade para ser feita então aproveitei a oportunidade!</p>
                </div>
              </div>

              <!-- Terceira Pergunta -->
              <p><button class="btn btn-warning text-start border w-100" type="button" data-bs-toggle="collapse" data-bs-target="#pergunta3" aria-expanded="false" aria-controls="pergunta3">Q: Quais bibliotecas serão usadas para fazer esse projeto?</button></p>
              <div class="collapse" id="pergunta3">
                <div class="card card-body mb-3">
                  <p>R: Mais tarde, quando o projeto já estiver em seu caminho final, colocarei uma pagina de créditos. Até la segue algumas das bibliotecas que estarei usando:</p>
                  <ul>
                    <li>Open Sheet Music Display (OSDM): <a class="text-decoration-none" href="https://github.com/opensheetmusicdisplay/opensheetmusicdisplay">Github OSDM</a></li>
                    <li>Bootstrap: <a class="text-decoration-none" href="https://getbootstrap.com/">Site oficial</a></li>
                  </ul>
                </div>
              </div>

              <!-- Quarta Pergunta -->
              <p><button class="btn btn-warning text-start border w-100" type="button" data-bs-toggle="collapse" data-bs-target="#pergunta4" aria-expanded="false" aria-controls="pergunta4">Q: Qual o objetivo do projeto Mousíká?</button></p>
              <div class="collapse" id="pergunta4">
                <div class="card card-body mb-3">
                  <p>R: A intenção é que ele seja uma especie de "rede social" para músicos, sem anuncios e com o código aberto!</p>
                </div>
              </div>

              <!-- Quinta Pergunta -->
              <p><button class="btn btn-warning text-start border w-100" type="button" data-bs-toggle="collapse" data-bs-target="#pergunta5" aria-expanded="false" aria-controls="pergunta5">Q: Qualquer um pode fazer um post?</button></p>
              <div class="collapse" id="pergunta5">
                <div class="card card-body mb-3">
                  <p>R: Sim e não, somente as pessoas que possuem um login podem fazer um post.</p>
                </div>
              </div>
            </div>
          </div>
      </section>
    </main>

<?php
  include("footer.php");
?>