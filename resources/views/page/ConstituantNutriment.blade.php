@extends('layout.base')


@section('content')

<section class="pt-3" style="background: #fff">
    <div class="">
        <h4 class="h4 mb-0 text-primary mb-3" style="font-family: 'Trebuchet MS'"><b>Gestions des Composants et Nutriments</b></h4>
        <p style="font-family:'Trebuchet MS'; color:black;">
            Cette page établit la relation entre les composants et leurs nutriments,
            ainsi que la quantité de chaque nutriment dans un composant donné.
        </p>
    </div>


        <div class="card-body p-0 mt-5">
            <div class="row mx-auto text-center">
                <div class="col-sm mb-3">
                    <div class="card h-100 shadow mb-4" style="font-family: 'Trebuchet MS';color:black;">
                        <div class="card-header py-3 text-center">
                            <h6 class="m-0 font-weight-bold">Enregistrement des Composants-Nutriments</h6>
                        </div>
                        <div class="card-body">
                            <div class="pt-4">
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <div class="form-group row">
                                                <div class="col-sm-5 mb-3 mb-sm-0">
                                                    <label for="libelle" class="bg-light form-control text-center" style="color:black;">L'Aliment</label>
                                                </div>
                                                <div class="col-sm-7">
                                                    <select name="" class="form-control custom-select">
                                                        <option value="">Patate douce</option>
                                                        <option value="">Pomme de terre</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <div class="form-group row">
                                                <div class="col-sm-5 mb-3 mb-sm-0">
                                                    <label for="libelle" class="bg-light form-control text-center" style="color:black;">Composant</label>
                                                </div>
                                                <div class="col-sm-7">
                                                    <select name="" class="form-control custom-select">
                                                        <option value="">Beurre</option>
                                                        <option value="">Huile</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="composants-container">
                                        <div class="composant-entry">
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <div class="form-group row">
                                                        <div class="col-sm-5 mb-3 mb-sm-0">
                                                            <label for="libelle" class="bg-light form-control text-center" style="color:black;">Nutriments:</label>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <select name="" class="form-control custom-select">
                                                                <option value="">Proteine</option>
                                                                <option value="">Glucide</option>
                                                                <option value="">Lipide</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 mb-2 mb-sm-0">
                                                    <div class="form-group row">
                                                        <div class="col-sm-5 mb-3 mb-sm-0">
                                                            <label for="libelle" class="bg-light form-control text-center" style="color:black;">Quantité (g):</label>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <input type="number" class="form-control form-control-user"  name="quantity" min="0" step="0.01">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <button type="button" class="btn btn-user  btn-danger btn-block" onclick="removeComposant(this)">Supprimer</button>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <button type="button" class="btn btn-secondary btn-user btn-block" onclick="addComposantEntry()">Ajouter un Nutriment</button>
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
            </div>



        </div>

</section>





<script>
    let composantIndex = 1;

    function addComposantEntry() {
        const container = document.getElementById('composants-container');
        const newEntry = document.createElement('div');
        newEntry.className = 'composant-entry';
        newEntry.innerHTML = `
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="form-group row">
                        <div class="col-sm-5 mb-3 mb-sm-0">
                            <label for="libelle" class="bg-light form-control text-center" style="color:black;">Nutriments:</label>
                        </div>
                        <div class="col-sm-7">
                            <select name="" class="form-control custom-select">
                                <option value="">Proteine</option>
                                <option value="">Glucide</option>
                                 <option value="">Lipide</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 mb-2 mb-sm-0">
                    <div class="form-group row">
                        <div class="col-sm-5 mb-3 mb-sm-0">
                            <label for="libelle" class="bg-light form-control text-center" style="color:black;">Quantité (g):</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="number" class="form-control form-control-user"  name="quantity" min="0" step="0.01">
                        </div>
                        <div class="col-sm-4">
                            <button type="button" class="btn btn-user  btn-danger btn-block" onclick="removeComposant(this)">Supprimer</button>
                        </div>
                    </div>
                </div>
             </div>
        `;
        container.appendChild(newEntry);
        composantIndex++;
    }

    function removeComposant(button) {
        const entry = button.closest('.composant-entry');
        entry.remove();
    }
</script>

@endsection



