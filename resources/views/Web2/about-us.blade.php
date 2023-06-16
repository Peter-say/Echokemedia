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
    <!-- MAIN CONTENT -->

    <main id="about-one">


        <!-- CUSTOM CURSOR -->
        <div class="cursor scale"></div>
        <div class="cursor-two scale"></div>
        <!-- CUSTOM CURSOR -->


        <div id="preloader">
            <div class="p">
                <img src="{{ $template_source }}/images/headphone.png" alt="headphone">
            </div>
            <div class="p">Use Headphone For Better Experience.</div>
        </div>

        <div id="about-one-content">

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


            <!-- progress-bar -->
            <div class="progress-bar-container fade-in">
                <div class="progressbar"></div>
            </div>
            <!-- progress-bar -->



            <div class="scrolling-part">

            </div>


            <div class="heading">
                <span class="text">
                    ABOUT
                </span>
            </div>


            <div class="center">
                <!-- ABOUT IMG -->
                <div class="about-img img">
                    <img class="img-parallax" src="{{ $template_source }}//images/about-img.jpg" alt="about-img">
                </div>
                <!-- ABOUT IMG -->
            </div>
            <div class="center">
                <div class="about-text">
                    <div class="about-text-heading  text-scroll">
                        Hi there, I’m glad you found me. My name is <span class="red"> Arlo Brown</span> and I like
                        to make music.
                    </div>
                    <div class="about-text-content  text-scroll">
                        On this page you can find out what I have been up to lately and maybe even a little bit about
                        where I will go in the future. For me, the greatest thing about being a musician is being in the
                        position to inspire other people. I take such pleasure in hearing that people have been
                        motivated to create after hearing my music, whether it be a painting, a poem, their own music or
                        something completely different. Music is not a one way street, it is a conversation where the
                        listener's role is as important as the artist's. Well, here you can find my side of it all.
                    </div>

                </div>
            </div>

            <div class="signature">
                <span class="text-scroll"> Arlo Brown.</span>
            </div>




            <!-- HEADPHONE IMG -->
            <div class="headphone img text">
                <img src="{{ $template_source }}/images/headphone.png" title="headphone zone" class="text" alt="headphone">
            </div>
            <!-- HEADPHONE IMG -->


        </div>
        </div>



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
                    <li><a href="#" class="text hover opacity">YT</a></li>
                    <li><a href="#" class="text hover opacity">FB</a></li>
                    <li><a href="#" class="text hover opacity">IG</a></li>
                </ul>
            </div>
            <!-- SOCIAL MEDIA LINKS -->

        </div>

        <!-- NAVIGATION CONTENT -->




    </main>
    <!-- MAIN CONTENT -->

    <script src="{{ $template_source }}/js/jquery.min.js"></script>
    <script src="{{ $template_source }}/js/bez.js"></script>
    <script src="{{ $template_source }}/js/pace.js"></script>
    <script src="{{ $template_source }}/js/index.js"></script>
</body>

</html>
