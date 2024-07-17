@extends('layout.base')


@section('content')

<section class="pt-3" style="background: #fff">
    <div class="d-sm-flex align-items-center justify-content-between">
        <h4 class="h4 text-primary mb-3" style="font-family: 'Trebuchet MS'"><b>Gestion des Nutriments</b></h4>
    </div>

    <div class="card-body p-0 mt-5">
        <div class="row mx-auto text-center">
            <div class="col-sm-5 mb-3">
                <div class="card h-100 shadow mb-4" style="font-family: 'Trebuchet MS';color:black;">
                    <div class="card-header py-3 text-center">
                        <h6 class="m-0 font-weight-bold text-primary">Enregistrement des Nutriments</h6>
                    </div>
                    <div class="card-body">
                        <div class="pt-4">
                            <form method="POST" enctype="multipart/form-data">

                                <div class="form-group row">
                                    <div class="col-sm-5 mb-3 mb-sm-0">
                                        <label for="libelle" style="color:black;" class="form-control bg-light  text-center">Nutriment</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" name="libelle" class="form-control form-control-user" style="font-size:18px;color:black;">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-8 mb-3 mb-sm-0">
                                        <label for="libelle" style="color:black;" class="form-control bg-light  text-center">Val Energetique(Kcal)</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-user"  name="quantity" min="0" step="0.01">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="reset" value="Annuler" class="btn btn-secondary btn-user btn-block">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="submit" class="btn btn-user btn-block" name="envoyer" value="Sauver" style="background-color: rgb(5, 141, 159);color: black;">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-7 mb-3">
                    <div class="card h-100 shadow mb-4" style="font-family: 'Trebuchet MS';color:black; font-size:13px;">
                        <div class="card-header py-3 text-center">
                            <h6 class="m-0 font-weight-bold text-primary">Liste des Nutriments</h6>
                        </div>
                        <div class="card-body">
                            <div >
                                <table class="table table-striped mt-3" id="dataTable" width="100%">
                                    <colgroup>
                                        <col width="10%">
                                        <col width="50%">
                                        <col width="40%">
                                    </colgroup>
                                    <thead style="font-family: 'Patua One';">
                                        <tr>
                                            <th>#</th>
                                            <th>Libellé</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>



    </div>
</section>

@endsection



