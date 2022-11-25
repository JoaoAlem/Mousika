<?php
  require_once('../assets/php/functions.php');
  include("./header.php");

  usuarioLogado();
  $pesquisa = pesquisarFavoritos();
?>

<main class="container-fluid mx-auto my-3">
      <section class="container-fluid">
          <div class="row justify-content-center">
            <div id="conteudo" style="max-height: 80vh;"  class="col-lg-10 col-md-10 col-12 overflow-scroll">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Imagem</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Dificuldade</th>
                    <th scope="col">Instrumento</th>
                  </tr>
                </thead>
                <tbody id="posts">
                  <?php if(empty($pesquisa)): ?>
                    <tr class="position-relative">
                      <td>Não Foram encontrados resultados</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  <?php else: ?>
                    <?php foreach ($pesquisa as $row): ?>
                      <tr class="position-relative">
                        <td><img src=<?php echo("../assets/uploads/images/" . $row['imagem']); ?> class="img-thumbnail rounded colImagem" alt="Imagem de thumbnail"></td>
                        <td><a class="stretched-link text-dark text-decoration-none" href=<?php echo("./visualizarPost.php?id=" . $row['id_musica']); ?>><?php echo(htmlentities($row['nome_musica'])); ?></a></td>
                        <td><?php echo(htmlentities($row['nome_autor'])); ?></td>
                        <td><?php echo(htmlentities($row['dificuldade'])); ?></td>
                        <td><?php echo(htmlentities($row['instrumento'])); ?></td>
                      </tr>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </tbody>           
              </table>
            </div>
          </div>
      </section>
    </main>
    
<?php
  include("footer.php");
?>