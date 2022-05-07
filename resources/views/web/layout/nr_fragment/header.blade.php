<header id="videohead-pro" class="sticky-header">
	<div id="video-logo-background"><a href="dashboard-home.html"><img src="{{ $admin_assets }}/skrn/images/logo-video-layout.png" alt="Logo"></a></div>
      
	@include('web.layout.nr_fragment.search-form')

	<div id="mobile-bars-icon-pro" class="noselect"><i class="fas fa-bars"></i></div>


	<div id="header-user-profile">
		<div id="header-user-profile-click" class="noselect">
			<img src="{{ $admin_assets }}/skrn/images/demo/user-profile.jpg" alt="Suzie">
			<div id="header-username">Suzie Smith</div><i class="fas fa-angle-down"></i>
		</div><!-- close #header-user-profile-click -->
		<div id="header-user-profile-menu">
			<ul>
				<li><a href="dashboard-favorites.html"><span class="icon-Favorite-Window"></span>My Favorites</a></li>
				<li><a href="#!"><span class="icon-Life-Safer"></span>Help/Support</a></li>
				<li><a href="/"><span class="fa fa-home"></span>Home</a></li>
			</ul>
		</div><!-- close #header-user-profile-menu -->
	</div><!-- close #header-user-profile -->

	<div id="header-user-notification">
		<div id="header-user-notification-click" class="noselect">
			<i class="far fa-bell"></i>
			<span class="user-notification-count">3</span>
		</div><!-- close #header-user-profile-click -->
		<div id="header-user-notification-menu">
			<h3>Notifications</h3>
			<div id="header-notification-menu-padding">
				<ul id="header-user-notification-list">
					<li><a href="#!"><img src="images/demo/user-profile-2.jpg" alt="Profile">Lorem ipsum dolor sit amet, consec tetur adipiscing elit. <div class="header-user-notify-time">21 hours ago</div></a></li>
					<li><a href="#!"><img src="images/demo/user-profile-3.jpg" alt="Profile">Donec vitae lacus id arcu molestie mollis. <div class="header-user-notify-time">3 days ago</div></a></li>
					<li><a href="#!"><img src="images/demo/user-profile-4.jpg" alt="Profile">Aenean vitae lectus non purus facilisis imperdiet. <div class="header-user-notify-time">5 days ago</div></a></li>
				</ul>
				<div class="clearfix"></div>
			</div><!-- close #header-user-profile-menu -->
		</div>
	</div><!-- close #header-user-notification -->



	<div class="clearfix"></div>

	<nav id="mobile-navigation-pro">

		<ul id="mobile-menu-pro">
			<li class="current-menu-item">
				<a href="dashboard-home.html">
					<span class="icon-Old-TV"></span>
					TV Series
				</a>
			<li>
			<li>
				<a href="dashboard-movies.html">
					<span class="icon-Reel"></span>
					Movies
				</a>
			</li>
			<li>
				<a href="dashboard-playlists.html">
					<span class="icon-Movie"></span>
					Playlists
				</a>
			</li>
			<li>
				<a href="dashboard-new-arrivals.html">
					<span class="icon-Movie-Ticket"></span>
					New Arrivals
				</a>
			</li>
			<li>
				<a href="dashboard-coming-soon.html">
					<span class="icon-Clock"></span>
					Coming Soon
				</a>
			</li>
			<li>
				<a href="#!">
					<i class="far fa-bell"></i>
					<span class="user-notification-count">3</span>
					Notifications
				</a>
			</li>
		</ul>
		<div class="clearfix"></div>

		<div id="search-mobile-nav-pro">
			<input type="text" placeholder="Search for Movies or TV Series" aria-label="Search">
		</div>

	</nav>

</header>