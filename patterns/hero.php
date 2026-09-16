<?php
/**
 * Title: Club100 Hero
 * Slug: club100/hero
 * Categories: featured
 * Inserter: yes
 */
?>

<!-- wp:group {"align":"full","className":"club100-section-lg club100-bg-white club100-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull club100-section-lg club100-bg-white club100-hero">

	<!-- wp:group {"className":"club100-container","layout":{"type":"default"}} -->
	<div class="wp-block-group club100-container">

		<!-- wp:group {"className":"club100-hero-grid","layout":{"type":"default"}} -->
		<div class="wp-block-group club100-hero-grid">

			<!-- wp:group {"className":"club100-hero-copy","layout":{"type":"default"}} -->
			<div class="wp-block-group club100-hero-copy">

				<!-- wp:paragraph {"className":"club100-eyebrow"} -->
				<p class="club100-eyebrow">
					CLUB100 FITNESS &amp; WELL-BEING
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":1} -->
				<h1 class="wp-block-heading">
					Know Your Fitness. Improve It. Measure the Progress.
				</h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"lg"} -->
				<p class="has-lg-font-size">
					Club100 combines fitness assessment, structured training and reassessment to help you build strength, mobility, cardiovascular fitness and overall well-being.
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"className":"club100-hero-actions"} -->
				<div class="wp-block-buttons club100-hero-actions">

					<!-- wp:button -->
					<div class="wp-block-button">
						<a class="wp-block-button__link wp-element-button" href="/contact/">
							Book a Fitness Assessment
						</a>
					</div>
					<!-- /wp:button -->

					<!-- wp:button {"className":"is-style-secondary"} -->
					<div class="wp-block-button is-style-secondary">
						<a class="wp-block-button__link wp-element-button" href="#how-club100-works">
							See How Club100 Works
						</a>
					</div>
					<!-- /wp:button -->

				</div>
				<!-- /wp:buttons -->

				<!-- wp:paragraph {"className":"club100-trust-line"} -->
				<p class="club100-trust-line">
					Assessment • Guided Training • Progress Tracking
				</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"club100-hero-image","layout":{"type":"default"}} -->
			<div class="wp-block-group club100-hero-image">

				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full">
					<img
						src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/club100-hero-placeholder.jpg' ); ?>"
						alt="Club100 members taking part in a guided fitness session"
						width="1200"
						height="960"
						fetchpriority="high"
					/>
				</figure>
				<!-- /wp:image -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
