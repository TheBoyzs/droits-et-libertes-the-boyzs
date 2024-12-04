<?php 
/**
 * 	Template Name: NewsHub
 *  Template Post Type: page, post
 */
?>

<!--Navigation-->
<?php
	get_header(); // Affiche header.php
?>

<!--Before the posts-->
<section class="news-wrapper">

	<ul class="news-wrapper__list">

		<!--Loop through the posts-->
		<?php
			$articles = new WP_Query('post_type=article'); //Typer d'article à afficher
			while ($articles->have_posts()) : $articles->the_post();
		?>

		<!--Post Template-->
		<li>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?>
			</a>
		</li>

		<?php
			endwhile; 
			wp_reset_postdata(); 
		?>

	<!--After the posts-->
	</ul>
</section>

<!--Partner and footer-->
<?php
	get_footer(); // Affiche footer.php
?>