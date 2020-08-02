@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/news_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/news_responsive.css') }}">
@endsection

@section('js')
    <script src="{{ asset('plugins/greensock/TweenMax.min.js') }}"></script>
    <script src="{{ asset('plugins/greensock/TimelineMax.min.js') }}"></script>
    <script src="{{ asset('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('plugins/greensock/animation.gsap.min.js') }}"></script>
    <script src="{{ asset('plugins/greensock/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('plugins/parallax-js-master/parallax.min.js') }}"></script>
    <script src="{{ asset('js/news_custom.js') }}"></script>
@endsection

@section('content')
    <!-- Home -->

	<div class="home">
		<!-- Image by https://unsplash.com/@peecho -->
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/news.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">News</div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="index.html">Home</a></li>
									<li class="home_breadcrumb">News</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Find Form -->

	<div class="find">
		<!-- Image by https://unsplash.com/@garciasaldana_ -->
		<div class="find_background_container prlx_parent">
			<div class="find_background prlx" style="background-image:url({{ asset('images/find.jpg') }})"></div>
		</div>
		<!-- <div class="find_background parallax-window" data-parallax="scroll" data-image-src="images/find.jpg" data-speed="0.8"></div> -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="find_title text-center">Find the Adventure of a lifetime</div>
				</div>
				<div class="col-12">
					<div class="find_form_container">
						<form action="#" id="find_form" class="find_form d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-between justify-content-start flex-wrap">
							<div class="find_item">
								<div>Destination:</div>
								<input type="text" class="destination find_input" required="required" placeholder="Keyword here">
							</div>
							<div class="find_item">
								<div>Adventure type:</div>
								<select name="adventure" id="adventure" class="dropdown_item_select find_input">
									<option>Categories</option>
									<option>Categories</option>
									<option>Categories</option>
								</select>
							</div>
							<div class="find_item">
								<div>Min price</div>
								<select name="min_price" id="min_price" class="dropdown_item_select find_input">
									<option>&nbsp;</option>
									<option>Price</option>
									<option>Price</option>
								</select>
							</div>
							<div class="find_item">
								<div>Max price</div>
								<select name="max_price" id="max_price" class="dropdown_item_select find_input">
									<option>&nbsp;</option>
									<option>Price</option>
									<option>Price</option>
								</select>
							</div>
							<button class="button find_button">Find</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">

				<!-- News Posts -->
				<div class="col-lg-9">
					<div class="news_posts">
						
						<!-- News Post -->
						<div class="news_post">
							<div class="post_title"><a href="#">Top destinations in Europe</a></div>
							<div class="post_meta">
								<ul>
									<li><a href="#">by admin</a></li>
									<li>january 31, 2018</li>
									<li><a href="#">3 comments</a></li>
								</ul>
							</div>
							<div class="post_image">
								<img src="images/news_1.jpg" alt="https://unsplash.com/@simonmigaj">
								<a href="#"><div class="post_image_box text-center">+</div></a>
							</div>
							<div class="post_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis. Quisque vel est id justo faucibus dapibus id a nibh. Aenean suscipit consequat lacus, sit amet mollis nulla. Morbi sagittis orci id lacus convallis tempus eget sit amet metus.</p>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="post_title"><a href="#">Tips & tricks to have a perfect vacation</a></div>
							<div class="post_meta">
								<ul>
									<li><a href="#">by admin</a></li>
									<li>january 31, 2018</li>
									<li><a href="#">3 comments</a></li>
								</ul>
							</div>
							<div class="post_image">
								<img src="images/news_2.jpg" alt="https://unsplash.com/@mfggomez">
								<a href="#"><div class="post_image_box text-center">+</div></a>
							</div>
							<div class="post_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis. Quisque vel est id justo faucibus dapibus id a nibh. Aenean suscipit consequat lacus, sit amet mollis nulla. Morbi sagittis orci id lacus convallis tempus eget sit amet metus.</p>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="post_title"><a href="#">Top destinations in Europe</a></div>
							<div class="post_meta">
								<ul>
									<li><a href="#">by admin</a></li>
									<li>january 31, 2018</li>
									<li><a href="#">3 comments</a></li>
								</ul>
							</div>
							<div class="post_image">
								<img src="images/news_3.jpg" alt="https://unsplash.com/@claudiotrigueros">
								<a href="#"><div class="post_image_box text-center">+</div></a>
							</div>
							<div class="post_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis. Quisque vel est id justo faucibus dapibus id a nibh. Aenean suscipit consequat lacus, sit amet mollis nulla. Morbi sagittis orci id lacus convallis tempus eget sit amet metus.</p>
							</div>
						</div>

					</div>
				</div>

				<!-- Sidebar -->
				<div class="col-lg-3">
					<div class="sidebar">
						<div class="sidebar_search">
							<input type="search" class="sidebar_search_input" placeholder="Search">
						</div>

						<!-- Featured Posts -->
						<div class="sidebar_featured">

							<!-- Featured Post -->
							<div class="sidebar_featured_post">
								<div class="sidebar_featured_image"><img src="images/sidebar_featured_1.jpg" alt=""></div>
								<div class="sidebar_featured_title"><a href="#">Top destinations in Europe</a></div>
								<div class="sidebar_featured_meta">
									<ul>
										<li><a href="#">by admin</a></li>
										<li>january 31, 2018</li>
										<li><a href="#">3 comments</a></li>
									</ul>
								</div>
							</div>

							<!-- Featured Post -->
							<div class="sidebar_featured_post">
								<div class="sidebar_featured_image"><img src="images/sidebar_featured_2.jpg" alt=""></div>
								<div class="sidebar_featured_title"><a href="#">Best beaches in the world</a></div>
								<div class="sidebar_featured_meta">
									<ul>
										<li><a href="#">by admin</a></li>
										<li>january 31, 2018</li>
										<li><a href="#">3 comments</a></li>
									</ul>
								</div>
							</div>

							<!-- Featured Post -->
							<div class="sidebar_featured_post">
								<div class="sidebar_featured_image"><img src="images/sidebar_featured_3.jpg" alt=""></div>
								<div class="sidebar_featured_title"><a href="#">Best beaches in the world</a></div>
								<div class="sidebar_featured_meta">
									<ul>
										<li><a href="#">by admin</a></li>
										<li>january 31, 2018</li>
										<li><a href="#">3 comments</a></li>
									</ul>
								</div>
							</div>

						</div>

						<!-- Offers -->
						<div class="sidebar_offers">

							<!-- Offer -->
							<div class="sidebar_offer">
								<div class="sidebar_offer_background" style="background-image:url({{ asset('images/offer_1.jpg') }})"></div>
								<div class="sidebar_offer_content">
									<div class="sidebar_offer_destination">bali</div>
									<div class="sidebar_offer_percent">38%</div>
									<div class="sidebar_offer_title">Last Minute Offer</div>
									<div class="sidebar_offer_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed mauris.</div>
									<div class="sidebar_offer_button"><a href="offers.html">See Offer</a></div>
								</div>
							</div>

							<!-- Offer -->
							<div class="sidebar_offer">
								<div class="sidebar_offer_background" style="background-image:url({{ asset('images/offer_2.jpg') }})"></div>
								<div class="sidebar_offer_content">
									<div class="sidebar_offer_destination">bali</div>
									<div class="sidebar_offer_percent">25%</div>
									<div class="sidebar_offer_title">Last Minute Offer</div>
									<div class="sidebar_offer_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed mauris.</div>
									<div class="sidebar_offer_button"><a href="offers.html">See Offer</a></div>
								</div>
							</div>

						</div>

						<!-- Sidebar Quote -->
						<div class="sidebar_quote">
							<div class="quote_box"><img src="images/quote.png" alt=""></div>
							<div class="quote_text"><span>“Traveling</span> – it leaves you speechless, then turns you into a storyteller.”</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<!-- Image by https://unsplash.com/@garciasaldana_ -->
		<div class="newsletter_background" style="background-image:url({{ asset('images/newsletter.jpg') }})"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="newsletter_content">
						<div class="newsletter_title text-center">Subscribe to our Newsletter</div>
						<div class="newsletter_form_container">
							<form action="#" id="newsletter_form" class="newsletter_form">
								<div class="d-flex flex-md-row flex-column align-content-center justify-content-between">
									<input type="email" id="newsletter_input" class="newsletter_input" placeholder="Your E-mail Address">
									<button type="submit" id="newsletter_button" class="newsletter_button">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection