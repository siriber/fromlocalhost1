@extends('layouts.layout')

@section('content')
    <div class="container bg-secondary text-white p-4">
      <div class="row">
         <h1>Standard Heading</h1>
         <p class="text-danger">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non blanditiis nesciunt sunt,
            deleniti repudiandae porro similique eligendi eius repellendus perferendis!
         </p>
         <button class="btn btn-primary m-2 p-2">Primary Button</button>
         <button class="btn btn-danger m-3 p-3">Danger Button</button>

      </div>
   </div>
   <!--End of container-->
   <div class="container-fluid bg-warning text-dark py-5">
      <div class="row">
         <div class="col">
            <h1 class="display-1">display-1</h1>
            <p class="display-4">display-4</p>
            <p class="text-success lead px-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
               Praesentium animi harum sed maiores, magni tempore vitae eos tenetur dignissimos
               repudiandae accusamus ipsum quos optio ullam. Exercitationem modi consectetur
                totam debitis.
            </p>
            <button type="button" class="btn btn-dark text-danger mt-4">btn dark</button>
            <button type="button" class="btn btn-success text-muted mb-4">btn dark</button>
            <button type="button" class="btn btn-secondary text-primary my-4">btn dark</button>
      </div>
   </div>
   <!--end of container-fluid-->
   <section id="skills" class="bg-dark py-5">
      <div class="container">
         <!--use align-items-center class with the height class in a seperate css-->
         <div class="row height align-items-center text-center">
            <div class="col">
               <h1 class="text-white">Section Example</h1>
               <p class="display-4 text-warning">Paragraph Display</p>
               <p class="text-info px-5 text-right">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Quisquam cupiditate voluptate architecto reiciendis ullam inventore dicta quibusdam
                  harum nobis, excepturi optio omnis tempora nulla fuga non sequi? Eum, veritatis
                   reiciendis?
               </p>
               <p class="text-light text-right py-4">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Error quas placeat,
                  ea corporis eos, natus iusto recusandae asperiores quos quibusdam facere?
                   Inventore, impedit quia. Sunt non voluptate tenetur expedita atque!
               </p>
               <button type="button" class="btn btn-warning text-secondary">
                  btn-warning
               </button>
               <button type="button" class="btn btn-info text-dark">
                     btn-warning
               </button>
               <button type="button" class="btn btn-light text-dark">
                     btn-warning
               </button>
            </div>
         </div>
      </div>
   </section>
   <!--End of first section-->
   <section class="bg-light">
      <div class="container">
         <div class="row height align-items-center justify-content-center">
            <div class="col-9">
               <h1 class="display-2 text-danger text-uppercase">donsimon</h1>
               <p class="text-muted lead my-4">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis eum at
                  autem repellendus officiis, incidunt eius cumque molestiae nihil fuga
                  iste mollitia reiciendis ipsum eveniet nam perferendis? Autem, dolor illum.
               </p>
               <a href="" class="btn btn-secondary text-danger text-uppercase p-3 mt-3">
                  Explore
               </a>
               <a href="" class="btn btn-dark text-light text-uppercase p-3 mt-3 mx-3">
                     Explore
               </a>
            </div>
         </div>
      </div>
   </section>
   <!--End of second section-->
   <section class="bg-primary py-5">
      <div class="container-fluid">
         <div class="row">
            <div class="col text-center bg-danger">
               <i class="fas fa-home fa-3x text-light"></i>
               <h1 class="text-dark">fa-home</h1>
            </div>
            <div class="col text-center bg-info">
                  <i class="fas fa-home fa-3x text-light"></i>
                  <h1 class="text-dark">fa-home</h1>
            </div>
            <div class="col text-center bg-warning">
                  <i class="fas fa-home fa-3x text-light"></i>
                  <h1 class="text-dark">fa-home</h1>
            </div>
            <div class="col text-center bg-success">
                  <i class="fas fa-home fa-3x text-light"></i>
                  <h1 class="text-dark">fa-home</h1>
            </div>
         </div>
      </div>
   </section>
   <!--end of first grid-->
   <section class="bg-success py-5">
      <div class="container-fluid">
         <div class="row">
            <div class="col-8 bg-secondary mb-3 text-center">
               <i class="fas fa-star fa-3x"></i>
               <h3>Star</h3>
            </div>
            <div class="col-4 bg-light mb-3 text-center">
                  <i class="fas fa-star fa-3x"></i>
                  <h3>Star</h3>
            </div>
            <div class="col-3 bg-light mb-3 text-center">
                  <i class="fas fa-star fa-3x"></i>
                  <h3>Star</h3>
               </div>
               <div class="col-9 bg-secondary mb-3 text-center">
                     <i class="fas fa-star fa-3x"></i>
                     <h3>Star</h3>
               </div>
         </div>
      </div>
   </section>
   <!--end of second grid-->
   <section class="bg-light py-5">
      <div class="container-fluid">
         <div class="row">
            <!--a single column-->
            <!--'col-sm-4' Start spliting up form the small screen-->
            <!--'col-md-4' Start spliting up form medium screen-->
            <!--'col-lg-4' Start spliting up form the large screen-->
            <!--'col-xl-4' Start spliting up form extra large screen-->
            <div class="col-md-4">
               <i class="fab fa-html5 fa-3x text-info"></i>
               <h2 class="text-capitalize text-dark py-3">learn html</h2>
               <p class="text-muted">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus repellendus
                   impedit quisquam labore esse, deleniti beatae hic minima aliquid necessitatibus
                   sequi ipsa id soluta doloribus voluptatem ipsum sed reprehenderit dolor.
               </p>
            </div>
            <!--end of single column-->
            <!--a single column-->
            <div class="col-md-4">
                  <i class="fab fa-css3 fa-3x text-info"></i>
                  <h2 class="text-capitalize text-dark py-3">learn css</h2>
                  <p class="text-muted">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus repellendus
                      impedit quisquam labore esse, deleniti beatae hic minima aliquid necessitatibus
                      sequi ipsa id soluta doloribus voluptatem ipsum sed reprehenderit dolor.
                  </p>
               </div>
               <!--end of single column-->
               <!--a single column-->
            <div class="col-md-4">
                  <i class="fab fa-js fa-3x text-info"></i>
                  <h2 class="text-capitalize text-dark py-3">learn js</h2>
                  <p class="text-muted">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus repellendus
                      impedit quisquam labore esse, deleniti beatae hic minima aliquid necessitatibus
                      sequi ipsa id soluta doloribus voluptatem ipsum sed reprehenderit dolor.
                  </p>
               </div>
               <!--end of single column-->
         </div>
      </div>

   </section>
   <!--last section-->
   <section class="bg-danger py-5">
         <div class="container-fluid">
            <div class="row">
               <!--a single column-->
               <!--'col-sm-4' Start spliting up form the small screen-->
               <!--'col-md-4' Start spliting up form medium screen-->
               <!--'col-lg-4' Start spliting up form the large screen-->
               <!--'col-xl-4' Start spliting up form extra large screen-->
               <div class="col-sm-6 col-md-4 col-lg-3">
                  <i class="fab fa-html5 fa-3x text-white"></i>
                  <h2 class="text-capitalize text-dark py-3">learn html</h2>
                  <p class="text-muted">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus repellendus
                      impedit quisquam labore esse, deleniti beatae hic minima aliquid necessitatibus
                      sequi ipsa id soluta doloribus voluptatem ipsum sed reprehenderit dolor.
                  </p>
               </div>
               <!--end of single column-->
               <!--a single column-->
               <div class="col-sm-6 col-md-4 col-lg-6">
                     <i class="fab fa-css3 fa-3x text-white"></i>
                     <h2 class="text-capitalize text-dark py-3">learn css</h2>
                     <p class="text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus repellendus
                         impedit quisquam labore esse, deleniti beatae hic minima aliquid necessitatibus
                         sequi ipsa id soluta doloribus voluptatem ipsum sed reprehenderit dolor.
                     </p>
                  </div>
                  <!--end of single column-->
                  <!--a single column-->
               <div class="col-sm-6 col-md-4 col-lg-3">
                     <i class="fab fa-js fa-3x text-white"></i>
                     <h2 class="text-capitalize text-dark py-3">learn js</h2>
                     <p class="text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus repellendus
                         impedit quisquam labore esse, deleniti beatae hic minima aliquid necessitatibus
                         sequi ipsa id soluta doloribus voluptatem ipsum sed reprehenderit dolor.
                     </p>
                  </div>
                  <!--end of single column-->
            </div>
         </div>

      </section>
@endsection
