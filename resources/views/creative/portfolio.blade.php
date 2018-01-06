	@extends('creative.layout')
	@section('title','Portfolio')
	@section('content')
<!-- Portfolio -->
	<div id="portfolio" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Featured Works</h2>
				</div>
				<!-- /Section header -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					{!!Html::image('creative/./img/work1.jpg', 'img-responsive', array('class' => 'img-responsive'))!!}
					
					<div class="overlay"></div>
					<div class="work-content">
						<span>Category</span>
						<h3>Lorem ipsum dolor</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="creative/./img/work1.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					{!!Html::image('creative/./img/work2.jpg', 'img-responsive', array('class' => 'img-responsive'))!!}
					
					<div class="overlay"></div>
					<div class="work-content">
						<span>Category</span>
						<h3>Lorem ipsum dolor</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="creative/./img/work2.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
						{!!Html::image('creative/./img/work3.jpg', 'img-responsive', array('class' => 'img-responsive'))!!}
					
					<div class="overlay"></div>
					<div class="work-content">
						<span>Category</span>
						<h3>Lorem ipsum dolor</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							
							<a class="lightbox" href="creative/./img/work3.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					{!!Html::image('creative/./img/work4.jpg', 'img-responsive', array('class' => 'img-responsive'))!!}
					
					<div class="overlay"></div>
					<div class="work-content">
						<span>Category</span>
						<h3>Lorem ipsum dolor</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="creative/./img/work4.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
					<div style="color: red; text-align: center;">School Management System(SMS)</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/work5.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Category</span>
						<h3>Lorem ipsum dolor</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="./img/work5.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/work6.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Category</span>
						<h3>Lorem ipsum dolor</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="./img/work6.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Portfolio -->

@endsection