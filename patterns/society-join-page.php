<?php
/**
 * Title: Society Join
 * Slug: club100/society-join-page
 * Categories: featured
 * Inserter: no
 */
?>

<!-- wp:group {"align":"full","className":"club100-join-page club100-society-join-page club100-bg-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull club100-join-page club100-society-join-page club100-bg-light">

	<div class="club100-container">

		<div
			id="club100-society-join-loading"
			class="club100-society-join-state"
		>
			<p
				class="club100-payment-status club100-payment-status-warning"
				aria-live="polite"
			>
				Loading your Club100 Society invitation...
			</p>
		</div>


		<div
			id="club100-society-join-error"
			class="club100-society-join-state"
			hidden
		>
			<p class="club100-eyebrow">
				SOCIETY ENROLLMENT
			</p>

			<h1>
				We Couldn't Open This Invitation
			</h1>

			<p
				id="club100-society-join-error-message"
				class="club100-payment-status club100-payment-status-error"
				aria-live="polite"
			>
				This Society enrollment invitation is invalid or has expired.
			</p>

			<p class="club100-society-join-state-note">
				If you still want to join Club100 in your society, please contact us or register your interest again.
			</p>

			<a
				class="club100-join-submit club100-create-account-cta"
				href="/societies/"
			>
				Back to Society Fitness
			</a>
		</div>


		<div
			id="club100-society-join-content"
			hidden
		>

			<div class="club100-join-layout">

				<!-- LEFT: DETAILS -->
				<div class="club100-join-main">

					<p class="club100-eyebrow">
						SOCIETY FITNESS
					</p>

					<h1 id="club100-society-join-title">
						Complete Your Society Enrollment
					</h1>

					<p class="club100-join-intro">
						Your onsite Club100 batch is ready. Review your batch, confirm your email and continue to payment.
					</p>


					<form
						id="club100-society-join-form"
						class="club100-join-form"
						novalidate
					>

						<div class="club100-join-details-heading">
							<h2>Your Batch</h2>

							<p>
								Your price is based on the number of members training together in this onsite batch.
							</p>
						</div>


						<div class="club100-join-field">
							<label for="club100-society-cohort">
								Club100 Batch
							</label>

							<select
								id="club100-society-cohort"
								name="cohort"
								required
							>
								<option value="">
									Loading batch...
								</option>
							</select>

							<span class="club100-field-error"></span>
						</div>


						<div class="club100-join-details-heading club100-society-personal-heading">
							<h2>Your Details</h2>

							<p>
								Name and mobile come from your Society registration. You can update your email before payment.
							</p>
						</div>


						<div class="club100-join-field">
							<label for="club100-society-name">
								Full Name
							</label>

							<input
								type="text"
								id="club100-society-name"
								name="full_name"
								autocomplete="name"
								readonly
							/>
						</div>


						<div class="club100-join-field">
							<label for="club100-society-mobile">
								Mobile Number
							</label>

							<input
								type="tel"
								id="club100-society-mobile"
								name="mobile"
								autocomplete="tel"
								readonly
							/>
						</div>


						<div class="club100-join-field">
							<label for="club100-society-email">
								Email
							</label>

							<input
								type="email"
								id="club100-society-email"
								name="email"
								autocomplete="email"
								required
							/>

							<span class="club100-field-error"></span>
						</div>


						<input
							type="hidden"
							id="club100-society-enrollment-id"
							name="enrollment_id"
						/>


						<button
							type="submit"
							class="club100-join-submit"
						>
							Review &amp; Continue
						</button>

						<p class="club100-join-payment-note">
							No payment will be taken until you review your enrollment. Once you continue to payment, your batch seat is reserved for up to 30 minutes.
						</p>

					</form>

				</div>


				<!-- RIGHT: SUMMARY -->
				<aside class="club100-join-summary">

					<p class="club100-join-summary-label">
						YOUR SOCIETY MEMBERSHIP
					</p>


					<div class="club100-join-summary-row">
						<span>Society</span>
						<strong id="club100-summary-society">—</strong>
					</div>


					<div class="club100-join-summary-row">
						<span>Program</span>
						<strong>Everyday Fitness</strong>
					</div>


					<div class="club100-join-summary-row">
						<span>Delivery</span>
						<strong>Onsite</strong>
					</div>


					<div class="club100-join-summary-row">
						<span>Batch</span>
						<strong id="club100-summary-cohort">—</strong>
					</div>


					<div class="club100-join-summary-row">
						<span>Start Date</span>
						<strong id="club100-summary-start-date">—</strong>
					</div>


					<div class="club100-join-summary-row">
						<span>Members in Batch</span>
						<strong id="club100-summary-member-count">—</strong>
					</div>


					<div class="club100-join-summary-row">
						<span>Pricing Tier</span>
						<strong id="club100-summary-tier">—</strong>
					</div>


					<div class="club100-join-summary-row">
						<span>Membership</span>
						<strong>1 Month</strong>
					</div>


					<div class="club100-join-price">
						<span>Your Price</span>
						<strong id="club100-summary-price">—</strong>
					</div>


					<p class="club100-join-summary-note">
						This price is for your selected onsite batch and is confirmed by Club100 ERP before payment.
					</p>

				</aside>

			</div>


			<!-- REVIEW -->
			<div
				id="club100-society-join-review"
				class="club100-join-review"
				hidden
			>

				<p class="club100-eyebrow">
					REVIEW YOUR ENROLLMENT
				</p>

				<h2>
					You're Ready to Join Your Club100 Batch
				</h2>


				<div class="club100-join-review-grid">

					<div>
						<span>Name</span>
						<strong id="club100-review-name"></strong>
					</div>

					<div>
						<span>Mobile</span>
						<strong id="club100-review-mobile"></strong>
					</div>

					<div>
						<span>Email</span>
						<strong id="club100-review-email"></strong>
					</div>

					<div>
						<span>Society</span>
						<strong id="club100-review-society"></strong>
					</div>

					<div>
						<span>Program</span>
						<strong>Everyday Fitness</strong>
					</div>

					<div>
						<span>Delivery</span>
						<strong>Onsite</strong>
					</div>

					<div>
						<span>Batch</span>
						<strong id="club100-review-cohort"></strong>
					</div>

					<div>
						<span>Start Date</span>
						<strong id="club100-review-start-date"></strong>
					</div>

					<div>
						<span>Members in Batch</span>
						<strong id="club100-review-member-count"></strong>
					</div>

					<div>
						<span>Pricing Tier</span>
						<strong id="club100-review-tier"></strong>
					</div>

					<div>
						<span>Membership</span>
						<strong>1 Month</strong>
					</div>

					<div class="club100-join-review-payable">
						<span>Payable Today</span>
						<strong id="club100-review-price"></strong>
					</div>

				</div>


				<div class="club100-join-review-actions">

					<button
						type="button"
						id="club100-society-edit-details"
						class="club100-join-secondary"
					>
						Edit Details
					</button>


					<button
						type="button"
						id="club100-society-continue-payment"
						class="club100-join-submit"
					>
						Continue to Payment
					</button>

				</div>


				<p
					id="club100-society-payment-status"
					class="club100-payment-status"
					hidden
					aria-live="polite"
				></p>


				<div
					id="club100-society-post-payment-actions"
					class="club100-post-payment-actions"
					hidden
				>
					<p id="club100-society-post-payment-message">
						Your Society membership is active. Create your Club100 account to complete onboarding and access your program.
					</p>

					<a
						id="club100-society-create-account"
						class="club100-join-submit club100-create-account-cta"
						href="#"
					>
						Create Your Club100 Account →
					</a>
				</div>

			</div>

		</div>

	</div>

</div>
<!-- /wp:group -->


<script>
document.addEventListener('DOMContentLoaded', function () {

	const TOKEN_STORAGE_KEY =
		'club100_society_invite_token';

	const params =
		new URLSearchParams(
			window.location.search
		);

	const urlToken =
		(params.get('token') || '').trim();

	if (urlToken) {

		sessionStorage.setItem(
			TOKEN_STORAGE_KEY,
			urlToken
		);

		/*
		 * Remove the opaque invitation token from the visible URL and
		 * browser history before loading any third-party payment script.
		 */
		window.history.replaceState(
			{},
			document.title,
			window.location.pathname
		);

	}

	const inviteToken =
		urlToken ||
		(
			sessionStorage.getItem(
				TOKEN_STORAGE_KEY
			) || ''
		).trim();


	const localHosts = [
		'localhost',
		'127.0.0.1'
	];

	const hostname =
		window.location.hostname || '';

	const isLocal =
		localHosts.includes(hostname) ||
		hostname.endsWith('.local');

	const erpBaseUrl =
		isLocal
			? 'http://club100.local:8000'
			: 'https://erp.club100.fit';

	const appBaseUrl =
		isLocal
			? 'http://club100.local:5173'
			: 'https://app.club100.fit';


	const inviteEndpoint =
		erpBaseUrl +
		'/api/method/club100_core.api.society_enrollment.get_invite';

	const createEnrollmentEndpoint =
		erpBaseUrl +
		'/api/method/club100_core.api.society_enrollment.create_pending_enrollment';

	const paymentOrderEndpoint =
		erpBaseUrl +
		'/api/method/club100_core.api.enrollment.create_payment_order';

	const verifyPaymentEndpoint =
		erpBaseUrl +
		'/api/method/club100_core.api.enrollment.verify_payment';


	const loadingState =
		document.getElementById(
			'club100-society-join-loading'
		);

	const errorState =
		document.getElementById(
			'club100-society-join-error'
		);

	const errorMessage =
		document.getElementById(
			'club100-society-join-error-message'
		);

	const content =
		document.getElementById(
			'club100-society-join-content'
		);

	const form =
		document.getElementById(
			'club100-society-join-form'
		);

	const review =
		document.getElementById(
			'club100-society-join-review'
		);

	const cohortSelect =
		document.getElementById(
			'club100-society-cohort'
		);

	const paymentButton =
		document.getElementById(
			'club100-society-continue-payment'
		);

	const paymentStatus =
		document.getElementById(
			'club100-society-payment-status'
		);

	const editDetailsButton =
		document.getElementById(
			'club100-society-edit-details'
		);

	const postPaymentActions =
		document.getElementById(
			'club100-society-post-payment-actions'
		);

	const postPaymentMessage =
		document.getElementById(
			'club100-society-post-payment-message'
		);

	const accountLink =
		document.getElementById(
			'club100-society-create-account'
		);


	let inviteData = null;
	let selectedCohort = null;


	const formatRupees =
		function (amount) {

			const numeric =
				Number(amount || 0);

			return (
				'₹' +
				numeric.toLocaleString(
					'en-IN'
				)
			);

		};


	const formatDate =
		function (value) {

			if (!value) {
				return 'To be confirmed';
			}

			const date =
				new Date(
					value + 'T00:00:00'
				);

			if (
				Number.isNaN(
					date.getTime()
				)
			) {
				return value;
			}

			return date.toLocaleDateString(
				'en-IN',
				{
					day: 'numeric',
					month: 'short',
					year: 'numeric'
				}
			);

		};


	const extractErrorMessage =
		function (
			data,
			fallback
		) {

			if (
				data &&
				data.message &&
				typeof data.message === 'string'
			) {
				return data.message;
			}

			if (
				data &&
				data.exc_type &&
				data.exception
			) {
				return fallback;
			}

			if (
				data &&
				data._server_messages
			) {

				try {

					const outer =
						JSON.parse(
							data._server_messages
						);

					if (
						Array.isArray(outer) &&
						outer.length
					) {

						const first =
							JSON.parse(
								outer[0]
							);

						if (
							first &&
							first.message
						) {
							return first.message;
						}

					}

				} catch (error) {
					/* Fall through to generic message. */
				}

			}

			return fallback;

		};


	const showPageError =
		function (message) {

			loadingState.hidden =
				true;

			content.hidden =
				true;

			errorMessage.textContent =
				message;

			errorState.hidden =
				false;

		};


	const showPaymentStatus =
		function (
			message,
			type
		) {

			paymentStatus.textContent =
				message;

			paymentStatus.className =
				'club100-payment-status' +
				(
					type
						? ' club100-payment-status-' + type
						: ''
				);

			paymentStatus.hidden =
				false;

		};


	const fetchJson =
		async function (url) {

			const response =
				await fetch(
					url,
					{
						method: 'GET',
						credentials: 'omit'
					}
				);

			let data = null;

			try {
				data =
					await response.json();
			} catch (error) {
				throw new Error(
					'Club100 ERP returned an invalid response.'
				);
			}

			if (
				!response.ok ||
				!data ||
				!data.message
			) {

				throw new Error(
					extractErrorMessage(
						data,
						'Unable to load this Society enrollment invitation.'
					)
				);

			}

			return data.message;

		};


	const postToErp =
		async function (
			url,
			values
		) {

			const body =
				new URLSearchParams(
					values
				);

			const response =
				await fetch(
					url,
					{
						method: 'POST',

						headers: {
							'Content-Type':
								'application/x-www-form-urlencoded;charset=UTF-8'
						},

						body:
							body.toString(),

						credentials:
							'omit'
					}
				);

			let data = null;

			try {
				data =
					await response.json();
			} catch (error) {
				throw new Error(
					'Club100 ERP returned an invalid response.'
				);
			}

			if (
				!response.ok ||
				!data ||
				!data.message ||
				(
					Object.prototype.hasOwnProperty.call(
						data.message,
						'success'
					) &&
					!data.message.success
				)
			) {

				throw new Error(
					extractErrorMessage(
						data,
						'Unable to complete the request.'
					)
				);

			}

			return data.message;

		};


	const getSelectedCohort =
		function () {

			if (
				!inviteData ||
				!Array.isArray(
					inviteData.cohorts
				)
			) {
				return null;
			}

			const cohortName =
				cohortSelect.value;

			return (
				inviteData.cohorts.find(
					function (item) {
						return (
							item.cohort ===
							cohortName
						);
					}
				) || null
			);

		};


	const updateSummary =
		function () {

			selectedCohort =
				getSelectedCohort();

			if (!selectedCohort) {
				return;
			}

			document.getElementById(
				'club100-summary-cohort'
			).textContent =
				selectedCohort.cohort_name;

			document.getElementById(
				'club100-summary-start-date'
			).textContent =
				formatDate(
					selectedCohort.start_date
				);

			document.getElementById(
				'club100-summary-member-count'
			).textContent =
				String(
					selectedCohort.pricing_member_count
				);

			document.getElementById(
				'club100-summary-tier'
			).textContent =
				selectedCohort.pricing_tier;

			document.getElementById(
				'club100-summary-price'
			).textContent =
				formatRupees(
					selectedCohort.monthly_price_per_member
				) +
				'/month';

			/*
			 * Changing batch invalidates a previously prepared pending
			 * enrollment in this browser state.
			 */
			document.getElementById(
				'club100-society-enrollment-id'
			).value = '';

			paymentStatus.hidden =
				true;

		};


	const populateInvite =
		function (data) {

			inviteData = data;

			document.getElementById(
				'club100-society-join-title'
			).textContent =
				'Join Club100 at ' +
				data.society_name;

			document.getElementById(
				'club100-society-name'
			).value =
				data.full_name || '';

			document.getElementById(
				'club100-society-mobile'
			).value =
				data.mobile || '';

			document.getElementById(
				'club100-society-email'
			).value =
				data.email || '';

			document.getElementById(
				'club100-summary-society'
			).textContent =
				data.society_name +
				(
					data.city_area
						? ' · ' + data.city_area
						: ''
				);


			cohortSelect.innerHTML = '';

			const available =
				(data.cohorts || []).filter(
					function (cohort) {
						return (
							Number(
								cohort.available_seats
							) > 0
						);
					}
				);

			if (!available.length) {

				showPageError(
					'There are currently no seats available in the Society batch linked to this invitation. Please contact Club100.'
				);

				return;

			}


			available.forEach(
				function (
					cohort,
					index
				) {

					const option =
						document.createElement(
							'option'
						);

					option.value =
						cohort.cohort;

					option.textContent =
						cohort.cohort_name +
						' · ' +
						formatRupees(
							cohort.monthly_price_per_member
						) +
						'/month';

					if (index === 0) {
						option.selected =
							true;
					}

					cohortSelect.appendChild(
						option
					);

				}
			);


			if (available.length === 1) {
				cohortSelect.setAttribute(
					'aria-readonly',
					'true'
				);
			}


			loadingState.hidden =
				true;

			errorState.hidden =
				true;

			content.hidden =
				false;

			updateSummary();

		};


	const loadInvite =
		async function () {

			if (!inviteToken) {

				showPageError(
					'This Society enrollment link is incomplete. Please use the invitation sent by Club100.'
				);

				return;

			}

			try {

				const url =
					inviteEndpoint +
					'?invite_token=' +
					encodeURIComponent(
						inviteToken
					);

				const data =
					await fetchJson(url);

				populateInvite(data);

			} catch (error) {

				console.error(
					'Club100 Society invitation error:',
					error
				);

				showPageError(
					error.message ||
					'Unable to load this Society enrollment invitation.'
				);

			}

		};


	cohortSelect.addEventListener(
		'change',
		updateSummary
	);


	form.addEventListener(
		'submit',
		function (event) {

			event.preventDefault();

			if (!form.checkValidity()) {
				form.reportValidity();
				return;
			}

			selectedCohort =
				getSelectedCohort();

			if (!selectedCohort) {

				showPageError(
					'Please select a valid Club100 Society batch.'
				);

				return;
			}


			const email =
				document.getElementById(
					'club100-society-email'
				).value.trim();


			document.getElementById(
				'club100-review-name'
			).textContent =
				inviteData.full_name;

			document.getElementById(
				'club100-review-mobile'
			).textContent =
				inviteData.mobile;

			document.getElementById(
				'club100-review-email'
			).textContent =
				email;

			document.getElementById(
				'club100-review-society'
			).textContent =
				inviteData.society_name;

			document.getElementById(
				'club100-review-cohort'
			).textContent =
				selectedCohort.cohort_name;

			document.getElementById(
				'club100-review-start-date'
			).textContent =
				formatDate(
					selectedCohort.start_date
				);

			document.getElementById(
				'club100-review-member-count'
			).textContent =
				String(
					selectedCohort.pricing_member_count
				);

			document.getElementById(
				'club100-review-tier'
			).textContent =
				selectedCohort.pricing_tier;

			document.getElementById(
				'club100-review-price'
			).textContent =
				formatRupees(
					selectedCohort.monthly_price_per_member
				);


			document.querySelector(
				'.club100-society-join-page .club100-join-layout'
			).hidden = true;

			review.hidden =
				false;

			paymentStatus.hidden =
				true;

			review.scrollIntoView({
				behavior: 'smooth',
				block: 'start'
			});

		}
	);


	editDetailsButton.addEventListener(
		'click',
		function () {

			review.hidden =
				true;

			document.querySelector(
				'.club100-society-join-page .club100-join-layout'
			).hidden = false;

			document.querySelector(
				'.club100-society-join-page'
			).scrollIntoView({
				behavior: 'smooth',
				block: 'start'
			});

		}
	);


	const prepareEnrollment =
		async function () {

			selectedCohort =
				getSelectedCohort();

			if (!selectedCohort) {
				throw new Error(
					'Please select a valid Society batch.'
				);
			}


			const enrollment =
				await postToErp(
					createEnrollmentEndpoint,
					{
						invite_token:
							inviteToken,

						cohort:
							selectedCohort.cohort,

						email:
							document.getElementById(
								'club100-society-email'
							).value.trim()
					}
				);


			const reservationSeconds =
				Math.max(
					0,
					Number(
						enrollment.reservation_seconds_remaining
						|| 0
					)
				);

			if (reservationSeconds <= 0) {
				throw new Error(
					'Your Society seat reservation expired before payment could start. Please click Continue to Payment again.'
				);
			}


			const erpAmount =
				Number(
					enrollment.amount_payable
				);

			const erpMemberCount =
				Number(
					enrollment.pricing_member_count
				);

			const priceChanged =
				erpAmount !==
					Number(
						selectedCohort.monthly_price_per_member
					) ||
				erpMemberCount !==
					Number(
						selectedCohort.pricing_member_count
					) ||
				enrollment.pricing_tier !==
					selectedCohort.pricing_tier;


			document.getElementById(
				'club100-society-enrollment-id'
			).value =
				enrollment.enrollment;


			if (priceChanged) {

				selectedCohort.monthly_price_per_member =
					erpAmount;

				selectedCohort.pricing_member_count =
					erpMemberCount;

				selectedCohort.pricing_tier =
					enrollment.pricing_tier;


				updateSummary();


				document.getElementById(
					'club100-review-member-count'
				).textContent =
					String(
						erpMemberCount
					);

				document.getElementById(
					'club100-review-tier'
				).textContent =
					enrollment.pricing_tier;

				document.getElementById(
					'club100-review-price'
				).textContent =
					formatRupees(
						erpAmount
					);


				showPaymentStatus(
					'Your batch pricing was refreshed from Club100 ERP. Please review the updated amount and click Continue to Payment again.',
					'warning'
				);

				return null;

			}


			return enrollment;

		};


	let razorpayLoadPromise = null;

	const loadRazorpay =
		function () {

			if (
				typeof window.Razorpay ===
					'function'
			) {
				return Promise.resolve();
			}

			if (razorpayLoadPromise) {
				return razorpayLoadPromise;
			}

			razorpayLoadPromise =
				new Promise(
					function (
						resolve,
						reject
					) {

						const script =
							document.createElement(
								'script'
							);

						script.src =
							'https://checkout.razorpay.com/v1/checkout.js';

						script.async =
							true;

						script.onload =
							function () {
								resolve();
							};

						script.onerror =
							function () {
								reject(
									new Error(
										'Razorpay Checkout could not be loaded.'
									)
								);
							};

						document.head.appendChild(
							script
						);

					}
				);

			return razorpayLoadPromise;

		};


	const openRazorpayCheckout =
		function (
			enrollment,
			order
		) {

			if (
				typeof window.Razorpay !==
					'function'
			) {

				throw new Error(
					'Razorpay Checkout could not be loaded.'
				);

			}


			const options = {

				key:
					order.key_id,

				amount:
					order.amount,

				currency:
					order.currency,

				name:
					'Club100',

				description:
					inviteData.society_name +
					' · ' +
					selectedCohort.cohort_name +
					' · 1 Month',

				order_id:
					order.order_id,

				timeout:
					Math.max(
						1,
						Math.floor(
							Number(
								enrollment.reservation_seconds_remaining
								|| 1
							)
						)
					),

				prefill: {

					name:
						inviteData.full_name,

					email:
						document.getElementById(
							'club100-society-email'
						).value.trim(),

					contact:
						inviteData.mobile

				},

				notes: {
					club100_enrollment:
						enrollment.enrollment,
					society:
						inviteData.society,
					cohort:
						selectedCohort.cohort
				},

				theme: {
					color:
						'#2F80ED'
				},

				modal: {

					ondismiss:
						function () {

							paymentButton.disabled =
								false;

							paymentButton.textContent =
								'Continue to Payment';

							showPaymentStatus(
								'Payment was not completed. You can continue whenever you are ready.',
								'warning'
							);

						}

				},

				handler:
					async function (
						response
					) {

						paymentButton.disabled =
							true;

						paymentButton.textContent =
							'Verifying Payment...';

						showPaymentStatus(
							'Payment received. Verifying with Razorpay...',
							'warning'
						);


						try {

							const verified =
								await postToErp(
									verifyPaymentEndpoint,
									{
										enrollment_id:
											enrollment.enrollment,

										razorpay_payment_id:
											response.razorpay_payment_id,

										razorpay_order_id:
											response.razorpay_order_id,

										razorpay_signature:
											response.razorpay_signature
									}
								);


							paymentButton.disabled =
								true;

							paymentButton.textContent =
								'Payment Completed';

							editDetailsButton.hidden =
								true;

							postPaymentActions.hidden =
								false;


							if (
								verified.next_action ===
									'sign_in'
							) {

								postPaymentMessage.textContent =
									'Your Society membership is active. Open the Club100 app to continue.';

								accountLink.textContent =
									'Open Club100 App →';

								accountLink.href =
									appBaseUrl +
									'/login';

							} else {

								postPaymentMessage.textContent =
									'Your Society membership is active. Create your Club100 account to complete onboarding and access your program.';

								accountLink.textContent =
									'Create Your Club100 Account →';

								if (
									verified.registration_token
								) {
									accountLink.href =
										appBaseUrl +
										'/register?token=' +
										encodeURIComponent(
											verified.registration_token
										);
								} else {
									accountLink.href =
										appBaseUrl +
										'/register';
								}

							}


							showPaymentStatus(
								'Payment successful. Enrollment ' +
									verified.enrollment +
									' is active.',
								'success'
							);


							/*
							 * The invitation is now converted. Do not keep
							 * the token around in this browser tab.
							 */
							sessionStorage.removeItem(
								TOKEN_STORAGE_KEY
							);

						} catch (error) {

							console.error(
								'Club100 Society payment verification error:',
								error
							);

							paymentButton.disabled =
								false;

							paymentButton.textContent =
								'Verify Payment Again';

							showPaymentStatus(
								'Payment was received, but Club100 could not verify it yet. Please do not make another payment. Try verification again or contact Club100.',
								'error'
							);

						}

					}

			};


			const razorpay =
				new window.Razorpay(
					options
				);


			razorpay.on(
				'payment.failed',
				function (
					response
				) {

					paymentButton.disabled =
						false;

					paymentButton.textContent =
						'Continue to Payment';


					const description =
						response?.error?.description
							? response.error.description
							: 'The payment could not be completed.';


					showPaymentStatus(
						description,
						'error'
					);

				}
			);


			razorpay.open();

		};


	paymentButton.addEventListener(
		'click',
		async function () {

			paymentButton.disabled =
				true;

			paymentButton.textContent =
				'Preparing Payment...';

			paymentStatus.hidden =
				true;


			try {

				const enrollment =
					await prepareEnrollment();

				if (!enrollment) {

					paymentButton.disabled =
						false;

					paymentButton.textContent =
						'Continue to Payment';

					return;

				}


				/*
				 * Load Razorpay only after the token has been removed
				 * from the address bar/history.
				 */
				await loadRazorpay();


				const order =
					await postToErp(
						paymentOrderEndpoint,
						{
							enrollment_id:
								enrollment.enrollment,

							mobile:
								inviteData.mobile,

							email:
								document.getElementById(
									'club100-society-email'
								).value.trim()
						}
					);


				paymentButton.textContent =
					'Opening Razorpay...';


				openRazorpayCheckout(
					enrollment,
					order
				);

			} catch (error) {

				console.error(
					'Club100 Society payment preparation error:',
					error
				);

				paymentButton.disabled =
					false;

				paymentButton.textContent =
					'Continue to Payment';

				document.getElementById(
					'club100-society-enrollment-id'
				).value = '';


				showPaymentStatus(
					error.message ||
					'We could not prepare your payment. Please try again.',
					'error'
				);

			}

		}
	);


	loadInvite();

});
</script>
