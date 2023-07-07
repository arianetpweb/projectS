    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <section class="order-form py-5"
        style="background-image: url('{{ asset('image/imges/paysage/inscrition.jpg') }}'); background-repeat:no-repeat;background-size:cover">
        <div class="container">
            <h2 class="merriweather text-center mb-4">Passer une commande</h2>
            <form action="traitement.php" method="post">
                <div class="row">
                    <div class="col-md-6 col-sm">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user">Nom</i></span>
                            <input type="text" class="form-control" placeholder="Votre nom">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGoupSelect01"><i class="fas fa-utesils"></i></label>
                            <select id="inputGroupSelect01" class="form-select">
                                <option selected>Choisir un menu</option>
                                <option value="">One</option>
                                <option value="">Two</option>
                                <option value="">Three</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGoupSelect01"><i
                                    class="fas fa-sort-numeric-up-alt"></i></label>
                            <select id="inputGroupSelect01" class="form-select">
                                <option selected>Nombre de personnes</option>
                                <option value="">One</option>
                                <option value="">Two</option>
                                <option value="">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Votre email">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-at">Email</i></span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Numéro de téléphone">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone "></i></span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Adresse zone Ex: Cotonou 12">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-home ">Adresse</i></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Précisez le nombre de personnes</span>
                        <input type="text" class="form-control" placeholder="Ex:.25">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">Autres informations </span>
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
            </form>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>

    </section>
