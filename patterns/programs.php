<?php
/**
 * Title: Club100 Programs
 * Slug: club100/programs
 * Categories: featured
 * Inserter: yes
 */
?>

<!-- wp:group {"align":"full","className":"club100-section club100-bg-white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull club100-section club100-bg-white">

	<!-- wp:group {"className":"club100-container","layout":{"type":"default"}} -->
	<div class="wp-block-group club100-container">

		<!-- wp:group {"className":"club100-center","layout":{"type":"default"}} -->
		<div class="wp-block-group club100-center">

			<!-- wp:paragraph {"className":"club100-eyebrow"} -->
			<p class="club100-eyebrow">OUR PROGRAMS</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"className":"club100-section-title"} -->
			<h2 class="wp-block-heading club100-section-title">
				Club100 for Communities and Companies
			</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"club100-section-intro"} -->
			<p class="club100-section-intro">
				Structured fitness programs designed for communities and workplaces, built around participation, guided training and measurable progress.
			</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->


		<!-- wp:group {"className":"club100-grid-2 club100-program-grid","layout":{"type":"default"}} -->
		<div class="wp-block-group club100-grid-2 club100-program-grid">

			<!-- SOCIETIES -->
			<!-- wp:group {"className":"club100-program-card","layout":{"type":"default"}} -->
			<div class="wp-block-group club100-program-card">

				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full">
					<img
						src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/societies.jpg' ); ?>"
						alt="Club100 fitness program in a residential community"
						loading="lazy"
					/>
				</figure>
				<!-- /wp:image -->

				<div class="club100-program-overlay"></div>

				<div class="club100-program-content">

					<p class="club100-program-kicker">
						RESIDENTIAL COMMUNITIES
					</p>

					<h3>
						Fitness That Brings Communities Together
					</h3>

					<p>
						Structured fitness programs combining guided sessions, fitness assessment, challenges and periodic reassessment.
					</p>

					<!-- wp:buttons -->
					<div class="wp-block-buttons">

						<!-- wp:button {"className":"is-style-light"} -->
						<div class="wp-block-button is-style-light">
							<a class="wp-block-button__link wp-element-button" href="/societies/">
								Explore Society Programs
							</a>
						</div>
						<!-- /wp:button -->

					</div>
					<!-- /wp:buttons -->

				</div>

			</div>
			<!-- /wp:group -->


			<!-- CORPORATE -->
			<!-- wp:group {"className":"club100-program-card","layout":{"type":"default"}} -->
			<div class="wp-block-group club100-program-card">

				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full">
					<img
						src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/corporate.jpg' ); ?>"
						alt="Club100 employee fitness and well-being program"
						loading="lazy"
					/>
				</figure>
				<!-- /wp:image -->

				<div class="club100-program-overlay"></div>

				<div class="club100-program-content">

					<p class="club100-program-kicker">
						COMPANIES
					</p>

					<h3>
						Measurable Employee Fitness &amp; Well-being
					</h3>

					<p>
						Structured employee fitness programs built around assessment, guided training, engagement and measurable improvement.
					</p>

					<!-- wp:buttons -->
					<div class="wp-block-buttons">

						<!-- wp:button {"className":"is-style-light"} -->
						<div class="wp-block-button is-style-light">
							<a class="wp-block-button__link wp-element-button" href="/corporate/">
								Explore Corporate Programs
							</a>
						</div>
						<!-- /wp:button -->

					</div>
					<!-- /wp:buttons -->

				</div>

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
