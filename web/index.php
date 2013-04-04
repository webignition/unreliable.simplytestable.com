<?php

$allowedErrors = array(
    400, 401, 402, 403, 404, 405, 406, 409,
    500, 502, 503, 504
);

$chosenStatusCode = isset($_GET['error']) && in_array($_GET['error'], $allowedErrors) ? (int)$_GET['error'] : false;
if ($chosenStatusCode === false) {
    $chosenStatusCode = 200;
}

$probability = filter_var($_GET['probability'], FILTER_VALIDATE_FLOAT);

if ($probability < 0 || $probability > 1 || $probability === false) {
    $probability = 1;
}

$statusCode = ((rand(0, 100)/100) < $probability) ? $chosenStatusCode : 200;
header('HTTP/1.0 ' . $statusCode);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Chosen status code: <?php echo $chosenStatusCode; ?>. Probability: <?php echo $probability; ?>. Outcome: <?php echo $statusCode; ?></title>
  </head>
  <body>
      <p>
          Chosen status code: <?php echo $chosenStatusCode; ?>
      </p>
      <p>
          Probability: <?php echo $probability; ?>
      </p>
      <p>
          Outcome: <?php echo $statusCode; ?>
      </p>
  </body>
</html>