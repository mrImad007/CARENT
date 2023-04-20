@extends('partials._header')

@section('content')

<x-flash-message />
<body class="body-wrapper">
<!--==================================
=            User Profile            =
===================================-->

<section class="user-profile section">
	<div class="container">
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
					</div>
					<!-- Dashboard Links -->
					
				</div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
				<!-- Edit Personal Info -->
				<div class="widget personal-info">
					<h3 class="widget-header user">Edit Personal Information</h3>
					<form action="/saveEdit/{{auth()->user()->id}}" method="POST">
						@csrf
						<!-- First Name -->
						<div class="form-group">
						    <label for="first-name">Full Name</label>
						    <input type="text" class="form-control" id="first-name" name="name" value="{{auth()->user()->name}}" placeholder="{{auth()->user()->name}}">
						</div>
						<!-- Email -->
						<div class="form-group">
						    <label for="last-name">Email</label>
						    <input type="email" class="form-control" id="last-name" name="email" value="{{auth()->user()->email}}" placeholder="{{auth()->user()->email}}">
						</div>
						<!-- Adress -->
						<div class="form-group">
						    <label for="last-name">Adress</label>
						    <input type="text" class="form-control" id="last-name" name="adress" value="{{auth()->user()->adress}}" placeholder="{{auth()->user()->adress}}">
						</div>
						<!-- Phone -->
						<div class="form-group">
						    <label for="last-name">Phone</label>
						    <input type="number" class="form-control" id="last-name" name="phone" value="{{auth()->user()->phone}}" placeholder="{{auth()->user()->phone}}">
						</div>
						<!-- Phone -->
						<div class="form-group">
						    <label for="last-name">password</label>
						    <input type="password" class="form-control" id="last-name" name="password"  placeholder="password">
						</div>
						<!-- File chooser -->
						<div class="form-group choose-file">
							<i class="fa fa-user text-center"></i>
						    <input type="file" class="form-control-file d-inline" id="input-file" name="image">
						 </div>
						<!-- Submit button -->
						<button class="btn btn-transparent">Save My Changes</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection