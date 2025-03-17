<?php
session_start();
header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo json_encode(["status" => 405, "message" => "Método não permitido"]);
    exit;
}


if (!isset($_POST["cpf"]) || empty($_POST["cpf"])) {
    echo json_encode(["status" => 400, "message" => "CPF é obrigatório"]);
    exit;
}

$cpf = preg_replace("/\D/", "", $_POST["cpf"]);

if (strlen($cpf) !== 11) {
    echo json_encode(["status" => 400, "message" => "CPF inválido"]);
    exit;
}

$api_url = "https://apela.tech?user=bf751fa9-5b85-42bc-b49d-01311792a399&cpf=" . urlencode($cpf);
$response = file_get_contents($api_url);

if ($response === false) {
    echo json_encode(["status" => 500, "message" => "Erro ao se conectar à API"]);
    exit;
}

$data = json_decode($response, true);
if ($data === null) {
    echo json_encode(["status" => 500, "message" => "Erro ao processar resposta da API"]);
    exit;
}


$_SESSION['nome'] = $data['nome'];
$_SESSION['cpf'] = $data['cpf'];

echo json_encode($data);
