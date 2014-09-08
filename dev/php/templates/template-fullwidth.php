<?php
/*
Template Name: full-widht no sidebar 
*/
?>

<?php get_header(); ?>
<div class="Content-wrap">
	<div class="Intro">
		<div class="u-gridContainer">
			<div class="u-gridRow">
				<div class="Intro-text u-gridCol8">
					<p>
					Bekijk het product hieronder, en klik op de toevoegen knop om het aan de bestelling toe te voegen. 				
					</p>
				</div>
				<div class="Shoppingcart u-gridCol4">
					<div id="shoppingcart"></div>
	    		</div>
			</div>
		</div>	
	</div>
</div>
<div class="u-gridContainer">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article class="Content Content--home" id="post-<?php the_ID(); ?>">
		<!--<h2><?php the_title(); ?></h2>-->
		<div>
			<?php the_content(); ?>
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		</div>
	</article>
<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>

