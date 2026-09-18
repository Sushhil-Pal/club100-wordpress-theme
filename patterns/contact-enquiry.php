<?php
/**
 * Title: Contact Enquiry
 * Slug: club100/contact-enquiry
 * Categories: featured
 * Inserter: yes
 */
?>

<!-- wp:group {"align":"full","className":"club100-section club100-bg-blue-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull club100-section club100-bg-blue-light">

	<div class="club100-container">

		<div class="club100-contact-grid">

			<div class="club100-contact-copy">

				<p class="club100-eyebrow">
					GET IN TOUCH
				</p>

				<h2>
					How Can We Help?
				</h2>

				<p class="club100-contact-intro">
					Share a few details and we’ll get in touch to understand
					what you’re looking for and suggest the right next step.
				</p>

				<div class="club100-contact-options">

					<div class="club100-contact-option">
						<h3>Fitness Assessment</h3>
						<p>
							Understand your current fitness and establish
							a measurable starting point.
						</p>
					</div>

					<div class="club100-contact-option">
						<h3>Society Programs</h3>
						<p>
							Bring structured community fitness to your
							residential society.
						</p>
					</div>

					<div class="club100-contact-option">
						<h3>Corporate Programs</h3>
						<p>
							Create a measurable fitness and well-being
							program for your employees.
						</p>
					</div>

				</div>

			</div>

			<div class="club100-contact-form-card">

				<p class="club100-form-eyebrow">
					SEND AN ENQUIRY
				</p>

				<h3>
					Tell Us What You’re Looking For
				</h3>

				<p>
					Our team will get back to you.
				</p>

				<div class="club100-contact-form">

					<?php
					/*
					 * Replace 6 with the actual Fluent Forms form ID.
					 */
					echo do_shortcode( '[fluentform id="6"]' );
					?>

				</div>

			</div>

		</div>

	</div>

</div>
<!-- /wp:group -->
