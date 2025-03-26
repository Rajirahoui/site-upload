<?php
$uploadDir = "uploads/";

// Vérifier si le dossier existe, sinon le créer
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

if (isset($_FILES["file"])) {
    $targetFile = $uploadDir . basename($_FILES["file"]["name"]);
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        echo "Fichier uploadé avec succès.";
    } else {
        echo "Erreur lors de l'upload.";
    }
} else {
    echo "Aucun fichier reçu.";
}
?>
