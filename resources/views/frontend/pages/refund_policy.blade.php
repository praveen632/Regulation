@extends('frontend.layouts.master')
@section('title', $record->meta_title ?? "whizseed")
@section('meta_keywords', $record->meta_keyword ?? "whizseed")
@section('meta_description', $record->meta_description ?? "whizseed")
@section('content')

<section class="top-banner-pages-section">
	<div class="top-banner-pages">
		<h1><span>Refund</span> Policy</h1>
		<p>We serve many customers, ranging from small businesses,<br> medium entrepreneurs, to world-renowned companies.</p>
	</div>
</section>


<section class="privacy-page-section mt-5 mb-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-7 col-md-7 col-sm-12 privacy-page-heading">
				<h2>Refund Policy</h2>
				<div class="privacy-page-innerPage pt-3">
					<p>Welcome to Whizseed, where we connect you with our professionals to meet your legal needs. We appreciate your purchase from our website (whizseed.com) and are committed to ensuring your satisfaction. Below, we've outlined our refund policy in a simple way:</p>
					
					<h3>Refund for Personal Reasons:</h3>
					<div class="privacy-contact-tick">
						<ul>
							<li>If you decide to cancel your purchase within 4 hours of payment, we'll provide a 100% refund when you notify us via email at info@whizseed.com. After 4 hours, no refunds will be issued.</li>
							<li>Once your order is assigned to our network of professionals (CA, CS, Lawyers, Engineers, Management Consultants, and Others), no refunds can be processed.</li>
							<li>If you don't respond to our emails, calls, or messages for more than seven (7) days, your order will be considered canceled, and no refund will be given.</li>
							<li>Refunds are subject to approval from the consultant. Any disputes between you and the consultant are considered separate, and we won't be responsible for them.</li>
						</ul>
					</div>

					<h3>Refund Due to Service Delivery Issues:</h3>
					<div class="privacy-contact-tick">
						<ul>
							<li>If our network of professionals can't deliver services due to changes in the law, and you can't meet the new government norms, no refund will be provided.</li>
							<li>If you've provided all necessary documents and qualifications, but our professionals can't assist or refuse to work on your request, we may reassign your order within our network. If no one can help within 30 days, you can request a refund at mail to: info@whizseed.com.</li>
							<li>Delays caused by government authorities won't be considered as delays on our part.</li>
							<li>No refund requests will be accepted if your application is rejected by government authorities for reasons beyond the professional's control. If you wish to reapply, you'll need to pay fees again.</li>
						</ul>
					</div>
					<h3>Other Important Points:</h3>
					<div class="privacy-contact-tick">
						<ul>
							<li>You agree not to be an agent, middleman, or unregistered legal professional when using our platform.</li>
							<li>Refunds won't be issued once documents needed for service delivery have been shared with you via email or WhatsApp.</li>
						</ul>
					</div>
					<h3>Refund Process:</h3>
					<div class="privacy-contact-tick">
						<ul>
							<li>We'll refund to the same method you used for payment and won't refund to any third party.</li>
							<li>Eligible refunds will be processed within a minimum of 30 days from approval by the network of professionals.</li>
						</ul>
					</div>
					<h3>Escalation Process:</h3>
					<p>Level 1: Email the designated professionals (CA/CS/other professionals) and cc info@whizseed.com. This may take up to a week to resolve.</p>
					<p>Level 2: If you're not satisfied with Level 1, you can appeal to our nodal officer at info@whizseed.com. This may take seven (7) working days to conclude. The nodal officer's decision is final.</p>
					<h3>Additional Terms:</h3>
					<div class="privacy-contact-tick">
						<ul>
							<li>We assume you know your service requirements and the documents needed when making a payment.</li>
							<li>Disputes will be settled in New Delhi courts.</li>
						</ul>
					</div>
					<p><em>Please note that we may update our information on the website without prior notice, so check periodically for changes.</em></p>

					
				</div>
			</div>
			<div class="col-lg-1 col-md-1"></div>
			<div class="col-lg-4 col-md-4 col-sm-12 privacy-page-heading-img">
				<img src="https://www.whizseed.com/frontend/assets/images1/refund-policy-image.png" alt="refund policy">
			</div>
		</div>
	</div>
</section>
<!-- <section class="grey-bg check-page blog-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title">
					<h2>{{$record->title}}</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="main-content">
					{!! $record->description !!}
				</div>
			</div>
		</div>
	</div>
</section> -->
@endsection