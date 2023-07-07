<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <center>

        <h3>Veuillez remplir ce formulaire !</h3>

        @if ($error = Session::get('error'))
            <span class="alert alert-danger">
                {{ $error }}
            </span>
        @endif

        @if ($success = Session::get('success'))
            <span class="alert alert-success">
                {{ $success }}
            </span>
        @endif
    </center>

    <form action="" method="post">
        @csrf
        <div class="container _text-center">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group mb-2">
                        <label class="form-label" for="matricule">Matricule</label>
                        <input class="form-control @error('matricule') is-invalid @enderror" type="text"
                            name="matricule" value="{{ old('matricule') }}">
                        @error('matricule')
                            <i class="text-sm text-danger">{{ $message }}</i>
                        @enderror
                    </div>
                    <label class="form-label" for="nom">Nom Prénom</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                        <input class="form-control @error('nom') is-invalid @enderror" name="nom" type="text"
                            placeholder="Entrez vos Nom et Prénoms" value="{{ old('nom') }}">
                    </div>
                    @error('nom')
                        <i class="text-sm text-danger">{{ $message }}</i>
                    @enderror

                    <label class="form-label d-block" for="contact">Contact</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone "></i></span>
                        <input class="form-control @error('contact') is-invalid @enderror" type="text" name="contact"
                            placeholder="Numéro de téléphone" value="{{ old('contact') }}">
                        @error('contact')
                            <i class="text-sm text-danger">{{ $message }}</i>
                        @enderror
                    </div>
                    <label for="adresse">Adresse</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-home "></i></span>
                        <input type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse"
                            placeholder="Adresse zone Ex: Cotonou 12" value="{{ old('adresse') }}">
                    </div>
                    @error('adresse')
                        <i class="text-sm text-danger">{{ $message }}</i>
                    @enderror
                    <label class="form-label" for="email">Adresse Electronique</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                        <input class="form-control @error('email') is-invalid @enderror" type="text" name="email"
                            placeholder="name@domaine.com" value="{{ old('email') }}">
                        @error('email')
                            <i class="text-sm text-danger">{{ $message }}</i>
                        @enderror
                    </div><br>
                    <fieldset class="fieldset">
                        <legend class="alert alert-warning "> EDUCATION</legend>
                        <div class="form-group">
                            <label class="form-label" for="lieu">Structure/Ecole</label>
                            <input class="form-control @error('lieu') is-invalid @enderror" type="text"
                                name="lieu"
                                placeholder="Les entrprises ou écoles dans lesquelles vous avez eu vos diplmômes"
                                value="{{ old('lieu') }}">
                            @error('lieu')
                                <i class="text-sm text-danger">{{ $message }}</i>
                            @enderror
                        </div><br>

                        <div class="form-group">
                            <label class="form-label" for="diplome">Diplômes</label>
                            <input class="form-control  @error('diplome') is-invalid @enderror" type="text"
                                name="diplome" value="{{ old('diplome') }}">
                            @error('diplome')
                                <i class="text-sm text-danger">{{ $message }}</i>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="annee">Année d'obtention des diplômes</label>
                            <input class="form-control @error('annee') is-invalid @enderror" type="text"
                                name="annee" value="{{ old('annee') }}">
                            @error('annee')
                                <i class="text-sm text-danger">{{ $message }}</i>
                            @enderror
                        </div><br>

                    </fieldset>
                    <div class="form-group">
                        <label class="form-label" for="information">Compétences</label>
                        <input class="form-control @error('information') is-invalid @enderror" type="text"
                            name="information"
                            placeholder="Quelles sont les connaissances que vous avez dans votre domaine?"
                            value="{{ old('information') }}"><br><br>
                        @error('information')
                            <i class="text-sm text-danger">{{ $message }}</i>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="pourcentage">Pourcentage</label>
                        <input class="form-control @error('porcentage') is-invalid @enderror" type="text"
                            name="pourcentage" min="0" max="100"
                            value="{{ old('pourcentage') }}"><br><br>
                        @error('porcentage')
                            <i class="text-sm text-danger">{{ $message }}</i>
                        @enderror
                    </div>

                </div>

                <div class="col-md-4 ms-auto">
                    <div class="form-group">
                        <label class="form-label" for="texte">Description</label>
                        <textarea class="form-control @error('texte') is-invalid @enderror" name="texte"
                            placeholder="Faites une brève description de vous dans votre domaine." value="{{ old('texte') }}"></textarea><br>
                        @error('texte')
                            <i class="text-sm text-danger">{{ $message }}</i>
                        @enderror
                    </div>

                    <fieldset class="fieldset ">
                        <legend>Expérience professionnelle</legend>
                        <div class="form-group">
                            <label class="form-label" for="entreprise">Lieu</label>
                            <input class="form-control @error('entreprise') is-invalid @enderror" type="text"
                                name="entreprise" value="{{ old('entreprise') }}">
                            @error('entreprise')
                                <i class="text-sm text-danger">{{ $message }}</i>
                            @enderror
                        </div><br>
                        <div class="form-group">
                            <label class="form-label" for="description">Projet de travail </label>
                            <input class="form-control @error('description') is-invalid @enderror" name="description"
                                placeholder="Qu'avez-vous eu à faire dans cette structure?"
                                value="{{ old('description') }}">
                            @error('description')
                                <i class="text-sm text-danger">{{ $message }}</i>
                            @enderror
                        </div>
                    </fieldset>

                    <div class="form-group">
                        <label class="form-label" for="langue">Langue</label>
                        <input class="form-control @error('langue') is-invalid @enderror" type="text"
                            name="langue" placeholder="Quelles sont les langues que vous parlez?"
                            value="{{ old('langue') }}">
                        @error('langue')
                            <i class="text-sm text-danger">{{ $message }}</i>
                        @enderror
                    </div><br>
                </div>

            </div>
        </div>

        <button type="submit" class="btn btn-primary"> Submit </button>
        <button class="btn btn-danger" type="reset"> Clear </button>


    </form>
</body>

</html>
