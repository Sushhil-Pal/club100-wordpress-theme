<?php
/**
 * Title: Join Club100
 * Slug: club100/join-page
 * Categories: featured
 * Inserter: yes
 */
?>

<!-- wp:group {"align":"full","className":"club100-join-page club100-bg-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull club100-join-page club100-bg-light">

	<div class="club100-container">

		<div class="club100-join-layout">

			<!-- LEFT: FORM -->
			<div class="club100-join-main">

				<p class="club100-eyebrow">
					JOIN CLUB100
				</p>

				<h1>
					Complete Your Enrollment
				</h1>

				<p class="club100-join-intro">
					Choose your membership duration, then tell us a little about yourself. You'll review everything before proceeding to payment.
				</p>


				<form
					id="club100-join-form"
					class="club100-join-form"
					novalidate
				>

					<!-- MEMBERSHIP DURATION -->
					<fieldset class="club100-duration-section">

						<legend>
							Choose Membership Duration
						</legend>

						<p class="club100-duration-intro">
							Longer memberships offer a lower effective monthly rate.
						</p>


						<div class="club100-duration-grid">

							<label class="club100-duration-option">

								<input
									type="radio"
									name="membership_duration"
									value="12"
									checked
								/>

								<span class="club100-duration-card-inner">

									<span class="club100-duration-card-top">

										<strong>12 Months</strong>

										<span class="club100-duration-badge club100-duration-badge-best">
											Best Value
										</span>

									</span>

									<span class="club100-duration-rate">
										<strong data-duration-monthly="12">—</strong>
										<span>/month</span>
									</span>

									<span class="club100-duration-payable">
										<strong data-duration-payable="12">—</strong>
										payable today
									</span>

									<span class="club100-duration-saving" data-duration-saving="12">
										Save —
									</span>

								</span>

							</label>


							<label class="club100-duration-option">

								<input
									type="radio"
									name="membership_duration"
									value="6"
								/>

								<span class="club100-duration-card-inner">

									<span class="club100-duration-card-top">

										<strong>6 Months</strong>

										<span class="club100-duration-badge">
											Recommended
										</span>

									</span>

									<span class="club100-duration-rate">
										<strong data-duration-monthly="6">—</strong>
										<span>/month</span>
									</span>

									<span class="club100-duration-payable">
										<strong data-duration-payable="6">—</strong>
										payable today
									</span>

									<span class="club100-duration-saving" data-duration-saving="6">
										Save —
									</span>

								</span>

							</label>


							<label class="club100-duration-option">

								<input
									type="radio"
									name="membership_duration"
									value="3"
								/>

								<span class="club100-duration-card-inner">

									<span class="club100-duration-card-top">
										<strong>3 Months</strong>
									</span>

									<span class="club100-duration-rate">
										<strong data-duration-monthly="3">—</strong>
										<span>/month</span>
									</span>

									<span class="club100-duration-payable">
										<strong data-duration-payable="3">—</strong>
										payable today
									</span>

									<span class="club100-duration-saving" data-duration-saving="3">
										Save —
									</span>

								</span>

							</label>


							<label class="club100-duration-option">

								<input
									type="radio"
									name="membership_duration"
									value="1"
								/>

								<span class="club100-duration-card-inner">

									<span class="club100-duration-card-top">
										<strong>1 Month</strong>
									</span>

									<span class="club100-duration-rate">
										<strong data-duration-monthly="1">—</strong>
										<span>/month</span>
									</span>

									<span class="club100-duration-payable">
										<strong data-duration-payable="1">—</strong>
										payable today
									</span>

								</span>

							</label>

						</div>

					</fieldset>


					<div class="club100-join-details-heading">

						<h2>Your Details</h2>

						<p>
							We only need a few details to prepare your enrollment.
						</p>

					</div>


					<div class="club100-join-field">
						<label for="club100-name">
							Full Name
						</label>

						<input
							type="text"
							id="club100-name"
							name="full_name"
							autocomplete="name"
							required
						/>

						<span class="club100-field-error"></span>
					</div>


					<div class="club100-join-field">
						<label for="club100-mobile">
							Mobile Number
						</label>

						<input
							type="tel"
							id="club100-mobile"
							name="mobile"
							autocomplete="tel"
							inputmode="numeric"
							required
						/>

						<span class="club100-field-error"></span>
					</div>


					<div class="club100-join-field">
						<label for="club100-email">
							Email
						</label>

						<input
							type="email"
							id="club100-email"
							name="email"
							autocomplete="email"
							required
						/>

						<span class="club100-field-error"></span>
					</div>


					<input
						type="hidden"
						id="club100-program"
						name="program"
					/>

					<input
						type="hidden"
						id="club100-plan"
						name="plan"
					/>

					<input
						type="hidden"
						id="club100-duration-months"
						name="duration_months"
					/>

					<input
						type="hidden"
						id="club100-monthly-equivalent"
						name="monthly_equivalent"
					/>

					<input
						type="hidden"
						id="club100-amount-payable"
						name="amount_payable"
					/>

					<input
						type="hidden"
						id="club100-enrollment-id"
						name="enrollment_id"
					/>


					<button
						type="submit"
						class="club100-join-submit"
					>
						Review &amp; Continue
					</button>

					<p class="club100-join-payment-note">
						No payment will be taken until you review your enrollment.
					</p>

				</form>

			</div>


			<!-- RIGHT: SELECTION -->
			<aside class="club100-join-summary">

				<p class="club100-join-summary-label">
					YOUR SELECTION
				</p>

				<div class="club100-join-summary-row">

					<span>Program</span>

					<strong id="club100-summary-program">
						—
					</strong>

				</div>


				<div class="club100-join-summary-row">

					<span>Plan</span>

					<strong id="club100-summary-plan">
						—
					</strong>

				</div>


				<div class="club100-join-summary-row">

					<span>Membership</span>

					<strong id="club100-summary-duration">
						—
					</strong>

				</div>


				<div class="club100-join-summary-row">

					<span>Effective Monthly Rate</span>

					<strong id="club100-summary-monthly">
						—
					</strong>

				</div>


				<div class="club100-join-price">

					<span>Payable Today</span>

					<strong id="club100-summary-payable">
						—
					</strong>

				</div>


				<p class="club100-join-summary-note">
					The full membership amount shown above is what will be charged when you proceed to payment.
				</p>

			</aside>

		</div>


		<!-- REVIEW -->
		<div
			id="club100-join-review"
			class="club100-join-review"
			hidden
		>

			<p class="club100-eyebrow">
				REVIEW YOUR ENROLLMENT
			</p>

			<h2>
				You're Ready to Join Club100
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
					<span>Program</span>
					<strong id="club100-review-program"></strong>
				</div>

				<div>
					<span>Plan</span>
					<strong id="club100-review-plan"></strong>
				</div>

				<div>
					<span>Membership</span>
					<strong id="club100-review-duration"></strong>
				</div>

				<div>
					<span>Effective Monthly Rate</span>
					<strong id="club100-review-monthly"></strong>
				</div>

				<div class="club100-join-review-payable">
					<span>Payable Today</span>
					<strong id="club100-review-payable"></strong>
				</div>

			</div>


			<div class="club100-join-review-actions">

				<button
					type="button"
					id="club100-edit-details"
					class="club100-join-secondary"
				>
					Edit Details
				</button>


				<button
					type="button"
					id="club100-continue-payment"
					class="club100-join-submit"
				>
					Continue to Payment
				</button>

			</div>

			<p
				id="club100-payment-status"
				class="club100-payment-status"
				hidden
				aria-live="polite"
			></p>

			<div
				id="club100-post-payment-actions"
				class="club100-post-payment-actions"
				hidden
			>
				<p>
					Your membership is active. Create your Club100 account to complete onboarding and access your program.
				</p>

				<a
					id="club100-create-account"
					class="club100-join-submit club100-create-account-cta"
					href="#"
				>
					Create Your Club100 Account →
				</a>
			</div>

		</div>

	</div>

</div>
<!-- /wp:group -->


<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {

	const programs = {
		'general-fitness': 'General Fitness',
		'weight-management': 'Weight Management',
		'active-50': 'Active 50+',
		'sports-fitness': 'Sports Fitness',
		'performance-training': 'Performance Training'
	};


	/*
	 * Prototype pricing.
	 *
	 * These values are intentionally kept in one place so
	 * they can be replaced easily when final pricing is set.
	 *
	 * IMPORTANT:
	 * Once payment integration is added, the server/ERP
	 * must calculate and validate the payable amount.
	 * Browser-side pricing must not be trusted for payment.
	 */
	const plans = {

		'self': {
			name: 'Self',
			pricing: {
				12: 499,
				6: 599,
				3: 699,
				1: 799
			}
		},

		'group': {
			name: 'Group',
			pricing: {
				12: 999,
				6: 1099,
				3: 1199,
				1: 1299
			}
		},

		'coach': {
			name: 'Coach',
			pricing: {
				12: 1499,
				6: 1599,
				3: 1699,
				1: 1799
			}
		}

	};


	const durations = {
		12: '12 Month Membership',
		6: '6 Month Membership',
		3: '3 Month Membership',
		1: '1 Month Membership'
	};


	const params =
		new URLSearchParams(
			window.location.search
		);

	const programKey =
		params.get('program');

	const planKey =
		params.get('plan');


	/*
	 * Invalid combinations should never silently proceed.
	 */
	if (
		!programKey ||
		!planKey ||
		!programs[programKey] ||
		!plans[planKey]
	) {

		window.location.href =
			'/ways-to-train/';

		return;
	}


	const selectedProgram =
		programs[programKey];

	const selectedPlan =
		plans[planKey];


	/*
	 * ERP endpoint.
	 *
	 * Local WordPress runs on localhost:8080 and local ERP
	 * runs on club100.local:8000.
	 *
	 * Production will use the Club100 ERP domain.
	 */
	const erpBaseUrl =
		(
			window.location.hostname === 'localhost' ||
			window.location.hostname === '127.0.0.1'
		)
			? 'http://club100.local:8000'
			: 'https://erp.club100.fit';

	const enrollmentEndpoint =
		erpBaseUrl +
		'/api/method/club100_core.api.enrollment.create_pending_enrollment';

	const paymentOrderEndpoint =
		erpBaseUrl +
		'/api/method/club100_core.api.enrollment.create_payment_order';

	const verifyPaymentEndpoint =
		erpBaseUrl +
		'/api/method/club100_core.api.enrollment.verify_payment';


	const appRegisterUrl =
		(
			window.location.hostname === 'localhost' ||
			window.location.hostname === '127.0.0.1'
		)
			? 'http://club100.local:5173/register'
			: 'https://app.club100.fit/register';


	const createAccountLink =
		document.getElementById(
			'club100-create-account'
		);

	if (createAccountLink) {
		createAccountLink.href =
			appRegisterUrl;
	}


	const formatRupees =
		function (amount) {

			return (
				'₹' +
				amount.toLocaleString('en-IN')
			);

		};


	const getSelectedDuration =
		function () {

			const selected =
				document.querySelector(
					'input[name="membership_duration"]:checked'
				);

			return selected
				? Number(selected.value)
				: 12;

		};


	const getPricing =
		function () {

			const durationMonths =
				getSelectedDuration();

			const monthlyEquivalent =
				selectedPlan.pricing[durationMonths];

			const amountPayable =
				monthlyEquivalent *
				durationMonths;

			return {
				durationMonths: durationMonths,
				monthlyEquivalent: monthlyEquivalent,
				amountPayable: amountPayable
			};

		};


	/*
	 * Hidden values.
	 */
	document.getElementById(
		'club100-program'
	).value = programKey;

	document.getElementById(
		'club100-plan'
	).value = planKey;


	/*
	 * Populate the four duration cards for the selected plan.
	 */
	Object.keys(
		selectedPlan.pricing
	).forEach(
		function (duration) {

			const durationMonths =
				Number(duration);

			const monthlyEquivalent =
				selectedPlan.pricing[durationMonths];

			const amountPayable =
				monthlyEquivalent *
				durationMonths;

			const monthlyReference =
				selectedPlan.pricing[1] *
				durationMonths;

			const savings =
				monthlyReference -
				amountPayable;


			const monthlyTarget =
				document.querySelector(
					'[data-duration-monthly="' +
					durationMonths +
					'"]'
				);

			const payableTarget =
				document.querySelector(
					'[data-duration-payable="' +
					durationMonths +
					'"]'
				);

			const savingTarget =
				document.querySelector(
					'[data-duration-saving="' +
					durationMonths +
					'"]'
				);


			if (monthlyTarget) {

				monthlyTarget.textContent =
					formatRupees(
						monthlyEquivalent
					);

			}


			if (payableTarget) {

				payableTarget.textContent =
					formatRupees(
						amountPayable
					);

			}


			if (
				savingTarget &&
				savings > 0
			) {

				savingTarget.textContent =
					'Save ' +
					formatRupees(
						savings
					) +
					' vs monthly';

			}

		}
	);


	const updateSelection =
		function () {

			const pricing =
				getPricing();

			document.getElementById(
				'club100-enrollment-id'
			).value = '';


			const monthlyText =
				formatRupees(
					pricing.monthlyEquivalent
				) +
				'/month';

			const payableText =
				formatRupees(
					pricing.amountPayable
				);


			document.getElementById(
				'club100-duration-months'
			).value =
				pricing.durationMonths;

			document.getElementById(
				'club100-monthly-equivalent'
			).value =
				pricing.monthlyEquivalent;

			document.getElementById(
				'club100-amount-payable'
			).value =
				pricing.amountPayable;


			document.getElementById(
				'club100-summary-program'
			).textContent =
				selectedProgram;

			document.getElementById(
				'club100-summary-plan'
			).textContent =
				selectedPlan.name;

			document.getElementById(
				'club100-summary-duration'
			).textContent =
				durations[
					pricing.durationMonths
				];

			document.getElementById(
				'club100-summary-monthly'
			).textContent =
				monthlyText;

			document.getElementById(
				'club100-summary-payable'
			).textContent =
				payableText;

		};


	document
		.querySelectorAll(
			'input[name="membership_duration"]'
		)
		.forEach(
			function (radio) {

				radio.addEventListener(
					'change',
					updateSelection
				);

			}
		);


	updateSelection();


	const form =
		document.getElementById(
			'club100-join-form'
		);

	const review =
		document.getElementById(
			'club100-join-review'
		);


	form.addEventListener(
		'submit',
		function (event) {

			event.preventDefault();


			const name =
				document.getElementById(
					'club100-name'
				).value.trim();

			const mobile =
				document.getElementById(
					'club100-mobile'
				).value.trim();

			const email =
				document.getElementById(
					'club100-email'
				).value.trim();


			if (
				!name ||
				!mobile ||
				!email
			) {

				form.reportValidity();
				return;

			}


			const pricing =
				getPricing();

			const monthlyText =
				formatRupees(
					pricing.monthlyEquivalent
				) +
				'/month';

			const payableText =
				formatRupees(
					pricing.amountPayable
				);


			document.getElementById(
				'club100-review-name'
			).textContent = name;

			document.getElementById(
				'club100-review-mobile'
			).textContent = mobile;

			document.getElementById(
				'club100-review-email'
			).textContent = email;

			document.getElementById(
				'club100-review-program'
			).textContent = selectedProgram;

			document.getElementById(
				'club100-review-plan'
			).textContent = selectedPlan.name;

			document.getElementById(
				'club100-review-duration'
			).textContent =
				durations[
					pricing.durationMonths
				];

			document.getElementById(
				'club100-review-monthly'
			).textContent =
				monthlyText;

			document.getElementById(
				'club100-review-payable'
			).textContent =
				payableText;


			document.querySelector(
				'.club100-join-layout'
			).hidden = true;

			review.hidden = false;


			review.scrollIntoView({
				behavior: 'smooth',
				block: 'start'
			});

		}
	);


	document.getElementById(
		'club100-edit-details'
	).addEventListener(
		'click',
		function () {

			review.hidden = true;

			document.querySelector(
				'.club100-join-layout'
			).hidden = false;

			document.querySelector(
				'.club100-join-page'
			).scrollIntoView({
				behavior: 'smooth',
				block: 'start'
			});

		}
	);


	/*
	 * PAYMENT FLOW
	 *
	 * 1. Create/reuse pending Club100 Enrollment.
	 * 2. Create/reuse Razorpay Order from ERP.
	 * 3. Open Razorpay Checkout.
	 * 4. Send Razorpay success fields back to ERP.
	 * 5. ERP verifies signature + captured payment before marking Paid.
	 */
	const paymentButton =
		document.getElementById(
			'club100-continue-payment'
		);

	const paymentStatus =
		document.getElementById(
			'club100-payment-status'
		);

	const editDetailsButton =
		document.getElementById(
			'club100-edit-details'
		);

	const postPaymentActions =
		document.getElementById(
			'club100-post-payment-actions'
		);


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

			paymentStatus.hidden = false;

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
				!data.message.success
			) {

				throw new Error(
					(
						data &&
						data._server_messages
					)
						? 'Club100 ERP rejected the request.'
						: 'Unable to complete the request.'
				);

			}


			return data.message;

		};


	const prepareEnrollment =
		async function () {

			const pricing =
				getPricing();

			const existingEnrollment =
				document.getElementById(
					'club100-enrollment-id'
				).value.trim();


			if (existingEnrollment) {

				return {
					enrollment:
						existingEnrollment,
					monthly_equivalent:
						pricing.monthlyEquivalent,
					amount_payable:
						pricing.amountPayable
				};

			}


			const enrollment =
				await postToErp(
					enrollmentEndpoint,
					{
						full_name:
							document.getElementById(
								'club100-name'
							).value.trim(),

						mobile:
							document.getElementById(
								'club100-mobile'
							).value.trim(),

						email:
							document.getElementById(
								'club100-email'
							).value.trim(),

						program:
							programKey,

						plan:
							planKey,

						duration_months:
							String(
								pricing.durationMonths
							)
					}
				);


			/*
			 * ERP is the source of truth for pricing.
			 *
			 * If pricing changed since the page loaded,
			 * update the review and require another explicit click.
			 */
			if (
				Number(
					enrollment.monthly_equivalent
				) !==
					pricing.monthlyEquivalent ||
				Number(
					enrollment.amount_payable
				) !==
					pricing.amountPayable
			) {

				selectedPlan.pricing[
					pricing.durationMonths
				] =
					Number(
						enrollment.monthly_equivalent
					);


				updateSelection();


				document.getElementById(
					'club100-review-monthly'
				).textContent =
					formatRupees(
						Number(
							enrollment.monthly_equivalent
						)
					) +
					'/month';

				document.getElementById(
					'club100-review-payable'
				).textContent =
					formatRupees(
						Number(
							enrollment.amount_payable
						)
					);


				showPaymentStatus(
					'Pricing was refreshed from Club100 ERP. Please review the updated amount and click Continue to Payment again.',
					'warning'
				);


				return null;

			}


			document.getElementById(
				'club100-enrollment-id'
			).value =
				enrollment.enrollment;


			return enrollment;

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


			const pricing =
				getPricing();


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
					selectedProgram +
					' · ' +
					selectedPlan.name +
					' · ' +
					durations[
						pricing.durationMonths
					],

				order_id:
					order.order_id,

				prefill: {

					name:
						document.getElementById(
							'club100-name'
						).value.trim(),

					email:
						document.getElementById(
							'club100-email'
						).value.trim(),

					contact:
						document.getElementById(
							'club100-mobile'
						).value.trim()

				},

				notes: {
					club100_enrollment:
						enrollment.enrollment
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


							if (editDetailsButton) {
								editDetailsButton.hidden =
									true;
							}


							if (postPaymentActions) {
								postPaymentActions.hidden =
									false;
							}


							showPaymentStatus(
								'Payment successful. Enrollment ' +
									verified.enrollment +
									' is active.',
								'success'
							);


							console.log(
								'Club100 payment verified:',
								verified
							);

						} catch (error) {

							console.error(
								'Club100 payment verification error:',
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
						(
							response &&
							response.error &&
							response.error.description
						)
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


				const order =
					await postToErp(
						paymentOrderEndpoint,
						{
							enrollment_id:
								enrollment.enrollment,

							mobile:
								document.getElementById(
									'club100-mobile'
								).value.trim(),

							email:
								document.getElementById(
									'club100-email'
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
					'Club100 payment preparation error:',
					error
				);


				paymentButton.disabled =
					false;

				paymentButton.textContent =
					'Continue to Payment';


				showPaymentStatus(
					'We could not prepare your payment. Please try again.',
					'error'
				);

			}

		}
	);

});
</script>
