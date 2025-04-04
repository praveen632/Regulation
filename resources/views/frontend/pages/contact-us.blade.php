
@extends('frontend.layouts.master')
@section('title', $seo->meta_title ?? "whizseed")
@section('meta_keywords', $seo->meta_keyword ?? "whizseed")
@section('meta_description', $seo->meta_description ?? "whizseed")
@section('content')
<?php 
    $fino_url = url()->current();
    $fino_new_url_1 = str_replace('https://www.whizseed.com/services/','',$fino_url);
    $fino_new_url_2 = str_replace('https://www.whizseed.com/','',$fino_url);
    $fino_check_service=strpos($fino_url,"services");
    $fino_new_url_3 = ($fino_check_service>0?$fino_new_url_1:$fino_new_url_2);
?>
<!-- <div class="inner-about">
	<img src="{{asset($record->image)}}">	
	<div class="breadcrumb">
		<a href="">Home &nbsp</a>
		<span> > About Us</span>
	</div>	
</div> -->

<section class="top-banner-pages-section">
	<div class="top-banner-pages">
		<h1><span>Contact</span> Us</h1>
		<p>We serve many customers, ranging from small businesses, <br>medium entrepreneurs, to world-renowned companies.</p>
	</div>
</section>

<section class="contact-heading-section mt-5 mb-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 contact-heading">
				<h2>Contact Us</h2>
				<p>At WhizSeed, we're dedicated to fueling your entrepreneurial fire. Our services and expert guidance empower startups and entrepreneurs across India to build, grow, and prosper.</p>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-5 col-md-5 col-sm-12 contact-heading-img">
				<img src="https://www.whizseed.com/frontend/assets/images1/contact-us-image.png" alt="contact us">
			</div>
		</div>
	</div>
</section>
<section class="contact-us-list-section pb-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="contact-us-list">
					<h2>Get in Touch With Us</h2>
					<p>We save you not only time, but in many <br>cases also many thousands of kroner. <br> Want to get in touch?</p>
				</div>
				<div class="contact-us-office-add-list">
					<div class="contact-us-office-add">
						<div class="office-details-icon">
							<img src="https://www.whizseed.com/frontend/assets/images1/office-icon.png" alt="office-icon">
						</div>
						<div class="office-details-wh">
							<h4>Head Offices</h4>
							<p>H-213, Sector 63, Noida, Uttar Pradesh, 201301 </p>
						</div>
					</div>
					<div class="contact-us-office-add">
						<div class="office-details-icon">
							<img src="https://www.whizseed.com/frontend/assets/images1/tel-icon.png" alt="tel-icon">
						</div>
						<div class="office-details-wh">
							<h4>For Quick Inquiries</h4>
							<p><span class="call-number"> <img src="https://www.whizseed.com/frontend/assets/images1/call-icon.png" alt="call-icon"> +91-9625432342</span> <span class="whatsapp-number"><img src="https://www.whizseed.com/frontend/assets/images1/whatsapp-wh.png" alt="whatsapp"> +91-9625432342</span></p>
						</div>
					</div>
					<div class="contact-us-office-add">
						<div class="office-details-icon">
							<img src="https://www.whizseed.com/frontend/assets/images1/office-icon.png" alt="office-icon">
						</div>
						<div class="office-details-wh office-details-email">
							<h4>Email us</h4>
							<p>
								<strong>For Information</strong> info@whizseed.com
							</p>
							<p>
								<strong>For HR</strong> hr@whizseed.com
							</p>
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-7 col-md-7 col-sm-12">
				<div>
					<form>
						<div class="form-row">
							<div class="form-group col-md-6">
							<label for="full_name"><b>*Full Name</b></label>
							<input type="email" name="email" id="full_name" class="form-control" placeholder="What is Your Name" required>
							</div>
							<div class="form-group col-md-6">
							<label for="email_1"><b>*Email Address</b></label>
							<input type="email" name="email" id="email_1" class="form-control" placeholder="Yourname@gmail.com" required>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="mobile_1"><b>*Mobile Number</b></label>
								<div class="countrycode-and-input">
									<div class="country_code-contact form-control">+91 <img src="https://www.whizseed.com/frontend/assets/images1/tringa.png" alt="tringa"></div>
									<input type="text" name="mobile" id="mobile_1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" class="form-control countrycode-input-contact" placeholder="Mobile Number*" minlength="10" maxlength="10" required>
								</div>
							</div>
							<div class="form-group col-md-6">
							<label for="email_1"><b>*State</b></label>
								<div class="state_id1">
								<select class="form-control" name="state_id" id="state_id_1">
									<option value="">Select State*</option>
									<option value="1">Andaman & Nicobar Islands</option>
									<option value="2">Andhra Pradesh</option>
									<option value="3">Arunachal Pradesh</option>
									<option value="4">Assam</option>
									<option value="5">Bihar</option>
									<option value="7">Chhattisgarh</option>
									<option value="8">Dadra & Nagar Haveli</option>
									<option value="9">Daman & Diu</option>
									<option value="10">Delhi</option>
									<option value="11">Goa</option>
									<option value="12">Gujarat</option>
									<option value="13">Haryana</option>
									<option value="14">Himachal Pradesh</option>
									<option value="15">Jammu & Kashmir</option>
									<option value="16">Jharkhand</option>
									<option value="17">Karnataka</option>
									<option value="18">Kerala</option>
									<option value="19">Lakshadweep</option>
									<option value="20">Madhya Pradesh</option>
									<option value="21">Maharashtra</option>
									<option value="22">Manipur</option>
									<option value="23">Meghalaya</option>
									<option value="24">Mizoram</option>
									<option value="25">Nagaland</option>
									<option value="26">Odisha</option>
									<option value="27">Puducherry</option>
									<option value="28">Punjab</option>
									<option value="29">Rajasthan</option>
									<option value="30">Sikkim</option>
									<option value="31">Tamil Nadu</option>
									<option value="32">Telangana</option>
									<option value="33">Tripura</option>
									<option value="34">Uttar Pradesh</option>
									<option value="35">Uttarakhand</option>
									<option value="36">West Bengal</option>
								</select>
								</div>
							</div>
							<div class="form-group col-lg-12">
								<label for="comment"><b>How can we Help You?</b></label>
								<textarea class="form-control" placeholder="Type Your Query Here	" rows="5" id="comment"></textarea>
							</div>
						</div>
						<div class="form-group mt-5">
							<button type="submit" class="btn-darkprimary btn-block vcfo_consultation_form" id="servicebtnM1">Send Request</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- <section class="map" style="padding: 0;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d874.9921648933381!2d77.15124962920349!3d28.690584098899695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0234639483a9%3A0x518a1f25f26b7207!2sPearls%20Omaxe%20Tower%2C%20I%20%26%20II%2C%20Netaji%20Subhash%20Place%2C%20Wazirpur%2C%20Delhi%2C%20110034!5e0!3m2!1sen!2sin!4v1632397338634!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
	</div>
</section> -->
@endsection

