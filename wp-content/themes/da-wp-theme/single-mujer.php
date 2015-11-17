<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<div id="content" class="single_product">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<div class="product_info">

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="product_image">
					<ul class="thumbs">
						<li></li>
					</ul>
					<div id="slideshow">
						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
								<?php the_post_thumbnail(); // Fullsize image for the single post ?>
						<?php endif; ?>
						<!-- /post thumbnail -->
					</div>
				</div>

				<div class="product_description">

					<h2><?php the_title(); ?></h2>
					<?php
					// check if the repeater field has rows of data
					if( have_rows('detalles_prenda_individual') ):
						// loop through the rows of data
						while ( have_rows('detalles_prenda_individual') ) : the_row();
					?>
					<?php the_sub_field('descripcion_prenda'); ?>
					<p><strong>$<?php the_sub_field('precio'); ?>.00 mxn</strong></p>
					<p><?php the_sub_field('tallas'); ?></p>

					<?php if( get_sub_field('liga_kichink') ): ?>
						<p><a class="buy_button" href="<?php the_sub_field('liga_kichink'); ?>">Comprar en Kichink</a></p>
					<?php endif; ?>

					<?php endwhile;

					else :
						echo 'No rows found';
					endif;
					?>

				</div>

			</article>
			<!-- /article -->

		</div>
		<!-- /product info-->

	<?php endwhile; ?>
	<?php else: ?>
		<!-- article -->
		<article>
			<h1><?php _e( 'No se encontró contenido.', 'html5blank' ); ?></h1>
		</article>
		<!-- /article -->
	<?php endif; ?>

	</div>
	<!-- /#content -->

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
