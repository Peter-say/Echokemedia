<div class="col-lg-12">
    <div class="sidebar-item recent-posts">
        <div class="sidebar-heading">
            <h2>Caterories</h2>
        </div>
    </div>

    <div class="row">
        @foreach($categories as $category)
        <div class="col-4">
            <div>
                <a href="{{route('category.post' , $category->id)}}">
                    <img  style="width:250px; height:20vh" class="img-fluid image-width" src="{{asset('categoryImages/' . $category->cat_image)}}" alt="">
                </a>
                <p><b>{{$category->name}}</b></p>
            </div>
        </div>
        @endforeach
       
    </div>
</div>


</div>

<!-- <div class="col-lg-12">
    <div class="sidebar-item tags">
        <div class="sidebar-heading">
            <h2>Categories</h2>
        </div>
        <div class="content bg-orange">

            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-6 m-2">
                    <div class="category-profile">
                        <a href="">
                            <img src="{{$admin_assets}}/assets/img/profile-1.jpg" alt="">
                        </a>
                        <p><b>Drake</b></p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6 m-2">
                    <div class="category-profile">
                        <a href="">
                            <img src="{{$admin_assets}}/assets/img/profile-1.jpg" alt="">
                        </a>
                        <p><b>Davido</b></p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-sm-6 m-2">
                    <div class="category-profile">
                        <a href="">
                            <img src="{{$admin_assets}}/assets/img/profile-1.jpg" alt="">
                        </a>
                        <p><b>Wizkid</b></p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-sm-6 m-2">
                    <div class="category-profile">
                        <a href="">
                            <img src="{{$admin_assets}}/assets/img/profile-1.jpg" alt="">
                        </a>
                        <p><b>Joelboy</b></p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-sm-6 m-2">
                    <div class="category-profile">
                        <a href="">
                            <img src="{{$admin_assets}}/assets/img/profile-1.jpg" alt="">
                        </a>
                        <p><b>Psquare</b></p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-sm-6 m-2">
                    <div class="category-profile">
                        <a href="">
                            <img src="{{$admin_assets}}/assets/img/profile-1.jpg" alt="">
                        </a>
                        <p><b>Burnaprofile.jpg</b></p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div> -->