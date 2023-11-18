<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "webScraping";

//so pra eu lembrar como é que comenta nessa porra

$conn = new mysqli($server, $user, $pass, $db);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

/* echo "Conexão bem-sucedida!"; */


?>
