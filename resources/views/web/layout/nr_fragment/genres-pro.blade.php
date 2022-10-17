 @foreach ($categories as $category)
     <ul class="dashboard-genres-pro">
         <li>
             <img src="{{asset('categoryImages/'.$category->cat_image)}}" alt="Drama">
             <h6>{{$category->name}}</h6>
         </li>
     </ul>
 @endforeach
 {{-- <ul class="dashboard-genres-pro">
     <li>
         <img src="{{ $admin_assets }}/skrn/images/genres/drama.png" alt="Drama">
         <h6>Drama</h6>
     </li>
     <li class="active">
         <img src="{{ $admin_assets }}/skrn/images/genres/comedy.png" alt="Comedy">
         <h6>Comedy</h6>
     </li>
     <li>
         <img src="{{ $admin_assets }}/skrn/images/genres/action.png" alt="Action">
         <h6>Action</h6>
     </li>
     <li>
         <img src="{{ $admin_assets }}/skrn/images/genres/romance.png" alt="Romance">
         <h6>Romance</h6>
     </li>
     <li>
         <img src="{{ $admin_assets }}/skrn/images/genres/horror.png" alt="Horror">
         <h6>Horror</h6>
     </li>
     <li>
         <img src="{{ $admin_assets }}/skrn/images/genres/fantasy.png" alt="Fantasy">
         <h6>Fantasy</h6>
     </li>
     <li>
         <img src="{{ $admin_assets }}/skrn/images/genres/sci-fi.png" alt="Sci-Fi">
         <h6>Sci-Fi</h6>
     </li>

<<<<<<< HEAD
	<ul class="dashboard-genres-pro">
		@foreach($categories as $category)
	    <li>
			<a href="{{route('media.category', $category->name)}}"><img src="{{asset('categoryImages/'. $category->cat_image)}}" alt="{{$category->name}}"></a>
	        <h6>{{$category->name}}</h6>
	    </li>
		@endforeach
	</ul>
=======
     <li>
         <img src="{{ $admin_assets }}/skrn/images/genres/western.png" alt="Western">
         <h6>Western</h6>
     </li>
     <li>
         <img src="{{ $admin_assets }}/skrn/images/genres/adventure.png" alt="Adventure">
         <h6>Adventure</h6>
     </li>
     <li>
         <img src="{{ $admin_assets }}/skrn/images/genres/animation.png" alt="Animation">
         <h6>Animation</h6>
     </li>
     <li>
         <img src="{{ $admin_assets }}/skrn/images/genres/documentary.png" alt="Documentary">
         <h6>Documentary</h6>
     </li>
 </ul> --}}
>>>>>>> 51c8e3731772ff21de2e2fd374f1bf2c9dd1ffec
