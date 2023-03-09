<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <a class="navbar-brand" href="">
                <b>
                    <img src="/assets/logo-white.svg" />
                </b>
                <span class="hidden-xs ml-1"><span class="font-bold">Poldea</span></span>
            </a>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav ml-md-auto">
                <li class="nav-item dropdown u-pro">
                    <a
                        class="nav-link dropdown-toggle profile-pic"
                        href=""
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                            <img
                                src="/assets/images/default-user.png"
                                alt="profile picture"
                                class=""
                            />
                             <span class="hidden-md-down">
                                {{ auth()->user()->username }} &nbsp;
                                <i class="fa fa-angle-down"></i>
                            </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <span class="dropdown-item">{{ auth()->user()->getRoleNames()->first() }}</span>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <a
                            href="javascript:void(0)"
                            class="dropdown-item"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                        >
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
