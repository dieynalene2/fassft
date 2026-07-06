<?php
function afficherRecu($commande) {
    echo "\n REÇU DE PAIEMENT (Commande #{$commande['id']}) \n";
    echo "Statut : {$commande['statut']}\n";
    echo "Merci pour votre achat, {$commande['client_nom']} !\n";
    
}