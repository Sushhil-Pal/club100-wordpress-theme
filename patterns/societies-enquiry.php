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
					FOR SOCIETY COMMITTEES &amp; COORDINATORS
				</p>

				<h2>
					Want to Bring Club100 to Your Community?
				</h2>

				<p class="club100-societies-enquiry-intro">
					If you represent your society, tell us about the community, available
					space and likely participation. We can help coordinate the onsite launch.
				</p>

				<div class="club100-societies-enquiry-list">

					<div><span>✓</span><p>Onsite General Fitness program</p></div>
					<div><span>✓</span><p>Power, Flow, Pulse and Play</p></div>
					<div><span>✓</span><p>Individual resident enrollment and payment</p></div>
					<div><span>✓</span><p>Participation-based resident pricing</p></div>
					<div><span>✓</span><p>Assessment and progress tracking</p></div>

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
					 * Existing society enquiry Fluent Forms form.
					 */
					echo do_shortcode( '[fluentform id="5"]' );
					?>

				</div>

			</div>

		</div>

	</div>

</div>
<!-- /wp:group -->
