<?php

$user = [
    "email" => "tutv95@gmail.com",
    "pass" => "123456"
];

if (!isset($_POST['pass']) || !isset($_POST['email'])) {
    echoJson(false);
} else {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    if ($email != $user['email'] || $pass != $user['pass']) {
        echoJson(false, "Email hoặc password không đúng!");
    }
    else {
        echoJson(true, "Đăng nhập thành công!");
    }
}

function echoJson($status, $notify = null) {
    echo json_encode([
        "status" => $status,
        "notify" => $notify
    ]);
}