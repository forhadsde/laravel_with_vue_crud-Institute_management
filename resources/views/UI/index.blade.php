@include('UI.inc.headersource');
<body>	
    @include('UI.inc.menubar');

    <!-- start banner Area -->
    <section class="banner-area">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 banner-left">
                    <h6>This is me</h6>
                    <h1>Philip Gilbert</h1>
                    <p>
                        You will begin to realise why this exercise is called the Dickens Pattern with reference to the ghost showing Scrooge some different futures.
                    </p>
                    <a href="#" class="primary-btn text-uppercase">discover now</a>
                    <a href="#" class="primary-btn text-uppercase">Download Resume</a>
                </div>
                <div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
                    <img class="img-fluid" src="{{asset('public/UI')}}/img/hero-img.png" alt="">
                </div>
            </div>
        </div>					
    </section>
    <!-- End banner Area -->

    <!-- Start services Area -->
    <section style="background-image:url({{asset('public/UI')}}/img/about/service-background.jpg);background-repeat: no-repeat;
             background-size: 100% 100%;" class="services-area">
        <div style="background-color: rgba(0,0,0,0.5);padding: 120px 0px;" class="">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content  col-lg-7">
                        <div class="title text-center">
                            <h1 style="color:#FF5722" class="mb-10">My Offered Services</h1>
                            <p style="color:white;">At about this time of year, some months after New Year’s resolutions have been made and kept, or made and neglected.</p>
                        </div>
                    </div>
                </div>						
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div style="background-color:white;">
                            <div class="single-services">
                                <span style="background-color:#FF5722;color: white;padding: 15px;"  class="lnr lnr-pie-chart"></span>
                                <a  href="#"><h4 style="color:#ff5722;">Web Design</h4></a>
                                <p style="color:black;">
                                    “It is not because things are difficult that we do not dare; it is because we do not dare that they are difficult.”
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div style="background-color:white;">
                            <div class="single-services">
                                <span style="background-color:#FF5722;color: white;padding: 15px;"  class="lnr lnr-laptop-phone"></span>
                                <a href="#" style="color:#ff5722;"><h4 style="color:#ff5722;">Web Development</h4></a>
                                <p>
                                    If you are an entrepreneur, you know that your success cannot depend on the opinions of others. Like the wind, opinions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div style="background-color:white;">
                            <div class="single-services">
                                <span style="background-color:#FF5722;color: white;padding: 15px;"  class="lnr lnr-camera"></span>
                                <a href="#" style="color:#ff5722;"><h4 style="color:#ff5722;">Photography</h4></a>
                                <p>
                                    Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div style="background-color:white;">
                            <div class="single-services">
                                <span style="background-color:#FF5722;color: white;padding: 15px;" class="lnr lnr-picture"></span>
                                <a href="#" style="color:#ff5722;"><h4 style="color:#ff5722;">Clipping Path</h4></a>
                                <p>
                                    Hypnosis quit smoking methods maintain caused quite a stir in the medical world over the last two decades. There is a lot of argument.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div style="background-color:white;">
                            <div class="single-services">
                                <span style="background-color:#FF5722;color: white;padding: 15px;"  class="lnr lnr-tablet"></span>
                                <a style="color:#ff5722;" href="#"><h4 style="color:#ff5722;">Apps Interface</h4></a>
                                <p>
                                    Do you sometimes have the feeling that you’re running into the same obstacles over and over again? Many of my conflicts.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div style="background-color:white;">
                            <div class="single-services">
                                <span style="background-color:#FF5722;color: white;padding: 15px;"  class="lnr lnr-rocket"></span>
                                <a href="#"><h4 style="color:#ff5722;">Graphic Design</h4></a>
                                <p>
                                    You’ve heard the expression, “Just believe it and it will come.” Well, technically, that is true, however, ‘believing’ is not just thinking that.
                                </p>
                            </div>
                        </div>				
                    </div>														
                </div>	
            </div>
        </div>
    </section>
    <!-- End services Area -->	

    <!-- Start fact Area -->
    <section style="padding: 30px 0px;background-color:#FF5722 " id="facts-area">
        <div class="container">				
            <div class="row">
                <div class="col-lg-3 col-md-6 single-fact">
                    <h1 class="counter">2536</h1>
                    <p>Projects Completed</p>
                </div>
                <div class="col-lg-3 col-md-6 single-fact">
                    <h1 class="counter">6784</h1>
                    <p>Happy Clients</p>
                </div>
                <div class="col-lg-3 col-md-6 single-fact">
                    <h1 class="counter">2239</h1>
                    <p>Cups of Coffee</p>
                </div>	
                <div class="col-lg-3 col-md-6 single-fact">
                    <h1 class="counter">435</h1>
                    <p>Real Professionals</p>
                </div>												
            </div>
        </div>	
    </section>
    <!-- end fact Area -->	

    <!-- Start portfolio-area Area -->
    <section style="padding:30px 0px;" class="portfolio-area" id="portfolio">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content col-lg-8">
                    <div  class="title text-center">
                        <h1 style="color:#FF5722;" class="mb-10">Our Latest Featured Projects</h1>
                        <p style="color:#FF5722;">Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>

            <div class="filters">
                <ul>
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".vector">Vector</li>
                    <li data-filter=".raster">Raster</li>
                    <li data-filter=".ui">UI/UX</li>
                    <li data-filter=".printing">Printing</li>
                </ul>
            </div>

            <div class="filters-content">
                <div class="row grid">
                    <div class="single-portfolio col-sm-4 all vector">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="image img-fluid" src="{{asset('public/UI')}}/img/p1.jpg" alt="">
                            </div>
                            <a href="{{asset('public/UI')}}/img/p1.jpg" class="img-pop-up">	
                                <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="{{asset('public/UI')}}/img/preview.png" alt=""></div>
                                </div>
                            </a>                              		
                        </div>
                        <div class="p-inner">
                            <h4>2D Vinyl Design</h4>
                            <div class="cat">vector</div>
                        </div>					                               
                    </div>
                    <div class="single-portfolio col-sm-4 all raster">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="image img-fluid" src="{{asset('public/UI')}}/img/p2.jpg" alt="">
                            </div>
                            <a href="{{asset('public/UI')}}/img/p2.jpg" class="img-pop-up">	
                                <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="{{asset('public/UI')}}/img/preview.png" alt=""></div>
                                </div>
                            </a>                              		
                        </div>
                        <div class="p-inner">
                            <h4>2D Vinyl Design</h4>
                            <div class="cat">vector</div>
                        </div>					                               
                    </div>                            
                    <div class="single-portfolio col-sm-4 all ui">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="image img-fluid" src="{{asset('public/UI')}}/img/p3.jpg" alt="">
                            </div>
                            <a href="{{asset('public/UI')}}/img/p3.jpg" class="img-pop-up">	
                                <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="{{asset('public/UI')}}/img/preview.png" alt=""></div>
                                </div>
                            </a> 

                        </div>
                        <div class="p-inner">
                            <h4>Creative Poster Design</h4>
                            <div class="cat">Agency</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all printing">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="image img-fluid" src="{{asset('public/UI')}}/img/p4.jpg" alt="">
                            </div>
                            <a href="{{asset('public/UI')}}/img/p4.jpg" class="img-pop-up">	
                                <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="{{asset('public/UI')}}/img/preview.png" alt=""></div>
                                </div>
                            </a>                            		
                        </div> 
                        <div class="p-inner">
                            <h4>Embosed Logo Design</h4>
                            <div class="cat">Portal</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all vector">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="image img-fluid" src="{{asset('public/UI')}}/img/p5.jpg" alt="">
                            </div>
                            <a href="{{asset('public/UI')}}/img/p5.jpg" class="img-pop-up">	
                                <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="{{asset('public/UI')}}/img/preview.png" alt=""></div>
                                </div>
                            </a>                             		
                        </div>
                        <div class="p-inner">
                            <h4>3D Helmet Design</h4>
                            <div class="cat">vector</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all raster">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="image img-fluid" src="{{asset('public/UI')}}/img/p6.jpg" alt="">
                            </div>
                            <a href="{{asset('public/UI')}}/img/p6.jpg" class="img-pop-up">	
                                <div class="middle">
                                    <div class="text align-self-center d-flex"><img src="{{asset('public/UI')}}/img/preview.png" alt=""></div>
                                </div>
                            </a>                             		
                        </div>
                        <div class="p-inner">
                            <h4>2D Vinyl Design</h4>
                            <div class="cat">raster</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End portfolio-area Area -->	

    <!-- Start testimonial Area -->
    <section class="testimonial-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content col-lg-8">
                    <div class="title text-center">
                        <h1 style="color:#FF5722" class="mb-10">Client’s Feedback About Me</h1>
                        <p style="color:#FF5722">It is very easy to start smoking but it is an uphill task to quit it. Ask any chain smoker or even a person.</p>
                    </div>
                </div>
            </div>
            <div style="border: 1px solid red;" class="row">
                <div class="active-testimonial">
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="{{asset('public/UI')}}/img/elements/user1.png" alt="">
                        </div>
                        <div class="desc">
                            <p style="color:black;font-weight:500;">
                                Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.		     
                            </p>
                            <h4 style="color:black;">Harriet Maxwell</h4>
                            <p style="color:black;">CEO at Google</p>
                        </div>
                    </div>
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="{{asset('public/UI')}}/img/elements/user2.png" alt="">
                        </div>
                        <div class="desc">
                            <p style="color:black;font-weight:500;">
                                Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.		     
                            </p>
                            <h4>Carolyn Craig</h4>
                            <p>CEO at Facebook</p>
                        </div>
                    </div>
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="{{asset('public/UI')}}/img/elements/user2.png" alt="">
                        </div>
                        <div class="desc">
                            <p style="color:black;font-weight:500;">
                                Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.		     
                            </p>
                            <h4>Mithun Rana</h4>
                            <p>CEO at Tech Help Info</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonial Area -->
		

    <!-- Start recent-blog Area -->
    <section style="padding: 40px 0px;" class="recent-blog-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 pb-30 header-text">
                    <h1 style="color:#FF5722">Latest posts from our blog</h1>
                    <p style="color:#FF5722">
                        You may be a skillful, effective employer but if you don’t trust your personnel and the opposite, then the chances of improving and expanding the business
                    </p>
                </div>
            </div>
            <div class="row">	
                <div class="single-recent-blog col-lg-4 col-md-4">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="{{asset('public/UI')}}/img/b1.jpg" alt="">	
                    </div>
                    <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                        <div>
                            <img class="img-fluid" src="{{asset('public/UI')}}/img/user.png" alt="">
                            <a href="#"><span>Mark Wiens</span></a>
                        </div>
                        <div class="meta">
                            13th Dec
                            <span class="lnr lnr-heart"></span> 15
                            <span class="lnr lnr-bubble"></span> 04
                        </div>
                    </div>							
                    <a href="#">
                        <h4>Break Through Self Doubt
                            And Fear</h4>
                    </a>
                    <p>
                        Dream interpretation has many forms; it can be done be done for the sake of fun, hobby or can be taken up as a serious career.
                    </p>
                </div>
                <div class="single-recent-blog col-lg-4 col-md-4">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="{{asset('public/UI')}}/img/b2.jpg" alt="">	
                    </div>
                    <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                        <div>
                            <img class="img-fluid" src="{{asset('public/UI')}}/img/user.png" alt="">
                            <a href="#"><span>Mark Wiens</span></a>
                        </div>
                        <div class="meta">
                            13th Dec
                            <span class="lnr lnr-heart"></span> 15
                            <span class="lnr lnr-bubble"></span> 04
                        </div>
                    </div>							
                    <a href="#">
                        <h4>Portable Fashion for
                            young women</h4>
                    </a>
                    <p>
                        You may be a skillful, effective employer but if you don’t trust your personnel and the opposite, then the chances of improving.
                    </p>
                </div>
                <div class="single-recent-blog col-lg-4 col-md-4">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="{{asset('public/UI')}}/img/b3.jpg" alt="">	
                    </div>
                    <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                        <div>
                            <img class="img-fluid" src="{{asset('public/UI')}}/img/user.png" alt="">
                            <a href="#"><span>Mark Wiens</span></a>
                        </div>
                        <div class="meta">
                            13th Dec
                            <span class="lnr lnr-heart"></span> 15
                            <span class="lnr lnr-bubble"></span> 04
                        </div>
                    </div>							
                    <a href="#">
                        <h4>Do Dreams Serve As
                            A Premonition</h4>
                    </a>
                    <p>
                        So many of us are demotivated to achieve anything. Such people are not enthusiastic about anything. They don’t want to work involved.
                    </p>
                </div>												


            </div>
        </div>	
    </section>
    <!-- end recent-blog Area -->		

    <!-- Start brands Area -->
    <section style="padding:70px 0px;background-color: #ff5722">
        <div class="container">
            <div class="brand-wrap">
                <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="{{asset('public/UI')}}/img/l1.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="{{asset('public/UI')}}/img/l2.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="{{asset('public/UI')}}/img/l3.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="{{asset('public/UI')}}/img/l4.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="{{asset('public/UI')}}/img/l5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>			

    <!-- start footer Area -->
    @include('UI.inc.footer-bar');
    <!-- end footer Area -->
    
    @include('UI.inc.footersource');