 @extends('layouts.welcome_app')


 @section('content')


 <!-- Masthead-->
 <header class="masthead">
     <div class="container px-4 px-lg-5 h-100">
         <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
             <div class="col-lg-8 align-self-end">
                 <h1 class="text-white font-weight-bold">Your Favorite Place for Free Bootstrap Themes</h1>
                 <hr class="divider" />
             </div>
             <div class="col-lg-8 align-self-baseline">
                 <p class="text-white-75 mb-5">Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!</p>
                 <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
             </div>
         </div>
     </div>
 </header>
 <!-- About-->
 <section class="page-section bg-primary" id="about">
     <div class="container px-4 px-lg-5">
         <div class="row gx-4 gx-lg-5 justify-content-center">
             <div class="col-lg-8 text-center">
                 <h2 class="text-white mt-0">We've got what you need!</h2>
                 <hr class="divider divider-light" />
                 <p class="text-white-75 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
                 <a class="btn btn-light btn-xl" href="#services">Get Started!</a>
             </div>
         </div>
     </div>
 </section>
 <!-- Services-->
 <section class="page-section" id="services">
     <div class="container px-4 px-lg-5">
         <h2 class="text-center mt-0">At Your Service</h2>
         <hr class="divider" />
         <div class="row gx-4 gx-lg-5">
             <div class="col-lg-3 col-md-6 text-center">
                 <div class="mt-5">
                     <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                     <h3 class="h4 mb-2">Sturdy Themes</h3>
                     <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 text-center">
                 <div class="mt-5">
                     <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                     <h3 class="h4 mb-2">Up to Date</h3>
                     <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 text-center">
                 <div class="mt-5">
                     <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                     <h3 class="h4 mb-2">Ready to Publish</h3>
                     <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 text-center">
                 <div class="mt-5">
                     <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                     <h3 class="h4 mb-2">Made with Love</h3>
                     <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Portfolio-->
 <div id="portfolio">
     <div class="container-fluid p-0">
         <div class="row g-0">
             @foreach($posts as $post)
             <div class="col-xl-4 col-md-12 col-sm-12 col-12 mb-5">
                 <a class="portfolio-box" href="{{asset('postVideos/' . $post->cover_video)}}" title="Project Name">
                     <img class="img-fluid" src="{{asset('postImages/' . $post->cover_image)}}" alt="..." />
                     <div class="portfolio-box-caption">
                         <video controls class="img-fluid">
                             <source class="img-fluid" src="{{asset('postVideos/' . $post->cover_video)}}" type="video/mp4">
                         </video>
                         <div class="project-category text-white-50"></div>
                         <div class="project-name">{{ $post->name}}</div>
                     </div>
                 </a>
             </div>
             @endforeach
         </div>
     </div>
     {{ $posts->links () }}
 </div>
 

 <!-- Call to action-->
 <section class="page-section bg-dark text-white">
     <div class="container px-4 px-lg-5 text-center">
         <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
         <a class="btn btn-light btn-xl" href="https://startbootstrap.com/theme/creative/">Download Now!</a>
     </div>
 </section>
 <!-- Contact-->
 <section class="page-section" id="contact">
     <div class="container px-4 px-lg-5">
         <div class="row gx-4 gx-lg-5 justify-content-center">
             <div class="col-lg-8 col-xl-6 text-center">
                 <h2 class="mt-0">Let's Get In Touch!</h2>
                 <hr class="divider" />
                 <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
             </div>
         </div>
         <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
             <div class="col-lg-6">
                 <div>
                     @include('notifications.flash_messages')
                 </div>
                 <form action="{{ route('contact_us')}}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <!-- Name input-->
                     <div class="form-floating mb-3">
                         <input class="form-control" id="name" type="text" name="name" placeholder="Enter your name..." data-sb-validations="required" />
                         <label for="name">Full name</label>
                         <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                     </div>
                     <!-- Email address input-->
                     <div class="form-floating mb-3">
                         <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                         <label for="email">Email address</label>
                         <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                         <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                     </div>
                     <!-- Phone number input-->
                     <div class="form-floating mb-3">
                         <input class="form-control" id="phone" name="phone_number" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                         <label for="phone">Phone number</label>
                         <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                     </div>
                     <!-- Message input-->
                     <div class="form-floating mb-3">
                         <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                         <label for="message">Message</label>
                         <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                     </div>


                     <div class="d-none" id="submitErrorMessage">
                         <div class="text-center text-danger mb-3">Error sending message!</div>
                     </div>
                     <!-- Submit Button-->
                     <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Submit</button></div>
                 </form>
             </div>
         </div>
         <div class="row gx-4 gx-lg-5 justify-content-center">
             <div class="col-lg-4 text-center mb-5 mb-lg-0">
                 <i class="bi-phone fs-2 mb-3 text-muted"></i>
                 <div>+1 (555) 123-4567</div>
             </div>
         </div>
     </div>
 </section>
 <!-- Footer-->
 <footer class="bg-light py-5">
     <div class="container px-4 px-lg-5">
         <div class="small text-center text-muted">Copyright &copy; 2021 - Company Name</div>
     </div>
 </footer>
 @endsection