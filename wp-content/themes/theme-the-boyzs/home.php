<?php
/**
 * Template Name: Accueil
 * Template Post Type: page
 */

get_header(); // Affiche header.php

// Est-ce que nous avons des pages à afficher ?
if ( have_posts() ) : 
    // Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
    while ( have_posts() ) : the_post(); 
?>

    <article>
        <h2><?php the_title(); // Titre de la page ?></h2>
        <?php the_content(); // Contenu principal de la page ?>
    </article>

   

<?php 
    endwhile; // Fermeture de la boucle
else : 
    get_template_part('partials/404'); // Affiche partials/404.php si aucun contenu
endif;

get_footer(); // Affiche footer.php 
