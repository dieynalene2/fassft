<?php
function initialiserDonnees() {
    return [
        "menu" => [
            1 => ["id" => 1, "nom" => "Burger Classic", "prix" => 8.50, "description" => "Boeuf, cheddar, salade"],
            2 => ["id" => 2, "nom" => "Frites Maison", "prix" => 3.50, "description" => "Frites fraîches croustillantes"],
            3 => ["id" => 3, "nom" => "Menu XL Chicken", "prix" => 12.00, "description" => "Burger poulet, frites et boisson"]
        ],
        "clients" => [
            "client1" => [
                "id" => "client1",
                "nom" => "Alice",
                "email" => "alice@email.com",
                "panier" => [],
                "historique" => []
            ]
        ],
        "livreurs" => [
            101 => ["id" => 101, "nom" => "Bob", "statut" => "Disponible"],
            102 => ["id" => 102, "nom" => "Charlie", "statut" => "Disponible"]
        ],
        "commandes" => [],
        "compteurCommande" => 1
    ];
}