<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WINK - Music Artist Portfolio Web Template</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

       <!--favicon-img-->
       <link rel="icon" type="image/png" href="{{ $template_source }}/images/favicon.jpg">
       <!--favicon-img-->

        <link rel="stylesheet" href="{{ $template_source }}/css/index.css">


    </head>
<body>
    <main id="songs-one">



        <div class="cursor scale"></div>
        <div class="cursor-two scale"></div>


        <div id="preloader">
            <div class="p">
                <img src="{{ $template_source }}/images/headphone.png" alt="headphone">
            </div>
            <div class="p">Use Headphone For Better Experience.</div>
        </div>

<!-- CONTENT -->
        <div id="songs-one-content">



   <!-- NAVIGATION -->
   <div class="navigation">
    <div class="logo hover ">
       <a href="index-two.html" class="text">ARLO BROWN</a>
    </div>
    <div class="menu-bar hover ">
        <div class="menu-bar-name text">
            Menu
        </div>
        <div class="menu-bar-lines text">
            <div class="menu-bar-line"></div>
            <div class="menu-bar-line"></div>
        </div>
    </div>
</div>
<!-- NAVIGATION -->






<!-- HEADING -->
<div class="heading">
    <div class="text">
      SONGS
    </div>
</div>

<!-- HEADING -->




<!-- SONGS CONTAINER -->


<div class="center">
<div id="songs-container">



    <!-- SONG -->
<div class="song fade-up">

    <div class="song-img">
        <img src="{{ $template_source }}/images/album-thumbnail-one.jpg" alt="song">
    </div>

    <div class="song-details">
        <div class="song-details-content">
        <div class="song-name">Blinding Lights</div>
        <div class="artist-name">Arlo Brown Ft. Sza</div>
        </div>
        <div class="music-player">

            <div class="play-song mouse">
                <img src="{{ $template_source }}/images/play.png" alt="play" data-song="blindinglights">
                <!--   DATA-SONG AND DATA-AUDIO VALUE SHOULD MATCH   -->
                <audio data-audio="blindinglights">
                    <source src="{{ $template_source }}/music/The-Weeknd-Blinding-Lights-_Lyrics_.ogg" type="audio/ogg">
                    <source src="{{ $template_source }}/music/The Weeknd - Blinding Lights (Lyrics).mp3" type="audio/mp3">
                    </audio>
            </div>
            <div class="download-song mouse">
                <a href="{{ $template_source }}/music/The Weeknd - Blinding Lights (Lyrics).mp3"  download="Blinding Lights - Arlo Brown">4.1K<img src="{{ $template_source }}/images/download.png" alt="download"></a>
            </div>
        </div>
    </div>
</div>
    <!-- SONG -->




        <!-- SONG -->
<div class="song fade-up">
    <div class="song-img">
        <img src="{{ $template_source }}/images/album-thumbnail-two.jpg" alt="song">
    </div>
    <div class="song-details">
        <div class="song-details-content">
        <div class="song-name">KillMonger</div>
        <div class="artist-name">Arlo Brown Ft. Madhw</div>
        </div>
        <div class="music-player">
            <div class="play-song mouse">
                <!-- DATA-SONG AND DATA-AUDIO SHOULD EXACTLY BE SAME -->
                <img src="{{ $template_source }}/images/play.png" alt="play" data-song="killmonger">
                <!--   DATA-SONG AND DATA-AUDIO VALUE SHOULD MATCH   -->
                <audio data-audio="killmonger">
                    <source src="{{ $template_source }}/music/killmonger.ogg" type="audio/ogg">
                    <source src="{{ $template_source }}/music/killmonger.mp3" type="audio/mp3">
                    </audio>
            </div>
            <div class="download-song">
                <a href="{{ $template_source }}/music/killmonger.mp3"  download="KillMonger - Arlo Brown">10.2K<img src="{{ $template_source }}/images/download.png" alt="download"></a>
            </div>
        </div>
    </div>
</div>
    <!-- SONG -->


        <!-- SONG -->
<div class="song fade-up">


    <div class="song-img">
        <img src="{{ $template_source }}/images/album-thumbnail-five.jpg" alt="song">
    </div>

    <div class="song-details">
        <div class="song-details-content">
        <div class="song-name">Alone</div>
        <div class="artist-name">Arlo Brown </div>
        </div>
        <div class="music-player">

            <div class="play-song mouse">
                <img src="{{ $template_source }}/images/play.png" alt="play" data-song="alone" >

                <!--   DATA-SONG AND DATA-AUDIO VALUE SHOULD MATCH   -->
                <audio data-audio="alone">
                    <source src="{{ $template_source }}/music/old-town-road.ogg" type="audio/ogg">
                    <source src="{{ $template_source }}/music/old-town-road.mp3" type="audio/mp3">
                    </audio>
            </div>




            <div class="download-song">
                <a href="{{ $template_source }}/music/old-town-road.mp3"  download="Alone - Arlo Brown">3.3K<img src="{{ $template_source }}/images/download.png" alt="download"></a>
            </div>
        </div>
    </div>

</div>
    <!-- SONG -->




        <!-- SONG -->
<div class="song fade-up">


    <div class="song-img">
        <img src="{{ $template_source }}/images/album-thumbnail-four.jpg" alt="song"  data-song="blindinglights" class="play">
    </div>

    <div class="song-details">
        <div class="song-details-content">
        <div class="song-name">What's Poppin</div>
        <div class="artist-name">Arlo Brown Ft. Charlie Puth</div>
        </div>
        <div class="music-player">

            <div class="play-song mouse">
                <img src="{{ $template_source }}/images/play.png" alt="play" data-song="whatspoppin" >

                <!--   DATA-SONG AND DATA-AUDIO VALUE SHOULD MATCH   -->
                <audio data-audio="whatspoppin">
                    <source src="{{ $template_source }}/music/The-Weeknd-Blinding-Lights-_Lyrics_.ogg" type="audio/ogg">
                    <source src="{{ $template_source }}/music/The Weeknd - Blinding Lights (Lyrics).mp3" type="audio/mp3">
                    </audio>
            </div>




            <div class="download-song">
                <a href="{{ $template_source }}/music/The Weeknd - Blinding Lights (Lyrics).mp3"  download="What's Poppin- Arlo Brown">2K<img src="{{ $template_source }}/images/download.png" alt="download"></a>
            </div>
        </div>
    </div>

</div>
    <!-- SONG -->




        <!-- SONG -->
<div class="song fade-up">


    <div class="song-img">
        <img src="{{ $template_source }}/images/album-thumbnail-three.jpg" alt="song">
    </div>

    <div class="song-details">
        <div class="song-details-content">
        <div class="song-name">The BOX</div>
        <div class="artist-name">Arlo Brown </div>
        </div>
        <div class="music-player">

            <div class="play-song mouse">
                <img src="{{ $template_source }}/images/play.png" alt="play" data-song="thebox" >

                <audio data-audio="thebox">
                    <source src="{{ $template_source }}/music/old-town-road.ogg" type="audio/ogg">
                    <source src="{{ $template_source }}/music/old-town-road.mp3" type="audio/mp3">
                    </audio>
            </div>
            <div class="download-song">
                <a href="{{ $template_source }}/music/old-town-road.mp3"  download="The BOX - Arlo Brown">3.1K<img src="{{ $template_source }}/images/download.png" alt="download"></a>
            </div>




        </div>
    </div>

</div>
    <!-- SONG -->




        <!-- SONG -->
<div class="song fade-up">


    <div class="song-img">
        <img src="{{ $template_source }}/images/album-thumbnail-six.jpg" alt="song">
    </div>

    <div class="song-details">
        <div class="song-details-content">
        <div class="song-name">Shatter</div>
        <div class="artist-name">Justin Timberlake Ft. Arlo Brown</div>
        </div>
        <div class="music-player">

            <div class="play-song mouse">
                <img src="{{ $template_source }}/images/play.png" alt="play" data-song="shatter" >
                <!--   DATA-SONG AND DATA-AUDIO VALUE SHOULD MATCH   -->
                <audio data-audio="shatter">
                    <source src="{{ $template_source }}/music/killmonger.ogg" type="audio/ogg">
                    <source src="{{ $template_source }}/music/killmonger.mp3" type="audio/mp3">
                    </audio>
            </div>



            <div class="download-song">
                <a href="{{ $template_source }}/music/killmonger.mp3"  download="Shatter - Arlo Brown">2.8K<img src="{{ $template_source }}/images/download.png" alt="download"></a>
            </div>
        </div>
    </div>

</div>
    <!-- SONG -->




        <!-- SONG -->
<div class="song fade-up">


    <div class="song-img">
        <img src="{{ $template_source }}/images/album-thumbnail-seven.jpg" alt="song">
    </div>

    <div class="song-details">
        <div class="song-details-content">
        <div class="song-name">Cool Blue</div>
        <div class="artist-name">Arlo Brown</div>
        </div>
        <div class="music-player">

            <div class="play-song mouse">
                <img src="{{ $template_source }}/images/play.png" alt="play" data-song="coolblue" >
                <!--   DATA-SONG AND DATA-AUDIO VALUE SHOULD MATCH   -->
                <audio data-audio="coolblue">
                    <source src="{{ $template_source }}/music/old-town-road.ogg" type="audio/ogg">
                    <source src="{{ $template_source }}/music/old-town-road.mp3" type="audio/mp3">
                    </audio>
            </div>


            <div class="download-song">
                <a href="{{ $template_source }}/music/old-town-road.mp3"  download="Cool Blue - Arlo Brown">963<img src="{{ $template_source }}/images/download.png" alt="download"></a>
            </div>
        </div>
    </div>

</div>
    <!-- SONG -->




        <!-- SONG -->
<div class="song fade-up">


    <div class="song-img">
        <img src="{{ $template_source }}/images/album-thumbnail-eight.jpg" alt="song">
    </div>

    <div class="song-details">
        <div class="song-details-content">
        <div class="song-name">Dark Fire</div>
        <div class="artist-name">Arlo Brown Ft. Sza</div>
        </div>
        <div class="music-player">

            <div class="play-song mouse">
                <img src="{{ $template_source }}/images/play.png" alt="play" data-song="darkfire" >
                <!--   DATA-SONG AND DATA-AUDIO VALUE SHOULD MATCH   -->
                <audio data-audio="darkfire">
                    <source src="{{ $template_source }}/music/The-Weeknd-Blinding-Lights-_Lyrics_.ogg" type="audio/ogg">
                    <source src="{{ $template_source }}/music/The Weeknd - Blinding Lights (Lyrics).mp3" type="audio/mp3">
                    </audio>
            </div>


            <div class="download-song">
                <a href="{{ $template_source }}/music/The Weeknd - Blinding Lights (Lyrics).mp3"  download="Dark Fire - Arlo Brown">1.8K<img src="{{ $template_source }}/images/download.png" alt="download"></a>
            </div>
        </div>
    </div>

</div>
    <!-- SONG -->




        <!-- SONG -->
<div class="song fade-up">
    <div class="song-img">
        <img src="{{ $template_source }}/images/album-thumbnail-nine.jpg" alt="song">
    </div>
    <div class="song-details">
        <div class="song-details-content">
            <div class="song-name">The Other Side</div>
            <div class="artist-name">Arlo Brown </div>
        </div>
        <div class="music-player">

            <div class="play-song mouse">
                <img src="{{ $template_source }}/images/play.png" alt="play" data-song="theotherside" >
                <!--   DATA-SONG AND DATA-AUDIO VALUE SHOULD MATCH   -->
                <audio data-audio="theotherside">
                    <source src="{{ $template_source }}/music/killmonger.ogg" type="audio/ogg">
                    <source src="{{ $template_source }}/music/killmonger.mp3" type="audio/mp3">
                    </audio>
            </div>
            <div class="download-song">
                <a href="{{ $template_source }}/music/killmonger.mp3"  download="The Other Side - Arlo Brown">2.2K<img src="{{ $template_source }}/images/download.png" alt="download"></a>
            </div>
        </div>
    </div>

</div>
    <!-- SONG -->






</div>
</div>

<!-- SONGS CONTAINER -->



 <!-- HEADPHONE IMG -->
 <div class="headphone img text">
    <img src="{{ $template_source }}/images/headphone.png" title="headphone zone" class="text" alt="headphone">
  </div>
   <!-- HEADPHONE IMG -->



 <!-- MUSIC INDICATOR -->
 <div class="music-indicator">
    <span style="--i:1;" class="music-indicator-span"></span>
    <span style="--i:2;" class="music-indicator-span "></span>
    <span style="--i:3;" class="music-indicator-span "></span>
    <span style="--i:4;" class="music-indicator-span "></span>
  </div>
   <!-- MUSIC INDICATOR -->




<!-- progress-bar -->
<div class="progress-bar-container fade-in">
    <div class="progressbar"></div>
</div>
<!-- progress-bar -->






        </div>
<!-- CONTENT -->



    <!-- NAVIGATION CONTENT -->

    <div class="navigation-content">
        <div class="navigation-logo hover opacity">
            <a href="#" class="text">ARLO BROWN</a>
         </div>
         <ul class="navigation-ul">
            <li><a href="/" data-text="Home" data-img="{{ $template_source }}/images/bg-image-three.jpg">Home</a></li>
            <li><a href="{{route('about')}}" data-text="About" data-img="{{ $template_source }}/images/about-img.jpg">About</a></li>
            <li><a href="{{route('songs')}}" data-text="Songs" data-img="{{ $template_source }}/images/album-thumbnail-nine.jpg">Songs</a></li>
            <li><a href="{{route('blog')}}" data-text="Blogs" data-img="{{ $template_source }}/images/main-bg-three.jpg">Blogs</a></li>
            <li><a href="{{route('contact')}}" data-text="Contact"
                    data-img="{{ $template_source }}/images/album-thumbnail-four.jpg">Contact</a></li>
        </ul>
        <div class="navigation-close hover about-close opacity">
            <div class="navigation-close-line"></div>
            <div class="navigation-close-line"></div>
          </div>

            <div class="project-preview"></div>


     <!-- HEADPHONE IMG -->
     <div class="headphone-navigation opacity">
        <img src="{{ $template_source }}/images/headphone.png" title="headphone zone" class="text" alt="headphone">
      </div>
       <!-- HEADPHONE IMG -->


        <!-- SOCIAL MEDIA LINKS -->
        <div class="social-media-links-navigation">
            <ul>
                <li ><a href="#"  class="text hover opacity">YT</a></li>
                <li ><a href="#"  class="text hover opacity">FB</a></li>
                <li ><a href="#"  class="text hover opacity">IG</a></li>
            </ul>
        </div>
          <!-- SOCIAL MEDIA LINKS -->

    </div>

    <!-- NAVIGATION CONTENT -->







    </main>


    <script src="{{ $template_source }}/js/jquery.min.js"></script>
    <script src="{{ $template_source }}/js/bez.js"></script>
    <script src="{{ $template_source }}/js/pace.js"></script>
    <script src="{{ $template_source }}/js/index.js"></script>
</body>
</html>
