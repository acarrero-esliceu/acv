<?php
/*
Template Name: Pagina contacte
*/

get_header(); ?>

<div class="row mt-5">
            <div class="col-md-6">
                <div class="text-center">
                    <img class="mt-4 mb-5 img-fluid" src="/wp-content/themes/acv/img/Formulario.png" alt="">
                </div>
            </div>
    <div class="container mt-5">
        <div class="row border-top border-light-subtle border-3 align-items-start g-5 pt-4 mt-5">
            <div class="col-md-6">
                <?php
                while (have_posts()){
                    the_post();
                    the_content();
                } ?>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
            <div class="row border-top border-light-subtle border-3 align-items-start g-5 pt-4"></div>
            <div class="col-12 text-center mt-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3074.158671633507!2d2.68676007660979!3d39.601107971582465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1297935d441c9571%3A0xa01dc49e4565742f!2sEs%20Liceu!5e0!3m2!1ses!2ses!4v1737098983427!5m2!1ses!2ses" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
</div>

<?php
get_footer(); ?>