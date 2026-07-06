<?php
require_once __DIR__ . '/../view/view.php';

function passerCommande(&$commandes, &$compteurCommande, &$clients, $idClient, $menu, $choixPlats) {

    $panier = [];
    $montantTotal = 0;

    foreach ($choixPlats as $idPlat => $quantite) {
        if (isset($menu[$idPlat])) { 
            $plat = $menu[$idPlat];
            $panier[] = [
                "plat_id" => $plat['id'],
                "nom" => $plat['nom'],
                "prix" => $plat['prix'],
                "quantite" => $quantite
            ];
        
            $montantTotal += $plat['prix'] * $quantite;
        }
    }


    $nouvelleCommande = [
        "id" => $compteurCommande,
        "client_id" => $idClient,
        "client_nom" => $clients[$idClient]['nom'],
        "articles" => $panier,
        "montant_total" => $montantTotal,
        "statut" => "En attente",
        "livreur_id" => null
    ];
    $commandes[$compteurCommande] = $nouvelleCommande;
    $clients[$idClient]['historique'][] = $compteurCommande;
    $compteurCommande++;

    afficherConfirmationCommande($nouvelleCommande);
    return $nouvelleCommande['id'];
}