<style>
    .taille{
          font-size:17px;
          color: white;
          font-family: 'Trebuchet MS';
          font-weight: bold;
    }
    .side-icon:hover{
        background-color: rgb(6, 142, 232);
        border-radius:8px;
        margin-left: 0.3rem;
        transition: all 0.3s ease;

    }

</style>
<ul class="navbar-nav t sidebar sidebar-dark accordion mt-5 pt-4" id="accordionSidebar" style="background-color: var(--sidebar)">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="side-icon nav-link" href="/home" >
            <img src="{{ asset('assets/img/home.png') }}" alt="" style="width: 30px;height: 26px; padding-right: 5px;">
            <span class="taille"><b>Accueil</b></span></a>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading" style="color:white;">
            GESTION
    </div>

    <!-- Nav Item - Pages Employé Menu -->


    <li class="nav-item">
        <a class="side-icon nav-link" href="/categorie" >
            <img src="{{ asset('assets/img/categorie.png') }}" alt="" style="width: 30px;height: 26px; padding-right: 5px;">
            <span class="taille"><b>Catégories</b></span></a>
        </a>
    </li>

    <li class="nav-item">
        <a class="side-icon nav-link" href="aliment" >
            <img src="{{ asset('assets/img/aliments1.png') }}" alt="" style="width: 30px;height: 26px; padding-right: 5px;">
            <span class="taille"><b>Aliments</b></span></a>
        </a>
    </li>

    <li class="nav-item">
        <a class="side-icon nav-link" href="constituant" >
            <img src="{{ asset('assets/img/composants.png') }}" alt="" style="width: 30px;height: 26px; padding-right: 5px;">
            <span class="taille"><b>Constituants</b></span></a>
        </a>
    </li>

    <li class="nav-item">
        <a class="side-icon nav-link" href="nutriment" >
            <img src="{{ asset('assets/img/nutrition.png') }}" alt="" style="width: 30px;height: 26px; padding-right: 5px;">
            <span class="taille"><b>Nutriments</b></span></a>
        </a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading" style="color:white;">
        SETTINGS
    </div>

    <!-- Nav Item - Pages Congés Menu -->
    <li class="nav-item">
        <a class="side-icon nav-link" href="nutriment" >
            <img src="{{ asset('assets/img/para.png') }}" alt="" style="width: 30px;height: 26px; padding-right: 5px;">
            <span class="taille"><b>Paramètre</b></span></a>
        </a>
    </li>







    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
