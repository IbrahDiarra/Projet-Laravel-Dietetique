<nav class="navbar navbar-expand topbar fixed-top border-1 mb-4 d-flex p-2  shadow " style="justify-content: space-between;background-color: rgb(238, 246, 248);">
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home" style="text-decoration: none;">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('assets/img/diete1.png') }}" style="width: 50px; height: 50px;border-radius: 10px;">
        </div>
        <div class="sidebar-brand-text mx-3" style="font-family: 'Bauhaus 93';color: black"><h3>SmartDiet</h3></div>
    </a>

    <!-- Topbar Search -->
    <div>
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-1 small" placeholder="Rechercher ici..."
                    aria-label="Search" aria-describedby="basic-addon2" style="outline: none;">
                <div class="input-group-append">
                    <button class="btn" type="button" style="background-color:var(--sidebar);">
                        <i class="bx bx-search bx-fw" style="color:white"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Topbar Navbar -->
    <div>
        <ul class="navbar-nav ml-auto">


            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell bx-sm" style="color:rgb(74, 1, 81)"></i>
                    <span class="badge badge-primary badge-counter">0</span>
                </a>

                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">Alerts Center</h6>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-envelope bx-sm" style="color:rgb(74, 1, 81)"></i>
                    <span class="badge badge-primary badge-counter">0</span>
                </a>

                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">
                        Message Center
                    </h6>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - Admin Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none h6 d-lg-inline txte" style="font-family:Berlin Sans FB; color: black;">Bienvenue, <span class="text-primary">Mr</span></span>
                    <img class="img-profile"
                        src="../assets/img/profile.svg" style="width: 40px; height: 40px;border-radius: 15px;">
                </a>
                <!-- Dropdown - Admin Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown" style="font-family:'Berlin Sans FB';">
                    <a class="dropdown-item h6" href="#">
                        <i class="bx bx-user bx-fw mr-2 "></i>
                        Profile
                    </a>
                    <a class="dropdown-item h6" href="#">
                        <i class="bx bx-cog bx-fw mr-2 "></i>
                        Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item h6" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="bx bx-log-out bx-fw mr-2"></i>
                        Déconnexion
                    </a>
                </div>
            </li>

        </ul>
    </div>
</nav>
