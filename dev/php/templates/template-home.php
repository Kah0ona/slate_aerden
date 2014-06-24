<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
<div class="Content-wrap">
	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="u-gridCol7">
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
				<div class="Shoppingcart u-gridCol4">
	    		<img src="http://placehold.it/950x500/2079B0/2079B0">
    		</div>
		</div>
	</div>
</div>

<div class="u-gridContainer">
	<div class="u-gridRow">
		<div class="Banden-zoeken u-gridCol6">
			<p class="Box-text">BANDEN ZOEKEN</p>
	    	<img src="http://placehold.it/950x500/2079B0/2079B0">
	    </div>

	    <div class="Velgen-zoeken u-gridCol6">
			<p class="Box-text">VELGEN ZOEKEN</p>
	    	<img src="http://placehold.it/950x500/2079B0/2079B0">
	    </div>
	</div>
</div>



<div class="u-gridContainer">
	<div class="u-gridRow">
		<div class="Zoekresultaten">
			<p class="Box-text">ZOEKRESULTATEN</p>
	    	<img src="http://placehold.it/950x500/2079B0/2079B0">
	    	<p>Alle prijzen zijn per stuk, inclusief BTW, montage en balanceren.</p>
	    	<p>Tevens is het mogelijk uw banden met stikstof te vullen tegen een meerprijs van €2.50 per band.</p>
	    </div>
	</div>
</div>
<?php get_footer(); ?>
