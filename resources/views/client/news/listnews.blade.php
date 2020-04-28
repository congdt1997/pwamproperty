@extends('client.layout.index')
@section('content')
    <section class="breadcrumbs-custom bg-image context-dark" data-opacity="45" style="background-image: url(client_asset/images/home/blog.jpg);">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">Blog</h2>
        </div>
    </section>
    <section class="section-xs bg-white">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active">Blog</li>
            </ul>
        </div>
    </section>
    <div class="divider-section"></div>
    <!-- Section Blog-->
    <section class="section section-md bg-gray-12">
        <div class="container">
            <div class="row row-40 row-lg-60">
                @foreach($news as $ns)
                <div class="col-md-6 col-xl-4">
                    <article class="post-default"><a class="post-default-image" href="blog-post.html"><img src="admin_asset/images/upload/news/{{$ns->image}}" alt="" width="736" height="540"/></a>
                        <div class="post-default-body">
                            <div class="post-default-title">
                                <h4><a href="client/news/newsdetail/{{$ns -> id}}">{{$ns -> title}}</a></h4>
                            </div>
                            <div class="post-default-divider"></div>
                            <div class="post-default-text">
                                <p>Our Principal and Partner, Samuel McMillan, recently celebrated the unveiling of 568 N. Tigertail Road, a newly-constructed estate</p>
                            </div>
                            <div class="post-default-time"><span class="icon mdi mdi-clock"></span><a href="blog-post.html">{{$ns -> created_at}}</a></div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
