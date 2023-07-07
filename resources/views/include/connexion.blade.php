
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body {
            padding: auto;
            justify-content: center;
            background-image: url("image3.jpg ");
            width: "100%";
            height: "100%";
            background-repeat: no-repeat;
            /*
                background-position: center;*/
            background-size: cover;

        }

        form {
            max-width: 600px;
            margin: auto;
            background: #6c757d;
            padding: 30px;
            width: 500px;
            border: 2px solid #CCC;
        }

        h2 {
            text-align: center;
            margin-bottom: 40px;
        }
    </style>
    <form action="{{ route('traitement') }}" method="post">
        <h2 class="card-title font-weight-bold mb-1">Bienvenue! &#x1F44B;</h2>
        <hr>
        <div class="border-radius container">
            <div>
                <label for="login" class="form-label">Login</label>
                <input class="form-control" type="text" id="login" required><br>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label mb-3">Password</label>
                <input class="form-control" type="password" id="password" required><br>
            </div>
            <div div class="custom-control custom-checkbox">
                <input class="custom-control-input" id="remember-me" type="checkbox" tabindex="3" required />
                <label class="custom-control-label mt-4 fw-bold" for="remember-me">Se rappeler de moi</label>
            </div>
            <center><a href="">Mot de passe oublié ?</a> </center>
            <center><button type="submit" class="btn btn-primary">Log in</button></center><br>
            Cliquez sur le boutton ci-dessous si vous n'avez pas encore un compte.

            <center><a href="{{ route('inscription') }}" type="button" class="btn btn-success"> Create an Account</a>
            </center>



        </div>
    </form>
