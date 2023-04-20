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
<section class="section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="search-result bg-gray">
					<h2 class="text-center">All offers</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="category-sidebar">
					<div class="widget category-list">
						<h4 class="widget-header">All Category</h4>
						<ul class="category-list">
							<li><a href="{{ url('/category-search?search=AWD') }}">AWD </a></li>
							<li><a href="{{ url('/category-search?search=FWD') }}">FWD </a></li>
							<li><a href="{{ url('/category-search?search=RWD') }}">RWD  </a></li>
						</ul>
					</div>
					<div class="widget category-list">
						<h4 class="widget-header">Offer types</h4>
						<ul class="category-list">
							{{-- loop start  --}}
							@foreach ($types as $type)
							<li><a href="{{ url('/offertype-search?search=' . $type->id) }}">{{$type->name}} </a></li>
							@endforeach
						{{-- loop end  --}}
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="product-grid-list">
					<div class="row mt-30">
						{{-- loop start  --}}
						@foreach ($offers as $offer)
						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
								<div class="product-item bg-light">
									<div class="card">
										<div class="thumb-content">
											<a href="">
												<img class="card-img-top img-fluid" src="{{$offer->car_image}}" alt="Card image cap" style="height: 100px">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="">{{$offer->car_make}} - {{$offer->car_model}}</a></h4>
											<ul class="list-inline product-meta">
												<li class="list-inline-item">
													<a href=""><i class="fa fa-car" aria-hidden="true"></i>Motorisation : {{$offer->car_engine}}</a>
												</li>
												<li class="list-inline-item">
													<a href=""><i class="fa fa-car" aria-hidden="true"></i>Power : {{$offer->car_power}} HP</a>
												</li>
												<li class="list-inline-item">
													<a href=""><i class="fa fa-calendar"></i>Production Year :      {{$offer->car_production_year}}</a>
												</li>
											</ul>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
											<div class="product-ratings">
												<ul class="list-inline">
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
						</div>
						@endforeach
						{{-- loop end  --}}
						
						
						
						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
				</div>
				{{-- <div class="pagination justify-content-center">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</nav>
				</div> --}}
			</div>
		</div>
	</div>
</section>

@endsection