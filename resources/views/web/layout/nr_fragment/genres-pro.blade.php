 <style>
     .genres-pro-width {
         height: 200px;
         width: 200px;
     }

     .border-line {
         border: 3px solid green;
     }

     .img-fluid {
         height: 150px;
         width: 150px;
     }
 </style>
 <div class="row m-5 border-line">
     <div class=" col-12 mb-2 d-flex justify-content-center">
         <h5>Choose Your Genres</h4>
     </div>
     @foreach ($categories as $category)
         <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 genres-pro-width ">
             <img class="img-fluid" src="{{ asset('categoryImages/' . $category->cat_image) }}" alt="Drama">
             <h6>{{ $category->name }}</h6>
         </div>
     @endforeach
 </div>
