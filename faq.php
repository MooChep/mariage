<?php
$faq = [
  "Quel est le dress code ?" => "Tenue chic, mais confortable !",
  "Y a-t-il un parking sur place ?" => "Oui, un parking gratuit est disponible.",
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>FAQ</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1>FAQ</h1>
    <nav>
      <a href="index.html">Accueil</a>
      <a href="events.html">Déroulé</a>
      <a href="rsvp.html">Confirmation</a>
      <a href="faq.php">FAQ</a>
    </nav>
  </header>

  <main>
    <section>
      <h2>Questions fréquentes ! </h2>
      <ul>
        <?php foreach ($faq as $q => $r): ?>
          <li><strong><?= htmlspecialchars($q) ?></strong><br><?= htmlspecialchars($r) ?></li>
        <?php endforeach; ?>
      </ul>
        </section>

    <section>
      <h2>Posez votre question</h2>
      <form action="php/faq_handler.php" method="POST">
        <label>Votre nom :</label>
        <input type="text" name="nom" required>

        <label>Votre question :</label>
        <textarea name="question" required></textarea>

        <button type="submit">Envoyer</button>
      </form>
    </section>
  </main>

  <footer>
    <p>© 2025 Notre Mariage</p>
  </footer>
</body>
</html>
