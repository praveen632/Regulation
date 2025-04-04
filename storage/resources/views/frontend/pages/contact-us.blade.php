@extends('frontend.layouts.master')
@section('content')
<section class="grey-bg check-page">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="title">
					<h2>{{$record->title}}</h2>
				</div>
				<div class="contact-from">
					<form id="contactfrm" name="contactfrm" method="post">
						<div class="row">
							<div class="col-lg-12 mb-4">
								<div class="input-contact">
									<label class="font-sm font-bold text-dark">Full Name</label>
									<div class="position-relative">
										<input type="text" name="name" value="" class="form-control" required>
										<i class="fa fa-user-o icon-contact-input"></i>
									</div>
								</div>
							</div>
							<div class="col-lg-12 mb-4">
								<div class="input-contact">
									<label class="font-sm font-bold text-dark">Email</label>
									<div class="position-relative">
										<input type="email" name="email" value="" class="form-control" required>		
										<i class="fa fa-envelope-o icon-contact-input"></i>
									</div>
								</div>
							</div>
							<div class="col-lg-12 mb-4">
								<div class="input-contact">
								<label class="font-sm font-bold text-dark">Phone</label>
									<div class="position-relative">
										<input type="text" name="phone" value="" class="form-control" pattern="[0-9]{10}" maxlength="10" required>		
										<i class="fa fa-phone icon-contact-input"></i>
									</div>
								</div>
							</div>
							<div class="col-lg-12 mb-4">
								<div class="input-contact">
									<label class="font-sm font-bold text-dark">Subject*</label>
									<div class="position-relative">
										<input type="text" name="subject" value="" class="form-control" required>		
										<i class="fa fa-pencil-square-o icon-contact-input"></i>
									</div>
								</div>
							</div>
							<div class="col-lg-12 mb-4">
								<div class="input-contact">
									<label class="font-sm font-bold text-dark">Message*</label>
									<div class="position-relative">
										<textarea name="messages" cols="40" rows="4" type="textarea" class="form-control" required></textarea>		
									</div>
								</div>
							</div>
							<div class="col-lg-6 mb-4">
								<div class="input-contact">
									<button type="submit" class="btn btn-primary" id="contbtn">Send Query</button>
								</div>
							</div>
							<div class="success_msg"></div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-6">
				<div class="contact-data">
		          	<div class="title">
						<h2>{!! $record->short_description !!}</h2>
					</div>
		          	<div class="row mt-5 mb-3">
	              		<div class="col-lg-2">
		                	<i class="fa fa-map-marker text-green fa-3x"></i>
	              		</div>
		              	<div class="col-lg-10">
		                	<h6 class="font-bold text-bold text-green mb-2">Head Office</h6>
		                	<p>Pearls Omaxe Tower, 612 , 6th Floor, Netaji Subhash Place, New Delhi, Delhi 110034</p>
		              	</div>
		          	</div>
		          	<div class="row mt-3 mb-3">
	              		<div class="col-lg-2">
		                	<i class="fa fa-map-marker text-green fa-3x"></i>
	              		</div>
		              	<div class="col-lg-10">
		                	<h6 class="font-bold text-bold text-green mb-2">Gurgaon Office</h6>
		                	<p>880, Udhyog Vihar Phase-V, Gurugram, Haryana</p>
		              	</div>
		          	</div>
		          	<div class="row mt-3 mb-3">
	              		<div class="col-lg-2">
		                	<i class="fa fa-map-marker text-green fa-3x"></i>
	              		</div>
		              	<div class="col-lg-10">
		                	<h6 class="font-bold text-bold text-green mb-2">Bangalore Office</h6>
		                	<p>Indiqube Sigma 3B 4th Floor Wing A2, 7th C Main 3rd Block Koramangala Bangalore-560034</p>
		              	</div>
		          	</div>
		          	<div class="row mt-3 mb-3">
	              		<div class="col-lg-2">
		                	<i class="fa fa-map-marker text-green fa-3x"></i>
	              		</div>
		              	<div class="col-lg-10">
		                	<h6 class="font-bold text-bold text-green mb-2">Faridabad Office</h6>
		                	<p>59/9, Faridabad,  Haryana, 121006</p>
		              	</div>
		          	</div>
		          	<div class="row mb-3">
	              		<div class="col-lg-2">
		                	<i class="fa fa-mobile text-green fa-3x"></i>
	              		</div>
	              		<div class="col-lg-10">
		                <h6 class="font-bold text-bold  text-green mb-2">Contact Details</h6>
			                <p><a href="tel:9999098408">9999098408</a></p>
			                <p><a href="tel:9625205517">9625205517</a></p>
	              		</div>
		          	</div>
		          	<div class="row mb-3">
						<div class="col-lg-2">
							<i class="fa fa-envelope-o text-green fa-3x"></i>
						</div>
						<div class="col-lg-10">
							<h6 class="font-bold text-bold text-green mb-2">Email Address</h6>
							<p><a href="mailto:info@startupfino.com">info@startupfino.com</a></p>
						</div>
		          	</div>
		        </div>
			</div>
		</div>
	</div>
</section>
<section class="map" style="padding: 0;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d874.9921648933381!2d77.15124962920349!3d28.690584098899695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0234639483a9%3A0x518a1f25f26b7207!2sPearls%20Omaxe%20Tower%2C%20I%20%26%20II%2C%20Netaji%20Subhash%20Place%2C%20Wazirpur%2C%20Delhi%2C%20110034!5e0!3m2!1sen!2sin!4v1632397338634!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
	</div>
</section>

@endsection