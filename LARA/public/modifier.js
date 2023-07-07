// Sélectionnez tous les liens "Modifier"
const liensModifier = document.querySelectorAll('.lien-modifier');

// Parcourez chaque lien et ajoutez un écouteur d'événements de clic
liensModifier.forEach(lien => {
    lien.addEventListener('click', (event) => {
        event.preventDefault(); // Empêche le comportement par défaut du lien

        const id = lien.dataset.id; // Récupère l'ID de la donnée à modifier

        // Effectuez une requête AJAX pour récupérer les données de la donnée à modifier
        // Utilisez l'URL appropriée pour votre route de récupération des données de modification
        // Remplacez "votre_url" par l'URL de votre route
        fetch(`votre_url/${id}`)
            .then(response => response.json())
            .then(data => {
                // Remplissez le formulaire de modification avec les données récupérées
                document.getElementById('input-nom').value = data.nom;
                // Remplissez d'autres champs selon votre structure de table

                // Affichez le formulaire de modification
                document.getElementById('formulaire-modification').style.display = 'block';
            })
            .catch(error => {
                console.error('Erreur lors de la récupération des données de modification :', error);
            });
    });
});
