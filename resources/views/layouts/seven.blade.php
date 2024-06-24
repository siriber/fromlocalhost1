@extends('layouts.layout')

@section('content')
<!--nave bar-->
   <nav class="navbar navbar-expand-md navbar-light bg-danger">
         <!-- Brand -->
         <a class="navbar-brand text-uppercase font-italic" href="#">firt website</a>

         <!-- Toggler/collapsibe Button -->
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
           <span class="navbar-toggler-icon"></span>
         </button>

         <!-- Navbar links -->
         <div class="collapse navbar-collapse" id="collapsibleNavbar">
           <ul class="navbar-nav">
             <li class="nav-item active">
               <a class="nav-link" href="#header">Home</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#skills">Skills</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#about">About</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#projects">Projects</a>
            </li>
           </ul>
         </div>
       </nav>
   <!--end of nav bar-->
 <header id="header" class="bg-dark">
    <div class="container">
       <div class="row height align-items-center">
          <!--row is a flext box parent container-->
          <div class="col">
             <h1 class="text-danger text-uppercase font-weight-bold font-italic">
                <strong>my first bootstrap</strong>
                <small class="text-light">website</small>
             </h1>
             <p class="text-muted lead py-2 w-75">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime voluptates
                minima laboriosam quo impedit? Cum illo dolortotam deserunt, neque tempora
                odit doloremque eaque porro ipsum ab minus error voluptatibus.
             </p>
             <a href="" class="btn btn-outline-primary btn-lg m-2 text">press here</a>
             <a href="" class="btn btn-outline-success btn-lg m-2 text">press here</a>
          </div>
       </div>
    </div>
 </header>
 <!--end of header-->
 <!--skills section-->
 <section id="skills" class="py-5 bg-white">
    <div class="container">
       <!--title-->
       <div class="row">
          <div class="col text-center">
             <h1 class="display-4 text-upercase text-dark mb-0">
                <strong>Skills</strong>
             </h1>
             <div class="title-underline bg-danger"></div>
             <p class="mt-2 text-capitalize text-muted">
                  Lorem ipsum dolor sit amet.
             </p>
          </div>
       </div>
       <!--end of tilte-->
       <div class="row">
          <!--a single column-->
          <div class="col-md-6 col-lg-3 text-center my-4">
             <i class="fab fa-node-js fa-5x text-danger"></i>
             <h3 class="text-uppercase my-3">node js</h3>
             <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Iure sint ipsam vero quo atque aperiam!
             </p>
             <a href="" class="btn btn-outline-danger btn-block text-uppercase">press here</a>
          </div>
          <!--end of single column-->
          <!--a single column-->
          <div class="col-md-6 col-lg-3 text-center my-4">
               <i class="fab fa-css3 fa-5x text-danger"></i>
               <h3 class="text-uppercase my-3">css3</h3>
               <p class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Iure sint ipsam vero quo atque aperiam!
               </p>
               <a href="" class="btn btn-outline-danger w-75 btn-block text-uppercase">press here</a>
            </div>
            <!--end of single column-->
            <!--a single column-->
          <div class="col-md-6 col-lg-3 text-center my-4">
               <i class="fab fa-js fa-5x text-danger"></i>
               <h3 class="text-uppercase my-3">js</h3>
               <p class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Iure sint ipsam vero quo atque aperiam!
               </p>
               <a href="" class="btn btn-outline-danger w-50 btn-block text-uppercase">press here</a>
            </div>
            <!--end of single column-->
            <!--a single column-->
          <div class="col-md-6 col-lg-3 text-center my-4">
               <i class="fab fa-node-js fa-5x text-danger"></i>
               <h3 class="text-uppercase my-3">node js</h3>
               <p class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Iure sint ipsam vero quo atque aperiam!
               </p>
               <a href="" class="btn btn-outline-danger w-100 btn-block text-uppercase">press here</a>
            </div>
            <!--end of single column-->
       </div>
    </div>
 </section>
 <!--end of skills section-->
 <!--about section-->
 <section id="about" class="bg-info">
    <container-fluid>
       <div class="row">
          <!--about image col-->
            <div class="col-md-6 about-picture height-80">


            </div>
          <!--end of about image col-->
          <!--about text col-->
          <div class="col-md-6 about-text height-80 px-5 d-flex align-items-center justify-content-center">
               <!--this is for centering-->
               <div class="about-text-center">
                <!--title-->
                <div class="row">
                     <div class="col text-center">
                        <h1 class="display-4 text-upercase text-dark mb-0">
                           <strong>About</strong>
                        </h1>
                        <div class="title-underline bg-warning"></div>
                        <p class="mt-2 text-capitalize text-muted">
                           Lorem ipsum dolor sit amet.
                        </p>
                     </div>
                  </div>
                  <!--end of tilte-->
                  <!--single item-->
                  <div class="checkbox-item d-flex">
                     <i class="fas fa-check fa-3x p-2 bg-warning mr-3 align-self-center"></i>
                     <p class="text-light lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, ex.
                     </p>
                  </div>
                  <!--end of single item-->
                  <!--single item-->
                  <div class="checkbox-item d-flex">
                        <i class="fas fa-check fa-3x p-2 bg-warning mr-3 align-self-center"></i>
                        <p class="text-light lead">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, ex.
                        </p>
                     </div>
                     <!--end of single item-->
                     <!--single item-->
                  <div class="checkbox-item d-flex">
                        <i class="fas fa-check fa-3x p-2 bg-warning mr-3 align-self-center"></i>
                        <p class="text-light lead">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, ex.
                        </p>
                     </div>
                     <!--end of single item-->
               </div>
          </div>
          <!--end of about text col-->
       </div>
    </container-fluid>
 </section>
 <!--end of about section-->
 <!--projects-->
 <section id="projects" class="py-5 bg-secondary">
    <div class="container">
       <!--title-->
       <div class="row">
            <div class="col text-center">
               <h1 class="display-4 text-upercase text-dark mb-0">
                  <strong>Projects</strong>
               </h1>
               <div class="title-underline bg-danger"></div>
            </div>
         </div>
         <!--end of tilte-->
         <div class="row py-3">
            <!--single project-->
            <div class="col-sm-6 col-md-4 my-3">
               <img src="images/39.jpg" class="img-fluid rounded" alt="project">
            </div>
            <!--end of single project-->
             <!--single project-->
             <div class="col-sm-6 col-md-4 my-3">
                  <img src="images/33.jpg" class="img-fluid img-thumbnail bg-danger border border-danger" alt="project">
               </div>
               <!--end of single project-->
                <!--single project-->
            <div class="col-sm-6 col-md-4 my-3 mx-auto">
                  <img src="images/13.jpg" class="img-fluid rounded-circle" alt="project">
               </div>
               <!--end of single project-->
         </div>
         <div class="row py-3 no-gutters">
               <!--single project-->
               <div class="col-sm-6 col-md-4 my-3">
                  <img src="images/40.jpg" class="img-fluid" alt="project">
               </div>
               <!--end of single project-->
                <!--single project-->
                <div class="col-sm-6 col-md-4 my-3">
                     <img src="images/34.jpg" class="img-fluid alt="project">
                  </div>
                  <!--end of single project-->
                   <!--single project-->
               <div class="col-sm-6 col-md-4 my-3 mx-auto">
                     <img src="images/36.jpg" class="img-fluid" alt="project">
               </div>
                  <!--end of single project-->
         </div>
    </div>
 </section>
 <!--end of projects-->
 <!--team section-->
 <section id="team" class="py-5 bg-light">
     <!--title-->
     <div class="row">
         <div class="col text-center">
            <h1 class="display-4 text-uppercase text-dark mb-0">
               <strong>team</strong>
            </h1>
            <div class="title-underline bg-danger"></div>
            <p class="mt-2 text-capitalize text-muted">
               Lorem ipsum dolor sit amet.
            </p>
         </div>
      </div>
      <!--end of tilte-->
      <div class="row">
         <!--team member-->
         <div class="col-md-6 col-lg-4 my-3">
            <div class="card">
               <img src="images/11.jpg" class="card-img-top" alt="">
               <div class="card-body">
                  <h5 class="card-title text-capitalize">team member</h5>
                  <p class="card-text">
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, iste?
                  </p>
                  <a href="" class="btn btn-outline-warning text-uppercase">click me</a>
               </div>
               <div class="card-footer bg-secondary d-flex justify-content-around">
                  <a href="#">
                     <i class="fab fa-facebook fa-2x text-dark"></i>
                  </a>
                  <a href="#">
                     <i class="fab fa-twitter fa-2x text-dark"></i>
                  </a>
                  <a href="#">
                     <i class="fab fa-youtube fa-2x text-dark"></i>
                  </a>
                  <a href="#">
                     <i class="fab fa-google fa-2x text-dark"></i>
                  </a>
               </div>
            </div>
         </div>
         <!--end of team member-->
         <!--team member-->
         <div class="col-md-6 col-lg-4 my-3">
               <div class="card">
                  <img src="images/9.jpg" class="card-img-top" alt="">
                  <div class="card-body">
                     <h5 class="card-title text-capitalize">team member</h5>
                     <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, iste?
                     </p>
                     <a href="" class="btn btn-outline-warning text-uppercase">click me</a>
                  </div>
                  <div class="card-footer bg-secondary d-flex justify-content-between">
                     <a href="#">
                        <i class="fab fa-facebook fa-2x text-dark"></i>
                     </a>
                     <a href="#">
                        <i class="fab fa-twitter fa-2x text-dark"></i>
                     </a>
                     <a href="#">
                        <i class="fab fa-youtube fa-2x text-dark"></i>
                     </a>
                     <a href="#">
                        <i class="fab fa-google fa-2x text-dark"></i>
                     </a>
                  </div>
               </div>
            </div>
            <!--end of team member-->
            <!--team member-->
         <div class="col-md-6 col-lg-4 my-3">
               <div class="card">
                  <img src="images/17.jpg" class="card-img-top" alt="">
                  <div class="card-body">
                     <h5 class="card-title text-capitalize">team member</h5>
                     <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, iste?
                     </p>
                     <a href="" class="btn btn-outline-warning text-uppercase">click me</a>
                  </div>
                  <div class="card-footer bg-secondary d-flex justify-content-center">
                     <a href="#">
                        <i class="fab fa-facebook fa-2x text-dark"></i>
                     </a>
                     <a href="#">
                        <i class="fab fa-twitter fa-2x text-dark"></i>
                     </a>
                     <a href="#">
                        <i class="fab fa-youtube fa-2x text-dark"></i>
                     </a>
                     <a href="#">
                        <i class="fab fa-google fa-2x text-dark"></i>
                     </a>
                  </div>
               </div>
            </div>
            <!--end of team member-->
            <!--team member-->
         <div class="col-md-6 col-lg-4 my-3 mx-auto">
               <div class="card">
                  <img src="images/22.jpg" class="card-img-top" alt="">
                  <div class="card-body">
                     <h5 class="card-title text-capitalize">team member</h5>
                     <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, iste?
                     </p>
                     <a href="" class="btn btn-outline-warning text-uppercase">click me</a>
                  </div>
                  <div class="card-footer bg-secondary d-flex justify-content-end">
                     <a href="#">
                        <i class="fab fa-facebook fa-2x text-dark"></i>
                     </a>
                     <a href="#">
                        <i class="fab fa-twitter fa-2x text-dark"></i>
                     </a>
                     <a href="#">
                        <i class="fab fa-youtube fa-2x text-dark"></i>
                     </a>
                     <a href="#">
                        <i class="fab fa-google fa-2x text-dark"></i>
                     </a>
                  </div>
               </div>
            </div>
            <!--end of team member-->
             <!--team member-->
         <div class="col-md-6 col-lg-4 my-3 mx-auto">
               <div class="card">
                  <img src="images/35.jpg" class="card-img-top" alt="">
                  <div class="card-body">
                     <h5 class="card-title text-capitalize">team member</h5>
                     <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, iste?
                     </p>
                     <a href="" class="btn btn-outline-warning text-uppercase">click me</a>
                  </div>
                  <div class="card-footer bg-secondary d-flex justify-content-start">
                     <a href="#">
                        <i class="fab fa-facebook fa-2x text-dark"></i>
                     </a>
                     <a href="#">
                        <i class="fab fa-twitter fa-2x text-dark"></i>
                     </a>
                     <a href="#">
                        <i class="fab fa-youtube fa-2x text-dark"></i>
                     </a>
                     <a href="#">
                        <i class="fab fa-google fa-2x text-dark"></i>
                     </a>
                  </div>
               </div>
            </div>
            <!--end of team member-->
      </div>
 </section>
 <!--end of team section-->
 <!--carousel section-->
 <section id="carousel" class="py-5 bg-primary">
    <div class="container">
        <!--section title-->
     <div class="row">
         <div class="col text-center">
            <h1 class="display-4 text-uppercase text-dark mb-0">
               <strong>first carousel</strong>
            </h1>
            <div class="title-underline bg-warning"></div>
            <p class="mt-2 text-capitalize text-muted">
               Lorem ipsum dolor sit amet.
            </p>
         </div>
      </div>
      <!--end of section tilte-->
      <div class="row">
         <div class="col-md-8 mx-auto text-center">
            <div id="example" class="carousel slide" data-ride="carousel">
               <!--indicators-->
               <ul class="carousel-indicators">
                  <li data-target="#example" data-slide-to="0" class="active"></li>
                  <li data-target="#example" data-slide-to="1"></li>
                  <li data-target="#example" data-slide-to="2"></li>
                  <li data-target="#example" data-slide-to="3"></li>
               </ul>
               <!--images-->
               <div class="carousel-inner">
                  <div class="carousel-item active"><img src="images/11.jpg" alt="project" class="d-block w-100"></div>
                  <div class="carousel-item"><img src="images/9.jpg" alt="project" class="d-block w-100"></div>
                  <div class="carousel-item"><img src="images/17.jpg" alt="project" class="d-block w-100"></div>
                  <div class="carousel-item"><img src="images/35.jpg" alt="project" class="d-block w-100"></div>
               </div>
               <!--end of images-->
               <!--controls-->
               <!-- Left and right controls -->
               <a class="carousel-control-prev" href="#example" data-slide="prev">
                     <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#example" data-slide="next">
                     <span class="carousel-control-next-icon"></span>
                  </a>

               <!--end of controls-->
            </div>
         </div>
      </div>
    </div>
 </section>
 <!--end of carousel section-->
 <!--filler section-->
 <section id="filler" class="p-5">
    <div class="container">
       <div class="row">
          <div class="col-md-6 mx-autho text-center">
             <h1 class="text-danger">My First Bootstrap Website</h1>
             <p class="lead text-white">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos sed eaque
                eligendi soluta illo nobis esse molestiae animi ex! Blanditiis.
             </p>
             <a href="#" class="btn btn-lg btn-primary m-2">press here</a>
          </div>
       </div>
    </div>
 </section>
 <!--end of filler section-->
 <!--blog section-->
 <section id="blog" class="p-5 bg-success">
    <div class="container">
        <!--section title-->
     <div class="row">
         <div class="col text-center">
            <h1 class="display-4 text-uppercase text-dark mb-0">
               <strong>blog</strong>
            </h1>
            <div class="title-underline bg-warning"></div>
            <p class="mt-2 text-capitalize text-muted">
               Lorem ipsum dolor sit amet.
            </p>
         </div>
      </div>
      <!--end of section tilte-->
      <div class="row">
         <div class="col-md-4">
            <img src="images/14.jpg" class="img-fluid img-thumbnail" alt="">
            <h2 class="mt-3 text-warning">Project 1</h2>
            <p class="text-muted">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, vero.
            </p>
         </div>
         <div class="col-md-4">
            <img src="images/45.jpg" class="img-fluid img-thumbnail" alt="">
            <h2 class="mt-3 text-warning">Project 1</h2>
            <p class="text-muted">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, vero.
            </p>
         </div>
         <div class="col-md-4">
            <img src="images/37.jpg" class="img-fluid img-thumbnail" alt="">
            <h2 class="mt-3 text-warning">Project 1</h2>
            <p class="text-muted">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, vero.
            </p>
         </div>
      </div>
    </div>
 </section>
 <!--end of blog section-->
 <!--contact section-->
 <section id="contact" class="py-5 bg-warning">
    <div class="container">
       <!--section title-->
     <div class="row">
         <div class="col text-center">
            <h1 class="display-4 text-uppercase text-dark mb-0">
               <strong>contact section</strong>
            </h1>
            <div class="title-underline bg-warning"></div>
            <p class="mt-2 text-capitalize text-muted">
               Lorem ipsum dolor sit amet.
            </p>
         </div>
      </div>
      <!--end of section tilte-->
      <div class="row">
         <div class="col-md-6 my-3">
            <div class="card card-body bg-secondary">
               <div class="card-title text-center text-white">
                  <h2 class="text-capitalize">new to bootstrap?</h2>
                  <p>New user sign in</p>
               </div>
               <!--end of title-->
               <!--simple form-->
               <form action="">
                  <div class="form-group mt-3">
                     <input type="name" class="form-control" placeholder="name" id="name">
                  </div>
                  <div class="form-group mt-3">
                     <input type="email" class="form-control" placeholder="email" id="email">
                  </div>
                  <div class="form-group mt-3">
                     <input type="tel" class="form-control id="telephone" placeholder="Contact">
                  </div>
                  <!--input group-->
                  <div class="input-group my-3">
                     <div class="input-group-prepend">
                        <span class="input-group-text">Username</span>
                     </div>
                     <input type="text" name="" class="form-control" id="group-username" placeholder="Username">
                  </div>
                  <!--font awesome-->
                  <div class="input-group my-3">
                     <!--prepend-->
                     <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                     </div>
                     <!--end of prepend-->
                     <input type="text" name="" class="form-control" id="group-username-1">
                     <!--append-->
                     <div class="input-group-append">
                        <button type="button" class="btn btn-primary">Submit</button>
                     </div>
                     <!--end of append-->
                  </div>
                  <button class="btn btn-outline-dark btn-block text-uppercase">sign up here</button>
               </form>
            </div>
         </div>
         <!--google maps-->
         <div class="col-md-6 my-3">
            <div class="embed-responsive embed-responsive-4by3">

            </div>
         </div>
      </div>
    </div>
 </section>
 <!--end of contact section-->
 <!--review section-->
 <section id="review" class="py-5 bg-danger">
    <div class="container">
      <!--section title-->
     <div class="row">
         <div class="col text-center">
            <h1 class="display-4 text-uppercase text-dark mb-0">
               <strong>review</strong>
            </h1>
            <div class="title-underline bg-secondary"></div>
            <p class="mt-2 text-capitalize text-muted">
               Lorem ipsum dolor sit amet.
            </p>
         </div>
      </div>
      <!--end of section tilte-->
      <div class="row">
         <div class="col-md-6 my-4">
            <img src="images/25.png" alt="" class="img-fluid rounded-circle d-none d-md-block">
         </div>
         <div class="col-md-6 my-4">
            <blockquote class="blockquote text-white">
               <p>
                  <i class="fas fa-quote-left fa-2x mr-3"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing
                   elit. Eaque perferendis dignissimos atque beatae adipisci aliquid!
               </p>
               <footer class="blockquote-footer text-left">master coder</footer>
            </blockquote>
         </div>
      </div>
    </div>
 </section>
 <!--end of review section-->
 <!--progress section-->
 <section id="progress" class="p-5">
    <div class="container">
        <!--section title-->
     <div class="row">
         <div class="col text-center">
            <h1 class="display-4 text-uppercase text-dark mb-0">
               <strong>progress</strong>
            </h1>
            <div class="title-underline bg-primary"></div>
            <p class="mt-2 text-capitalize text-muted">
               Lorem ipsum dolor sit amet.
            </p>
         </div>
       </div>
      <!--end of section tilte-->
      <div class="col-md-8 mx-auto">
         <!--progress bar single-->
         <h1 class="text-white">html</h1>
         <div class="progress bg-secondary">
            <div class="progress-bar bg-success" style="width: 20%"></div>
         </div>
         <!--end of progress bar single-->
         <!--progress bar single-->
         <h1 class="text-white">css</h1>
         <div class="progress bg-secondary">
            <div class="progress-bar bg-danger" style="width: 40%"></div>
         </div>
         <!--end of progress bar single-->
         <!--progress bar single-->
         <h1 class="text-white">js</h1>
         <div class="progress bg-secondary">
            <div class="progress-bar bg-warning" style="width: 60%"></div>
         </div>
         <!--end of progress bar single-->
         <!--progress bar single-->

         <div class="prog my-3 text-white d-flex justify-content-between">
            <h3>bootstrap</h3>
            <h3>80%</h3>
         </div>
         <div class="progress bg-secondary">
            <div class="progress-bar" style="width: 80%"></div>
         </div>
         <!--end of progress bar single-->
      </div>
    </div>
 </section>
 <!--end of progress section-->
 <!--pricing section-->
 <section id="pricing" class="py-5 bg-secondary">
    <div class="container-fluid">
       <!--section title-->
     <div class="row">
         <div class="col text-center">
            <h1 class="display-4 text-uppercase text-dark mb-0">
               <strong>Pricing</strong>
            </h1>
            <div class="title-underline bg-primary"></div>
            <p class="mt-2 text-capitalize text-white">
               Lorem ipsum dolor sit amet.
            </p>
         </div>
       </div>
      <!--end of section tilte-->
      <div class="row">
         <!--card-->
         <div class="col-md-4 my-4">
            <div class="card">
               <!--card header-->
               <div class="card-header bg-success text-white text-uppercase text-center py-5">
                  <h3>Standard</h3>
               </div>
               <!--card title-->
               <div class="card-title text-center my-3">
                  <h4>
                     <sup>$</sup>5<sub>/month</sub>
                  </h4>
               </div>
               <!--list-->
               <ul class="list-group list-group-flush text-center">
                  <li class="list-group-item">Lorem, ipsum dolor.</li>
                  <li class="list-group-item">Lorem, ipsum dolor.</li>
                  <li class="list-group-item">Lorem, ipsum dolor.</li>
               </ul>
               <!--card footer-->
               <div class="card-footer">
                  <a href="" class="btn btn-outline-dark btn-block text-capitalize">Sign up</a>
               </div>
            </div>
         </div>
         <!--end of card-->
         <!--card-->
         <div class="col-md-4 my-4">
               <div class="card">
                  <!--card header-->
                  <div class="card-header bg-danger text-white text-uppercase text-center py-5">
                     <h3>Basic</h3>
                  </div>
                  <!--card title-->
                  <div class="card-title text-center my-3">
                     <h4>
                        <sup>$</sup>10<sub>/month</sub>
                     </h4>
                  </div>
                  <!--list-->
                  <ul class="list-group list-group-flush text-center">
                     <li class="list-group-item">Lorem, ipsum dolor.</li>
                     <li class="list-group-item">Lorem, ipsum dolor.</li>
                     <li class="list-group-item">Lorem, ipsum dolor.</li>
                  </ul>
                  <!--card footer-->
                  <div class="card-footer">
                     <a href="" class="btn btn-outline-dark btn-block text-capitalize">Sign up</a>
                  </div>
               </div>
            </div>
            <!--end of card-->
            <!--card-->
         <div class="col-md-4 my-4">
               <div class="card">
                  <!--card header-->
                  <div class="card-header bg-primary text-white text-uppercase text-center py-5">
                     <h3>Pro</h3>
                  </div>
                  <!--card title-->
                  <div class="card-title text-center my-3">
                     <h4>
                        <sup>$</sup>15<sub>/month</sub>
                     </h4>
                  </div>
                  <!--list-->
                  <div class="card-body">
                     <ul class="list-group text-center">
                        <li class="list-group-item">Lorem, ipsum dolor.</li>
                        <li class="list-group-item">Lorem, ipsum dolor.</li>
                        <li class="list-group-item">Lorem, ipsum dolor.</li>
                     </ul>
                  </div>
                  <!--card footer-->
                  <div class="card-footer">
                     <a href="" class="btn btn-outline-dark btn-block text-capitalize">Sign up</a>
                  </div>
               </div>
            </div>
            <!--end of card-->
      </div>
    </div>
 </section>
 <!--end of pricing section-->
 <!--footer-->
 <footer id="footer" class="bg-dark py-5">
    <div class="container">
        <!--section title-->
     <div class="row">
         <div class="col text-center">
            <h1 class="display-4 text-uppercase text-white mb-0">
               <strong>Footer</strong>
            </h1>
            <div class="title-underline bg-primary"></div>
            <p class="mt-2 text-capitalize text-white">
               Lorem ipsum dolor sit amet.
            </p>
         </div>
       </div>
      <!--end of section tilte-->
      <div class="row">
         <div class="col text-center">
            <a href="#" class="btn">
               <i class="fab fa-facebook fa-2x text-primary m-2"></i>
            </a>
            <a href="#" class="btn">
               <i class="fab fa-twitter fa-2x text-primary m-2"></i>
            </a>
            <a href="#" class="btn">
               <i class="fab fa-instagram fa-2x text-primary m-2"></i>
            </a>
            <a href="#" class="btn">
               <i class="fab fa-google-plus fa-2x text-primary m-2"></i>
            </a>
            <!--module-->
            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-danger d-block mx-auto my-3" data-toggle="modal"
            data-target="#myModal">Log Out</button>


         </div>
      </div>
    </div>
   </footer>


   <!-- The Modal -->
   <div class="modal fade" id="myModal">
         <div class="modal-dialog">
         <div class="modal-content">

         <!-- Modal Header -->
       <div class="modal-header">
         <h4 class="modal-title">So sorry to see you leave.</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>

       <!-- Modal body -->
       <div class="modal-body">
         Bye.... and thanks for visiting our page. We hope to see you again.
       </div>

       <!-- Modal footer -->
       <div class="modal-footer">
         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
       </div>

     </div>
   </div>
 </div>
@endsection
