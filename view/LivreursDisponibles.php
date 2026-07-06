<?php
function afficherLivreursDisponibles($livreurs) {
    echo "\n LIVREURS DISPONIBLES \n";
    foreach ($livreurs as $liv) {
        if ($liv['statut'] === "Disponible") {
            echo "ID: {$liv['id']} | Nom: {$liv['nom']} | Statut: {$liv['statut']}\n";
        }
    }
}