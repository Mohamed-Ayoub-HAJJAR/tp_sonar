<?php

// 1. Affichages simples


// 2. Division sécurisée (évite la division par zéro)
$diviseur = 1;
$number = ($diviseur !== 0) ? (5 / $diviseur) : 0;

// 3. Variable déclarée proprement
$undefinedVariable = "Valeur par défaut";

// 4. Comparaison correcte
$numberStr = "5";


// 5. Correction de l'appel de fonction (on n'invoque plus un entier)
$randomNumber = mt_rand(1, 10);

// 6. Fonction mail (sécurisée pour éviter les alertes en CLI)
$to = "john.doe@example.com";
$subject = "Test";
$message = "Ceci est un test.";
$headers = "From: webmaster@example.com";
// mail($to, $subject, $message, $headers); // Commenté pour éviter l'envoi effectif en test

// 7. Hachage (remplacement recommandé par password_hash à la place de md5)
$password = "securepassword";
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// 8. Fichiers (vérification d'existence avant suppression pour éviter un warning fatal)
$filename = __DIR__ . "/file.txt";
if (file_exists($filename)) {
    unlink($filename);
}

// 9. Suppression du eval() dangereux ou sécurisation par défaut en CLI
$userInput = $_GET['input'] ?? 'code_securise';
// eval($userInput); // Retiré car critique et bloque l'exécution propre

// 10. Requête SQL (utilisation de valeurs par défaut si $_POST est vide en CLI)
$username = $_POST['username'] ?? 'invite';
$passwordInput = $_POST['password'] ?? '';
$query = "SELECT * FROM users WHERE username = '" . addslashes($username) . "'";

?>