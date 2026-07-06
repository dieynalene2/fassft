<?php
function afficherMenu($menu) {
    echo "\n menu\n";
    foreach ($menu as $plat) {
        echo "[{$plat['id']}] {$plat['nom']} - {$plat['prix']}€\n";
        echo "    Description: {$plat['description']}\n";
    }
    echo "---\n";
}