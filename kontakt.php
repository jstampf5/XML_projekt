<?php
session_start();
$ulogiran = isset($_SESSION["username"]);
?>

<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="UTF-8">
  <title>Kontakt - Nogometne Novosti</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

<nav class="nav-bar">
  <a href="rezultati.php">Rezultati</a>
  <a href="transferi.php">Transferi</a>
  <a href="kontakt.php">Kontakt</a>
</nav>

  <header class="blue-header">
    <h1>📬 Kontaktirajte nas</h1>
    <div>
      <?php if ($ulogiran): ?>
        <span>Pozdrav, <?php echo $_SESSION["ime"] . " " . $_SESSION["prezime"]; ?>!</span>
        <a href="logout.php" class="logout">Odjava</a>
      <?php else: ?>
        <a href="login.php" class="login">Prijava</a>
      <?php endif; ?>
    </div>
  </header>

  <main style="padding: 2rem;">
    <form method="post" action="#">
      <label for="ime">Ime:</label><br>
      <input type="text" id="ime" name="ime" required><br><br>

      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" required><br><br>

      <label for="poruka">Poruka:</label><br>
      <textarea id="poruka" name="poruka" rows="5" required></textarea><br><br>

      <input type="submit" value="Pošalji">
    </form>
  </main>

<footer class="footer">
    <p>&copy; Nogometne novosti 2025</p>
</footer>

</body>
</html>
