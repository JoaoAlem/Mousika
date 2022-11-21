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
      <section class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10 col-12">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Dificuldade</th>
                    <th scope="col">Instrumento</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>
                <tbody id="posts">
                  <tr class="position-relative">
                    <th scope="row">1</th>
                    <td><img src="../assets/images/posts/blinding_lights.webp" class="img-thumbnail rounded colImagem" alt="the weekend blinding lights"></td>
                    <td><a class="stretched-link text-dark text-decoration-none" href="./visualizarPost.html">Blinding Lights</a></td>
                    <td>The Weekend</td>
                    <td>Iniciante</td>
                    <td>Piano</td>
                    <td>
                      <div class="row">
                        <button class="btn btn-warning col-md-5 col-12"><img class="w-100" src="../assets/images/meusPosts/pen-solid.svg" alt=""></button>
                        <button class="btn btn-warning col-md-5 mx-auto col-12"><img class="w-100" src="../assets/images/meusPosts/trash-solid.svg" alt=""></button>
                      </div>
                    </td>
                  </tr>
                  <tr class="position-relative">
                    <th scope="row">2</th>
                    <td><img src="../assets/images/posts/Better_when_im_dancing.webp" class="img-thumbnail rounded colImagem" alt="capa do filme peanuts, onde a musica foi estreiada"></td>
                    <td><a class="stretched-link text-dark text-decoration-none" href="./visualizarPost.html">Better When I'm Dancing</a></td>
                    <td>Meghan Trainor</td>
                    <td>Difícil</td>
                    <td>Saxophone</td>
                    <td>
                      <div class="row">
                        <button class="btn btn-warning col-md-5 col-12"><img class="w-100" src="../assets/images/meusPosts/pen-solid.svg" alt=""></button>
                        <button class="btn btn-warning col-md-5 mx-auto col-12"><img class="w-100" src="../assets/images/meusPosts/trash-solid.svg" alt=""></button>
                      </div>
                    </td>
                  </tr>        
              </table>
              <div class="col-12">
                <button class="btn btn-warning" onclick="carregarMais('./ajax/carregarPostsUser.html','posts')">Carregar Mais</button>
              </div>
            </div>
          </div>
      </section>
    </main>
    
<?php
  include("footer.php");
?>