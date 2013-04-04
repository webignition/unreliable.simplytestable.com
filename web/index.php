<?php

$allowedErrors = array(
    400, 401, 402, 403, 404, 405, 406, 409,
    500, 502, 503, 504
);

$error = isset($_GET['error']) && in_array($_GET['error'], $allowedErrors) ? (int)$_GET['error'] : false;
if ($error === false) {
    exit();
}

$probability = filter_var($_GET['probability'], FILTER_VALIDATE_FLOAT);

if ($probability < 0 || $probability > 1 || $probability === false) {
    exit();
}

if ((rand(0, 100)/100) >= $probability) {    
    header('HTTP/1.0 ' . $error);
} else {
    header('HTTP/1.0 200 OK');
}