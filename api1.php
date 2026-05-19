<?php

header("Content-Type: application/json");

$etudiants = [
    [
        "id" => 1,
        "nom" => "Ahmed",
        "prenom" => "Mhaira",
        "ville" => "Casablanca",
        "age" => 20
    ],
    [
        "id" => 2,
        "nom" => "Sara",
        "prenom" => "Ali",
        "ville" => "Rabat",
        "age" => 22
    ],
    [
        "id" => 3,
        "nom" => "Youssef",
        "prenom" => "Karim",
        "ville" => "Tanger",
        "age" => 19
    ]
];

echo json_encode($etudiants, JSON_PRETTY_PRINT);
?>