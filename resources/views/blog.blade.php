@extends('_header')

@section('content')

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
<!--==================================
=            Blog Section            =
===================================-->

<section class="blog section">
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
					  <div class="item"><img src="./images/blog/post-2.jpg" alt="Slider-Img-02"></div>
					  <div class="item"><img src="./images/blog/post-2.jpg" alt="Slider-Img-03"></div>
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
				<!-- Pagination -->
				<nav aria-label="Page navigation example">
				  <ul class="pagination">
				    <li class="page-item active"><a class="page-link" href="#">1</a></li>
				    <li class="page-item"><a class="page-link" href="#">2</a></li>
				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item">
				      <a class="page-link" href="#" aria-label="Next">
				        <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
				        <span class="sr-only">Next</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
				<div class="sidebar">
					<!-- Search Widget -->
					<div class="widget search p-0">
						<div class="input-group">
						    <input type="text" class="form-control" id="expire" placeholder="Search...">
						    <span class="input-group-addon"><i class="fa fa-search"></i></span>
					    </div>
					</div>
					<!-- Category Widget -->
					<div class="widget category">
						<!-- Widget Header -->
						<h5 class="widget-header">Categories</h5>
						<ul class="category-list">
							<li><a href="">Appearel <span class="float-right">(2)</span></a></li>
							<li><a href="">Accesories <span class="float-right">(5)</span></a></li>
							<li><a href="">Business<span class="float-right">(7)</span></a></li>
							<li><a href="">Entertaiment<span class="float-right">(3)</span></a></li>
							<li><a href="">Education<span class="float-right">(9)</span></a></li>
						</ul>
					</div>
					<!-- Store Widget -->
					<div class="widget related-store">
						<!-- Widget Header -->
						<h5 class="widget-header">Related Store</h5>
						<ul class="store-list md list-inline">
							<li class="list-inline-item">
								<a href=""><img src="./images/popular-offer/populer-offer-02.png" alt="store-image"></a>
							</li>
							<li class="list-inline-item">
								<a href=""><img src="./images/popular-offer/populer-offer-03.png" alt="store-image"></a>
							</li>
							<li class="list-inline-item">
								<a href=""><img src="./images/popular-offer/populer-offer-04.png" alt="store-image"></a>
							</li>
							<li class="list-inline-item">
								<a href=""><img src="./images/popular-offer/populer-offer-05.png" alt="store-image"></a>
							</li>
							<li class="list-inline-item">
								<a href=""><img src="./images/popular-offer/populer-offer-06.png" alt="store-image"></a>
							</li>
							<li class="list-inline-item">
								<a href=""><img src="./images/popular-offer/populer-offer-07.png" alt="store-image"></a>
							</li>
						</ul>
					</div>
					<!-- Archive Widget -->
					<div class="widget archive">
						<!-- Widget Header -->
						<h5 class="widget-header">Archives</h5>
						<ul class="archive-list">
							<li><a href="">January 2017</a></li>
							<li><a href="">February 2017</a></li>
							<li><a href="">March 2017</a></li>
							<li><a href="">April 2017</a></li>
							<li><a href="">May 2017</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <img src="./images/logo-footer.png" alt="">
          <!-- description -->
          <p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3">
        <div class="block">
          <h4>Site Pages</h4>
          <ul>
            <li><a href="#">Boston</a></li>
            <li><a href="#">How It works</a></li>
            <li><a href="#">Deals & Coupons</a></li>
            <li><a href="#">Articls & Tips</a></li>
            <li><a href="#">Terms of Services</a></li>
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
        <div class="block">
          <h4>Admin Pages</h4>
          <ul>
            <li><a href="#">Boston</a></li>
            <li><a href="#">How It works</a></li>
            <li><a href="#">Deals & Coupons</a></li>
            <li><a href="#">Articls & Tips</a></li>
            <li><a href="#">Terms of Services</a></li>
          </ul>
        </div>
      </div>
      <!-- Promotion -->
      <div class="col-lg-4 col-md-7">
        <!-- App promotion -->
        <div class="block-2 app-promotion">
          <a href="">
            <!-- Icon -->
            <img src="./images/footer/phone-icon.png" alt="mobile-icon">
          </a>
          <p>Get the Dealsy Mobile App and Save more</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <!-- Copyright -->
          <div class="copyright">
            <p>Copyright © 2016. All Rights Reserved</p>
          </div>
        </div>
        <div class="col-sm-6 col-12">
          <!-- Social Icons -->
          <ul class="social-media-icons text-right">
              <li><a class="fa fa-facebook" href=""></a></li>
              <li><a class="fa fa-twitter" href=""></a></li>
              <li><a class="fa fa-pinterest-p" href=""></a></li>
              <li><a class="fa fa-vimeo" href=""></a></li>
            </ul>
        </div>
      </div>
    </div>
    <!-- Container End -->
    <!-- To Top -->
    <div class="top-to">
      <a id="top" class="" href=""><i class="fa fa-angle-up"></i></a>
    </div>
</footer>

  <!-- JAVASCRIPTS -->
  <script src="./plugins/jquery/jquery.min.js"></script>
  <script src="./plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="./plugins/tether/js/tether.min.js"></script>
  <script src="./plugins/raty/jquery.raty-fa.js"></script>
  <script src="./plugins/bootstrap/dist/js/popper.min.js"></script>
  <script src="./plugins/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="./plugins/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>
  <script src="./plugins/slick-carousel/slick/slick.min.js"></script>
  <script src="./plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
  <script src="./plugins/fancybox/jquery.fancybox.pack.js"></script>
  <script src="./plugins/smoothscroll/SmoothScroll.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script src="js/scripts.js"></script>

@endsection
