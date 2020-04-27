@extends('client.layout.index')
@section('content')
    <section class="breadcrumbs-custom bg-image context-dark" data-opacity="45" style="background-image: url(client_asset/images/breadcrumbs-bg-05-1922x441.jpg);">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">Fail To Access</h2>
        </div>
    </section>
    <section class="section-xs bg-white">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="client/home/home">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">404</li>
            </ul>
        </div>
    </section>
    <div class="divider-section"></div>
    <section class="section section-md bg-default text-center">
        <div class="container">
            <h2 class="text-spacing-20">Page Not Found</h2>
            <p class="heading-5">You may have mistyped the address or the page may have moved</p><a class="button button-primary" href="client/home/home">Go to Homepage</a>
        </div>
    </section>
@endsection
