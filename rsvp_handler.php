<?php
// Sécurité de base
function clean($data) {
    return htmlspecialchars(trim($data));
}

// Récupération des champs
$nom = clean($_POST['nom'] ?? '');
$prenom = clean($_POST['prenom'] ?? '');
$nb_personnes = intval($_POST['nb_personnes'] ?? 1);
$regime = clean($_POST['regime'] ?? '');
$message = clean($_POST['message'] ?? '');

// Vérification minimale
if ($nom && $prenom && $nb_personnes > 0) {
    $line = "$nom;$prenom;$nb_personnes;$regime;$message\n";
    file_put_contents('../data/rsvp.csv', $line, FILE_APPEND);
    echo "<p>Merci pour votre réponse, $prenom !</p>";
    echo '<a href="../index.html">Retour à l’accueil</a>';
} else {
    echo "<p>Erreur : formulaire incomplet.</p>";
}
?>
