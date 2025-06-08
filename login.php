<?php
session_start();

$username = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ans = $_POST;

    if (empty($ans["username"])) {
        echo "Korisnički račun nije unesen.";
    } else if (empty($ans["password"])) {
        echo "Lozinka nije unesena.";
    } else {
        $username = $ans["username"];
        $password = $ans["password"];
        provjera($username, $password);
    }
}

function provjera($username, $password) {
    $xml = simplexml_load_file("users.xml");

    foreach ($xml->user as $usr) {
        $usrn = (string)$usr->username;
        $usrp = (string)$usr->password;
        $usrime = (string)$usr->ime;
        $usrprezime = (string)$usr->prezime;

        if ($usrn == $username) {
            if ($usrp == $password) {
                $_SESSION["username"] = $username;
                $_SESSION["ime"] = $usrime;
                $_SESSION["prezime"] = $usrprezime;
                header("Location: index.php");
                exit();
            } else {
                echo "Netočna lozinka.";
                return;
            }
        }
    }

    echo "Korisnik ne postoji.";
    return;
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Prijava</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login-container">
    <h2 class="login-title">Prijava</h2>
    <form action="" method="post">
        <label>Korisnički račun:</label>
        <input id="name" name="username" type="text" required>

        <label>Lozinka:</label>
        <input id="password" name="password" placeholder="**********" type="password" required>

        <input name="submit" type="submit" value="Prijavi se">
    </form>
</div>
</body>
</html>
