<?php
function afficherConfirmationCommande($commande) {
    echo "\n[Notification Client] Commande #{$commande['id']} enregistrée ! Statut: {$commande['statut']}\n";
    echo "Montant total à payer : {$commande['montant_total']}€\n";
}