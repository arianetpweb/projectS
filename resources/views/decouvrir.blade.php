@extends('app')
<link rel="stylesheet" href="{{ asset('css/plats.css') }}">

@section('content')
    <section class="menu py-5 merriweather ">
        <div class="container">
            <div class="row">
                <h3 class="text-center merriweather">Nos variétés</h3>
                <div class="card bg-transparent text-center mb-4">
                    <div class="card-header redressed fs-4">
                        <ul class="nav nav-tabs justify-content-center card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('nos_entrees') }}">Plats disponibles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('nos_desserts') }}">Desserts</a>
                            </li>
                            <!--
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('european') }}">Mets Européens</a>
                                </li>-->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('nos_boissons') }}">Boissons</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="{{ route('african') }}"
                                    onclick="loadPage('cart.html')">Pannier</a>
                                <span class="notification" id="cart-notification">0</span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                        <div class="container-core">
                            <div class="page-content">
                                @include('mets')
                            </div>
                            <div class="col-md-4 panier">
                                <div class="cart-container" id="cart">
                                    <h2>Panier</h2>
                                    <ul id="$plat->nom"></ul>
                                    <p id="total">Total: $0</p>
                                </div>
                                <a type="submit" href="{{ route('connexion') }}" class="btn btn-success">Commander</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <script>
        function addToCart($plat - > nom, $plat - > prix) {
            var cartList = document.getElementById("$plat->nom-list");
            var totalElement = document.getElementById("total");
            var cartNotification = document.getElementById("cart-notification");

            var listItem = document.createElement("li");
            listItem.textContent = $plat - > nom + " - $" + $plat - > prix;

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
@endsection
