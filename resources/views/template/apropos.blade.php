@extends('template.header2')

@section('content')

<section class="about-cover-image lazy-load">
	<img src="{{asset('/winner/images/blank.gif')}}" data-echo="{{asset('/winner/images/about/01.jpg')}}" width="1934" height="734" class="img-responsive" alt="">
</section>


<section class="the-process">
	<div class="container process-container wow fadeInUp">
		<div class="row">
			<div class="col-md-4 first-column">
				<h2 class="section-title">The Process</h2>
			</div>
			<div class="col-md-4 process-description second-column">
				<p>Winner Store est une boutique en ligne qui commercialise essentiellement trois (3) produits dont la marque Never Give Up, la Crème de beauté Egyptian Magic et des Cheveux importés (mèches). Cette boutique est composée de 5 (cinq) personnes qui la gère au quotidien. 
                   Notre objectif est de donner une meilleure image au e-commerce en Côte d’Ivoire. A cet effet, notre service client est à l’écoute du client en lui apportant un suivi personnalisé. Nous proposons des produits de qualité à des prix défiants toute concurrence. Nous mettons ainsi un point d’honneur sur la fidélisation de notre clientèle.</p>
			</div>
		</div>
	</div><!-- /.container -->
</section><!-- .the-process -->

<section class="our-team">
	<div class="container our-team-container">
		<header class="text-center wow fadeIn">
			<h2 class="section-title">Notre equipe</h2>
		</header>
		<div class="row team-members wow fadeInUp">
			<div class="col-md-3 col-sm-3 team-member">
				<figure class="lazy-load">
					<img src="assets/images/blank.gif" data-echo="{{asset('/winner/images/about/Mariam.jpg')}}" alt="Team Member Name" width="1934" class="img-responsive">
					<figcaption>
						<span class="team-member-name">Mariam BAMBA</span>
						<span class="team-member-designation">Responsable Capilaire</span>
					</figcaption>
				</figure>
			</div><!-- /.team-member -->
			<div class="col-md-3 col-sm-3 team-member">
				<figure class="lazy-load">
					<img src="assets/images/blank.gif" data-echo="{{asset('/winner/images/about/Stephane.jpg')}}" alt="Team Member Name" width="1934" class="img-responsive">
					<figcaption>
						<span class="team-member-name">Stephane AKOUN </span>
						<span class="team-member-designation">Commercial Never Give Up</span>
					</figcaption>
				</figure>
			</div><!-- /.team-member -->
			<div class="col-md-3 col-sm-3 team-member">
				<figure class="lazy-load">
					<img src="assets/images/blank.gif" data-echo="{{asset('/winner/images/about/Willy.jpg')}}" alt="Team Member Name" width="1934" class="img-responsive">
					<figcaption>
						<span class="team-member-name">Willy ASSI</span>
						<span class="team-member-designation">Chargé de Communication</span>
					</figcaption>
				</figure>
			</div><!-- /.team-member -->
			<div class="col-md-3 col-sm-3 team-member">
				<figure class="lazy-load">
					<img src="assets/images/blank.gif" data-echo="{{asset('/winner/images/about/t1.jpg')}}" alt="Team Member Name" width="1934" class="img-responsive">
					<figcaption>
						<span class="team-member-name"></span>
						<span class="team-member-designation"></span>
					</figcaption>
				</figure>
			</div><!-- /.team-member -->
	</div><!-- /.container -->
</section><!-- /.our-team -->


@endsection