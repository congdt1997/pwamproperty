@extends('client.layout.index')
@section('content')
    <section class="breadcrumbs-custom bg-image context-dark" data-opacity="45" style="background-image: url(client_asset/images/home/404.jpg);">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">Fail To Access</h2>
        </div>
    </section>
    <section class="section-xs bg-white">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="client/home/home">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Check Login</li>
            </ul>
        </div>
    </section>
    <div class="divider-section"></div>
    <section class="section section-md bg-default text-center">
        <div class="container">
            <h2 class="text-spacing-20">Please login to access to this page</h2>
            <p class="heading-5">You must login to access to this page.</p><a class="button button-primary" href="client/home/home">Go to Homepage</a>
        </div>
    </section>
@endsection
