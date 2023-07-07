@extends('app')
@section('title')
    Mets africains
@endsection
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<style>
    .playing {
        display: flex;
        flex-direction: row;
    }

    .container {
        padding: 20px;
        height: 100vh;
        width: 70%;
        /*
      overflow-y: scroll;*/
    }

    .container .card:hover {
        transform: scale(1.1);
    }

    .container .card {
        border-color: red;
    }

    .card-container{
        width: 30%;

    }
    .banner {
        width: 100%;
        max-width: 100%;
        height: auto;
        opacity: 0;
        transform: scale(0.8);
        transition: opacity 0.5s, transform 0.5s;
    }

    .zoom-in {
        opacity: 1;
        transform: scale(1);
    }
</style>
@section('content')
    <section class="banner d-flex justify-content-center align-items-center pt-5"
        style="background-image: url('{{ asset('image/imges/Nouveau dossier/vente-nourriture-Africaine.jpg') }}'); background-repeat:no-repeat; background-size:cover">
        <div class="container my-5 py-5">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <h1 class="text-capitalize py-3 redressed banner-desc">Lorem ipsum amet consectetur adipisicing <br>
                        elit. Quas sapiente fuga itaque!</h1>
                    <p>
                        <a class="btn btn-order btn-lg me-5 rounded-0 merriweather" href="{{ route('commande') }}">Commander
                            maintenant</a>
                        <a class="btn btn-outline-info btn-lg rounded-0 merriweather"
                            href="{{ route('reservation') }}">Réserver</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="playing">
        <div class="container">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <p>
                                <b>
                                    <u>
                                        <h4 class="card-title" style="color: rgb(47, 64, 141); text-align:center;">MENU</h4>
                                    </u></b>
                                @include('mets')

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 panier">
                <div class="cart-container" id="cart">
                    <h2>Panier</h2>
                    <ul id="cart-list"></ul>
                    <p id="total">Total: $0</p>
                </div>
                <a type="submit" href="login.html" class="btn btn-success">Commander</a>
            </div>

        </div>
    </div>

    <script>
        // Fonction pour ajouter un élément au panier
        function addToCart(item, price) {
            var cartList = document.getElementById("cart-list");
            var totalElement = document.getElementById("total");
            var cartNotification = document.getElementById("cart-notification");

            var listItem = document.createElement("li");
            listItem.textContent = item + " - $" + price;

            cartList.appendChild(listItem);

            var currentTotal = parseFloat(totalElement.textContent.split("$")[1]);
            var newTotal = currentTotal + price;
            totalElement.textContent = "Total: $" + newTotal.toFixed(2);

            // Mise à jour de la notification du panier
            var currentCount = parseInt(cartNotification.textContent);
            cartNotification.textContent = currentCount + 1;
            cartNotification.style.display = "block";
        }
    </script>


    <script src="{{ asset('js/java.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
@endsection
