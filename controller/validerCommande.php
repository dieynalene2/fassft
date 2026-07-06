<?php

require_once __DIR__ . '/../view/view.php';

function validerCommandeGerant(&$commandes, $idCommande) {
    
    if (!empty($commandes[$idCommande]) && $commandes[$idCommande]['statut'] === "Payée") {
        
        
        echo "\n[Gérant] Commande #{$idCommande} validée et envoyée en cuisine.\n";

        
        $commandes[$idCommande]['statut'] = "En préparation";

        
        recevoirNotificationClient("Votre commande #{$idCommande} est en cours de préparation en cuisine ! 🍳");
    } else {
        echo "Erreur : La commande n'est pas éligible à la préparation.\n";
    }
}