<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .nav-icon .btn {
            display: inline-block;
            text-transform: capitalize;
            font-size: 16px;
            font-weight: 500;
            border: 2px solid #CC3333;
            padding: 10px 30px;
            background-color: #CC3333;
            border-radius: 30px;
            color: #fff;
            letter-spacing: 1px;
            margin-right: 15px;
            transition: all .42s ease;
        }

        .nav-icon .btn:hover {
            transform: scale(1.1);
        }

        .nav-icon .fa {
            font-size: 35px;
            color: white;
            z-index: 10001;
            cursor: pointer;
            display: none;
        }
    </style>
</head>

<body>
    <header>
        <nav class="cc-navbar navbar navbar-expand-lg position-fixed navbar-dark w-100">
            <div class="container-fluid">
                <a class="navbar-brand text-uppercase  fw-bolder ms-4 py-3" href="#">Lorem </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item pe-4">
                            <a class="nav-link active" aria-current="page"
                                href="{{ route('home') }}">Acceuil</a>
                        </li>
                            <a class="btn btn-order rounded-0 " href="{{ route('decouvrire') }}">Passer la commande</a>
                        </li>
                        <li>
                            <a class="btn btn-outline-info btn-lg rounded-0 merriweather"
                            href="{{ route('reservation') }}">Réserver</a>
                        </li>
                        <div class="nav-icon">
                            <a href="" class="btn">Contact</a>
                            <i class="fa fa-bars " aria-hidden="true"></i>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <script src="{{ asset('js/java.js') }}"></script>

</body>

</html>
