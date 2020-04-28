@extends('client.layout.index')
@section('content')
    <section class="breadcrumbs-custom bg-image context-dark" data-opacity="59" style="background-image: url(client_asset/images/about/header.jpg);">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">About Us</h2>
        </div>
    </section>
    <section class="section-xs bg-white">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </section>
    <div class="divider-section"></div>
    <!-- Shortly About Us-->
    <section class="section section-md bg-default">
        <div class="container">
            <!-- Box Info-->
            <article class="box-info box-info-1">
                <div class="box-info-aside">
                    <div class="image-block-1" style="background-image: url(client_asset/images/about/about.jpg);"></div>
                </div>
                <div class="box-info-main context-dark">
                    <div class="box-info-main-inner">
                        <h2 class="f1">Start since 2020</h2>
                        <div class="divider-small"></div>
                        <!-- Bootstrap tabs-->
                        <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                            <!-- Nav tabs-->
                            <ul class="nav nav-tabs">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab">Our goal</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">About Us</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab">Our Mission</a></li>
                            </ul>
                            <!-- Tab panes-->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabs-1-1">
                                    <p>We have been working since 2020 to be sure you are getting the best P-WAM Real Estate service possible.</p>
                                    <p>P-WAM Real Estate aims to unite P-WAM brokers to provide their clients and partners with the top-notch level of brokerage services throughout the Vietnam.</p>
                                </div>
                                <div class="tab-pane fade" id="tabs-1-2">
                                    <p>P-WAM Real Estate is a full-service, luxury P-WAM brokerage company representing clients worldwide.</p>
                                    <ul class="list-marked-1 cols-2">
                                        <li>More Listings</li>
                                        <li>Property for Rent and Sale</li>
                                        <li>Top Rated Agents</li>
                                        <li>Home Estimates</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="tabs-1-3">
                                    <p>Our mission is to be the most successful P-WAM firm in the local states and beyond.</p>
                                    <p>P-WAM Real Estate incorporates proven, professional state of-the-art techniques specializing in the marketing, listing and selling of new and resale homes.</p>
                                </div>
                            </div>
                        </div><a class="button button-sm button-primary" href="client/home/contact">Get in Touch</a>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <!-- Features-->
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-flex row-30 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <!-- Box Modern-->
                    <article class="box-modern"><span class="icon box-modern-icon fl-bigmug-line-big104"></span>
                        <div class="box-modern-main">
                            <h4 class="box-modern-title">Various Locations</h4>
                            <p>We have lots of properties in various locations available for purchase.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- Box Modern-->
                    <article class="box-modern"><span class="icon box-modern-icon fl-bigmug-line-wallet26"></span>
                        <div class="box-modern-main">
                            <h4 class="box-modern-title">No Commission</h4>
                            <p>Opportunity to acquire a quality apartment for rent without having to pay any commission.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- Box Modern-->
                    <article class="box-modern"><span class="icon box-modern-icon fl-bigmug-line-search74"></span>
                        <div class="box-modern-main">
                            <h4 class="box-modern-title">View Apartments</h4>
                            <p>View apartment listings with photos, HD videos, virtual tours, 3D floor plans etc.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Agents-->
    <section class="section section-md bg-default">
        <div class="container">
            <h2 class="heading-decoration-1"><span class="heading-inner">Our Partner</span></h2>
            <div class="row row-30">
                <div class="col-sm-6 col-lg-3">
                    <!-- Block Agent--><a class="block-agent" href="#"><img src="client_asset/images/LogoCongKobu.png" alt="" width="540" height="460"/>
                        <div class="block-agent-body">
                            <h3 class="block-agent-title">Kobu Rental</h3>
                            <p>For Car Rental</p>
                        </div></a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Block Agent--><a class="block-agent" href="#"><img src="client_asset/images/htkrental.png" alt="" width="540" height="460"/>
                        <div class="block-agent-body">
                            <h3 class="block-agent-title">HTK Bike Rental</h3>
                            <p>For Bike Rental</p>
                        </div></a>
                </div>
            </div>
        </div>
    </section>

@endsection
