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

					<?php

					$args = array(
						'numberposts' => -1, // Using -1 loads all posts
						'orderby' => 'menu_order', // This ensures images are in the order set in the page media manager
						'order'=> 'ASC',
						'post_mime_type' => 'image', // Make sure it doesn't pull other resources, like videos
						'post_parent' => $post->ID, // Important part - ensures the associated images are loaded
						'post_status' => null,
						'post_type' => 'attachment'
					);

					$images = get_children( $args );
					// continued below ...
					?>

					<?php if($images){ ?>
						<script type="text/javascript">

						$(window).load(function() {

							$('#slideshow').desoSlide({
								thumbs: $('ul.thumbs li > a'),
								overlay: 'none',
								interval: 1500,
								effect: {
									provider: null,
									name: 'fade',
								},
								controls: {
									show: false,
									keys: true
								}
							});

						});
						</script>

						<ul class="thumbs">
							<?php foreach($images as $image){ ?>
								<li>
									<a href="<?php echo $image->guid; ?>">
										<img src="<?php echo $image->guid; ?>" alt="<?php echo $image->post_title; ?>" title="<?php echo $image->post_title; ?>" />
									</a>
								</li>
							<?php } ?>
						</ul>

						<div id="slideshow">
							<?php foreach($images as $image){ ?>
								<img src="<?php echo $image->guid; ?>" alt="<?php echo $image->post_title; ?>" title="<?php echo $image->post_title; ?>" />
							<?php } ?>
						</div>

					<? } ?>
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
