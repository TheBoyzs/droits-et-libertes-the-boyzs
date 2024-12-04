<?php 
/**
 * 	Template Name: LuttesHub
 * 	Template Post Type: page
 */
?>

 <!--Navigation-->
<?php
	get_header(); // Affiche header.php
?>
 
<!--Before the posts-->
<div class="page-wrapper">
	<section>
		<div>
			<div class="titrelutte">
				<p class="h1">Nos luttes</p>
			</div>
			<div class="descriptionlutte">
				<p>Les comités de travail de la LDL sont les suivants :</p>
			</div>
			<div class="committees">

			<!--Loop through the posts-->
			<?php
				$luttes = new WP_Query('post_type=lutte'); //Typer d'article à afficher
				while ($luttes->have_posts()) : $luttes->the_post();
			?>
	
			<!--Post Template-->
				<a class="committee-card" href="<?php the_permalink(); ?>">
					<i class="fas <?php echo get_field('fa_icon'); ?> icon" style="font-size: 100px;"></i>
					<p class="title"><?php the_title(); ?></p>
				</a>

	<?php
		endwhile; 
		wp_reset_postdata(); 
	?>
 
	<!--After the posts-->
			</div>
        </div>
    </section>
</div>
 
 <!--Partner and footer-->
 <?php
	 get_footer(); // Affiche footer.php
 ?>