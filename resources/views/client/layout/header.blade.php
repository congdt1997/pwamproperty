<div class="rd-navbar-aside-outer">
    <div class="rd-navbar-aside">
        <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
        <ul class="rd-navbar-aside-list rd-navbar-collapse">
            <li>
                <div class="block-inline unit unit-spacing-xs align-items-center">
                    <div class="unit-left"><span class="icon text-middle mdi mdi-phone"></span></div>
                    <div class="unit-body"><a href="tel:#">096-2222-782</a></div>
                </div>
            </li>
            <li>
                <div class="block-inline unit unit-spacing-xs align-items-center">
                    <div class="unit-left"><span class="icon text-middle mdi mdi-email-outline"></span></div>
                    <div class="unit-body"><a href="mailto:#">pwam.realestate@gmail.com</a></div>
                </div>
            </li>
        </ul>
        @if(!isset($user_success))
        <div class="rd-navbar-aside-item">
            <div class="block-inline">
                <button class="unit unit-spacing-xs align-items-center" data-rd-navbar-toggle="#navbar-login-register"><span class="unit-left"><span class="icon text-middle mdi mdi-login"></span></span><span class="unit-body"><span>Login/Register</span></span></button>
            </div>

            <div class="rd-navbar-popup bg-gray-12" id="navbar-login-register">
                <!-- Bootstrap tabs-->

                <div class="tabs-custom tabs-horizontal tabs-line" id="navbar-tabs">
                    <!-- Nav tabs-->

                    <ul class="nav nav-tabs">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#navbar-tabs-1" data-toggle="tab">Login</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#navbar-tabs-2" data-toggle="tab">Register</a></li>
                    </ul>
                    <!-- Tab panes-->
                    <div class="tab-content">
                            @include('client.layout.login')
                            <div class="tab-pane fade" id="navbar-tabs-2">

                                <form class="rd-form form-1" action="client/home/home-register" method="POST">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="form-wrap">
                                        <input class="form-input" id="register-name" type="text" name="fullname" data-constraints="@Required">
                                        <label class="form-label" for="register-name">Username</label>
                                    </div>
                                    <div class="form-wrap">
                                        <input class="form-input" id="register-email" type="email" name="email" data-constraints="@Email @Required">
                                        <label class="form-label" for="register-email">E-mail</label>
                                    </div>
                                    <div class="form-wrap">
                                        <input class="form-input" id="register-password" type="password" name="password" data-constraints="@Required">
                                        <label class="form-label" for="register-password">Password</label>
                                    </div>
                                    <div class="form-wrap">
                                        <input class="form-input" id="register-password-confirm" type="password" name="confirmPassword" data-constraints="@Required">
                                        <label class="form-label" for="register-password-confirm">Confirm Password</label>
                                    </div>
                                    <div class="form-wrap">
                                        <input class="form-input" id="register-password-confirm" type="password" name="idRole" value="3" style="display: none" data-constraints="@Required">

                                    </div>
                                    <div class="form-wrap">
                                        <button class="button button-sm button-primary button-block" type="submit">Create an Account</button>
                                    </div>
                                    <div class="form-wrap">
                                        <div class="text-decoration-lines"><span class="text-decoration-lines-content">or enter with</span></div>
                                    </div>
                                    <div class="form-wrap">
                                        <div class="button-group"><a class="button button-facebook button-icon button-icon-only" href="#" aria-label="Facebook"><span class="icon mdi mdi mdi-facebook"></span></a><a class="button button-twitter button-icon button-icon-only" href="#" aria-label="Twitter"><span class="icon mdi mdi-twitter"></span></a><a class="button button-google button-icon button-icon-only" href="#" aria-label="Google+"><span class="icon mdi mdi-google"></span></a></div>
                                    </div>
                                </form>
                            </div>
                    </div>

                </div>

            </div>

        </div>
        @else

            <span class="unit-left"><span></span></span><span class="unit-body"><span><a>Welcome: {{$user_success->fullname}}</a> <a>|</a>
            <a class="icon text-middle mdi mdi-login" href="client/home/home-logout">Log out</a></span>
        @endif
    </div>
</div>
