@extends('frontend.layouts.master')
@section('title', $record->meta_title ?? "whizseed")
@section('meta_keywords', $record->meta_keyword ?? "whizseed")
@section('meta_description', $record->meta_description ?? "whizseed")
@section('content')

<section class="top-banner-pages-section">
	<div class="top-banner-pages">
		<h1><span>Terms and </span>Conditions</h1>
		<p>We serve many customers, ranging from small businesses,<br> medium entrepreneurs, to world-renowned companies.</p>
	</div>
</section>
<section class="privacy-page-section mt-5 mb-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-7 col-md-7 col-sm-12 privacy-page-heading">
				<h2>Terms and Conditions</h2>
				<div class="privacy-page-innerPage pt-3">
					<p>This privacy policy sets out how Regulation uses and protects any information that you provide to Whizseed when you use this website.</p>
					<p>Regulation is committed to ensuring that your privacy is protected. Should we ask you to provide certain information by which you can be identified when using this website, then you can be assured that it will only be used in accordance with this privacy statement.</p>
					<p>Regulation may change this policy from time to time by updating this page. You should check this page from time to time to ensure that you are happy with any changes. What we collect? We may collect the following information:</p>

					<div class="privacy-contact-tick">
						<ul>
							<li>Name and Job title</li>
							<li>Contact Information including email address &amp; phone number</li>
							<li>Demographic Information such as city, postcode, preferences, and interests</li>
							<li>Other Information relevant to service inquiry, customer surveys, and/or offers</li>
						</ul>
					</div>

					<h3>Controlling your Personal Information</h3>
					<p>You may choose to restrict the collection or use of your personal information in the following ways:</p>
					<div class="privacy-contact-tick">
						<ul>
							<li>Whenever you are asked to fill in a form on the website, look for the box that you can click to indicate that you do not want the information to be used by anybody for promotional purposes. If such a box is not available, you may choose not to fill such a form. However, by submitting the filled inquiry form, you will be construed to have foregone your right and Company may choose to send promotional emails and materials from time to time.</li>
							<li>If you have previously agreed to us using your personal information for promotional purposes, you may change your mind at any time by writing to or emailing us at&nbsp;<strong>__________.</strong></li>
						</ul>
					</div>
					<p>We will not sell, distribute or lease your personal information to third parties unless we have your permission or are required by law to do so. We may use your personal information to send you promotional information about third parties which we think you may find interesting.</p>

					
					<h3>Contacting Us</h3>
					<p>If there are any questions regarding this privacy policy you may contact us using the information below:</p>
					<p><strong>Address: </strong></p>
					<p><strong>Email us at: </strong></p>
				</div>
			</div>
			<div class="col-lg-1 col-md-1"></div>
			<div class="col-lg-4 col-md-4 col-sm-12 privacy-page-heading-img">
				<img src="https://www.whizseed.com/frontend/assets/images1/contact-image.png" alt="contact-image">
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