<?php
session_start();
$ulogiran = isset($_SESSION["username"]);
?>

<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="UTF-8">
  <title>Reprezentativne utakmice - Novosti</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="nav-bar">
  <a href="rezultati.php">Rezultati</a>
  <a href="transferi.php">Transferi</a>
  <a href="kontakt.php">Kontakt</a>
</nav>

  <header class="blue-header">
    <h1>⚽ Reprezentativne Nogometne Novosti</h1>
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
      <img src="images/CroFra.jpg" alt="Hrvatska vs Francuska">
      <div class="news-content">
        <h2>Hrvatska 3:1 Francuska</h2>
        <p><strong>Datum:</strong> 25. lipnja 2025.</p>
        <p>Hrvatska nogometna reprezentacija pobijedila je Francuze u uzbudljivoj utakmici u Splitu.</p>
      </div>
    </article>

    <article class="news-card">
      <img src="images/GerEsp.jpg" alt="Njemačka vs Španjolska">
      <div class="news-content">
        <h2>Njemačka 3:3 Španjolska</h2>
        <p><strong>Datum:</strong> 24. lipnja 2025.</p>
        <p>Spektakularan remi u Münchenu – obje momčadi pokazale napadačku snagu.</p>
      </div>
    </article>

    <article class="news-card">
      <img src="images/BraArg.jpg" alt="Brazil vs Argentina">
      <div class="news-content">
        <h2>Brazil 0:2 Argentina</h2>
        <p><strong>Datum:</strong> 23. lipnja 2025.</p>
        <p>Messi ponovno odlučuje! Argentina odnosi pobjedu u južnoameričkom klasiku.</p>
      </div>
    </article>

  </main>

<footer class="footer">
    <p>&copy; Nogometne novosti 2025</p>
</footer>

</body>
</html>
