<?php
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
  
  $caminhoAbsoluto = "http://" . $_SERVER['SERVER_NAME'];
  $GLOBALS['path'] = $caminhoAbsoluto;
 
?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link CSS, Favicons e webmanifest -->
    <link rel="icon" href=<?php echo($caminhoAbsoluto . "/assets/images/favicon/favicon32x32.ico");?> sizes="any"> <!-- 32×32 -->
    <link rel="icon" href=<?php echo($caminhoAbsoluto .  "/assets/images/favicon/favicon.svg");?> type="image/svg+xml">
    <link rel="apple-touch-icon" href=<?php echo($caminhoAbsoluto . "/assets/images/favicon/favicon180.png");?>><!-- 180x180 -->
    <link rel="manifest" href=<?php echo($caminhoAbsoluto . "/assets/others/manifest.webmanifest");?>>

    <link rel="stylesheet" href=<?php echo($caminhoAbsoluto . "/assets/css/bootstrap.min.css");?>>
    <link rel="stylesheet" href=<?php echo($caminhoAbsoluto . "/assets/css/master.css");?>>
    <title>Mousíká</title>
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href=<?php echo($caminhoAbsoluto) . "/" ?>><img src=<?php echo($caminhoAbsoluto) . "/assets/images/logo/LogoPronto.svg" ?> alt="Logo" id="logo" class="d-inline-block align-text-top img-fluid"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href=<?php echo($caminhoAbsoluto) . "/" ?>>Pagina Incial</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href=<?php echo($caminhoAbsoluto) . "/pages/listaPosts.php"?>>Todos os posts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href=<?php echo($caminhoAbsoluto) . "/pages/upload.php"?>>Criar um post 🎧</a>
                </li>
              </ul>
              <form class="d-flex me-lg-5" method="GET" action=<?php echo($caminhoAbsoluto) . '/pages/listaPosts.php'?>  role="search">
                <input name="nome_musica" class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
              </form>
              <?php if(!empty($_SESSION['email']) && !empty($_SESSION['password'])): ?>
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item me-lg-3">
                    <a class="nav-link bg-warning rounded text-dark" aria-current="page" href=<?php echo($caminhoAbsoluto) . "/pages/areaUsuario.php"?>>Area do usuario</a>
                  </li>
                  <li>
                    <a class="nav-link bg-warning rounded text-dark" aria-current="page" href=<?php echo($caminhoAbsoluto) . "/pages/logout.php"?>>Logout</a>
                  </li>
                </ul>
              <?php else : ?>
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item me-lg-3">
                  <a class="nav-link bg-warning rounded text-dark" aria-current="page" href=<?php echo($caminhoAbsoluto) . "/pages/cadastro.php"?>>Cadastre-se</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link bg-warning rounded text-dark" href=<?php echo($caminhoAbsoluto) . "/pages/login.php"?>>Login</a>
                </li>
              </ul>
              <?php endif;?>
            </div>
          </div>
        </nav>
    </header>