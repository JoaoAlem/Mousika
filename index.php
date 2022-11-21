<?php
    require_once("assets/php/functions.php");
    include("pages/header.php");
?>

<main class="container-fluid">
    <article>
        <div id="carouselCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                <div class="mask"></div>
                <img src="./assets/images/index/piano.webp" class="d-block w-100" alt="Um Homem sentado em um banco tocando violão">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Sua fonte inspiração diaria!</h5>
                    <p>Aqui você encontra diversos conteúdos para qualquer momento.</p>
                </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                <div class="mask"></div>
                <img src="./assets/images/index/partitura.webp" class="d-block w-100" alt="O intrumento piano com uma partitura em cima das teclas">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Para qualquer instrumento.</h5>
                    <p>Aqui todos podem postar qualquer partitura para qualquer instrumento. </p>
                </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                <div class="mask"></div>
                <img src="./assets/images/index/violino.webp" class="d-block w-100" alt="O instrumento Saxophone com uma partitura abaixo dele">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Em qualquer momento, em qualquer lugar</h5>
                    <p>Contanto que possua uma conexão com a internet 😉</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
    </article>
</main>

<section class="d-flex align-middle my-3 justify-content-center">
        <div class="card m-auto" style="width: 18rem;">
            <img src="./assets/images/index/meninaTocandoPiano.webp" class="card-img-top" alt="mulher tocando piano">
            <div class="card-body">
                <p class="card-text">Estou aprendendo a tocar piano, e essa é a melhor plataforma que ja encontrei no meio de minhas pesquisas!</p>
            </div>
        </div>
        <div class="card m-auto" style="width: 18rem;">
            <img src="./assets/images/index/mulherTocandoVioloncelo.webp" class="card-img-top" alt="mulher tocando violoncelo ao ar livre">
            <div class="card-body">
                <p class="card-text">Independente se você é novato ou experiente, o Mousíká é a plataforma ideal, encontrei desde as partituras mais simples até as mais difíceis</p>
            </div>
        </div>
        <div class="card m-auto" style="width: 18rem;">
            <img src="./assets/images/index/homemTocandoSaxophone.webp" class="card-img-top" alt="homem tocando saxophone na rua">
            <div class="card-body">
                <p class="card-text">Não consegui encontrar muitas partituras de saxophone em outro lugar, mas quando achei o Mousíká, minha vida mudou!</p>
            </div>
        </div>
</section>

<section class="container-fluid">
    <div class="position-relative top-0">
    <div class="w-100 background-ilaranja h-100 position-absolute opacity-25"></div>
    <div class="container d-flex position-relative ">
        <div class="col-6 m-auto p-4">
        <img src="./assets/images/index/cachorroPartituras.webp" class="image-fluid w-100 rounded" alt="Cachorrinho em uma escada sentado em cima das partituras">
        </div>
        <div class="col-6 m-auto card">
        <div class="card-body text-center">
            <h5>Comece Agora 🎵</h5>
            <p>Descubra um novo mundo, cheio de inspiração e conhecimento!</p>
            <p>Venha fazer parte dessa comunidade e contribuir.</p>
            <a class="btn btn-warning" href="./pages/sobre.php">Saiba Mais</a>
        </div>
        </div>
    </div>
    </div>
</div>

<?php
    include("pages/footer.php");
?>