<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div id="content" class="home_grid">

				<div id="featured_slider" class="col3">
					<ul>
						<li style="background-image:url(<?php the_field('home-main-featured', 'option'); ?>);">
							<h2><a href="<?php the_field('home-main-featured-link-url', 'option'); ?>"><?php the_field('home-main-featured-caption', 'option'); ?><br> <span><?php the_field('home-main-featured-link', 'option'); ?></span></a></h2>
						</li>
					</ul>
				</div>
				<div
				class="col1"
				style="background-image:url(
					<?php the_field('home-grid-a', 'option'); ?>
					);">
					<p>
						<a href="<?php the_field('home-grid-a-link', 'option'); ?>">
						<?php the_field('home-grid-a-txt', 'option'); ?></a>
					</p>
				</div>

				<div
				class="col2"
				style="background-image:url(
					<?php the_field('home-grid-b', 'option'); ?>
					);">
					<p>
						<a href="<?php the_field('home-grid-b-link', 'option'); ?>">
						<?php the_field('home-grid-b-txt', 'option'); ?></a>
					</p>
				</div>

				<div
				class="col1"
				style="background-image:url(
					<?php the_field('home-grid-c', 'option'); ?>
					);">
					<p>
						<a href="<?php the_field('home-grid-c-link', 'option'); ?>">
						<?php the_field('home-grid-c-txt', 'option'); ?></a>
					</p>
				</div>

				<!-- Newsletter -->
				<div
				class="col1"
				style="background-image:url(
					<?php the_field('home-newsletter-image', 'option'); ?>
					);">
					<p>
						<h2><a href="<?php the_field('home-newsletter-link-url', 'option'); ?>">
						<?php the_field('home-newsletter-link', 'option'); ?></a></h2>
					</p>
				</div>

				<div
				class="col1"
				style="background-image:url(
					<?php the_field('home-grid-d', 'option'); ?>
					);">
					<p>
						<a href="<?php the_field('home-grid-d-link', 'option'); ?>">
						<?php the_field('home-grid-d-txt', 'option'); ?></a>
					</p>
				</div>

				<div
				class="col2"
				style="background-image:url(
					<?php the_field('home-grid-e', 'option'); ?>
					);">
					<p>
						<a href="<?php the_field('home-grid-e-link', 'option'); ?>">
						<?php the_field('home-grid-e-txt', 'option'); ?></a>
					</p>
				</div>

				<div
				class="col1"
				style="background-image:url(
					<?php the_field('home-grid-f', 'option'); ?>
					);">
					<p>
						<a href="<?php the_field('home-grid-f-link', 'option'); ?>">
						<?php the_field('home-grid-f-txt', 'option'); ?></a>
					</p>
				</div>

			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
