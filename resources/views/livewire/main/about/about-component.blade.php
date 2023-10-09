<div>
    
    <style>
        
        .about-us{	background: -o-linear-gradient(330deg, rgba(249,240,130,1) 0%, rgba(239,237,134,1) 16%, rgba(214,232,147,1) 36%, rgba(172,222,168,1) 60%, rgba(114,209,197,1) 82%, rgba(42,193,233,1) 100%);
	background: linear-gradient(120deg, rgba(249,240,130,1) 0%, rgba(239,237,134,1) 16%, rgba(214,232,147,1) 36%, rgba(172,222,168,1) 60%, rgba(114,209,197,1) 82%, rgba(42,193,233,1) 100%);}
    </style>
    
        <!--<link href="public/css/new-css/bootstrap.min.css" rel="stylesheet" type="text/css" />-->
        <!--<link href="public/css/new-css/fontawesome.min.css" rel="stylesheet" type="text/css" />-->
        <!--<link href="public/css/new-css/owl.carousel.min.css" rel="stylesheet" type="text/css" />-->
        <!--<link href="public/css/new-css/magnific-popup.css" rel="stylesheet" type="text/css" />-->
        <!--<link href="public/css/new-css/helper.css" rel="stylesheet" type="text/css" />-->
        <!--<link href="public/css/new-css/style.css" rel="stylesheet" type="text/css" />-->
        <!--<link href="public/css/new-css/responsive.css" rel="stylesheet" type="text/css" />-->
    
    <!-- <h1>About Page</h1>-->
    <!--<p>{{ $about_msg  }}</p>-->
    
    <!--<link rel="stylesheet" href="public/css/new-css/style.css">-->
    
    <!-- <link rel="stylesheet" href="public/css/new-css/bootstrap.css">-->
    
    <!--<img src="public/storage/about-us/about-us.png">-->
            <!-- about_hero_area -->
            <div class="about_hero_area text-center" style="background-image:url(public/storage/about-us/about-us.png);">
                <div class="container">
                    <h2>Gigple is a platform that connects Gig Seekers to Employers.</h2>
                </div>
            </div>

            <!-- About Gigple -->
            <div class="about_gigple">
                <div class="container">
                   <div class="row">
                       <div class="col-lg-12">
                           <div class="find_about">
                                <h2 class="lg_title">About Gigple</h2>
                                <div class="find_about_child">
                                    <p>Gigple is a platform that connects Gig Seekers to Employers.</p>
                                    <p>Through Gigple, Gig Seekers can find opportunities and employers can quickly connect with and hire talent with the right expertise all within the platform.</p>
                                    <p>Gigple aims to revolutionize the staffing industry by making qualified talent accessible to employers at a fraction of the recruitment cost. We are redefining the concept of work as something that talents deliver instead of a location that they have to turn up to.</p>
                                    <p>Our Gig seekers are made up of talents from Malaysia, Singapore, the Philippines and other ASEAN countries.</p>
                                    <p>For inquiries, proposals or partnership opportunities, please write to us at: support@gigple.com</p>
                                    <div class="button_area aboutus_button_area">
                                        <a href="{{url('lets-started')}}" class="button">GET STARTED</a>
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
            </div> 

            <!-- Why Gigple   -->
            <div class="why_gigple_area">
                <div class="container">
                    <h2>Why Gigple</h2>
                </div>
                <div class="mai_gipple">
                    <div class="why_gigple_wrapper">
                        <img src="public/storage/about-us/grow_img.png" alt="">
                        <div class="why_giple_about">
                            <h3 class="why_title">Make a living whilst enjoying the freedom to live your life</h3>
                            <div class="why_gipple_child">
                                <p>Don’t let the rigidity of a traditional job get in the way of the things that really matter.</p>
                                <p>At Gigple, we understand that work is something that you do and not somewhere that you go to. We champion the idea of putting your value at the centre of your career — not office politics and endless meetings.</p>
                                <p>Our aim is simple: To disrupt the traditional concept of work in Asia by connecting sought-after jobs with qualified and reliable candidates — no matter where they may be located. It’s that simple</p>
                            </div>
                        </div>
                    </div>
                    <div class="why_gigple_wrapper"> 
                        <img style="transform: scaleX(-1);" src="public/storage/about-us/grow_img.png" alt="">
                        <div class="why_giple_about">
                            <h3 class="why_title">Make a living whilst enjoying the freedom to live your life</h3>
                            <div class="why_gipple_child">
                                <p>Flexible work shouldn’t compromise financial security. Gigple asks that all jobs be broken down into manageable pieces which in turn allows for fair and transparent compensation.</p>
                                <p>For employees, this means that you are clear on what is expected of you along the way and consequently when you will be remunerated. For employers, this means you get what you pay for. A win-win.</p>
                            </div>
                        </div>
                    </div>
                    <div class="why_gigple_wrapper">
                        <img src="public/storage/about-us/grow_img.png" alt="">
                        <div class="why_giple_about">
                            <h3 class="why_title">Make a living whilst enjoying the freedom to live your life</h3>
                            <div class="why_gipple_child">
                                <p>Gigple’s proprietary platform allows you to control your gig preferences, communicate, download briefs, upload assignments, receive payments and much more.</p>
                                <p>Our aim is to offer a more enjoyable, collaborative and reliable approach to work for employees as well as employers. Our teams are ready to help you every step of the way!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    
    
    
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
</div>


<!---<script>
    Check if the current route matches the desired URL
if (window.location.href === "{{ url('about-us') }}") {
    
    
      var cssFiles = [
    "public/css/new-css/bootstrap.min.css",
    "public/css/new-css/fontawesome.min.css",
    "public/css/new-css/owl.carousel.min.css",
    "public/css/new-css/magnific-popup.css",
    "public/css/new-css/helper.css",
    "public/css/new-css/style.css",
    "public/css/new-css/responsive.css"
  ];

  cssFiles.forEach(function(cssFile) {
    var link = document.createElement("link");
    link.rel = "stylesheet";
    link.type = "text/css";
    link.href = cssFile;
    document.head.appendChild(link);
  });
    
    
      // Get the main div element by its id
  const mainDiv = document.getElementById("lets-started");

  // Change the background color to red
  
  mainDiv.classList.add("");
}
else{
    mainDiv.style.backgroundColor = "none"; 
    
      mainDiv.classList.add("");
}
    
    
</script>--->
