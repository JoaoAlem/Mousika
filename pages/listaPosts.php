<?php
  require_once('../assets/php/functions.php');

  if(!empty($_GET)){
    $pesquisa = searchMusicas();
  }
  include("./header.php");
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
                  </tr>
                </thead>
                <tbody id="posts">
                  <tr class="position-relative">
                    <th scope="row">1</th>
                    <td><img src="../assets/images/posts/blinding_lights.webp" class="img-thumbnail rounded colImagem" alt="the weekend blinding lights"></td>
                    <td><a class="stretched-link text-dark text-decoration-none" href="./visualizarPost.php">Blinding Lights</a></td>
                    <td>The Weekend</td>
                    <td>Iniciante</td>
                    <td>Piano</td>
                  </tr>
                  <tr class="position-relative">
                    <th scope="row">2</th>
                    <td><img src="../assets/images/posts/Better_when_im_dancing.webp" class="img-thumbnail rounded colImagem" alt="capa do filme peanuts, onde a musica foi estreiada"></td>
                    <td><a class="stretched-link text-dark text-decoration-none" href="./visualizarPost.php">Better When I'm Dancing</a></td>
                    <td>Meghan Trainor</td>
                    <td>Difícil</td>
                    <td>Saxophone</td>
                  </tr>
                  <tr class="position-relative">
                    <th scope="row">3</th>
                    <td><img src="../assets/images/posts/My_Universe.webp" class="img-thumbnail rounded colImagem" alt="capa da musica universe do coldplay"></td>
                    <td><a class="stretched-link text-dark text-decoration-none" href="./visualizarPost.php"></a>My Universe</a></td>
                    <td>Coldplay & BTS</td>
                    <td>Médio</td>
                    <td>Piano</td>
                  </tr>
                  <tr class="position-relative">
                    <th scope="row">4</th>
                    <td><img src="../assets/images/posts/Pompeii.webp" class="img-thumbnail rounded colImagem" alt="capa do album bad blood de bastille"></td>
                    <td><a class="stretched-link text-dark text-decoration-none" href="./visualizarPost.php">Pompeii</a></td>
                    <td>Bastille</td>
                    <td>Expert</td>
                    <td>Bateria</td>
                  </tr>
                  <tr class="position-relative">
                    <th scope="row">5</th>
                    <td><img src="../assets/images/posts/Sit_Still_Look_pretty.webp" class="img-thumbnail rounded colImagem" alt="Daya Sit still look pretty"></td>
                    <td><a class="stretched-link text-dark text-decoration-none" href="./visualizarPost.php">Sit Still, Look Pretty</a></td>
                    <td>Daya</td>
                    <td>Médio</td>
                    <td>Violino</td>
                  </tr> 
                </tbody>           
              </table>
              <div class="col-12">
                <button class="btn btn-warning" onclick="carregarMais('./ajax/carregarPosts.html','posts')">Carregar Mais</button>
              </div>
            </div>
          </div>
      </section>
    </main>
    
<?php
  include("footer.php");
?>