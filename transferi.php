<?php
session_start();
$ulogiran = isset($_SESSION["username"]);
?>

<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="UTF-8">
  <title>Transferi - Nogometne Novosti</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="nav-bar">
  <a href="rezultati.php">Rezultati</a>
  <a href="transferi.php">Transferi</a>
  <a href="kontakt.php">Kontakt</a>
</nav>

  <header class="blue-header">
    <h1>🔁 Transferi u nogometu</h1>
    <div>
      <?php if ($ulogiran): ?>
        <span>Pozdrav, <?php echo $_SESSION["ime"] . " " . $_SESSION["prezime"]; ?>!</span>
        <a href="logout.php" class="logout">Odjava</a>
      <?php else: ?>
        <a href="login.php" class="login">Prijava</a>
      <?php endif; ?>
    </div>
  </header>

  <main class="news-grid">
    <article class="news-card">
      <img src="images/kane.jpg" alt="Kane u Realu">
      <div class="news-content">
        <h2>Harry Kane prelazi u Real Madrid</h2>
        <p><strong>Datum:</strong> 22. lipnja 2025.</p>
        <p>Engleski napadač konačno seli u Madrid za 70 milijuna eura.</p>
      </div>
    </article>

    <article class="news-card">
      <img src="images/haaland.jpg" alt="Haaland u Bayernu">
      <div class="news-content">
        <h2>Haaland u Bayernu?</h2>
        <p><strong>Glasine:</strong> Velike špekulacije o prelasku norveške zvijezde u Bundesligu.</p>
      </div>
    </article>
  </main>

  <footer class="footer">
    <p>&copy; Nogometne novosti 2025</p>
</footer>

</body>
</html>
