<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<img src='{{asset("theme/img/logo.png")}}' alt="">
			<h2>Loading.....</h2>
		</div>
	</div>


	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src='{{asset("theme/img/logo.png")}}' alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li class="active"><a href="{{route('Home')}}">Home</a></li>
				<li><a href="{{route('Services')}}">Services</a></li>
				<li><a href="{{route('Blog')}}">Blog</a></li>
				<li><a href="{{route('Contact')}}">Contact</a></li>
				<li><a href="{{route('Elements')}}">Elements</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->