<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <style>
            .lien-editer{
                color: green;
            }
            .lien-editer:hover{
                color:green;
            }
            .lien-reset{
                color:red;
                text-underline-position:none;
            }
            .lien-reset:hover{
                color: red;
            }
        </style>
            <script src="{{ asset('modifier.js') }}"></script>

</head>

<body>

    <h2>Liste des étudiants</h2>
    <table class="table table-responsive table-striped">
        <thead>
            <th>Matricule</th>
            <th>Nom Prénoms</th>
            <th>Contact</th>
            <th>Adresse</th>
            <th>Adresse électronique</th>
            <th>lieu</th>
            <th>Diplômes</th>
            <th>Année d'obtention de vos diplômes</th>
            <th>Competences</th>
            <th>Pourcentage</th>
            <th>Description </th>
            <th>Structures </th>
            <th>Projet de Travail</th>
            <th>Langues</th>
            <th>Action</th>
        </thead>
        <tbody>

            @foreach ($etudiants as $etudiant)
                <tr>
                    <td>{{ $etudiant->matricule }} </td>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->contact }}</td>
                    <td>{{ $etudiant->adresse }}</td>
                    <td>{{ $etudiant->email }}</td>
                    <td>{{ $etudiant->lieu }}</td>
                    <td>{{ $etudiant->diplome }}</td>
                    <td>{{ $etudiant->annee }}</td>
                    <td>{{ $etudiant->information }}</td>
                    <td>{{ $etudiant->pourcentage }}</td>
                    <td>{{ $etudiant->texte }}</td>
                    <td>{{ $etudiant->description }}</td>
                    <td>{{ $etudiant->langue }}</td>
                    <td><a href="{{ route('donnees.supprimer', ['id' => $etudiant->id]) }}" class="lien-reset"><i class="fa fa-trash" aria-hidden="true"></i>Supprimer</a>
                        <a href="{{ route('donnees.editer', ['id' => $etudiant->id]) }}" class="lien-editer" data-id="{{ $etudiant->id }}"><i class="fa fa-pencil" aria-hidden="true"></i>Modifier</a>
                        <a href="{{ route('donnees.details', ['id' => $etudiant->id]) }}" class="lien-details" data-id="{{ $etudiant->id }}"><i class="fa fa-asterisk" aria-hidden="true"></i>Details</a>
                    </td>
                </tr>
            @endforeach
        </tbody>

</body>

</html>
