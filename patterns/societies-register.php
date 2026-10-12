<?php
/**
 * Title: Societies Resident Registration
 * Slug: club100/societies-register
 * Categories: featured
 * Inserter: yes
 */
?>

<!-- wp:group {"align":"full","className":"club100-section club100-bg-white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull club100-section club100-bg-white" id="society-register">

	<div class="club100-container">

		<div class="club100-societies-register-grid">

			<div class="club100-societies-register-copy">

				<p class="club100-eyebrow">
					RESIDENT REGISTRATION
				</p>

				<h2>
					Interested in Club100 in Your Society?
				</h2>

				<p class="club100-societies-register-intro">
					Register your interest directly. Your registration helps us understand
					demand in your society, helps us form practical onsite batches and determine the applicable batch pricing.
				</p>

				<div class="club100-societies-register-price-summary">
					<div><strong>5–9</strong><span>₹2,499/mo</span></div>
					<div><strong>10–14</strong><span>₹1,999/mo</span></div>
					<div><strong>15–24</strong><span>₹1,499/mo</span></div>
					<div><strong>25+</strong><span>₹1,199/mo</span></div>
				</div>

				<p class="club100-societies-register-note">
					No payment or commitment is required at this stage. We will contact
					you once participation and onsite timings for your society are confirmed.
				</p>

			</div>

			<div class="club100-societies-form-card">

				<p class="club100-form-eyebrow">
					REGISTER YOUR INTEREST
				</p>

				<h3>
					Join the Interest List
				</h3>

				<p>
					Tell us who you are and which society you live in.
				</p>

				<form
					id="club100-society-interest-form"
					class="club100-society-interest-form"
					autocomplete="on"
				>

					<div class="club100-society-interest-field">
						<label for="club100-interest-full-name">
							Full Name <span aria-hidden="true">*</span>
						</label>
						<input
							id="club100-interest-full-name"
							name="full_name"
							type="text"
							autocomplete="name"
							required
						/>
					</div>

					<div class="club100-society-interest-row">

						<div class="club100-society-interest-field">
							<label for="club100-interest-mobile">
								Mobile <span aria-hidden="true">*</span>
							</label>
							<input
								id="club100-interest-mobile"
								name="mobile"
								type="tel"
								autocomplete="tel"
								inputmode="tel"
								required
							/>
						</div>

						<div class="club100-society-interest-field">
							<label for="club100-interest-email">
								Email
							</label>
							<input
								id="club100-interest-email"
								name="email"
								type="email"
								autocomplete="email"
							/>
						</div>

					</div>

					<div class="club100-society-interest-field">
						<label for="club100-interest-society">
							Society Name <span aria-hidden="true">*</span>
						</label>
						<input
							id="club100-interest-society"
							name="society_name"
							type="text"
							autocomplete="organization"
							required
						/>
					</div>

					<div class="club100-society-interest-field">
						<label for="club100-interest-city-area">
							City / Area <span aria-hidden="true">*</span>
						</label>
						<input
							id="club100-interest-city-area"
							name="city_area"
							type="text"
							required
						/>
					</div>

					<div class="club100-society-interest-row">

						<div class="club100-society-interest-field">
							<label for="club100-interest-block">
								Block / Tower
							</label>
							<input
								id="club100-interest-block"
								name="block_tower"
								type="text"
								autocomplete="address-line2"
							/>
						</div>

						<div class="club100-society-interest-field">
							<label for="club100-interest-flat">
								Flat Number
							</label>
							<input
								id="club100-interest-flat"
								name="flat_number"
								type="text"
							/>
						</div>

					</div>

					<div class="club100-society-interest-field">
						<label for="club100-interest-timing">
							Preferred Timing <span aria-hidden="true">*</span>
						</label>
						<select
							id="club100-interest-timing"
							name="preferred_timing"
							required
						>
							<option value="">Select a preference</option>
							<option value="Morning">Morning</option>
							<option value="Evening">Evening</option>
							<option value="Either">Either</option>
						</select>
					</div>

					<div class="club100-society-interest-consent">
						<input
							id="club100-interest-confirmation"
							name="interest_confirmation"
							type="checkbox"
							value="1"
							required
						/>
						<label for="club100-interest-confirmation">
							I am interested in joining Club100 if it starts in my society.
						</label>
					</div>

					<!-- Honeypot. Real users never see or fill this. -->
					<div class="club100-society-interest-hp" aria-hidden="true">
						<label for="club100-interest-website">Website</label>
						<input
							id="club100-interest-website"
							name="website"
							type="text"
							tabindex="-1"
							autocomplete="off"
						/>
					</div>

					<input
						type="hidden"
						name="source"
						value="club100_website_societies"
					/>

					<div
						id="club100-society-interest-status"
						class="club100-society-interest-status"
						role="status"
						aria-live="polite"
					></div>

					<button
						id="club100-society-interest-submit"
						class="club100-society-interest-submit"
						type="submit"
					>
						Register My Interest
					</button>

					<p class="club100-society-interest-privacy">
						We will use these details only to coordinate Club100 Society Fitness
						and contact you about this registration.
					</p>

				</form>

			</div>

		</div>

	</div>

</div>
<!-- /wp:group -->

<script>
(function () {
	'use strict';

	const form = document.getElementById('club100-society-interest-form');

	if (!form || form.dataset.club100Bound === '1') {
		return;
	}

	form.dataset.club100Bound = '1';

	const submitButton = document.getElementById('club100-society-interest-submit');
	const statusBox = document.getElementById('club100-society-interest-status');

	const localHosts = ['localhost', '127.0.0.1'];
	const hostname = window.location.hostname || '';
	const isLocal =
		localHosts.includes(hostname) ||
		hostname.endsWith('.local');

	const erpBaseUrl = isLocal
		? 'http://club100.local:8000'
		: 'https://erp.club100.fit';

	const registerEndpoint =
		erpBaseUrl +
		'/api/method/club100_core.api.society_interest.register_interest';

	function setStatus(type, message) {
		statusBox.className =
			'club100-society-interest-status club100-society-interest-status-' + type;
		statusBox.textContent = message;
	}

	function setSubmitting(isSubmitting) {
		submitButton.disabled = isSubmitting;
		submitButton.textContent = isSubmitting
			? 'Registering...'
			: 'Register My Interest';
	}

	function getPayload() {
		const formData = new FormData(form);
		const params = new URLSearchParams();

		for (const [key, value] of formData.entries()) {
			params.append(key, String(value).trim());
		}

		params.set('page_url', window.location.href);

		return params;
	}

	function normalizeResponse(payload) {
		if (!payload) {
			return {};
		}

		if (payload.message && typeof payload.message === 'object') {
			return payload.message;
		}

		return payload;
	}

	form.addEventListener('submit', async function (event) {
		event.preventDefault();

		if (!form.reportValidity()) {
			return;
		}

		setStatus('', '');
		setSubmitting(true);

		try {
			const response = await fetch(registerEndpoint, {
				method: 'POST',
				headers: {
					'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
				},
				body: getPayload().toString()
			});

			let payload = null;

			try {
				payload = await response.json();
			} catch (jsonError) {
				payload = null;
			}

			const result = normalizeResponse(payload);

			if (!response.ok) {
				const serverMessage =
					result.message ||
					result.error ||
					'We could not register your interest right now. Please try again.';

				throw new Error(serverMessage);
			}

			if (result.status === 'exists') {
				setStatus(
					'success',
					result.message ||
					'You are already registered for Society Fitness. We will keep you updated as participation in your society grows.'
				);
				return;
			}

			setStatus(
				'success',
				result.message ||
				'Thanks — your interest has been registered. We will contact you once your onsite batch, timing and applicable pricing are confirmed.'
			);

			form.reset();

		} catch (error) {
			console.error('Club100 Society Interest registration failed:', error);

			setStatus(
				'error',
				error && error.message
					? error.message
					: 'We could not register your interest right now. Please try again.'
			);

		} finally {
			setSubmitting(false);
		}
	});
})();
</script>
