@extends('frontend.layouts.master')
@section('content')
<div class="inner-about">
	<img src="{{asset($record->image)}}">	
	<div class="breadcrumb">
		<a href="">Home &nbsp</a>
		<span> > About Us</span>
	</div>	
</div>

<div class="sw">
	<div class="container">
		<div class="fino-sec">
			<img src="https://www.startupfino.com/assets/images//fino-logo.png">
			<h3>Startup<b>FINO</b></h3>
			{!! $record->description !!}
		</div>
		<div class="who-we">
			<h3>Who We Are?</h3>
			<p>Startupfino has been working in the Startup Ecosystem since a decade in terms of helping the first time founders to manage their entire Finance and Legal. StartupFino has an unparalleled experience in helping the fast growing startups right from their inception to later stage rounds. The DNA of our Fino team is perfectly suited for startups.</p>
		</div>
		<div class="who-we">
			<h3>Vision</h3>
			<h4>TO HELP MORE AND MORE FIRST TIME FOUNDERS</h4>
			<p>Startupfino has the vision to create the largest Finance and Legal outsourcing platform to help the First time Founders for all their financial or legal needs of their startup right from formation, fundraising ,people management, legal, managing finances and easy exit.</p>
		</div>
		<div class="who-we">
			<h3>Mission</h3>
			<h4>LET FOUNDER FOCUS ONLY ON CORE BUSINESS <br>AND STARTUPFINO WORK ON STREAMLINING FINANCE AND LEGAL</h4>
			<p>Startupfino has the only mission to let the Founder focus on the core business and give more and more unicorns to the nation and we streamline and simplify their end to end Finance and Legal by building the strong processes in the back end.</p>
		</div>	
	</div>	
</div>	    
<div class="sw">
	<div class="container">
		<div class="prg-container row">
			<div class="col-md-12">
            {!! $record->long_description !!}
			</div>
			<div class="col-md-12 mobile_block">
				<img src="{{asset($record->image)}}">
			</div>
			<div class="col-md-12 desk_none">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="counter-item">
							<div class="counter-inner mt-tp">
								<h3 class="prg-count" data-count="500">0</h3>
								<h4 class="prg-count-title">Startups</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="counter-item">
							<div class="counter-inner mt-tp2">
								<h3 class="prg-count" data-count="8000">0</h3>
								<h4 class="prg-count-title">Projects Completed</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="counter-item location_item">
							<div class="counter-inner mt-tp3">
								<h3 class="prg-count" data-count="4">0</h3>
								<h4 class="prg-count-title">Office Location</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="counter-item cl_item">
							<div class="counter-inner mt-tp4">
								<h3 class="prg-count" data-count="98">0</h3>
								<h4 class="prg-count-title">Client Retention</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection