@extends('master')
@section('title','About Us')
@section('content')

<div class="listings">
	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 order-lg-1 order-2">
					<h2 class="intro_title">{{ $about->company_slogan }}</h2>
					<!--<div class="intro_subtitle">{{ $about->company_slogan }}</div>-->
					<p class="intro_text">{{ $about->description }}</p>
					<!--<div class="button intro_button trans_200"><a class="trans_200" href="#">read more</a></div>-->
				</div>
				<div class="col-lg-5 order-lg-2 order-1">
					<div class="intro_image">
						<img src="/images/intro.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Milestones -->

	<div class="milestones">
		<div class="milestones_background parallax-window" data-parallax="scroll" data-image-src="images/milestones.jpg"></div>
		<div class="container">
			<div class="row">

				<!-- Milestone -->
				<div class="col-lg-2 milestone_col">
					<div class="milestone text-center d-flex flex-column align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column justify-content-end"><img src="images/milestone_1.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="310">0</div>
						<div class="milestone_text">houses sold</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-2 milestone_col">
					<div class="milestone text-center d-flex flex-column align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column justify-content-end"><img src="images/milestone_2.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="129">0</div>
						<div class="milestone_text">clients</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-2 milestone_col">
					<div class="milestone text-center d-flex flex-column align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column justify-content-end"><img src="images/milestone_3.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="14">0</div>
						<div class="milestone_text">agents</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-2 milestone_col">
					<div class="milestone text-center d-flex flex-column align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column justify-content-end"><img src="images/milestone_4.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="521">0</div>
						<div class="milestone_text">rents</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-2 milestone_col">
					<div class="milestone text-center d-flex flex-column align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column justify-content-end"><img src="images/milestone_5.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="1107">0</div>
						<div class="milestone_text">contracts</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-2 milestone_col">
					<div class="milestone text-center d-flex flex-column align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column justify-content-end"><img src="images/milestone_6.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="39">0</div>
						<div class="milestone_text">investments</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Agents -->

</div>

@endsection