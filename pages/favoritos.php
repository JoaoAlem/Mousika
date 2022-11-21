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
                  </tr>
                </thead>
                <tbody id="posts">
                  <tr class="position-relative">
                    <th scope="row">1</th>
                    <td><img src="../assets/images/posts/Sit_Still_Look_pretty.webp" class="img-thumbnail rounded colImagem" alt="Daya Sit still look pretty"></td>
                    <td><a class="stretched-link text-dark text-decoration-none" href="./visualizarPost.html">Sit Still, Look Pretty</a></td>
                    <td>Daya</td>
                    <td>Médio</td>
                    <td>Violino</td>
                  </tr> 
                  <tr class="position-relative">
                    <th scope="row">2</th>
                    <td><img src="../assets/images/posts/Better_when_im_dancing.webp" class="img-thumbnail rounded colImagem" alt="capa do filme peanuts, onde a musica foi estreiada"></td>
                    <td><a class="stretched-link text-dark text-decoration-none" href="./visualizarPost.html">Better When I'm Dancing</a></td>
                    <td>Meghan Trainor</td>
                    <td>Difícil</td>
                    <td>Saxophone</td>
                  </tr>
                </tbody>           
              </table>
              <div class="col-12">
                <button class="btn btn-warning" onclick="carregarMais('./ajax/carregarFavoritos.html','posts')">Carregar Mais</button>
              </div>
            </div>
          </div>
      </section>
    </main>
    
<?php
  include("footer.php");
?>