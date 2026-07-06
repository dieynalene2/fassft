<?php
function afficherCommandesAttente($commandes) {
    echo "\n--- COMMANDES EN ATTENTE DE VALIDATION ---\n";
    foreach ($commandes as $cmd) {
        if ($cmd['statut'] === "Payée") {
            echo "Commande #{$cmd['id']} - Client: {$cmd['client_nom']} - Montant: {$cmd['montant_total']}€\n";
        }
    }

}