<div class="sidebar" data-color="azure" data-background-color="white" data-image="{{url('image/sidebar.jpg')}}">
    <div class="logo">
        <a href="http://subarkah.kuy.web.id" class="simple-text logo-normal">
            <img src="{{ url('image/logo.png') }}" width="36.4px" />
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{Request::is('dashboard') ? 'active' : ''}}">
                <a class="nav-link" href="{{ url('dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{Request::is('storage') ? 'active' : ''}}">
                <a class="nav-link" href="{{ url('storage') }}">
                    <i class="material-icons">store</i>
                    <p>Storage</p>
                </a>
            </li>
            <li class="nav-item {{Request::is('account') ? 'active' : ''}}">
                <a class="nav-link" href="/admin">
                    <i class="material-icons">supervisor_account</i>
                    <p>Account</p>
                </a>
            </li>
        </ul>
    </div>
</div>
