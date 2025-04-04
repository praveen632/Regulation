@extends('frontend.layouts.master')
@section('title', $record->meta_title ?? "whizseed")
@section('meta_keywords', $record->meta_keyword ?? "whizseed")
@section('meta_description', $record->meta_description ?? "whizseed")
@section('content')

<section class="top-banner-pages-section">
	<div class="top-banner-pages">
		<h1><span>Privacy</span> Policy</h1>
		<p>We serve many customers, ranging from small businesses,<br> medium entrepreneurs, to world-renowned companies.</p>
	</div>
</section>
<section class="privacy-page-section mt-5 mb-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-7 col-md-7 col-sm-12 privacy-page-heading section-Privacy-Policy">
				<h2>Privacy Policy</h2>
				<div class="privacy-page-innerPage pt-3">
					<div class="privacy-contact-tick">
						<ul>
							<li>This document is an electronic record under the Information Technology Act, 2000, and it applies to our website, whizseed.com.</li>
							<li>We are the company behind this website, registered under Indian laws. By using our site, you agree to our terms and policies.</li>
							<li>No signature is needed; your use of our website implies agreement to our policies.</li>
							<li>We update our policies regularly, so please check them periodically.</li>
							<li>We operate under Indian laws, and if you use our website from another country, you are responsible for compliance with your local laws.</li>
						</ul>
					</div>	
					<h3>Collection of Information:</h3>
					<div class="privacy-contact-tick">
						<ul>
							<li>We collect personal and professional information when you use our website, which is stored securely.</li>
							<li>We also collect information like IP addresses and user behavior for research.</li>
							<li>Any data you share during surveys, inquiries, or reviews may be used as testimonials.</li>
							<li>Your personal information may be shared with our service providers, business partners, or agents for better service.</li>
						</ul>
					</div>	
					<h3>Third-Party Activities:</h3>
					<div class="privacy-contact-tick">
						<ul>
							<li>We may have third-party links on our site, but we don't control their data collection practices.</li>
							<li>We aren't liable for data loss due to third-party activities or server failures.</li>
							<li>We may verify or authenticate your information to ensure service delivery.</li>
						</ul>
					</div>
					<h3>Information Sharing:</h3>
					<div class="privacy-contact-tick">
						<ul>
							<li>We may share your information as required by law or to protect personal safety or national interests.</li>
							<li>Your data may be shared with contractors, service providers, or agents for better user experience.</li>
							<li>In case of any mergers or collaborations, your information may be shared with the involved entity.</li>
						</ul>
					</div>	
					<h3>User's Consent:</h3>
					<p>By using our website and sharing information, you consent to the use and sharing of that information as described in this policy.</p>
					<h3>Modification of Privacy Policy:</h3>
					<div class="privacy-contact-tick">
						<ul>
							<li>Your shared information will be retained as long as we deem necessary.</li>
							<li>If you want us to correct or delete your information, contact us at info@whizseed.com.</li>
						</ul>
					</div>
					<h3>Dispute Resolution:</h3>
					<div class="privacy-contact-tick">
						<ul>
							<li>Disputes will be resolved through mediation or arbitration.</li>
							<li>If mediation fails, arbitration will be conducted in English in Delhi.</li>
						</ul>
					</div>
					<h3>Contact Us:</h3>
					<p>If you have questions or concerns about our privacy policy, please contact us through our website. We strive to protect your data and provide a secure and user-friendly experience on our website.</p>
				</div>
			</div>
			<div class="col-lg-1 col-md-1"></div>
			<div class="col-lg-4 col-md-4 col-sm-12 privacy-page-heading-img">
				<img src="https://www.whizseed.com/frontend/assets/images1/privacy-policy-img.png" alt="privacy policy">
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