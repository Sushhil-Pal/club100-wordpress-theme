<?php
/**
 * Title: Fitness Assessment Booking Hero
 * Slug: club100/assessment-booking-hero
 * Categories: featured
 * Inserter: yes
 */
?>

<!-- wp:group {"align":"full","className":"club100-assessment-hero club100-bg-blue-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull club100-assessment-hero club100-bg-blue-light">

	<!-- wp:group {"className":"club100-container","layout":{"type":"default"}} -->
	<div class="wp-block-group club100-container">

		<div class="club100-assessment-hero-grid">

			<div class="club100-assessment-hero-copy">

				<p class="club100-eyebrow">
					CLUB100 FITNESS ASSESSMENT
				</p>

				<h1>
					Know Where Your Fitness Stands
				</h1>

				<p class="club100-assessment-hero-intro">
					Get a measurable picture of your strength, mobility,
					cardiovascular fitness, body composition and overall well-being.
				</p>

				<div class="club100-assessment-trust">

					<div>
						<span>✓</span>
						<strong>Measurable Baseline</strong>
					</div>

					<div>
						<span>✓</span>
						<strong>Personal Fitness Report</strong>
					</div>

					<div>
						<span>✓</span>
						<strong>Track Your Improvement</strong>
					</div>

				</div>

				<p class="club100-assessment-support">
					Understand where you are doing well, identify the areas that
					need attention and use reassessment to see what has actually
					improved.
				</p>

			</div>


			<div class="club100-assessment-form-card" id="book-assessment">

				<p class="club100-form-eyebrow">
					BOOK YOUR ASSESSMENT
				</p>

				<h2>
					Get Your Fitness Baseline
				</h2>

				<p>
					Complete the form and our team will contact you to confirm
					your assessment.
				</p>

				<div class="club100-assessment-form">

					<?php echo do_shortcode( '[fluentform id="3"]' ); ?>

				</div>

			</div>

		</div>

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
