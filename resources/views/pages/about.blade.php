@extends('master')
@section('title','About Us')
@section('content')

<div class="listings">
	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 order-lg-1 order-2">
					<h2 class="intro_title">The One Way Realty</h2>
					<div class="intro_subtitle">Sed vestibulum lectus ut leo molestie, id suscipit magna</div>
					<p class="intro_text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tellus eros, placerat quis fermentum et, viverra sit amet lacus. Nam gravida semper augue id sagittis. Cras nec arcu quis velit tempor porttitor sit amet vel risus. Sed vestibulum lectus ut leo molestie, id suscipit magna mattis. Vivamus nisl ligula, varius congue dui sit amet, vestibulum sollicitudin mauris. Vestibulum quis ligula in nunc varius maximus ac et nunc. Nulla sed magna turpis.</p>
					<div class="button intro_button trans_200"><a class="trans_200" href="#">read more</a></div>
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

	<div class="agents">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h3>out agents</h3>
						<span class="section_subtitle">The best out there</span>
					</div>
				</div>
			</div>

			<div class="row agents_row">

				<!-- Agent -->
				<div class="col-lg-3 agent_col text-center">
					<div class="agent_image mx-auto">
						<img src="images/agent_1.jpg" alt="image by Andrew Robles">
					</div>
					<div class="agent_content">
						<div class="agent_name">michael williams</div>
						<div class="agent_role">Real Estate Agent</div>
						<div class="agent_social">
							<ul class="agent_social_list">
								<li class="agent_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
								<li class="agent_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li class="agent_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Agent -->
				<div class="col-lg-3 agent_col text-center">
					<div class="agent_image mx-auto">
						<img src="images/agent_2.jpg" alt="https://unsplash.com/@gabrielsilverio">
					</div>
					<div class="agent_content">
						<div class="agent_name">michael williams</div>
						<div class="agent_role">Real Estate Agent</div>
						<div class="agent_social">
							<ul class="agent_social_list">
								<li class="agent_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
								<li class="agent_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li class="agent_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Agent -->
				<div class="col-lg-3 agent_col text-center">
					<div class="agent_image mx-auto">
						<img src="images/agent_3.jpg" alt="https://unsplash.com/@mehdizadeh">
					</div>
					<div class="agent_content">
						<div class="agent_name">michael williams</div>
						<div class="agent_role">Real Estate Agent</div>
						<div class="agent_social">
							<ul class="agent_social_list">
								<li class="agent_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
								<li class="agent_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li class="agent_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Agent -->
				<div class="col-lg-3 agent_col text-center">
					<div class="agent_image mx-auto">
						<img src="images/agent_4.jpg" alt="https://unsplash.com/@michaeldam">
					</div>
					<div class="agent_content">
						<div class="agent_name">michael williams</div>
						<div class="agent_role">Real Estate Agent</div>
						<div class="agent_social">
							<ul class="agent_social_list">
								<li class="agent_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
								<li class="agent_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li class="agent_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="agents_more">
						<div class="button agents_more_button trans_200"><a class="trans_200" href="#">read more</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection