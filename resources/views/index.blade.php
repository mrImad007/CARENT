@extends('partials._header')
@section('content')

<x-flash-message />	
{{-- start content  --}}
<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>Buy, Sell Or Rent Your Car </h1>
					<p>Join the millions who buy and sell from each other <br> everyday in local communities around the world </p>
					<div class="short-popular-category-list text-center">
						<h2>Popular Category</h2>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href=""><i class="fa fa-bed"></i> Hotel</a></li>
							<li class="list-inline-item">
								<a href=""><i class="fa fa-grav"></i> Fitness</a>
							</li>
							<li class="list-inline-item">
								<a href=""><i class="fa fa-car"></i> Cars</a>
							</li>
							<li class="list-inline-item">
								<a href=""><i class="fa fa-cutlery"></i> Restaurants</a>
							</li>
							<li class="list-inline-item">
								<a href=""><i class="fa fa-coffee"></i> Cafe</a>
							</li>
						</ul>
					</div>
					
				</div>
				<!-- Advance Search -->
				<div class="advance-search">
					<form action="/search" method="GET">
						<div class="row" style="display: flex; align-items: center; justify-content: space-around" >
							<!-- Store Search -->
							<div class="col-lg-6 col-md-12">
								<div class="block d-flex" style="width: 750px">
									<input type="text" name="search" class="form-control mb-2 mr-sm-2 mb-sm-0" id="search" placeholder="Search for store">
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="block d-flex" style="display: flex; justify-content: flex-end">
									<!-- Search Button -->
									<button class="btn btn-main">SEARCH</button>
								</div>
							</div>
						</div>
					</form>
					
				</div>
				
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<!--===================================
=            Client Slider            =
====================================-->

<!--===========================================
=            Popular deals section            =
============================================-->

<section class="popular-deals section bg-gray">
	<div class="container">
		<article>
			<!-- Post Image -->
			<div class="image">
				<img src="./images/1.jpg" alt="article-01">
			</div>
			<!-- Post Title -->
			<h3>What is CARENT</h3>
			<ul class="list-inline">
				<li class="list-inline-item">by ZAOUI Imad Eddine (Founder)</li>
				<li class="list-inline-item">Apr 10,2023</li>
			</ul>
			<!-- Post Description -->
			<p class="">CARENT is an innovative web application that allows people to buy, sell, and even rent their vehicles in one place. This platform offers numerous deals to meet the needs of its customers. With CARENT, users can easily navigate the site and find their preferred car in just a few clicks. It's the perfect solution for those looking to save time and money when buying or selling a car.
			</p>
		</article>
	</div>
</section>





@endsection