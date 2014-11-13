<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
<div class="Content-wrap">
	<div class="Intro">
		<div class="u-gridContainer">
			<div class="u-gridRow">
				<div class="Intro-text">
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
						<div id="shoppingcart"></div>
	    		</div>
			</div>
		</div>	
	</div>

<div class="u-gridContainer">
	<div class="u-gridRow">
		<!-- <p class="Box-title">BANDEN ZOEKEN</p> -->
			<div class="Box Box-tires">
				<p class="Box-title">BANDEN ZOEKEN</p>
				<div class="Box-content"> 
						<?php if ( dynamic_sidebar('Banden') ) : else : endif; ?>	
					</div>
				</div>

		<div class="Box-wrap">
			<!-- <p class="Box-title">VELGEN ZOEKEN</p> -->
				<div class="Box Box-rims">
					<p class="Box-title">VELGEN ZOEKEN</p>
					<div class="Box-content">
						<?php if ( dynamic_sidebar('Velgen') ) : else : endif; ?>	
					</div>
				</div>
			</div>
		</div>
	</div> 

	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="Search-results">
				<p class="Box-title">ZOEKRESULTATEN</p>
				<div class="filter_search_wrap">
					<div id="filter_search_results"></div>
				</div>
			</div>
				<p>Alle <strong><u>banden</u></strong>prijzen zijn per stuk, inclusief BTW, montage en balanceren.</p>
				<p>Alle <strong><u>velgen</u></strong>prijzen zijn per stuk, inclusief BTW, <strong>exclusief</strong> montagekosten.</p>
				<p>Tevens is het mogelijk uw banden met stikstof te vullen tegen een meerprijs van €2.50 per band.</p>
				<div class="Tires-img">
					 <a href="home"><img alt="tires" src="<?php echo get_stylesheet_directory_uri(); ?>/img/tires.png" /></a>
				</div>
		</div>
	</div>


</div>

<?php get_footer(); ?>
