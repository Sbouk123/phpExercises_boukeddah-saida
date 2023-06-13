<?php
$packages = [
    ["Amazon", 20, 45000],
    ["Cdiscount", 8, 192000],
    ["Etsy", 4, 68000]
];

$specialPackages = [];
$standardPackages = [];

foreach ($packages as $package) {
    $expediteur = $package[0];
    $poids = $package[1];
    $volume = $package[2];

    if ($poids >= 10 || $volume > 68000) {
        $specialPackages[] = $expediteur;
    } else {
        $standardPackages[] = $expediteur;
    }
}

if (!empty($specialPackages)) {
    echo "Special: " . implode(", ", $specialPackages) . "<br>";
}

if (!empty($standardPackages)) {
    echo "Standard: " . implode(", ", $standardPackages) . "<br>";
}
?>
