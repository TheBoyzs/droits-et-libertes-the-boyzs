<?php 
/**
 * 	Template Name: Article
 * 	Template Post Type: article
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>


	<article>
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<h2>
				<?php the_title(); // Titre de la page ?>
			</h2>
		<?php endif; ?>
		
		<?php the_content(); // Contenu principal de la page ?>
	</article>

	<div class="hero-image" style="background-image:url('<?php the_field('image_cover'); ?>')">
        <div class="hero-image__text" name="text">
            <h1><?php echo get_field('titre_du_resume'); ?></h1><br>
            <h3><?php echo get_field('texte_du_resume'); ?></h3>
        </div>
    </div>

	<section class="headline-wrapper">
        <h1 class="headline-title">
			<?php echo get_field('titre_de_larticle'); ?>
        </h1>
        <article class="news-article">
            <p>
				<b><?php echo get_field('lieu'); ?>, le <?php echo get_field('date_de_publication'); ?></b>
				 <?php echo get_field('texte_de_larticle'); ?>
			</p>

		</article>
    </section>
	<!-- Navigation entre articles -->
	<section class="nextprev-wrapper">
		<div class="nextprev-wrapper__container">
			<?php
				// Previous Post Link
				$previous_post = get_previous_post();
				if (!empty($previous_post)) : ?>
					<a href="<?php echo get_permalink($previous_post->ID); ?>">
						<button class="nextprev-wrapper__prev" aria-label="Previous">Article précédent</button>
					</a>
				<?php else : ?>
					<a>
						<button class="nextprev-wrapper__prev" aria-label="Previous" style="background-color:#666" disabled>Article précédent</button>
					</a>
			<?php endif; ?>

			<div class="nextprev-wrapper__divider"></div>

			<?php
				// Next Post Link
				$next_post = get_next_post();
				if (!empty($next_post)) : ?>
					<a href="<?php echo get_permalink($next_post->ID); ?>">
						<button class="nextprev-wrapper__prev" aria-label="Next">Article suivant</button>
					</a>
				<?php else : ?>
					<a>
						<button class="nextprev-wrapper__prev" aria-label="Next" style="background-color:#666" disabled>Article suivant</button>
					</a>
			<?php endif; ?>
		</div>
	</section>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>