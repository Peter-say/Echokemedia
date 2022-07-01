
	<ul class="dashboard-genres-pro">
		@foreach($categories as $category)
	    <li>
			<a href="{{route('media.category', $category->name)}}"><img src="{{asset('categoryImages/'. $category->cat_image)}}" alt="{{$category->name}}"></a>
	        <h6>{{$category->name}}</h6>
	    </li>
		@endforeach
	</ul>