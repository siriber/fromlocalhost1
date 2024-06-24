@extends('layouts.layout')

@section('content')
 <!--contact section-->
 <section id="contact" class="py-5 bg-success">
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
                    <h2 class="text-capitalize">new user?</h2>
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
                        <input type="text" name="" class="form-control" placeholder="username">
                       <!--append-->
                       <div class="input-group-append">
                          <button type="button" class="btn btn-primary">Submit</button>
                       </div>
                       <!--end of append-->
                    </div>
                    <div class="input-group my-3">
                        <!--prepend-->
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                         </div>
                         <input type="text" name="" class="form-control" placeholder="email">
                     </div>
                     <div class="input-group my-3">
                        <!--prepend-->
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="text" name="" class="form-control" placeholder="Phone number">
                     </div>
                     <div class="input-group my-3">
                           <!--prepend-->
                           <div class="input-group-prepend">
                               <span class="input-group-text"><i class="fab fa-facebook"></i></span>
                           </div>
                           <input type="text" name="" class="form-control" placeholder="Facebook handle">
                        </div>
                    <button class="btn btn-outline-dark btn-block text-uppercase m-3">sign up here</button>
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
@endsection
