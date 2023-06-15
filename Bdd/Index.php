<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire avec fichier</title>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    foreach($_FILES['fichiers']['error'] as $k=>$v){
        //Si le fichier a bien été téléchargé et qu'il n'y a pas eu d'erreur
        if(is_uploaded_file($_FILES['fichiers']['tmp_name'][$k]) && $_FILES['fichiers']['error'][$k] == UPLOAD_ERR_OK) {
            $path="img/".basename($_FILES['fichiers']['name'][$k]);
            //enregistrement du ficher
            move_uploaded_file($_FILES['fichiers']['tmp_name'][$k],$path);
            //affichage de l'image
            echo "<img src='$path'>";
        }
    }
}else{?>
<form enctype="multipart/form-data" action="" method="POST">
    <input type="file" name="fichiers[]" id="fichiers" multiple>
    <input type="submit" value="Envoyer">
</form>
<?php
}
?>    
</body>
</html>