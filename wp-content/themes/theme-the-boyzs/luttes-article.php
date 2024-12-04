<?php 
/**
 * 	Template Name: Lutte
 * 	Template Post Type: lutte
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<div class="page-wrapper">
	<section class="herolutte">
		<div>
			<div class="titrelutte">
				<p class="h1"><?php echo get_field('titre_lutte'); ?></p>
			</div>
			<div class="descriptionlutte">
				<p><a href="../">Nos luttes</a> > <a href="<?php echo get_permalink(); ?>"><?php echo get_field('titre_lutte'); ?></a></p>
			</div>
		</div>
	</section>
	<section class="textelutte">
		<p><?php echo get_field('texte_lutte'); ?></p>
	</section>
	<section class="articleslutte">
		<p class="h1" id="textcarte">Articles liés</p>
		<hr id="barrecarte">
		<div class="section-card">
			<a href="headline.html">
				<article class="section-card__card">
					<img src="medias/nouvelle1.png" alt="nouvelle #1">
					<div class="section-card__container">
						<h4>Pour l'interdiction des interpellations policières une bonne fois pour toute.</h4>
						<h5>4 septembre 2024 | Communiqués</h5>

					</div>
				</article>

			</a>
			<a href="">
				<article class="section-card__card">
					<img src="medias/nouvelle2.png" alt="nouvelle #2">
					<div class="section-card__container">
						<h4>Le Canada doit stopper de façon urgente l'exportation d'armes à destination d'Israël
						</h4>
						<h5>27 août 2024 | Lettre ouverte</h5>
					</div>
				</article>
			</a>
			<a href="">
				<article class="section-card__card">
					<img src="medias/nouvelle3.png" alt="nouvelle #3">
					<div class="section-card__container">
						<h4>Haine et panique morale au croisement de la transphobie et de la domination adulte.</h4>
						<h5>27 août 2024 | Lettre ouverte</h5>
					</div>

				</article>
			</a>
			<a href="">
				<article class="section-card__card">
					<img src="medias/nouvelle3.png" alt="nouvelle #3">
					<div class="section-card__container">
						<h4>Haine et panique morale au croisement de la transphobie et de la domination adulte.</h4>
						<h5>27 août 2024 | Lettre ouverte</h5>
					</div>

				</article>
			</a>
			<a href="">
				<article class="section-card__card">
					<img src="medias/nouvelle3.png" alt="nouvelle #3">
					<div class="section-card__container">
						<h4>Haine et panique morale au croisement de la transphobie et de la domination adulte.</h4>
						<h5>27 août 2024 | Lettre ouverte</h5>
					</div>

				</article>
			</a>
			<a href="">
				<article class="section-card__card">
					<img src="medias/nouvelle3.png" alt="nouvelle #3">
					<div class="section-card__container">
						<h4>Haine et panique morale au croisement de la transphobie et de la domination adulte.</h4>
						<h5>27 août 2024 | Lettre ouverte</h5>
					</div>
				</article>
			</a>
		</div>
	</section>
</div>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;
	get_footer(); // Affiche footer.php 
?>