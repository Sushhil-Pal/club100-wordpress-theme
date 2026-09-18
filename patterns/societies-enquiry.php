<?php
/**
 * Title: Societies Enquiry
 * Slug: club100/societies-enquiry
 * Categories: featured
 * Inserter: yes
 */
?>

<!-- wp:group {"align":"full","className":"club100-section club100-bg-blue-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull club100-section club100-bg-blue-light" id="society-enquiry">

	<div class="club100-container">

		<div class="club100-societies-enquiry-grid">

			<div class="club100-societies-enquiry-copy">

				<p class="club100-eyebrow">
					SOCIETY ENQUIRY
				</p>

				<h2>
					Bring Club100 to Your Community
				</h2>

				<p class="club100-societies-enquiry-intro">
					Tell us a little about your society and we’ll help you structure
					a fitness program that fits your community, space and participation.
				</p>

				<div class="club100-societies-enquiry-list">

					<div>
						<span>✓</span>
						<p>Fitness assessments</p>
					</div>

					<div>
						<span>✓</span>
						<p>Regular guided fitness sessions</p>
					</div>

					<div>
						<span>✓</span>
						<p>Community challenges and activities</p>
					</div>

					<div>
						<span>✓</span>
						<p>Periodic reassessment</p>
					</div>

					<div>
						<span>✓</span>
						<p>Progress tracking</p>
					</div>

				</div>

			</div>

			<div class="club100-societies-form-card">

				<p class="club100-form-eyebrow">
					BRING CLUB100 TO YOUR SOCIETY
				</p>

				<h3>
					Tell Us About Your Community
				</h3>

				<p>
					Share a few details and our team will get in touch.
				</p>

				<div class="club100-societies-form">

					<?php
					/*
					 * Replace 5 with the actual Fluent Forms form ID.
					 */
					echo do_shortcode( '[fluentform id="5"]' );
					?>

				</div>

			</div>

		</div>

	</div>

</div>
<!-- /wp:group -->
