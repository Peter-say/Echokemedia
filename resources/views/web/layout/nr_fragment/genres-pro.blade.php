 @foreach ($categories as $category)
     <ul class="dashboard-genres-pro">
         <li>
             <img src="{{asset('categoryImages/'.$category->cat_image)}}" alt="Drama">
             <h6>{{$category->name}}</h6>
         </li>
     </ul>
 @endforeach
 
