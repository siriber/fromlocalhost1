@extends('layouts.layout')

@section('content')
    <div class="container">
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Navbar</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="bootstrap.html">BOOTSTRAP</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Link</a>
      </li>
    </ul>
  </div>
</nav>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<a href="#" class="thumbmail">
				<img src="images/15.jpg" width="100%" alt="image"/>
			</a>
			<h1>Header 1</h1>
			<p>This is great this is great this is great this is great this is great
			This is great this is great this is great this is great this is great
			This is great this is great this is great this is great this is great
			This is great this is great this is great this is great this is great
			This is great this is great this is great this is great this is great
		</p>
		<button type="button" class="btn btn-danger"><span class="fas fa-plus-circle" style="margin-right:4px">
         </span>Thanks</button>
		</div>
		<div class="col-sm-4">
				<a href="#" class="thumbmail">
						<img src="images/12.jpg" width="100%" alt="image"/>
					</a>
			<h1>Header 1</h1>
			<p>This is great this is great this is great this is great this is great
			This is great this is great this is great this is great this is great
			This is great this is great this is great this is great this is great
			This is great this is great this is great this is great this is great
			This is great this is great this is great this is great this is great
		</p>
		<!--adding glyphicon-->
		<button type="button" class="btn btn-danger"><span class="fas fa-user" style="margin-right:4px">
		</span>Thanks</button>
		</div>
		<div class="col-sm-4">
				<a href="#" class="thumbmail">
						<img src="images/13.jpg" width="100%" alt="image"/>
					</a>
			<h1>Header 1</h1>
			<p>This is great this is great this is great this is great this is great
			This is great this is great this is great this is great this is great
			This is great this is great this is great this is great this is great
			This is great this is great this is great this is great this is great
			This is great this is great this is great this is great this is great
		</p>
		<button type="button" class="btn btn-danger"><span class="fas fa-hand-point-right" style="margin-right:4px">
         </span>Thanks</button>
		</div>
	</div>

	<!--fixed footer-->
	<div class="navbar navbar-inverse navbar-fixed-bottom bg-warning">
		<div class="container">
			<div class="navbar-text pull-left">
				<p>Copy right @ FastLink Nig. Ltd.</p>
			</div>
			<div class="navbar-text pull-right">
					<a href="https://facebook.com">
						<i class="fab fa-facebook fa-2x"></i>
					</a>
					<a href="https://twitter.com">
						<i class="fab fa-twitter fa-2x"></i>
					</a>
					<a href="https://pinterest.com">
						<i class="fab fa-pinterest fa-2x"></i>
					</a>
					<a href="https://instagram.com">
						<i class="fab fa-instagram fa-2x"></i>
					</a>
					<a href="https://plus.google.com">
						<i class="fab fa-google-plus-g fa-2x"></i>
					</a>
				</div>
		</div>
	</div>
</div>
@endsection
