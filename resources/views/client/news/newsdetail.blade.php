@extends('client.layout.index')
@section('content')
    <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(client_asset/images/home/news.jpg);">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">{{$news -> title}}</h2>
        </div>
    </section>
    <section class="section-xs bg-white">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li class="active">Blog post</li>
            </ul>
        </div>
    </section>
    <div class="divider-section"></div>
    <!-- Blog post -->
    <section class="section section-md bg-default">
        <div class="container">
            <div class="row justify-content-lg-center">
                <div class="col-lg-8">
                    <article class="blog-post-solo"><img src="admin_asset/images/upload/news/{{$news->image}}" alt="" width="770" height="440"/>
                        <h4>{{$news->title}}</h4>
                        <p>{{$news->content}}</p>
                        <div class="blog-post-solo-part">
                            <div class="row row-20">
                                <div class="col-md-5">
                                    <div class="blog-post-solo-part-aside"><img src="admin_asset/images/upload/news/{{$news->image}}" alt="" width="533" height="389"/>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="blog-post-solo-part-main">
                                        <p>{{$news->content}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Post Quote-->
                        <div class="quote-minimal">
                            <div class="quote-minimal-img"><img src="admin_asset/images/upload/news/{{$news->image}}" alt="" width="55" height="47"/>
                            </div>
                            <div class="quote-minimal-text">
                                <h3>{{$news->title}}</h3>
                            </div>
                        </div>
                        <p>{{$news->content}}</p>
                        <!-- Post Share and Links-->
                        <div class="blog-post-solo-footer">
                            <div class="blog-post-solo-footer-left">
                                <ul class="blog-post-solo-footer-list">
                                    <li><span class="icon mdi mdi-clock"></span><a>{{$news->created_at}}</a></li>
                                </ul>
                            </div>
                            <div class="blog-post-solo-footer-right">
                                <ul class="blog-post-solo-footer-list-1">
                                    <li><span>Share this post</span></li>
                                    <li><a class="icon icon-circle icon-rounded icon-5 fa-facebook" href="#"></a></li>
                                    <li><a class="icon icon-circle icon-rounded icon-4 fa-google-plus" href="#"></a></li>
                                    <li><a class="icon icon-circle icon-rounded icon-6 fa-twitter" href="#"></a></li>
                                    <li><a class="icon icon-circle icon-rounded icon-6 fa-pinterest-p" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Recent Posts-->
                        <div class="post-simple-group">
                            <div class="post-simple-group-title">
                                <h6>Recent Posts</h6>
                            </div>
                            <div class="post-simple-group-divider"></div>
                            <div class="row row-30">
                                <div class="col-sm-6">
                                    <article class="post-simple">
                                        <div class="post-simple-img"><img src="images/blog-post-03-736x540.jpg" alt="" width="736" height="540"/>
                                        </div>
                                        <div class="post-simple-body">
                                            <div class="post-simple-title">
                                                <h4><a href="#">Turks and Caicos Villa to be Sold for Record $7.6M</a></h4>
                                            </div>
                                            <div class="post-simple-time"><span class="icon mdi mdi-clock"></span><a class="time" href="#">March 15, 2020</a></div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-6">
                                    <article class="post-simple">
                                        <div class="post-simple-img"><img src="images/blog-post-04-736x540.jpg" alt="" width="736" height="540"/>
                                        </div>
                                        <div class="post-simple-body">
                                            <div class="post-simple-title">
                                                <h4><a href="#">How We Build a Better LA for Fifth Year in a Row</a></h4>
                                            </div>
                                            <div class="post-simple-time"><span class="icon mdi mdi-clock"></span><a class="time" href="#">March 15, 2020</a></div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <!-- Post Comment-->
                        <div class="post-comment-group">
                            <div class="post-comment-group-title">
                                <h6>3 comments</h6>
                            </div>
                            <div class="post-comment-group-divider"></div>
                            <article class="post-comment">
                                <div class="post-comment-left"><img class="img-round" src="images/blog-post-comment-01-65x66.jpg" alt="" width="65" height="66"/>
                                </div>
                                <div class="post-comment-main">
                                    <div class="post-comment-title">
                                        <h5>Edward</h5><span class="post-comment-title-time">3 days ago</span>
                                    </div>
                                    <div class="post-comment-text">
                                        <p>Thank you for this wonderful and informative post! I was present at this event and I admired the event organization as well as interior and exterior of the building. I think this property can be a wonderful option for those who want to live in a quiet neighbourhood while enjoying the wonderful scenery of the surrounding area. I am also looking forward to read your future posts on other local properties.</p>
                                    </div>
                                    <ul class="post-comment-list">
                                        <li><a href="#"><span class="icon mdi mdi-thumb-up-outline"></span><span>32</span></a></li>
                                        <li><a href="#"><span class="icon mdi mdi-comment-outline" style="position: relative; top: 2px"></span><span>Reply</span></a></li>
                                    </ul>
                                    <article class="post-comment">
                                        <div class="post-comment-left"><img class="img-round" src="images/blog-post-comment-02-60x62.jpg" alt="" width="60" height="62"/>
                                        </div>
                                        <div class="post-comment-main">
                                            <div class="post-comment-title">
                                                <h5>Nina</h5><span class="post-comment-title-time">1 day ago</span>
                                            </div>
                                            <div class="post-comment-text">
                                                <p>You are absolutely right! I also think that MyHome is one of the most innovative and quickly developing brokerage companies in the USA, and their articles may serve as a guide for beginners in this business.</p>
                                            </div>
                                            <ul class="post-comment-list">
                                                <li><a href="#"><span class="icon mdi mdi-thumb-up-outline"></span><span>32</span></a></li>
                                                <li><a href="#"><span class="icon mdi mdi-comment-outline" style="position: relative; top: 2px"></span><span>Reply</span></a></li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            </article>
                            <article class="post-comment">
                                <div class="post-comment-left"><img class="img-round" src="images/blog-post-comment-03-65x66.jpg" alt="" width="65" height="66"/>
                                </div>
                                <div class="post-comment-main">
                                    <div class="post-comment-title">
                                        <h5>John</h5><span class="post-comment-title-time">3 days ago</span>
                                    </div>
                                    <div class="post-comment-text">
                                        <p>This article is definitely one of my favorites from you. I always admire your authors’ talent when it comes to describing small VIP events aimed to present your properties in the best light. Somehow you manage to succeed in every aspect of your business and that’s what amazes me. Thank you for additional information about the property mentioned in the article, I will consider purchasing it as soon as possible.</p>
                                    </div>
                                    <ul class="post-comment-list">
                                        <li><a href="#"><span class="icon mdi mdi-thumb-up-outline"></span><span>32</span></a></li>
                                        <li><a href="#"><span class="icon mdi mdi-comment-outline" style="position: relative; top: 2px"></span><span>Reply</span></a></li>
                                    </ul>
                                </div>
                            </article>
                            <article class="post-comment">
                                <div class="post-comment-left"><img class="img-round" src="images/blog-post-comment-04-65x66.jpg" alt="" width="65" height="66"/>
                                </div>
                                <div class="post-comment-main">
                                    <div class="post-comment-title">
                                        <h5>Miranda</h5>
                                    </div>
                                    <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                        <div class="form-wrap">
                                            <label class="form-label" for="comment-message">Your comment</label>
                                            <textarea class="form-input" id="comment-message" name="message" data-constraints="@Required"></textarea>
                                        </div>
                                        <button class="button button-primary" type="submit">Submit</button>
                                    </form>
                                </div>
                            </article>
                        </div>
                    </article>
                </div>

                <!-- Post SideBar-->
                <div class="col-lg-4">
                    <div class="pdl-xl-40">
                        <div class="row row-60">
                            <div class="col-md-6 col-lg-12">
                                <div class="block-info-2">
                                    <div class="block-info-2-title">
                                        <h3>Latest Listings</h3>
                                    </div><a class="post-minimal-1" href="#">
                                        <div class="post-minimal-1-left"><img src="images/post-agent-01-212x208.jpg" alt="" width="212" height="208"/>
                                        </div>
                                        <div class="post-minimal-1-body">
                                            <div class="post-minimal-1-title"><span>401 Biscayne Blvd</span></div>
                                            <div class="post-minimal-1-text"><span>$5000\mo</span></div>
                                        </div></a><a class="post-minimal-1" href="#">
                                        <div class="post-minimal-1-left"><img src="images/post-agent-02-212x208.jpg" alt="" width="212" height="208"/>
                                        </div>
                                        <div class="post-minimal-1-body">
                                            <div class="post-minimal-1-title"><span>35 Pond St, New York</span></div>
                                            <div class="post-minimal-1-text"><span>$5550\mo</span></div>
                                        </div></a><a class="post-minimal-1" href="#">
                                        <div class="post-minimal-1-left"><img src="images/post-agent-03-212x208.jpg" alt="" width="212" height="208"/>
                                        </div>
                                        <div class="post-minimal-1-body">
                                            <div class="post-minimal-1-title"><span>182 3rd St, Seattle</span></div>
                                            <div class="post-minimal-1-text"><span>$2520\mo</span></div>
                                        </div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
