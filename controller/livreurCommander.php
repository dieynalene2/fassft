<?php
require_once __DIR__ . '/../view/view.php';

function assignerLivreurCommande(&$commandes, &$livreurs, $idCommande) {
    
    if (!empty($commandes[$idCommande]) && $commandes[$idCommande]['statut'] === "En préparation") {
        $commandes[$idCommande]['statut'] = "Prête";

        
        afficherLivreursDisponibles($livreurs);

        
        $idLivreurChoisi = null;
        foreach ($livreurs as $idLiv => $livreur) {
            if ($livreur['statut'] === "Disponible") {
                $idLivreurChoisi = $idLiv;
                break;
            }
        }

        
        if ($idLivreurChoisi !== null) {
            $nomLivreur = $livreurs[$idLivreurChoisi]['nom'];
            echo "[Gérant] Assignation du livreur {$nomLivreur} à la commande #{$idCommande}.\n";

            $commandes[$idCommande]['livreur_id'] = $idLivreurChoisi;
            $commandes[$idCommande]['statut'] = "En livraison";
            $livreurs[$idLivreurChoisi]['statut'] = "Occupé";

            echo "\n[Notification Interne Livreur] -> {$nomLivreur}, vous devez livrer la commande #{$idCommande}.\n";
            recevoirNotificationClient("Votre repas est en route ! Livreur assigné : {$nomLivreur} 🚴\n");
        } else {
            echo "Aucun livreur disponible pour le moment.\n";
        }
    } else {
        echo "Erreur : La commande n'est pas prête pour l'expédition.\n";
    }
}