<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>P-WAM Real Estate</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <base href="{{asset('')}}">
    <link rel="icon" href="client_asset/images/favicon.png" type="image/x-icon">
    <!-- Stylesheets-->

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900%7CRoboto:300,400,500,700,900">
    <link rel="stylesheet" href="client_asset/css/bootstrap.css">
    <link rel="stylesheet" href="client_asset/css/style.css">
    <link rel="stylesheet" href="client_asset/css/fonts.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
<body>
<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="client_asset/images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
<div class="preloader">
    <div class="banter-loader">
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
    </div>
</div>
<div class="page">
    <!-- Page Header-->
    <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">

                @include('client.layout.header')

                @include('client.layout.menu')

            </nav>
        </div>
    </header>
    <!-- FScreen-->
    @yield('content')
    <!-- Page Footer-->
    <!-- Pre footer section-->
    <section class="section section-md bg-gray-31 context-dark">
        <div class="container">
            <div class="row row-40 justify-content-lg-between">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <h3 class="heading-square font-weight-sbold" data-item=".heading-square-item"><span class="heading-square-item"></span>Latest Properties</h3><a class="post-minimal" href="single-property.html">
                        <div class="post-minimal-image"><img src="client_asset/images/post-minimal-01-161x136.jpg" alt="" width="161" height="136"/>
                        </div>
                        <div class="post-minimal-body">
                            <div class="post-minimal-title"><span> Retail Store Southwest 186th Street</span></div>
                            <div class="post-minimal-text"><span>From $120/month</span></div>
                        </div></a><a class="post-minimal" href="single-property.html">
                        <div class="post-minimal-image"><img src="client_asset/images/post-minimal-02-161x136.jpg" alt="" width="161" height="136"/>
                        </div>
                        <div class="post-minimal-body">
                            <div class="post-minimal-title"><span> Apartment Building with Subunits</span></div>
                            <div class="post-minimal-text"><span>From $120/month</span></div>
                        </div></a>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 col-bordered">
                    <h3 class="heading-square font-weight-sbold" data-item=".heading-square-item"><span class="heading-square-item"></span>Contact	Us</h3>
                    <div class="link-with-icon heading-4 text-spacing-150 font-sec" data-item=".icon"><span class="icon icon-1 mdi mdi-phone"></span><a href="tel:#">096-2222-782</a></div>
                    <div class="link-with-icon text-spacing-100" data-item=".icon"><span class="icon icon-2 mdi mdi-email-outline"></span><a href="mailto:#">pwam.realestate@gmail.com</a></div>
                    <div class="link-with-icon text-spacing-100" data-item=".icon"><span class="icon icon-3 mdi mdi-map-marker"></span><a href="#">142 - 144, Pham Phu Thu<br style="line-height: 0"> District 6, Ho Chi Minh City</a></div>
                </div>
                <div class="col-lg-4">
                    <h3 class="heading-square font-weight-sbold" data-item=".heading-square-item"><span class="heading-square-item"></span>Newsletter Signup</h3>
                    <p class="rd-mailform-label">Enter your e-mail to get the latest news of MyHome</p>
                    <form class="rd-form rd-mailform rd-form-inline-1" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="client_asset/bat/rd-mailform.php">
                        <div class="form-wrap">
                            <input class="form-input" id="subscribe-form--email" type="email" name="email" data-constraints="@Email @Required">
                            <label class="form-label" for="subscribe-form--email">Your e-mail</label>
                        </div>
                        <div class="form-button">
                            <button class="button button-primary button-square" type="submit">Subscribe</button>
                        </div>
                    </form>
                    <ul class="list-inline-1">
                        <li><a class="icon fa-facebook" href="#"></a></li>
                        <li><a class="icon fa-twitter" href="#"></a></li>
                        <li><a class="icon fa-google-plus" href="#"></a></li>
                        <li><a class="icon fa-pinterest-p" href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Page footer-->
    <footer class="section footer-classic context-dark bg-gray-21">
        <div class="container">
            <div class="row row-10 justify-content-sm-between">
                <div class="col-sm-6">
                    <!-- Rights-->
                    <p class="rights"><span>P-WAM</span> <span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><a href="privacy-policy.html">Privacy Policy</a>
                    </p>
                </div>
                <div class="col-sm-6 text-sm-right">
                    <div class="right-1"><a href="#"><span class="icon mdi mdi-plus"></span>Submit Property</a></div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="client_asset/js/core.min.js"></script>
<script src="client_asset/js/script.js"></script>
</body>
</html>
