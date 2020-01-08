<header id="header" style="border-bottom:3px solid #ff5722;">
            <div class="container main-menu">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <a href="index.html"><img src="{{asset('public/UI')}}/img/logo.png" alt="" title="" /></a>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li><a href="{{asset('')}}">Home</a></li>
                            <li><a href="{{url('about')}}">About</a></li>
                            <li><a href="{{url('service')}}">Services</a></li>
                            <li><a href="{{url('portfolio')}}">Portfolio</a></li>
                            <li class="menu-has-children">
                                <a href="{{url('blog')}}">Blog</a>
                                <ul>
                                    <li><a href="blog-view">Blog Home</a></li>
                                    <li><a href="{{url('blog-view')}}">Blog Single</a></li>
                                </ul>
                            </li>					          					          		          
                            <li><a href="{{url('contact')}}">Contact</a></li>
                        </ul>
                    </nav><!-- #nav-menu-container -->		    		
                </div>
            </div>
        </header>
        <!-- #header -->