<?php

// import db
require_once __DIR__ . '/./data/db.php';

//genre map for assignign badge style
$genreClasses = [
    'Action'      => 'badge-action',
    'Adventure'   => 'badge-adventure',
    'Animation'   => 'badge-animation',
    'Comedy'      => 'badge-comedy',
    'Crime'       => 'badge-crime',
    'Documentary' => 'badge-documentary',
    'Drama'       => 'badge-drama',
    'Fantasy'     => 'badge-fantasy',
    'Horror'      => 'badge-horror',
    'Romance'     => 'badge-romance',
    'Sci-Fi'      => 'badge-scifi',
    'Thriller'    => 'badge-thriller',
];

$currentYear = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Sofa Cinema</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- style CSS -->
    <link rel="stylesheet" href="./styles/index.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- header -->
    <header class=p-5>
        <h1 class="page-title">
            The Sofa Cinema
        </h1>
        <div>
            <p class="fs-4">
                Ditch the packed cinemas — welcome to your private film lounge.
            </p>
        </div>
    </header>
    <!-- main -->
    <main class="flex-grow-1 p-4">
        <section>
            <div class="section-title pb-3 px-3">
                <h3 class="section-title-text">
                    What's On Tonight?
                </h3>
                <p class="fs-5">Pick your favorite title, sit back, and enjoy the show: your Blu-ray and fresh snacks are on the way.</p>
            </div>
            <div class="cards-container container">
                <ul class="row list-unstyled g-3 align-items-center">
                    <!-- add foreach with cards -->
                    <?php foreach($movies as $movie) : ?>
                        <li class="col-sm-12 col-md-6 col-lg-4 mb-3">
                            <div class="card border-0 h-100 p-2">
                                <div class="card-body p-2 d-flex flex-column">
                                    
                                    <!-- Badge -->
                                    <div class="mb-2">
                                        <span class="badge <?= $movie->isRent ? 'bg-warning text-dark' : 'bg-success' ?>" style="font-size: 0.7rem;">
                                            <?= $movie->checkAvailability() ?>
                                        </span>
                                    </div>

                                    <!-- Poster -->
                                    <img src="<?= $movie->imgUrl ?>" 
                                        class="card-img-top mb-2" 
                                        alt="<?= htmlspecialchars($movie->title) ?>">

                                    <!-- Title&Director -->
                                    <h5 class="card-title font-display fw-bold mb-0 fs-6"><?= $movie->title ?></h5>
                                    <p class="text-muted mb-2 small"><?= $movie->director ?></p>

                                    <!-- genres -->
                                    <div class="d-flex flex-wrap gap-1 mb-2">
                                        <?php foreach($movie->genres as $genre) : ?>
                                            <?php 
                                                $genreName = is_object($genre) ? $genre->name : $genre;
                                                $badgeClass = $genreClasses[$genreName] ?? 'badge-secondary';
                                            ?>
                                            <span class="badge-genre badge-soft <?= $badgeClass ?>">
                                                <?= $genreName ?>
                                            </span>
                                        <?php endforeach; ?>
                                    </div>

                                    <!-- year -->
                                    <p class="card-text mb-2 small">
                                        <span class="fw-bold">Year:</span> <?= $movie->year ?>
                                    </p>

                                    <!-- synopsis -->
                                    <p class="card-text small fw-bold mb-0">Synopsis</p>
                                    <p class="card-text movie-plot mb-2 small fst-italic">
                                        "<?= $movie->synopsis ?>"
                                    </p>

                                    <!-- Cast -->
                                    <div class="mt-auto pt-1 border-top border-secondary border-opacity-10">
                                        <p class="card-text small fw-bold mb-0">Cast</p>
                                        <p class="card-text movie-cast small fst-italic text-muted mb-0">
                                            "<?= $movie->cast ?>"
                                        </p>
                                    </div>                                

                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                    </ul>
            </div>
        </section>
    </main>
    <!-- footer -->
    <footer class="mt-auto">
        <p class="copyright-text text-center text-muted fs-6">
        The Sofa Cinema &copy; <?php echo $currentYear ?> - All rights reserved.
        </p>
    </footer>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
