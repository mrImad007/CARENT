@extends('partials._header')
@section('content')

<x-flash-message />
{{-- start content  --}}
<section class="page-search">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Advance Search -->
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
			</div>
		</div>
	</div>
</section>
<!--===================================
=            Store Section            =
====================================-->
<section class="section bg-gray">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<!-- Left sidebar -->
			<div class="col-md-8">
				<div class="product-details">
					<h1 class="product-title">{{$offer->car_make}} {{$offer->car_model}} {{$offer->car_power}} HP {{$offer->car_engine}} </h1>
					<div class="product-meta">
						<ul class="list-inline">
							{{-- <li class="list-inline-item"><i class="fa fa-user-o"></i> By <a href="">{{$offer->car_make}}</a></li> --}}
							<li class="list-inline-item"><i class="fa fa-folder-open-o"></i> Category<a href="">{{$offer->car_category}}</a></li>
						</ul>
					</div>
					<div id="carouselExampleIndicators" class="product-slider carousel slide" data-ride="carousel">
						
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="{{$offer->car_image}}" alt="First slide">
							</div>
						</div>

					</div>
					<div class="content">
						<ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Product Details</a>
							</li>
						</ul>
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<h3 class="tab-title">Product Description</h3>
								<p>{{$offer->description}}</p>
								<h3 class="tab-title">More</h3>
								<iframe width="100%" height="400" src="https://www.youtube.com/embed/LUH7njvhydE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
								<p></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam sed, officia reiciendis necessitatibus obcaecati eum, quaerat unde illo suscipit placeat nihil voluptatibus ipsa omnis repudiandae, excepturi! Id aperiam eius perferendis cupiditate exercitationem, mollitia numquam fuga, inventore quam eaque cumque fugiat, neque repudiandae dolore qui itaque iste asperiores ullam ut eum illum aliquam dignissimos similique! Aperiam aut temporibus optio nulla numquam molestias eum officia maiores aliquid laborum et officiis pariatur, delectus sapiente molestiae sit accusantium a libero, eligendi vero eius laboriosam minus. Nemo quibusdam nesciunt doloribus repellendus expedita necessitatibus velit vero?</p>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<div class="widget price text-center">
						<h4>Price</h4>
						<p>${{$offer->car_price}}</p>
					</div>
					<!-- User Profile widget -->
					<div class="widget user">
						<img class="rounded-circle" src="{{$offer->image}}" alt="" style="width: 100%; margin-bottom:15px">
						<h4><a href="">{{$offer->name}}</a></h4>
						<p class="member-time">Member since {{$offer->created_at}}</p>
						<p>Phone : {{$offer->phone}}</p>
						<ul class="list-inline mt-20">
							<li class="list-inline-item">
								{{-- <form action="{{ url('/order?id='$id) }}" method="GET"> --}}
									{{-- @csrf --}}
									{{-- <input type="hidden" name="command_id" value="{{$id}}"> --}}
									{{-- <input type="hidden" name="user_id" value="{{auth()->user()->id}}"> --}}
									{{-- <button class="btn btn-main-sm">Order This Car id {{$id}}</button> --}}
								{{-- </form> --}}
								<a href="{{ url('/order?id='.$id) }}" class="btn btn-main-sm"> Order this car</a>
							</li>
						</ul>
					</div>
					<!-- Safety tips widget -->
					<div class="widget disclaimer">
						<h5 class="widget-header">Safety Tips</h5>
						<ul>
							<li>Meet seller at a public place</li>
							<li>Check the item before you buy</li>
							<li>Pay only after collecting the item</li>
							<li>Pay only after collecting the item</li>
						</ul>
					</div>
					<!-- Coupon Widget -->
					<div class="widget coupon text-center">
						<!-- Coupon description -->
						<p>Have a great product to post ? Share it with
							your fellow users.
						</p>
						<!-- Submii button -->
						<a href="" class="btn btn-transparent-white">Submit Listing</a>
					</div>
					
				</div>
			</div>
			
		</div>
	</div>
	<!-- Container End -->
</section>

@endsection