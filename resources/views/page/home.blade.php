@extends('layout.base')


@section('content')

    <section class="pt-3" style="background: #fff">
        <!-- Content Row Card Example -->
        <div class="d-sm-flex align-items-center justify-content-between mx-4 mb-2 mt-0">
            <h1 class="h1 mb-0 text-gray-800" style="font-family: 'Gabriola';color: black"><b>Accueil</b></h1>
        </div>
        <div class="mx-2 row card-body" style="">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card shadow h-100 py-2" style="border-left: 4px solid #0087DA;">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1 txt" style="color: #636363">
                                    Constitutions
                                </div>
                            </div>
                            <div class="col-auto">

                                    <!-- Button trigger modal -->
                                <button type="button" class="btn" data-toggle="modal" data-target="#modal-details">
                                    <img src="{{ asset('assets/img/alim.png') }}" alt="" style="width: 40px;height: 40px;">
                                </button>

                                <div class="modal fade" id="modal-details" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color:var(--sidebar)">
                                                <h3 class="modal-title" id="exampleModalLabel" style="color: white;font-family: 'Gabriola';">
                                                    <img src="{{ asset('assets/img/alim.png') }}" alt="" style="width: 40px;height: 40px;">
                                                    Détails
                                                </h3>
                                            </div>

                                            <div class="modal-body" style="font-family:'Constantia'">
                                                <div class="mb-3">
                                                    <button type="button"class="btn btn-secondary btn-user btn-block"><a class="nav-link" href="/aliments">Aliments et Composants</a></button>
                                                </div>
                                                <div class="mb-3">
                                                    <button type="button"class="btn btn-secondary btn-user btn-block"><a class="nav-link" href="/nutriments">Composants et Nutriments</a></button>
                                                </div>
                                            </div>
                                            <div class="modal-footer bg-light">
                                                <button type="button" class="btn " data-dismiss="modal" style="font-family:'Berlin Sans FB';background-color:var(--sidebar); color:white;">Fermer</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1 txt" style="color: #636363">Gestion
                                </div>
                            </div>
                            <div class="col-auto">


                                <!-- Button trigger modal -->
                                <button type="button" class="btn">
                                    <a class="nav-link" href="/alimcompose"><i class='bx bxs-help-circle bx-tada bx-md'style="color:rgb(5, 141, 159)"></i></a>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1 txt" style="color: #636363">
                                    Contact</div>
                            </div>
                            <div class="col-auto">

                                <!-- Button trigger modal -->
                            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal4">
                            <i class='bx bxs-phone bx-tada bx-md'style="color:orange"></i>
                                </button>
                                        <!-- Modal -->
                                <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color:var(--sidebar)">
                                                <h3 class="modal-title" id="exampleModalLabel" style="color: white;font-family: 'Gabriola';"><i class='bx bxs-phone bx-tada bx-md'style="color:white"></i> Support technique</h3>

                                            </div>

                                            <div class="modal-body" style="font-family:'Constantia'">
                                                <div class="row mx-2">
                                                    <div class="col-4">
                                                        <span class= "text-lg text-uppercase" style="color : var(--sidebar);font-family: 'Bauhaus 93';">Nom :</span>
                                                    </div>
                                                    <div class="col-8">
                                                        <span class= "" style="">Team</span>
                                                    </div>
                                                </div>

                                                <div class="row mx-2">
                                                    <div class="col-4">
                                                        <span class= "text-lg text-uppercase" style="color : var(--sidebar);font-family: 'Bauhaus 93';">Telephone :</span>
                                                    </div>
                                                    <div class="col-8">
                                                    <span class= "" style="">+225 05 45 88 55 12</span>
                                                    </div>
                                                </div>

                                                <div class="row mx-2">
                                                    <div class="col-4">
                                                        <span class= "text-lg text-uppercase" style="color : var(--sidebar);font-family: 'Bauhaus 93';">Email :</span>
                                                    </div>
                                                    <div class="col-8">
                                                        <span class= "" style="">ibrahdiarra@gmail.com</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer bg-light">
                                                <button type="button" class="btn " data-dismiss="modal" style="font-family:'Berlin Sans FB';background-color:var(--sidebar); color:white;">Fermer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->
        <style>

        .newr {
        height: 50vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        align-content: center;

        }

        .nw {
            background-image: linear-gradient(to left, #636363, rgb(5, 72, 124));
        -webkit-background-clip: text; /* Pour les navigateurs basés sur WebKit */
        -moz-background-clip: text; /* Pour les navigateurs basés sur Gecko */
        background-clip: text;
        color: transparent;
        font-size: 143px;
        }


                </style>


        <div class="row newr">
            <div class="col-3"></div>
            <div class="col-6 ml-0 justify-content-center">
                <h3 class="nw font-weight-bold" style="font-family: 'Gabriola';">SmartDiet</h3>
            </div>
            <div class="col-3"></div>

        </div>




    </section>

@endsection



