<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">

			<!-- Collapsed Hamburger -->
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<!-- Branding Image -->
			<a class="navbar-brand" href="{{ url('/') }}">
				Atlasteca
			</a>
		</div>

		<div class="collapse navbar-collapse" id="app-navbar-collapse">


			<!-- Right Side Of Navbar -->
			<ul class="nav navbar-nav navbar-right">
				<!-- Authentication Links -->
				@if (Auth::guest())
					<li><a href="{{ url('/login') }}">Login</a></li>
					<li><a href="{{ url('/register') }}">Register</a></li>
					<li><a href="{{ url('/contact') }}">Contact</a></li>
				@else
					@if (Auth::user()->admin==1)
					<li><a href="{{ url('/dashboard') }}"><i class="fa fa-btn fa-dashboard"></i>Dashboard</a></li>
					@endif
					<li><a href="{{ url('/contact') }}">Contact</a></li>
					<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
				@endif
			</ul>
		</div>
	</div>
</nav>