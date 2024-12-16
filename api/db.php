<?php


$dsn = "mysql:
    host=localhost;
    dbname=flagslister;
    user=root;
    password=;
";

$conn = new PDO($dsn);

$results = $conn->query("SELECT * FROM `flags`")
                ->fetchAll();

header('Content-type: json');                

echo json_encode($results);
