<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

// data fake (بحال database)
$students = [
    ["id" => 1, "name" => "Ahmed", "city" => "Casablanca"],
    ["id" => 2, "name" => "Yassine", "city" => "Rabat"]
];

// GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo json_encode($students);
}

// POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents("php://input"), true);

    $new = [
        "id" => rand(3, 1000),
        "name" => $input["name"],
        "city" => $input["city"]
    ];

    echo json_encode([
        "message" => "Student added",
        "data" => $new
    ]);
}
?>