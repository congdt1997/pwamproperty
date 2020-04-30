<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<div class="tab-pane fade show active" id="navbar-tabs-1">
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $er)
                {{$er}}<br>
            @endforeach
        </div>
    @endif
        @if(session('login_failed'))
            <div class="alert alert-danger">
                {{session('login_failed')}}
            </div>
        @endif
        <form class="rd-form form-1" action="client/home/home-login" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div id="error" style="color: red;"></div>
            <div class="form-wrap">
                <input class="form-input"  id="navbar-login-email" type="email" name="email" required data-constraints="@Email @Required">
                <label class="form-label" for="navbar-login-email">E-mail</label>
            </div>
            <div class="form-wrap">
                <input class="form-input"  id="navbar-login-password" type="password" name="password" required data-constraints="@Required">
                <label class="form-label" for="navbar-login-password">Password</label>
            </div>
            <div class="form-wrap">
                <button class="button button-sm button-primary button-block"  type="submit">Sign in</button>
            </div>
        </form>
</div>


