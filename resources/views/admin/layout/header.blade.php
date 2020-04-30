<div class="top-left">
    <div class="navbar-header">
        <a class="navbar-brand" href="./"><img src="admin_asset/images/logo.png" alt="Logo"></a>
        <a class="navbar-brand hidden" href="./"><img src="admin_asset/images/logo2.png" alt="Logo"></a>
        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
    </div>
</div>
<div class="top-right">
    <div class="header-menu">
        @if(isset($user_success))
        <div class="user-area dropdown float-right">
            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="user-avatar rounded-circle" src="admin_asset/images/upload/user/{{$user_success->image}}" alt="User Avatar">
            </a>

            <div class="user-menu dropdown-menu">
                <span><a class="nav-link" href="client/profile/detail"><i class="fa fa-user"></i>{{$user_success->fullname}}</a></span>
                <span><a class="nav-link " href="client/home/home"><i class="fa fa-share-square"></i>Back To Client</a></span>
                <span><a class="nav-link " href="client/home/home-logout"><i class="fa fa-sign-out"></i>Log out</a></span>
            </div>
        </div>
        @endif
    </div>
</div>

