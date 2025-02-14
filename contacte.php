<?php
/*
Template Name: Pagina contacte
*/

get_header();

while (have_posts()){
    the_post();
    the_content();
}

get_footer();