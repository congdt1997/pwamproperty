@extends('client.layout.index')
@section('content')
    <section class="breadcrumbs-custom bg-image context-dark"
             style="background-image: url(client_asset/images/home/news.jpg);">
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
                    <article class="blog-post-solo"><img src="admin_asset/images/upload/news/{{$news->image}}" alt=""
                                                         width="770" height="440"/>
                        <h4>{{$news->title}}</h4>
                        <p>{{$news->content}}</p>
                        <div class="blog-post-solo-part">
                            <div class="row row-20">
                                <div class="col-md-5">
                                    <div class="blog-post-solo-part-aside"><img
                                            src="admin_asset/images/upload/news/{{$news->image}}" alt="" width="533"
                                            height="389"/>
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
                            <div class="quote-minimal-img"><img src="admin_asset/images/upload/news/{{$news->image}}"
                                                                alt="" width="55" height="47"/>
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
                                    <li><span><a class="icon icon-circle icon-rounded icon-5 fa-user" ></a> Post by: Cong DT</span></li>
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
                                @foreach($news2 as $ns2)
                                <div class="col-sm-6">
                                    <article class="post-simple">
                                        <div class="post-simple-img"><img src="admin_asset/images/upload/news/{{$ns2->image}}" alt=""
                                                                          width="736" height="540"/>
                                        </div>
                                        <div class="post-simple-body">
                                            <div class="post-simple-title">
                                                <h4><a href="client/news/newsdetail/{{$ns2->id}}">{{$ns2->title}}</a>
                                                </h4>
                                            </div>
                                            <div class="post-simple-time"><span class="icon mdi mdi-clock"></span><a
                                                    class="time" href="client/news/newsdetail/{{$ns2->id}}">{{$ns2->created_at}}</a></div>
                                        </div>
                                    </article>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Post Comment-->

                    </article>
                </div>

                <!-- Post SideBar-->
                <div class="col-lg-4">
                    <div class="pdl-xl-40">
                        <div class="row row-60">
                            <div class="col-md-6 col-lg-12">
                                <div class="block-info-2">
                                    <div class="block-info-2-title">
                                        <h3>Latest Listings</h3></div>
                                    @foreach($properties as $pro)
                                        <a class="post-minimal-1" href="client/product/detail/{{$pro->id}}">
                                            <div class="post-minimal-1-left"><img
                                                    src="admin_asset/images/upload/properties/{{$pro->image}}" alt=""
                                                    width="212" height="208"/>
                                            </div>
                                            <div class="post-minimal-1-body">
                                                <div class="post-minimal-1-title"><span>{{$pro->introduction}}</span>
                                                </div>
                                                <div class="post-minimal-1-text"><span>{{$pro->price}}</span></div>
                                            </div>
                                        </a><a class="post-minimal-1" href="client/product/detail/{{$pro->id}}">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
