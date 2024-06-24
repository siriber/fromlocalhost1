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
   <!--End of Navigation-->

   <div class="container">
      <p>Use the .fade class to add a fading effect when opening and closing the modal:</p>
      <!-- Button to Open the Modal -->
      <button type="button" class="btn btn-primary m-4" data-toggle="modal" data-target="#myModal">
      Open modal
    </button>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
       <!--Change the size of the modal by adding the .modal-sm class for small modals,
         .modal-lg class for large modals, or .modal-xl for extra large modals. Add the
         size class to the <div> element with class .modal-dialog:-->
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Modal Heading</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            Modal body Modal body Modal body Modal body Modal body Modal body Modal body
            Modal body Modal body Modal body Modal body Modal body Modal body Modal body
            Modal body Modal body Modal body Modal body Modal body Modal body Modal body
            Modal body Modal body Modal body Modal body Modal body Modal body Modal body
            Modal body Modal body Modal body Modal body Modal body Modal body Modal body
            Modal body Modal body Modal body Modal body Modal body Modal body Modal body
            Modal body Modal body Modal body Modal body Modal body Modal body Modal body
            Modal body Modal body Modal body Modal body Modal body Modal body Modal body
            Modal body Modal body Modal body Modal body Modal body Modal body Modal body
            Modal body Modal body Modal body Modal body Modal body Modal body Modal body
            Modal body Modal body Modal body Modal body Modal body Modal body Modal body
            Modal body Modal body Modal body Modal body Modal body Modal body Modal body
            Modal body Modal body Modal body Modal body Modal body Modal body Modal body
            Modal body Modal body Modal body Modal body Modal body Modal body Modal body
            Modal body Modal body Modal body Modal body Modal body Modal body Modal body
            Modal body Modal body Modal body Modal body Modal body Modal body Modal body
            Modal body Modal body Modal body Modal body Modal body Modal body Modal body
            Modal body Modal body Modal body Modal body Modal body Modal body Modal body
            Modal body Modal body Modal body Modal body Modal body Modal body Modal body
            Modal body Modal body Modal body Modal body Modal body Modal body Modal body
            Modal body Modal body Modal body Modal body Modal body Modal body Modal body
            Modal body Modal body Modal body Modal body Modal body Modal body Modal body
            Modal body Modal body Modal body Modal body Modal body Modal body Modal body
            Modal body Modal body Modal body Modal body Modal body Modal body Modal body
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>

      <!--fixed footer-->
      <div class="navbar navbar-inverse navbar-fixed-bottom bg-light">
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
</div>
@endsection
