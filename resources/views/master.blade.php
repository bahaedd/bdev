<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="{{ asset('assets/images/logo.png') }}">
		<title>Larocco</title>
		<!-- Bootstrap core CSS -->
		<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Custom styles for this template -->
		<link href="{{asset('assets/css/jquery.bxslider.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
	</head>
	<body>
		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container pt-3 pb-3">
                <a class="navbar-brand mt-2" href="/" style="font-size: 25px;">
					<span class="text-danger">Moroccan</span><span class="text-success">Coder</span>
				</a>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav mt-2">
                        <li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}"><a href="{{ route('home') }}">HOME</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              CATEGORIES
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                               @foreach ($cats as $cat)
                              <li class="dropdown-item"><a href="/category/{{$cat->slug}}">{{ $cat->name }}</a></li>
                               @endforeach
                            </ul>
                          </li>
						<li class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}"><a href="{{ route('about') }}">ABOUT ME</a></li>
						<li class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}"><a href="{{ route('contact') }}">CONTACT</a></li>
                    </ul>

					<ul class="navbar-right social-network social-circle mt-2">
                        <li><a href="https://www.instagram.com/bahae_ddine.bahae/" class="icoInsta" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/profile.php?id=100014419150246" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/BSihassi" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://github.com/bahaedd" class="icoGithub" title="Github"><i class="fa fa-github"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/bahaeddine-sihassi-2a7894114/" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
					</ul>

				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>

		<div class="container">
		<header>
			{{-- <a href="index.html"><h1><strong style="color: green">LAR<strong><strong style="color: red">OCCO</strong></h1></a> --}}
		</header>
		{{-- <section class="main-slider">
			<ul class="bxslider">
				<li><div class="slider-item"><img src="{{ asset('assets/images/0.jpg') }}" title="Funky roots" width="100%" height="200" /><h2><a href="post.html" title="Vintage-Inspired Finds for Your Home">Vintage-Inspired Finds for Your Home</a></h2></div></li>
				<li><div class="slider-item"><img src="{{ asset('assets/images/2.jpeg') }}" title="Funky roots" /><h2><a href="post.html" title="Vintage-Inspired Finds for Your Home">Vintage-Inspired Finds for Your Home</a></h2></div></li>
				<li><div class="slider-item"><img src="{{ asset('assets/images/3.jpg') }}" title="Funky roots" /><h2><a href="post.html" title="Vintage-Inspired Finds for Your Home">Vintage-Inspired Finds for Your Home</a></h2></div></li>
			</ul>
        </section> --}}

		@yield('content')
		</div><!-- /.container -->

		<footer class="footer footer-dark">

			<div class="footer-socials social-network social-circle">
				<a href="https://www.instagram.com/bahae_ddine.bahae/" class="icoInsta" title="Instagram"><i class="fa fa-instagram"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100014419150246" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/BSihassi" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a>
                <a href="https://github.com/bahaedd" class="icoGithub" title="Github"><i class="fa fa-github"></i></a>
                <a href="https://www.linkedin.com/in/bahaeddine-sihassi-2a7894114/" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a>
			</div>

		</footer>

		<!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery.bxslider.js')}}"></script>
		<script src="{{asset('assets/js/mooz.scripts.min.js')}}"></script>
	</body>
</html>
