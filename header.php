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
                    <?php


                    wp_nav_menu(array(
                        'menu' => 'primary',
                        'theme_location' => 'primary',
                        'container' => 'ul',
                        'menu_class' => 'align-items-center justify-content-evenly w-100 navbar-nav m-auto mb-2 mb-lg-0',
                        'add_li_class' => 'nav-item m-1',
                        'link_class' => 'nav-link text-decoration-none nav-item',
                                    ));

                                    
                                    ?>
                <a href="/"><i class="bi bi-search"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</nav>
</header>