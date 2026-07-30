<?php

// import db
require_once __DIR__ . '/./data/db.php';

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
            <div class="section-title">
                <h3 class="section-title-text">
                    What's On Tonight?
                </h3>
                <p class="fs-5">Pick your favorite title, sit back, and enjoy the show: your Blu-ray and fresh snacks are on the way.</p>
            </div>
            <div class="cards-container container">
                <div class="row">
                    <!-- add foreach with cards -->
                </div>
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
