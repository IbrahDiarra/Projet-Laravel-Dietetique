<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand topbar fixed-top border-1 mb-4 d-flex p-2  shadow " style="justify-content: space-between;background-color: rgb(238, 246, 248);">

        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/" style="text-decoration: none;">
            <div class="sidebar-brand-icon">
                <img src="{{ asset('assets/img/diete1.png') }}" style="width: 50px; height: 50px;border-radius: 10px;">
            </div>
            <div class="sidebar-brand-text mx-3" style="font-family: 'Bauhaus 93';color: black"><h3>SmartDiet</h3></div>
        </a>


        <div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none h6 d-lg-inline txte" style="font-family:Berlin Sans FB; color: black;">Bienvenue, <span class="text-primary">sur notre Plateforme</span></span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="form-group row mt-5 pt-5">
        <div class="col-sm-4 mb-3 mb-sm-0"></div>
        <div class="col-sm-4 mb-3 mb-sm-0">
            <section class="login-form mt-5 shadow" style="background-color: rgb(238, 246, 248);border:1px solid #ccc; border-radius:15px;font-family: 'Trebuchet MS">
                <div class="la-form p-3" >
                    <div>
                        <h6 class="text-center mb-5">Veuillez saisir votre email et votre mot de passe pour vous connecter </h6>
                    </div>
                    <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm mb-3 mb-sm-0">
                                <label for="libelle" style="color:black;">Email</label>
                                <input type="email" class="form-control form-control-user"  name="email" required>
                            </div>

                        </div>
                        <div class="form-group row">
                            <div class="col-sm mb-3 mb-sm-0">
                                <label for="libelle" style="color:black;">Mot de Passe</label>
                                <input type="password" class="form-control form-control-user"  name="password" required >
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="reset" value="Annuler" class="btn btn-secondary btn-user btn-block">
                            </div>
                            <div class="col-sm-6">
                                <input type="submit" class="btn btn-user bg-primary btn-block" name="envoyer" value="Sauver" style="color: white;">
                            </div>
                        </div>


                    </form>
                </div>
            </section>
        </div>
        <div class="col-sm-4 mb-3 mb-sm-0"></div>

    </div>




    {{-- Les scripts --}}
    <div>
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

        <script src="{{ asset('assets/js/pagination.js') }}"></script>

        <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>

        <script src="{{ asset('assets/js/datatables-demo.js') }}"></script>
    </div>
    {{-- Les scripts --}}
</body>
</html>
