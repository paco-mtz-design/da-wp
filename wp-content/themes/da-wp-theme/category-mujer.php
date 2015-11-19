<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div id="content" class="single_lookbook">

				<div class="lookbook_images">
					<h2>Colección July : Prendas para Mujer</h2>
					<ul>
						<?php get_template_part('loop-productos'); ?>
					</ul>
				</div>

			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
