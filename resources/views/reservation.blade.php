@extends('app')
@section('title')
Réservation
@endsection

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <section class="order-form py-5" style="background-image: url('{{ asset('image/img/image10.jpg') }}'); background-repeat:no-repeat;background-size:cover">
        <div class="container">
            <form action="traitement.php" method="post">
                <div class="row">
                    <div class="col-md-6 col-sm">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i>Nom</span>
                            <input type="text" class="form-control" placeholder="Votre nom">
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGoupSelect01"><i
                                    class="fas fa-sort-numeric-up-alt"></i></label>
                            <input type="number" class="form-control" placeholder="Nombre de personnes">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Votre email">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i>Email</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Numéro de téléphone">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone "></i>Contact</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Date de votre réservation">
                            <span class="input-group-text" id="basic-addon1">Date de réservation</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group">
                        <span class="input-group-text">Autres informations </span>
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
            </form>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>

    </section>
@endsection
