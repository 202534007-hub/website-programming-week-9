
<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Method tidak diizinkan.");
}

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$major = trim($_POST["major"] ?? "");

if (
    $name === "" ||
    mb_strlen($name) > 100 ||
    !filter_var($email, FILTER_VALIDATE_EMAIL) ||
    $major === ""
) {
    http_response_code(422);
    exit("Data tidak valid. Periksa kembali formulir.");
}

$nameAman = htmlspecialchars($name, ENT_QUOTES, "UTF-8");
$emailAman = htmlspecialchars($email, ENT_QUOTES, "UTF-8");
$majorAman = htmlspecialchars($major, ENT_QUOTES, "UTF-8");

header("Location: success.php", true, 303);
exit;

?>