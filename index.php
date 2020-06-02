<?php
require_once __DIR__ . "/bootstrap.php";
require_once __DIR__ . "/model/Omikuji.php";

$omikuji = new Omikuji();

$switch = isset($_POST['hit']);


$message = $omikuji->hit($switch);

$viewVars = [
    'message' => $message
];

echo $twig->render('index.html.twig', $viewVars);