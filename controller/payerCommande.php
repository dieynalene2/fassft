<?php
require_once __DIR__ . '/../view/view.php';

function payerCommande(&$commandes, $idCommande) {
    
    if (!empty($commandes[$idCommande]) && $commandes[$idCommande]['statut'] === "En attente") {
        
        
        $transactionReussie = simulerPaiementBancaire($commandes[$idCommande]['montant_total']);

        if ($transactionReussie) {
        
            $commandes[$idCommande]['statut'] = "Payée";
            afficherRecu($commandes[$idCommande]);
        }
    } else {
        echo "Erreur : Commande introuvable ou déjà traitée.\n";
    }
}