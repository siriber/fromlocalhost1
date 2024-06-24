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
		<button type="button" class="btn btn-danger">Thanks</button>
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
		<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-print">
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
		<button type="button" class="btn btn-danger">Thanks</button>
		</div>
	</div>
	<div class="well">
		<p>this is a well</p>
	</div>
	<hr>
	<div class="page-header">
		<h1>Button</h1>
	</div>

	<p>

		<button type="button" class="btn btn-default">Default</button>
		<button type="button" class="btn btn-primary">Primary</button>
		<button type="button" class="btn btn-success">Success</button>
		<button type="button" class="btn btn-info">Info</button>
		<button type="button" class="btn btn-warning">Warning</button>
		<button type="button" class="btn btn-danger">Danger</button>
		<button type="button" class="btn btn-dark">Dark</button>
	</p>
	<p>
		<button type="button" class="btn-lg btn-default"><i class="glyphicon glyphicon-print"></i>Default</button>
		<button type="button" class="btn-lg btn-primary">Primary</button>
		<button type="button" class="btn-lg btn-success">Success</button>
		<button type="button" class="btn-lg btn-info">Info</button>
		<button type="button" class="btn-lg btn-warning">Warning</button>
		<button type="button" class="btn-lg btn-danger">Danger</button>
		<button type="button" class="btn-lg btn-dark">Dark</button>
		<button type="button" class="btn-lg btn-dark"><span class="glyphicon glyphicon-search"></span>Me</button>
	</p>
	<p>
		<button type="button" class="btn-sm btn-default">Default</button>
		<button type="button" class="btn-sm btn-primary">Primary</button>
		<button type="button" class="btn-sm btn-success">Success</button>
		<button type="button" class="btn-sm btn-info">Info</button>
		<button type="button" class="btn-sm btn-warning">Warning</button>
		<button type="button" class="btn-sm btn-danger">Danger</button>
		<button type="button" class="btn-sm btn-dark">Dark</button>
	</p>
	<p>
		<button type="button" class="btn-xs btn-default">Default</button>
		<button type="button" class="btn-xs btn-primary">Primary</button>
		<button type="button" class="btn-xs btn-success">Success</button>
		<button type="button" class="btn-xs btn-info">Info</button>
		<button type="button" class="btn-xs btn-warning">Warning</button>
		<button type="button" class="btn-xs btn-danger">Danger</button>
		<button type="button" class="btn-xs btn-dark">Dark</button>
	</p>
	<!--Adding panel-->
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
