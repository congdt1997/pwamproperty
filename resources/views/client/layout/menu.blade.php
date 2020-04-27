<div class="rd-navbar-main-outer">
    <div class="rd-navbar-main">
        <!-- RD Navbar Panel-->
        <div class="rd-navbar-panel">
            <!-- RD Navbar Toggle-->
            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
            <!-- RD Navbar Brand-->
            <div class="rd-navbar-brand"><a class="brand" href="client/home/home"><img class="brand-logo-dark" src="client_asset/images/logo.png" alt="" width="142" height="41" srcset="images/logo-default-284x82.png 2x"/><img class="brand-logo-light" src="images/logo-inverse-121x61.png" alt="" width="121" height="61" srcset="images/logo-inverse-284x82.png 2x"/></a>
            </div>
        </div>
        <div class="rd-navbar-nav-wrap">
            <!-- RD Navbar Nav-->
            <ul class="rd-navbar-nav">
                <li class="rd-nav-item active"><a class="rd-nav-link" href="client/home/home">Home</a>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="client/product/listproduct">Properties</a>
                    <!-- RD Navbar Dropdown-->
                    <ul class="rd-menu rd-navbar-dropdown">
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="properties-grid.html">Properties Grid</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="single-property.html">Single Property</a></li>
                    </ul>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.html">About Us</a>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="client/news/listnews">Blog</a>
                    <!-- RD Navbar Dropdown-->
                    <ul class="rd-menu rd-navbar-dropdown">
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Blog post</a></li>
                    </ul>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="#">Pages</a>
                    <!-- RD Navbar Dropdown-->
                    <ul class="rd-menu rd-navbar-dropdown">
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="client/profile/detail">Profile</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="coming-soon.html">Coming Soon</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="404.html">404</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="privacy-policy.html">Privacy Policy</a></li>
                    </ul>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="contact-us.html">Contact Us</a>
                </li>
            </ul>

            @if(isset($user_success))
            @if($user_success->idRole == 1)
            <div class="rd-navbar-main-item"><a class="button button-sm button-primary" href="admin/dashboard/showdata">Go to Admin site</a>
            </div>
                @else
             <div class="rd-navbar-main-item"><a class="button button-sm button-primary" href="#">Submit property</a>
             </div>
            @endif
            @endif
        </div>
    </div>
</div>
