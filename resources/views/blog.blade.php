@extends('partials._header')
@section('content')
<body class="body-wrapper">
<!--================================
=            Page Title            =
=================================-->
<section class="page-title">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2 text-center">
				<!-- Title text -->
				<h3>Blog Page</h3>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>
<section class="blog section">
	<div class="advance-search">
		<form method="GET" action="/search">
			<div class="form-row" style="display: flex; justify-content: space-around">
				<div class="form-group col-md-4">
					<input type="text" name="search" class="form-control" id="inputtext4" placeholder="What are you looking for" style="width: 550px">
				</div>
				<div class="form-group col-md-2">
					
					<button type="submit" class="btn btn-primary">Search Now</button>
				</div>
			</div>
		</form>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
				<!-- Article 01 -->
				<article>
	<!-- Post Image -->
	<div class="image">
		<img src="./images/blog/post-1.jpg" alt="article-01">
	</div>
	<!-- Post Title -->
	<h3>Donec id dolor in erat imperdiet.</h3>
	<ul class="list-inline">
		<li class="list-inline-item">by <a href="">Admin</a></li>
		<li class="list-inline-item">Nov 22,2016</li>
	</ul>
	<!-- Post Description -->
	<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores iusto tempore voluptatum blanditiis impedit alias magni ullam facilis perspiciatis magnam!</p>
	<!-- Read more button -->
	<a href="" class="btn btn-transparent">Read More</a>
</article>
				<!-- Article 02 -->
				<article>
					<div class="post-slider owl-carousel owl-theme">
					  <div class="item"><img src="./images/blog/post-2.jpg" alt="Slider-Img-01"></div>
					</div>
					<h3>Donec id dolor in erat imperdiet.</h3>
					<ul class="list-inline">
						<li class="list-inline-item">by <a href="">Admin</a></li>
						<li class="list-inline-item">Nov 22,2016</li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores iusto tempore voluptatum blanditiis impedit alias magni ullam facilis perspiciatis magnam!</p>
					<a href="" class="btn btn-transparent">Read More</a>
				</article>
				<!-- Article 03 -->
				<article>
					<div class="video overly">
						<img src="./images/blog/post-3.jpg" alt="video-thumbnail">
						<div class="video-button video-box">
							<a href="javascript:void(0)">
								<img src="./images/blog/video-icon.png" data-video="https://www.youtube.com/embed/g3-VxLQO7do?autoplay=1" alt="video-icon">
							</a>
						</div>
					</div>
					<h3>Donec id dolor in erat imperdiet.</h3>
					<ul class="list-inline">
						<li class="list-inline-item">by <a href="">Admin</a></li>
						<li class="list-inline-item">Nov 22,2016</li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores iusto tempore voluptatum blanditiis impedit alias magni ullam facilis perspiciatis magnam!</p>
					<a href="" class="btn btn-transparent">Read More</a>
				</article>
				<!-- Article 04 -->
				<article>
	<!-- Post Image -->
	<div class="image">
		<img src="./images/blog/post-4.jpg" alt="article-01">
	</div>
	<!-- Post Title -->
	<h3>Donec id dolor in erat imperdiet.</h3>
	<ul class="list-inline">
		<li class="list-inline-item">by <a href="">Admin</a></li>
		<li class="list-inline-item">Nov 22,2016</li>
	</ul>
	<!-- Post Description -->
	<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores iusto tempore voluptatum blanditiis impedit alias magni ullam facilis perspiciatis magnam!</p>
	<!-- Read more button -->
	<a href="" class="btn btn-transparent">Read More</a>
</article>
				<!-- Article 05 -->
				<article>
	<!-- Post Image -->
	<div class="image">
		<img src="./images/blog/post-5.jpg" alt="article-01">
	</div>
	<!-- Post Title -->
	<h3>Donec id dolor in erat imperdiet.</h3>
	<ul class="list-inline">
		<li class="list-inline-item">by <a href="">Admin</a></li>
		<li class="list-inline-item">Nov 22,2016</li>
	</ul>
	<!-- Post Description -->
	<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores iusto tempore voluptatum blanditiis impedit alias magni ullam facilis perspiciatis magnam!</p>
	<!-- Read more button -->
	<a href="" class="btn btn-transparent">Read More</a>
</article>
				<!-- Article 06 -->
				<article>
					<h3>Donec id dolor in erat imperdiet.</h3>
					<ul class="list-inline">
						<li class="list-inline-item">by <a href="">Admin</a></li>
						<li class="list-inline-item">Nov 22,2016</li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores iusto tempore voluptatum blanditiis impedit alias magni ullam facilis perspiciatis magnam!</p>
					<a href="" class="btn btn-transparent">Read More</a>
				</article>
			</div>
		</div>
	</div>
</section>

@endsection
