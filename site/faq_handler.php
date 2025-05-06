<?php
function clean($data) {
    return htmlspecialchars(trim($data));
}

$nom = clean($_POST['nom'] ?? '');
$question = clean($_POST['question'] ?? '');

if ($nom && $question) {
    $entry = "De $nom : $question\n";
    file_put_contents('../data/questions.txt', $entry, FILE_APPEND);
    echo "<p>Merci pour votre question, $nom ! Nous y répondrons bientôt.</p>";
    echo '<a href="../faq.php">Retour à la FAQ</a>';
} else {
    echo "<p>Erreur : tous les champs sont requis.</p>";
}
?>
