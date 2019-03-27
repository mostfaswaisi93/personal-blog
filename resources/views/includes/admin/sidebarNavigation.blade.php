<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item nav-dropdown"><br>
                User
            </li>
            <li class="nav-item">
                <a href="{{ route('userDashboard') }}" class="nav-link {{ Route::currentRouteName() == 'userDashboard' ? 'active' : ''}}">
                        <i class="icon icon-speedometer"></i> Dashboard
                    </a>
            </li>
            <li class="nav-item nav-dropdown">
                <a href="{{ route('userComments') }}" class="nav-link {{ Route::currentRouteName() == 'userComments' ? 'active' : ''}}">
                        <i class="icon icon-book-open"></i> Comments
                    </a>
            </li>
            <!--=============   AUTHER ROUTES STARTS   =============-->
            @if(Auth::user()->auther == true)
            <li class="nav-item nav-dropdown">
                Auther
            </li>
            <li class="nav-item">
                <a href="{{ route('autherDashboard') }}" class="nav-link {{ Route::currentRouteName() == 'autherDashboard' ? 'active' : ''}}">
                        <i class="icon icon-speedometer"></i> Dashboard
                    </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('autherPosts') }}" class="nav-link {{ Route::currentRouteName() == 'autherPosts' ? 'active' : ''}}">
                        <i class="icon icon-paper-clip"></i> Posts
                    </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('autherComments') }}" class="nav-link {{ Route::currentRouteName() == 'autherComments' ? 'active' : ''}}">
                        <i class="icon icon-grid"></i> Comments
                    </a>
            </li>
            @endif
            <!--=============   AUTHER ROUTES ENDS   =============-->
            <!--=============   ADMIN ROUTES STARTS   =============-->
            @if(Auth::user()->admin == true)

            <li class="nav-item">
                Admin
            </li>
            <li class="nav-item">
                <a href="{{ route('adminDashboard') }}" class="nav-link {{ Route::currentRouteName() == 'adminDashboard' ? 'active' : ''}}">
                        <i class="icon icon-speedometer"></i> Dashboard
                    </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('adminPosts') }}" class="nav-link {{ Route::currentRouteName() == 'adminPosts' ? 'active' : ''}}">
                        <i class="icon icon-paper-clip"></i> Posts
                    </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('adminComments') }}" class="nav-link {{ Route::currentRouteName() == 'adminComments' ? 'active' : ''}}">
                        <i class="icon icon-grid"></i> Comments
                    </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('adminUsers') }}" class="nav-link {{ Route::currentRouteName() == 'adminUsers' ? 'active' : ''}}">
                        <i class="icon icon-user"></i> Users
                    </a>
            </li>

            @endif
            <!--=============   ADMIN ROUTES ENDS   =============-->
        </ul>
    </nav>
</div>



