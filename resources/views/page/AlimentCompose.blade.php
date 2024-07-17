<style>
    .scrollable-container {
        height: 100px;
        overflow-y: auto; /* Activer la barre de défilement verticale */
        font-size: 13px;
    }
    .mycontainer{
        border: 1px solid #ccc;
        border-radius: 10px;
    }
    .scrollable-container table tr{
        cursor: pointer;
    }
    .latable{
        overflow-x: auto; /* Activer la barre de défilement verticale */
        font-size: 13px;
    }
    .col-nom {
         width: 200px; /* Ajustez cette valeur selon vos besoins */
    }
</style>
@extends('layout.base')


@section('content')

<section class="pt-3" style="background: #fff">
    <div class="">
        <h4 class="h4 mb-0 text-primary mb-3" style="font-family: 'Trebuchet MS'"><b>Gestions des Aliments Composés</b></h4>
    </div>


        <div class="card-body p-0 mt-5">
            <div class="row mx-auto text-center">
                <div class="col-sm mb-3">
                    <div class="card h-100 shadow mb-4" style="font-family: 'Trebuchet MS';color:black;">
                        <div class="card-header py-3 text-center">
                            <h6 class="m-0 font-weight-bold">Modification d'un aliment composé</h6>
                        </div>
                        <div class="card-body">
                            <div class="pt-4">
                                    <div class="form-group row">
                                        <div class="col-sm-4 mb-3">
                                            <label for="libelle" style="color:black;">Catégories</label>
                                            <select name="" class="form-control custom-select">
                                                <option value="">Abat-Charcuterie</option>
                                                <option value="">Fruits</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4 ">
                                            <label for="libelle" style="color:black;">Aliments</label>
                                            <div class="mycontainer">
                                                <div class="scrollable-container me-1">
                                                    <table class="table table-striped">
                                                        <tbody>
                                                            <tr>
                                                                <td>Boudin</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Cervelle</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Foie de gemisse</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Foie de veau</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="details mt-5" style="border:1px solid #ccc; border-radius:10px;" >
                                        <div class="m-2 text-primary"><h6 class="font-weight-bold">Liste des éléments composant l'aliment Patate douce</h6></div>
                                        <div class="latable m-2" >
                                            <table class="table table-bordered m-1 p-2" style="font-size: 14px">

                                                <thead>
                                                  <tr style="color: black;">
                                                    <th scope="col" class="col-nom">Nom</th>
                                                    <th scope="col">Qté(g)</th>
                                                    <th scope="col">Prot.An.</th>
                                                    <th scope="col">Prot.Vég.</th>
                                                    <th scope="col">Gluc.Suc.</th>
                                                    <th scope="col">Gluc.Amid.</th>
                                                    <th scope="col">Lip.An.</th>
                                                    <th scope="col">Lip.Vég.</th>
                                                    <th scope="col">A.G.S.</th>
                                                    <th scope="col">A.G.M.</th>
                                                    <th scope="col">A.G.P.</th>
                                                    <th scope="col">Chol.</th>
                                                  </tr>
                                                </thead>
                                                <tbody >
                                                  <tr>
                                                    <td class="col-nom">Beurre</td>
                                                    <td>30</td>
                                                    <td>0.210</td>
                                                    <td>0.000</td>
                                                    <td>0.120</td>
                                                    <td>0.000</td>
                                                    <td>24.90</td>
                                                    <td>0.000</td>
                                                    <td>0.100</td>
                                                    <td>0.020</td>
                                                    <td>0.000</td>
                                                    <td>0.210</td>
                                                  </tr>
                                                  <tr>
                                                    <td class="col-nom">Farine de blé</td>
                                                    <td>30</td>
                                                    <td>0.210</td>
                                                    <td>0.000</td>
                                                    <td>0.120</td>
                                                    <td>0.000</td>
                                                    <td>24.90</td>
                                                    <td>0.000</td>
                                                    <td>0.100</td>
                                                    <td>0.020</td>
                                                    <td>0.000</td>
                                                    <td>0.210</td>
                                                  </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="details mt-5" style="border:1px solid #ccc; border-radius:10px;" >
                                        <div class="row p-3">
                                            <div class="col-sm-2">
                                                <h5 class="text-primary font-weight-bold">Totaux</h5>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="form-group row">
                                                    <div class="col-sm-2">
                                                        <span>Qté 615g</span><br>
                                                        <span>728 kcal</span>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <span>P.A. 28g</span><br>
                                                        <span>P.V. 4g</span>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <span>G.S. 26g</span><br>
                                                        <span>G.A. 23g</span>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <span>L.A. 44g</span><br>
                                                        <span>L.V. 0g</span>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <span>A.G.S. 28g</span><br>
                                                        <span>A.G.M. 13g</span>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <span>A.G.P. 1g</span><br>
                                                        <span>Chol. 154g</span>
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



        </div>

</section>


@endsection



