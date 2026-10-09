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

				<!-- wp:heading {"level":1} -->
				<h1 class="wp-block-heading">
					Why Choose Just One Way to Get Fit?
				</h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"lg","className":"club100-hero-intro"} -->
				<p class="has-lg-font-size club100-hero-intro">
					<span class="club100-hero-intro-desktop">
						Strength Training. Yoga &amp; Mobility. Musical Cardio. Club100 brings
						different workout formats together so you build strength, move better,
						improve endurance and enjoy staying consistent.
					</span>

					<span class="club100-hero-intro-mobile">
						<strong>Strength Training. Yoga &amp; Mobility. Musical Cardio.</strong>
						Three workout styles working together for complete, enjoyable fitness.
					</span>
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"className":"club100-hero-actions"} -->
				<div class="wp-block-buttons club100-hero-actions">

					<!-- wp:button -->
					<div class="wp-block-button">
						<a class="wp-block-button__link wp-element-button" href="#club100-programs">
							Find Your Program
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
					Strength. Mobility. Endurance. One complete fitness experience.
				</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->


			<!-- wp:group {"className":"club100-hero-formats","layout":{"type":"default"}} -->
			<div class="wp-block-group club100-hero-formats">

				<div class="club100-hero-format-card club100-hero-format-card-power">

					<img
						src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/power.jpg' ); ?>"
						alt="Strength training with Club100"
						width="800"
						height="1000"
						fetchpriority="high"
					/>

					<div class="club100-hero-format-overlay">
						<span class="club100-hero-format-name">POWER</span>
						<span class="club100-hero-format-type">Strength Training</span>
						<span class="club100-hero-format-benefit">Build strength</span>
					</div>

				</div>


				<div class="club100-hero-format-card club100-hero-format-card-flow">

					<img
						src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/flow.jpg' ); ?>"
						alt="Yoga and mobility training with Club100"
						width="800"
						height="1000"
					/>

					<div class="club100-hero-format-overlay">
						<span class="club100-hero-format-name">FLOW</span>
						<span class="club100-hero-format-type">Yoga &amp; Mobility</span>
						<span class="club100-hero-format-benefit">Move better</span>
					</div>

				</div>


				<div class="club100-hero-format-card club100-hero-format-card-pulse">

					<img
						src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pulse.jpg' ); ?>"
						alt="Musical cardio session with Club100"
						width="800"
						height="1000"
					/>

					<div class="club100-hero-format-overlay">
						<span class="club100-hero-format-name">PULSE</span>
						<span class="club100-hero-format-type">Musical Cardio</span>
						<span class="club100-hero-format-benefit">Build endurance</span>
					</div>

				</div>

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->