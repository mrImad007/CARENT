@extends('partials._header')
@section('content')


<!--==================================
=         Providers Dashboard        =
===================================-->
<x-flash-message />
<section class="dashboard section">
	<!-- Container Start -->
	<div class="container">
		<!-- Row Start -->
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user-dashboard-profile">
						<!-- User Image -->
						<div class="profile-thumb">
							<img src="{{auth()->user()->image}}" alt="" class="rounded-circle">
						</div>
						<!-- User Name -->
						<h5 class="text-center">{{auth()->user()->name}}</h5>
						<p>Joined {{auth()->user()->created_at->format('M d, Y')}}</p>
						<a href="{{ url('/edit-profile?id='.auth()->user()->id)}}" class="btn btn-main-sm">Edit Profile</a>
					</div>
					<!-- Dashboard Links -->
					<div class="widget user-dashboard-menu">
						<ul>
							<li><a href="/cart"><i class="fa fa-user"></i> My Pending offers</a></li>
							<li class="active"><a href="/UserConfirmed"><i class="fa fa-bolt"></i>My Confirmed offers (History) </a></li>
							<li><a href="/logout"><i class="fa fa-cog"></i> Logout</a></li>
							<li><a href="/deleteAccount"><i class="fa fa-power-off"></i>Delete Account</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
				<!-- Recently Favorited -->
				<div class="widget dashboard-container my-adslist">
					<h3 class="widget-header ">My Confirmed offers</h3>
					<table class="table table-responsive product-dashboard-table">
						<thead>
							<tr>
								<th>Image</th>
								<th class="text-center">Product Details</th>

							</tr>
						</thead>
						<tbody>
							{{-- start the loop  --}}
						@foreach ($offers as $offer)
							<tr>
								<td class="product-thumb">
									<img width="120px" height="auto" src="{{$offer->car_image}}" alt="image description"></td>
								<td class="product-details text-center">
									<h3 class="title">{{$offer->car_model}}</h3>
									<span class="add-id"><strong>Make</strong> {{$offer->car_make}}</span>
									<span class="add-id"><strong>Engine</strong> {{$offer->car_engine}}</span>
									<span class="add-id"><strong>Power</strong> {{$offer->car_power}} HP</span>
									<span class="location"><strong>Category</strong>{{$offer->car_category}}</span>
									<span class="location"><strong>Price</strong>${{$offer->car_price}}</span>
									<span class="status active"><strong>Status</strong>Accepted</span>
                                </td>
							</tr>
						@endforeach
						{{-- end the loop  --}}
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
		<!-- Row End -->
	</div>
	<!-- Container End -->
</section>

@endsection