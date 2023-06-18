<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <i class='bx bx-home'></i>
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/stock*') ? 'active' : '' }}" href="/dashboard/stock">
                    <i class='bx bx-box'></i>
                    Stock
                </a>
            </li>
        </ul>
    </div>
</nav>
