<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h2 {
            color: blue;
        }

        p {
            font-size: 20px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .container{/*
            display: flex;
            align-items: center;*/
            margin: auto;
        }

    </style>
</head>

<body>
    <div class="container">
        <marquee behavior="" direction="right">
            <h2>Vos informations</h2>
        </marquee>
        <p>Matricule : {{ $donnee->matricule }}</p>
        <p>Nom : {{ $donnee->nom }}</p>
        <p>Contact : {{ $donnee->contact }}</p>
        <p>Adresse : {{ $donnee->adresse }}</p>
        <p>Adresse électronique : {{ $donnee->email }}</p>
        <p>Ecoles : {{ $donnee->lieu }}</p>
        <p>Diplômes : {{ $donnee->diplome }}</p>
        <p>Années d'obtention de vos diplômes : {{ $donnee->annee }}</p>
        <p>Compétences : {{ $donnee->information }}</p>
        <p>Pourcentages de vos compétences : {{ $donnee->pourcentage }}</p>
        <p>Vous concernant : {{ $donnee->texte }}</p>
        <p>Projet de travail :{{ $donnee->description }}</p>
        <p>Langue :{{ $donnee->langue }}</p>
    </div>

</body>

</html>
