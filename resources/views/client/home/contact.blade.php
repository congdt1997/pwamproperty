@extends('client.layout.index')
@section('content')
    <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(client_asset/images/home/contact.jpg);">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">Contact Us</h2>
        </div>
    </section>
    <section class="section-xs bg-white">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </section>
    <div class="divider-section"></div>
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="layout-bordered">
                <div class="layout-bordered-aside">
                    <div class="layout-bordered-aside-inner">
                        <h2>Contact Details</h2>
                        <p>If you have any questions, just fill in the contact form, and we will answer you shortly. If you are living nearby, come visit our office.</p>
                        <div class="layout-bordered-aside-group">
                            <dl class="list-terms-1">
                                <dt>Client Support:</dt>
                                <dd><span class="icon mdi-phone mdi"></span><a class="list-terms-1-link-big" href="tel:#">1-800-1234-567</a></dd>
                            </dl>
                            <dl class="list-terms-1">
                                <dt>E-mail:</dt>
                                <dd><span class="icon mdi mdi-email-outline"></span><a href="mailto:#">info@demolink.org</a></dd>
                            </dl>
                            <dl class="list-terms-1">
                                <dt>Main Office:</dt>
                                <dd><span class="icon mdi mdi-map-marker"></span><a href="#">3015 Grand Ave, Coconut Grove,Merrick Way, FL 12345</a></dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="layout-bordered-main">
                    <div class="layout-bordered-main-inner">
                        <h2>Get in Touch</h2>
                        <!-- RD Mailform-->
                        <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                            <div class="row row-20">
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                                        <label class="form-label" for="contact-name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                                        <label class="form-label" for="contact-email">E-mail</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@PhoneNumber">
                                        <label class="form-label" for="contact-phone">Phone</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-wrap">
                                        <label class="form-label" for="contact-message">Message</label>
                                        <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="button button-sm button-primary" type="submit">Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
