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

<p class="pt-5">

      <button type="button" class="btn btn-default"><span class="fas fa-envelope mr-1"></span>Default</button>
      <button type="button" class="btn btn-primary"><span class="fas fa-user mr-1"></span>Primary</button>
      <button type="button" class="btn btn-success"><span class="fas fa-music mr-1"></span>Success</button>
      <button type="button" class="btn btn-info"><span class="fas fa-minus mr-1"></span>Info</button>
      <button type="button" class="btn btn-warning"><span class="fas fa-trash mr-1"></span>Warning</button>
      <button type="button" class="btn btn-danger"><span class="fas fa-signal mr-1"></span>Danger</button>
      <button type="button" class="btn btn-dark"><span class="fas fa-clock mr-1"></span>Dark</button>
</p>
<p>
      <button type="button" class="btn-lg btn-default"><span class="fas fa-print mr-1"></span></i>Default</button>
      <button type="button" class="btn-lg btn-primary"><span class="fas fa-download mr-1"></span>Primary</button>
      <button type="button" class="btn-lg btn-success"><span class="fas fa-headphones mr-1"></span>Success</button>
      <button type="button" class="btn-lg btn-info"><span class="fas fa-camera mr-1"></span>Info</button>
      <button type="button" class="btn-lg btn-warning"><span class="fas fa-image mr-1"></span>Warning</button>
      <button type="button" class="btn-lg btn-danger"><span class="fas fa-pause mr-1"></span>Danger</button>
      <button type="button" class="btn-lg btn-dark"><span class="fas fa-fast-backward mr-1"></span>Dark</button>
      <button type="button" class="btn-lg btn-dark"><span class="fas fa-fast-forward mr-1"></span>Me</button>
</p>
<p>
      <button type="button" class="btn-sm btn-default"><span class="fas fa-shopping-cart mr-1"></span>Default</button>
      <button type="button" class="btn-sm btn-primary"><span class="fas fa-shopping-basket mr-1"></span>Primary</button>
      <button type="button" class="btn-sm btn-success"><span class="fas fa-certificate mr-1"></span>Success</button>
      <button type="button" class="btn-sm btn-info"><span class="fas fa-bell mr-1"></span>Info</button>
      <button type="button" class="btn-sm btn-warning"><span class="fas fa-hand-pen mr-1"></span>Warning</button>
      <button type="button" class="btn-sm btn-danger"><span class="fas fa-qrcode mr-1"></span>Danger</button>
      <button type="button" class="btn-sm btn-dark">Dark</button>
   </p>
   <p class="pb-5">
         <button type="button" class="btn-xs btn-default">Default</button>
         <button type="button" class="btn-xs btn-primary">Primary</button>
         <button type="button" class="btn-xs btn-success">Success</button>
         <button type="button" class="btn-xs btn-info">Info</button>
         <button type="button" class="btn-xs btn-warning">Warning</button>
         <button type="button" class="btn-xs btn-danger">Danger</button>
         <button type="button" class="btn-xs btn-dark">Dark</button>
      </p>

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
