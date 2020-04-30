@extends('client.layout.index')
@section('content')
    <section class="section">
        <div class="range">
            <div class="cell-xl-6_lg box-1-cell height-fill context-dark">
                <div class="box-1-bg-shape"><img class="box-1-bg-image" src="client_asset/images/home/search.jpg" alt=""
                                                 role="presentation"></div>
                <div class="cell-inner box-1-outer">
                    <div class="box-1">
                        <h2>Find Your Property</h2>
                        <form class="rd-form" action="client/product/showproduct2" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="row row-x-20 row-20">
                                <div class="col-sm-6 col-lg-12 col-xl-6">
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" data-style="modern"
                                                data-placeholder="Choose Location" name="locationName"
                                                class="form-control-sm form-control">
                                            <option value="none" selected="">Location</option>
                                            @foreach($location as $loca)
                                                <option value={{$loca -> id}}>{{$loca -> locationName}}</option>
                                            @endforeach
                                        </select><span class="select-arrow"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" data-style="modern"
                                                data-placeholder="Choose Location" name="typeProperties"
                                                class="form-control-sm form-control">
                                            <option value="none" selected="">Type Of Properties</option>
                                            @foreach($typeproperties as $type)
                                                <option value={{$type -> id}}>{{$type -> typeProperty}}</option>
                                            @endforeach
                                        </select><span class="select-arrow"></span>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="range_min" class="rd-range-input1" id="range_min">
                            <input type="hidden" name="range_max" class="rd-range-input2" id="range_max">
                            <div class="rd-range-outer">
                                <p class="rd-range-caption">Price ($)</p>
                                <!-- RD Range-->
                                <div class="rd-range" data-input=".rd-range-input1" data-input-2=".rd-range-input2"
                                     data-min="50" data-max="20000" id="price_range" data-start="[50, 20000]"
                                     data-step="10" data-tooltip="true" data-min-diff="100"></div>
                            </div>
                            <input type="hidden" name="range_minacreage" class="rd-range-inputacreage1">
                            <input type="hidden" name="range_maxacreage" class="rd-range-inputacreage2">
                            <div class="rd-range-outer">
                                <p class="rd-range-caption">Area (Sq Ft)</p>
                                <!-- RD Range-->
                                <div class="rd-range" data-input=".rd-range-inputacreage1"
                                     data-input-2=".rd-range-inputacreage2" data-min="70" data-max="2000"
                                     data-start="[70, 2000]" data-step="10" data-tooltip="true"
                                     data-min-diff="50"></div>
                            </div>
                            <div class="layout-5">
                                <div class="layout-5-item">
                                    <button class="button button-primary-outline" type="submit"
                                            style="min-width: 150px;">Search
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="cell-xl-6_sm height-fill">
                <div class="box-2">
                    <!-- Owl Carousel-->
                    <div class="owl-carousel" data-items="1" data-sm-items="2" data-lg-items="1" data-xl-items="2"
                         data-dots="false" data-nav="false" data-nav-custom="#owl-outer-nav" data-loop="true"
                         data-margin="30" data-autoplay="false" data-autoplay-speed="3500" data-stage-padding="0"
                         data-mouse-drag="false"><a class="product-corporate context-dark" href="single-property.html"
                                                    style="background-image: url(client_asset/images/real-estate-1-1-474x577.jpg);">
                            <div class="product-corporate-inner">
                                <div class="product-corporate-caption">
                                    <h3 class="product-corporate-title">401 Biscayne Boulevard, Miami</h3>
                                    <h4 class="product-corporate-info">3 bedrooms, $240\day</h4>
                                </div>
                            </div>
                        </a><a class="product-corporate context-dark" href="single-property.html"
                               style="background-image: url(client_asset/images/real-estate-1-2-474x577.jpg);">
                            <div class="product-corporate-inner">
                                <div class="product-corporate-caption">
                                    <h3 class="product-corporate-title">3895 NW 107th Ave, Doral</h3>
                                    <h4 class="product-corporate-info">2 bedrooms, $130\day</h4>
                                </div>
                            </div>
                        </a><a class="product-corporate context-dark" href="single-property.html"
                               style="background-image: url(client_asset/images/real-estate-1-3-474x577.jpg);">
                            <div class="product-corporate-inner">
                                <div class="product-corporate-caption">
                                    <h3 class="product-corporate-title">3782 Broadway St, San Francisco</h3>
                                    <h4 class="product-corporate-info">2 bedrooms, $290\day</h4>
                                </div>
                            </div>
                        </a><a class="product-corporate context-dark" href="single-property.html"
                               style="background-image: url(client_asset/images/real-estate-1-4-474x577.jpg);">
                            <div class="product-corporate-inner">
                                <div class="product-corporate-caption">
                                    <h3 class="product-corporate-title">9021 Charter Oak Ln, San Diego</h3>
                                    <h4 class="product-corporate-info">1 bedroom, $210\day</h4>
                                </div>
                            </div>
                        </a></div>
                    <div class="box-2-footer">
                        <div class="box-2-footer-inner">
                            <h3>Recent Properties</h3>
                            <div class="owl-outer-nav" id="owl-outer-nav">
                                <button class="owl-arrow owl-arrow-prev"><span
                                        class="icon fl-budicons-free-left161"></span><span>prev</span></button>
                                <button class="owl-arrow owl-arrow-next"><span>next</span><span
                                        class="icon fl-budicons-free-right163"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Icon List-->
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-30">
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
                            <p>Opportunity to acquire a quality apartment for rent without having to pay any
                                commission.</p>
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
    <!-- Featured Properties-->
    <section class="section section-lg bg-gray-12">
        <div class="container">
            <div class="layout-4">
                <h2 class="heading-decoration-1"><span class="heading-inner">Featured Properties</span></h2>
                <div class="layout-4-item">
                    <ul class="list-inline-bordered heading-7">
                        <li><a href="#">For Rent</a></li>
                        <li><a href="#">For Sale</a></li>
                    </ul>
                </div>
            </div>
            <div class="row row-50">
                @foreach($properties as $pro)
                    <div class="col-md-6 col-lg-4">
                        <!-- Product Classic-->
                        <article class="product-classic">
                            <div class="product-classic-media">
                                <div class="owl-carousel" data-items="1" data-nav="true" data-stage-padding="0"
                                     data-loop="false" data-margin="0" data-mouse-drag="false"><img
                                        src="admin_asset/images/upload/properties/{{$pro->image}}" alt="" width="480"
                                        height="287"/><img src="admin_asset/images/upload/properties/{{$pro->image}}"
                                                           alt="" width="480" height="287"/><img
                                        src="admin_asset/images/upload/properties/{{$pro->image}}" alt="" width="480"
                                        height="287"/><img src="admin_asset/images/upload/properties/{{$pro->image}}"
                                                           alt="" width="480" height="287"/>
                                </div>
                                <div class="product-classic-price"><span>{{$pro->price}}\mo</span></div>
                            </div>
                            <h4 class="product-classic-title"><a
                                    href="client/product/detail/{{$pro->id}}">{{$pro->introduction}}</a></h4>
                            <div class="product-classic-divider"></div>
                            <ul class="product-classic-list">
                                <li><span class="icon mdi mdi-vector-square"></span><span>{{$pro->acreage}} Sq Ft</span>
                                </li>
                                <li><span class="icon hotel-icon-10"></span><span>{{$pro->bathroom}} Bathrooms</span>
                                </li>
                                <li><span class="icon hotel-icon-05"></span><span>{{$pro->bedroom}} Bedrooms</span></li>
                            </ul>
                        </article>
                    </div>
                @endforeach
                <div class="col-12 text-center"><a class="button button-primary" href="client/product/listproduct">View
                        all properties</a></div>
            </div>
        </div>
    </section>
    <!-- Counters-->
    <section class="section parallax-container" data-parallax-img="client_asset/images/home/counter.jpg">
        <div class="parallax-content section-lg context-dark text-center">
            <div class="container">
                <div class="row row-30">
                    <div class="col-6 col-md-3">
                        <!-- Box counter-->
                        <article class="box-counter">
                            <div class="box-counter-main"><span>860</span></div>
                            <p class="box-counter-title">Properties on Map</p>
                        </article>
                    </div>
                    <div class="col-6 col-md-3">
                        <!-- Box counter-->
                        <article class="box-counter">
                            <div class="box-counter-main">
                                <div class="counter">29</div>
                            </div>
                            <p class="box-counter-title">Professional Agents</p>
                        </article>
                    </div>
                    <div class="col-6 col-md-3">
                        <!-- Box counter-->
                        <article class="box-counter">
                            <div class="box-counter-main">
                                <div class="counter">10</div>
                                <span>k</span>
                            </div>
                            <p class="box-counter-title">Happy Clients</p>
                        </article>
                    </div>
                    <div class="col-6 col-md-3">
                        <!-- Box counter-->
                        <article class="box-counter">
                            <div class="box-counter-main">
                                <div class="counter">15</div>
                            </div>
                            <p class="box-counter-title">New Apartments Daily</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories-->
    <section class="section section-lg bg-default">
        <div class="container">
            <h2 class="heading-decoration-1"><span class="heading-inner">Categories</span></h2>
            <div class="row row-30">
                <div class="col-md-6 col-lg-7">
                    <!-- Box Category-->
                    <article class="box-category-outer"><a class="box-category context-dark" href="search-results.html">
                            <div class="box-category-image-outer"
                                 style="background-image: url(client_asset/images/categories-1-670x307.jpg);"></div>
                            <div class="box-category-caption">
                                <div class="box-category-caption-inner">
                                    <h3 class="box-category-title">Studio Apartments</h3>
                                    <p class="box-category-subtitle">8 Properties</p>
                                </div>
                            </div>
                        </a></article>
                </div>
                <div class="col-md-6 col-lg-5">
                    <!-- Box Category-->
                    <article class="box-category-outer"><a class="box-category context-dark" href="search-results.html">
                            <div class="box-category-image-outer"
                                 style="background-image: url(client_asset/images/categories-2-469x307.jpg);"></div>
                            <div class="box-category-caption">
                                <div class="box-category-caption-inner">
                                    <h3 class="box-category-title">Swimming Pool</h3>
                                    <p class="box-category-subtitle">8 Properties</p>
                                </div>
                            </div>
                        </a></article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- Box Category-->
                    <article class="box-category-outer"><a class="box-category context-dark" href="search-results.html">
                            <div class="box-category-image-outer"
                                 style="background-image: url(client_asset/images/categories-3-370x307.jpg);"></div>
                            <div class="box-category-caption">
                                <div class="box-category-caption-inner">
                                    <h3 class="box-category-title">Luxury Houses</h3>
                                    <p class="box-category-subtitle">8 Properties</p>
                                </div>
                            </div>
                        </a></article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- Box Category-->
                    <article class="box-category-outer"><a class="box-category context-dark" href="search-results.html">
                            <div class="box-category-image-outer"
                                 style="background-image: url(client_asset/images/categories-4-370x307.jpg);"></div>
                            <div class="box-category-caption">
                                <div class="box-category-caption-inner">
                                    <h3 class="box-category-title">Extra Bedroom</h3>
                                    <p class="box-category-subtitle">8 Properties</p>
                                </div>
                            </div>
                        </a></article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- Box Category-->
                    <article class="box-category-outer"><a class="box-category context-dark" href="search-results.html">
                            <div class="box-category-image-outer"
                                 style="background-image: url(client_asset/images/categories-5-370x307.jpg);"></div>
                            <div class="box-category-caption">
                                <div class="box-category-caption-inner">
                                    <h3 class="box-category-title">Cozy Houses</h3>
                                    <p class="box-category-subtitle">8 Properties</p>
                                </div>
                            </div>
                        </a></article>
                </div>
            </div>
        </div>
    </section>
    <!-- What People Say-->
    <section class="section section-lg bg-gray-12">
        <div class="container">
            <h2 class="heading-decoration-1"><span class="heading-inner">What People Say</span></h2>
        </div>
        <div class="container container-wide">
            <!-- Owl Carousel-->
            <div class="owl-carousel" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4"
                 data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="30"
                 data-mouse-drag="false">
                <article class="quote-modern">
                    <div class="quote-modern-inner">
                        <time class="quote-modern-time" datetime="2020">March 15, 2020</time>
                        <div class="quote-modern-main">
                            <p>Your property managers have been active in their response to repairs and always patient
                                with our frustrations. You have always found us wonderful tenants.</p>
                        </div>
                        <div class="quote-modern-meta-outer"><img class="quote-modern-avatar"
                                                                  src="client_asset/images/testimonials-1-57x57.jpg"
                                                                  alt="" width="57" height="57"/>
                            <div class="quote-modern-meta">
                                <h4 class="quote-modern-cite">Karen Sanders</h4>
                                <p class="quote-modern-position">Pharmacist</p>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="quote-modern">
                    <div class="quote-modern-inner">
                        <time class="quote-modern-time" datetime="2020">March 15, 2020</time>
                        <div class="quote-modern-main">
                            <p>We recently rented an apartment through your site, and have been looked after by James
                                Thompson. He provided us with utmost support on every property issue.</p>
                        </div>
                        <div class="quote-modern-meta-outer"><img class="quote-modern-avatar"
                                                                  src="client_asset/images/testimonials-2-57x57.jpg"
                                                                  alt="" width="57" height="57"/>
                            <div class="quote-modern-meta">
                                <h4 class="quote-modern-cite">Walter Williams</h4>
                                <p class="quote-modern-position">Lifeguard</p>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="quote-modern">
                    <div class="quote-modern-inner">
                        <time class="quote-modern-time" datetime="2020">March 15, 2020</time>
                        <div class="quote-modern-main">
                            <p>I have always found your team to be extremely prompt and professional with all dealings I
                                have had with them. You always keep me updated on the progress.</p>
                        </div>
                        <div class="quote-modern-meta-outer"><img class="quote-modern-avatar"
                                                                  src="client_asset/images/testimonials-3-57x57.jpg"
                                                                  alt="" width="57" height="57"/>
                            <div class="quote-modern-meta">
                                <h4 class="quote-modern-cite">Kate Anderson</h4>
                                <p class="quote-modern-position">Decorator</p>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="quote-modern">
                    <div class="quote-modern-inner">
                        <time class="quote-modern-time" datetime="2020">March 15, 2020</time>
                        <div class="quote-modern-main">
                            <p>Your advice and support from our initial meeting through liaising with current tenants
                                and a polished marketing program all contributed to a great sale process, thanks!</p>
                        </div>
                        <div class="quote-modern-meta-outer"><img class="quote-modern-avatar"
                                                                  src="client_asset/images/testimonials-4-57x57.jpg"
                                                                  alt="" width="57" height="57"/>
                            <div class="quote-modern-meta">
                                <h4 class="quote-modern-cite">Peter Smith</h4>
                                <p class="quote-modern-position">Historian</p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- Agents-->
    <section class="section section-lg bg-default">
        <div class="container">
            <h2 class="heading-decoration-1"><span class="heading-inner">Our Agents</span></h2>
            <div class="row row-30">
                <div class="col-sm-6 col-lg-3">
                    <!-- Block Agent--><a class="block-agent" href="#"><img
                            src="client_asset/images/agents-01-540x460.jpg" alt="" width="540" height="460"/>
                        <div class="block-agent-body">
                            <h3 class="block-agent-title">Michael Rutter</h3>
                            <p>Certified MyHome Broker</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Block Agent--><a class="block-agent" href="#"><img
                            src="client_asset/images/agents-02-540x460.jpg" alt="" width="540" height="460"/>
                        <div class="block-agent-body">
                            <h3 class="block-agent-title">Sam Wilson</h3>
                            <p>Residential MyHome Broker</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Block Agent--><a class="block-agent" href="#"><img
                            src="client_asset/images/agents-03-540x460.jpg" alt="" width="540" height="460"/>
                        <div class="block-agent-body">
                            <h3 class="block-agent-title">Janet Richmond</h3>
                            <p>MyHome Broker</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Block Agent--><a class="block-agent" href="#"><img
                            src="client_asset/images/agents-04-540x460.jpg" alt="" width="540" height="460"/>
                        <div class="block-agent-body">
                            <h3 class="block-agent-title">Carl Parker</h3>
                            <p>MyHome Broker</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ-->
    <section class="section section-lg bg-default">
        <div class="container">
            <!-- Box Info-->
            <article class="box-info box-info-2">
                <div class="box-info-main context-dark">
                    <div class="box-info-main-inner">
                        <h2>Get a Free Consultation</h2>
                        <!-- RD Mailform-->
                        <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact"
                              method="post" action="client_asset/bat/rd-mailform.php">
                            <div class="row row-20">
                                <div class="col-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-email" type="email" name="email"
                                               data-constraints="@Email @Required">
                                        <label class="form-label" for="contact-email">E-mail</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-wrap">
                                        <label class="form-label" for="contact-message">Message</label>
                                        <textarea class="form-input" id="contact-message" name="message"
                                                  data-constraints="@Required"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="button button-primary" type="submit">Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="box-info-aside">
                    <!-- Bootstrap collapse-->
                    <div class="card-group-custom card-group-corporate" id="accordion1" role="tablist"
                         aria-multiselectable="false">
                        <!-- Bootstrap card-->
                        <article class="card card-custom card-corporate">
                            <div class="card-header" id="accordion1-heading-1" role="tab">
                                <div class="card-title"><a class="card-link" role="button" data-toggle="collapse"
                                                           href="#accordion1-collapse-1"
                                                           aria-controls="accordion1-collapse-1"
                                                           aria-expanded="true"><span>Why should I refer to a MyHome salesperson?</span>
                                        <div class="card-arrow"></div>
                                    </a></div>
                            </div>
                            <div class="collapse show" id="accordion1-collapse-1" role="tabpanel"
                                 aria-labelledby="accordion1-heading-1" data-parent="#accordion1">
                                <div class="card-body">
                                    <p>A MyHome salesperson is more than just a “sales person.” They act on your behalf
                                        as your agent, providing you with advice and guidance and doing a job – helping
                                        you buy or sell a home. While it is true they get paid for what they do, so do
                                        other professions that provide advice, guidance.</p>
                                </div>
                            </div>
                        </article>
                        <!-- Bootstrap card-->
                        <article class="card card-custom card-corporate">
                            <div class="card-header" id="accordion1-heading-2" role="tab">
                                <div class="card-title"><a class="card-link collapsed" role="button"
                                                           data-toggle="collapse" href="#accordion1-collapse-2"
                                                           aria-controls="accordion1-collapse-2"
                                                           aria-expanded="false"><span>Should I talk with a bank before looking at homes?</span>
                                        <div class="card-arrow"></div>
                                    </a></div>
                            </div>
                            <div class="collapse" id="accordion1-collapse-2" role="tabpanel"
                                 aria-labelledby="accordion1-heading-2" data-parent="#accordion1">
                                <div class="card-body">
                                    <p>The answer to the question is YES! There are tons of reasons why you should talk
                                        with a bank and get pre-approved before looking at homes. First and foremost,
                                        talking with a bank before looking at homes can help you understand exactly how
                                        much you can afford. There is no reason to look at homes that are listed for
                                        $250,000 if you can only afford up to $200,000.</p>
                                </div>
                            </div>
                        </article>
                        <!-- Bootstrap card-->
                        <article class="card card-custom card-corporate">
                            <div class="card-header" id="accordion1-heading-3" role="tab">
                                <div class="card-title"><a class="card-link collapsed" role="button"
                                                           data-toggle="collapse" href="#accordion1-collapse-3"
                                                           aria-controls="accordion1-collapse-3"
                                                           aria-expanded="false"><span>Should I buy or continue to rent?</span>
                                        <div class="card-arrow"></div>
                                    </a></div>
                            </div>
                            <div class="collapse" id="accordion1-collapse-3" role="tabpanel"
                                 aria-labelledby="accordion1-heading-3" data-parent="#accordion1">
                                <div class="card-body">
                                    <p>Buying a home can be a very solid investment. This being said, renting can also
                                        be a better option for some, depending on the circumstances. The current
                                        interest rates are incredible. A 30-year FHA mortgage can be locked in at a rate
                                        of around 3.5%. Since the interest rates are so low, it actually can be cheaper
                                        to pay a mortgage right now than paying rent.</p>
                                </div>
                            </div>
                        </article>
                        <!-- Bootstrap card-->
                        <article class="card card-custom card-corporate">
                            <div class="card-header" id="accordion1-heading-4" role="tab">
                                <div class="card-title"><a class="card-link collapsed" role="button"
                                                           data-toggle="collapse" href="#accordion1-collapse-4"
                                                           aria-controls="accordion1-collapse-4"
                                                           aria-expanded="false"><span>Can I find a rent-to-own property?</span>
                                        <div class="card-arrow"></div>
                                    </a></div>
                            </div>
                            <div class="collapse" id="accordion1-collapse-4" role="tabpanel"
                                 aria-labelledby="accordion1-heading-4" data-parent="#accordion1">
                                <div class="card-body">
                                    <p>Of course you can, but the probability isn’t very high. The same can be said
                                        about a rent-to-own property. A common question from home buyers is whether
                                        rent-to-owns exist or whether an owner would consider that option. They are out
                                        there, but there are somethings that you need to know before agreeing to a
                                        rent-to-own.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <!-- Latest Blog Posts-->
    <section class="section section-lg bg-gray-12">
        <div class="container">
            <h2 class="heading-decoration-1"><span class="heading-inner">Latest Blog Posts</span></h2>
            <div class="row row-40 row-lg-60">
                @foreach($news as $ns)
                    <div class="col-md-6 col-xl-4">
                        <article class="post-default"><a class="post-default-image" href="blog-post.html"><img
                                    src="admin_asset/images/upload/news/{{$ns->image}}" alt="" width="736"
                                    height="540"/></a>
                            <div class="post-default-body">
                                <div class="post-default-title">
                                    <h4><a href="client/news/newsdetail/{{$ns -> id}}">{{$ns -> title}}</a></h4>
                                </div>
                                <div class="post-default-divider"></div>
                                <div class="post-default-text">
                                    <p>Our Principal and Partner, Samuel McMillan, recently celebrated the unveiling of
                                        568 N. Tigertail Road, a newly-constructed estate</p>
                                </div>
                                <div class="post-default-time"><span class="icon mdi mdi-clock"></span><a
                                        href="blog-post.html">{{$ns -> created_at}}</a></div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Partners-->
    <section class="section section-lg bg-default">
        <div class="container">
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-carousel-stretch" data-items="1" data-sm-items="2" data-md-items="4"
                 data-dots="true" data-nav="false" data-stage-padding="1" data-loop="false" data-margin="30"
                 data-autoplay="true" data-autoplay-speed="3000" data-mouse-drag="false"><a class="link-corporate"
                                                                                            href="#">
                    <img src="client_asset/images/logo.png" alt="" width="183" height="44"/></a><a
                    class="link-corporate" href="#">
                    <img src="client_asset/images/LogoCongKobu.png" alt="" width="118" height="82"/></a><a
                    class="link-corporate" href="#">
                    <img src="client_asset/images/LogoCong.jpg" alt="" width="137" height="39"/></a><a
                    class="link-corporate" href="#">
                    <img src="client_asset/images/logo.png" alt="" width="133" height="77"/></a><a
                    class="link-corporate" href="#">
                    <img src="client_asset/images/LogoCongKobu.png" alt="" width="145" height="35"/></a></div>
        </div>
    </section>


@endsection
@section('script')
    @if(count($errors) > 0 || session('login_failed'))
        <script type="text/javascript">
            $("document").ready(function () {
                $('#logintest').trigger('click');
            });
        </script>
    @endif
@endsection
