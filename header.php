<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
    
        <?php wp_head(); ?>
    </head>
<body>
<header>
    <div class="container-fluid custom-container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark navegacion">
                <div class="container-fluid">
                    <a class="navbar-brand navegacion" href="#">Blogful</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item ms-5">
                                <a class="nav-link active subrayado" aria-current="page" href="index.html">Home</a>
                            </li>
                            <li class="nav-item ms-3">
                                    <a class="nav-link" href="blog.html">Blog</a>
                                </li>
                                <li class="nav-item ms-3">
                                    <a class="nav-link" href="#">Noticias</a>
                                </li>
                                <li class="nav-item ms-3">
                                    <a class="nav-link" href="contacto.html">Contacto</a>
                                </li>
                                <li class="nav-item ms-3 mt-2">
                                    <img src="img/lupa.png" alt="">
                                </li>
                            </ul>
                        </div>
                </div>
            </nav>
        </div>
    </div>
</header>