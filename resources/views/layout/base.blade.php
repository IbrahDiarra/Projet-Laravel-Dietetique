<!DOCTYPE html>
<html lang="en">

    {{-- le header --}}
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SmartDiet</title>

        <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    </head>

    {{-- le style --}}
    <style>
        .txt{
            color: white;
            font-family: 'Comic Sans MS';
        }
        .txte{
            color: rgb(5, 5, 5);
            font-family: 'Rockwell';
        }
        :root {
             --sidebar: rgb(7, 122, 199);
        }
        input{
            color:black;
        }
        body{
            background: #fff;
        }
        a{
            text-decoration: none;
        }
    </style>

    {{-- le body --}}

    <body id="page-top1">

        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- NavBar -->
            <div>
                <!-- Topbar -->
                @include('composants.navbar')
                <!-- End of Topbar -->
            </div>

            <!-- Sidebar -->
            @include('composants.sidebar')
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Begin Page Contenu -->
                    <div class="container-fluid mt-5 pt-3" style="background: #fff">


                        <!-- Le contenu -->
                        <div>
                            @yield('content')
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                @include('composants.footer')
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded bg-success" href="#page-top1">
            <i class="fas fa-angle-up"></i>
        </a>
         <!-- Scroll to Top Button-->


        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:var(--sidebar)">
                        <h4 class="modal-title" id="exampleModalLabel" style="color: white;font-family: 'Gabriola';">Prêt à partir?</h4>
                        <button type="button" class="close bg-white p-2 me-1" data-dismiss="modal" aria-label="Close" style="border-radius:15px;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="font-family:'Berlin Sans FB';">Sélectionnez « Se déconnecter » ci-dessous si vous êtes prêt à mettre fin à votre session en cours.</div>
                    <div class="modal-footer" style="font-family:'Berlin Sans FB';">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                        <a class="btn btn-primary" href="logout.php">Se déconnecter</a>
                    </div>
                </div>
            </div>
        </div>
         <!-- Logout Modal-->










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
