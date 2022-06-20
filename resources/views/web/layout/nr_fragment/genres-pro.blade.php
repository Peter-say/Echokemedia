
	<ul class="dashboard-genres-pro">
		@foreach($categories as $category)
	    <li>
	        <img src="{{asset('categoryImages/'. $category->cat_image)}}" alt="{{$category->name}}">
	        <h6>{{$category->name}}</h6>
	    </li>
		@endforeach
	</ul>