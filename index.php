<?php
require_once __DIR__ . "/bootstrap.php";
require_once __DIR__ . "/model/Omikuji.php";

$request = $_POST['hit'] ?? null;

$omikuji = new Omikuji($request);

$message = $omikuji->hit();

$viewVars = [
    'message' => $message,
];

echo $twig->render('index.html.twig', $viewVars);