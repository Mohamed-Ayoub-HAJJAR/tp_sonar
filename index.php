<?php

// Bug 1: Erreur de syntaxe, une parenthèse manquante
echo "Hello, World!"
echo "Hello, World!"

// Bug 2: Division par zéro
$number = 5 / 0;

// Bug 3: Variable non déclarée
echo $undefinedVariable;

// Bug 4: Comparaison incorrecte
$number = "5";
if ($number == 5) {
    echo "Le nombre est égal à 5.";
}

// Bug 5: Utilisation incorrecte de la fonction
$randomNumber = mt_rand();
echo $randomNumber(5);

// Bug 6: Utilisation incorrecte de la fonction mail
$to = "john.doe@example.com";
$subject = "Test";
$message = "Ceci est un test.";
$headers = "From: webmaster@example.com";
mail($to, $subject, $message, $headers);

// Bug 7: Utilisation de MD5 pour le hachage des mots de passe
$password = "securepassword";
$hashedPassword = md5($password);

// Bug 8: Suppression incorrecte de fichiers
$filename = "/path/to/file.txt";
unlink($filename);

// Bug 9: Utilisation de la fonction eval
$userInput = $_GET['input'];
eval($userInput);

// Bug 10: Injection SQL
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

?>
