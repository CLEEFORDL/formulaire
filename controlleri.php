<?php 
if (isset($_POST['SendLogin'])) {
		$pseudoL = htmlspecialchars($_POST['pseudoL']);		
		$passwordL = sha1($_POST['passwordL']);	
	if (!empty($_POST['pseudoL']) AND !empty($_POST['passwordL'])) {
		
		echo "<script>alert('Connexion reussi');</script>";
		//header("location: membre.php");
		//exit();
		
	}else{
		//echo "<script>alert('Vide');</script>";
		$erreur = "Remplir tous les champs";
}
}
 ?> 

 					<!-- ================= INSCRIPTION =============== -->
<?php
if (isset($_POST['SendInscrit'])) {
    $type_m = isset($_POST['type_m']) ? trim(htmlspecialchars($_POST['type_m'])) : '';
    $pseudoi = isset($_POST['pseudoi']) ? trim(htmlspecialchars($_POST['pseudoi'])) : '';
    $nomi = isset($_POST['nomi']) ? trim(htmlspecialchars($_POST['nomi'])) : '';
    $prenomi = isset($_POST['prenomi']) ? trim(htmlspecialchars($_POST['prenomi'])) : '';
    $adressei = isset($_POST['adressei']) ? trim(htmlspecialchars($_POST['adressei'])) : '';
    $telephonei = isset($_POST['telephonei']) ? trim(htmlspecialchars($_POST['telephonei'])) : '';
    $emaili = isset($_POST['emaili']) ? trim($_POST['emaili']) : '';
    $passwordi = isset($_POST['passwordi']) ? trim($_POST['passwordi']) : '';
    $confirmpasswordi = isset($_POST['confirmpasswordi']) ? trim($_POST['confirmpasswordi']) : '';
    $radios = isset($_POST['radios']) ? trim($_POST['radios']) : '';
    $imagei = isset($_POST['imagei']) ? trim($_POST['imagei']) : '';

    // Vérification si le pseudo existe déjà
    $checkPseudoQuery = $bdd->prepare("SELECT id FROM register WHERE pseudo = ?");
    $checkPseudoQuery->execute(array($pseudoi));
    $pseudoExists = $checkPseudoQuery->fetch();

    // Vérification si l'email existe déjà
    $checkEmailQuery = $bdd->prepare("SELECT id FROM register WHERE email = ?");
    $checkEmailQuery->execute(array($emaili));
    $emailExists = $checkEmailQuery->fetch();

    if (!$pseudoExists && !$emailExists) {
        // Vérification de tous les champs remplis
        if (
            !empty($type_m) && !empty($pseudoi) && !empty($nomi) &&
            !empty($prenomi) && !empty($adressei) && !empty($telephonei) &&
            !empty($emaili) && !empty($passwordi) && !empty($confirmpasswordi) &&
            !empty($radios) && !empty($imagei)
        ) {
            $pseudolength = strlen($pseudoi);

            if ($pseudolength >= 8) {
                // Vérifier si les deux mots de passe sont identiques
                if ($passwordi === $confirmpasswordi) {
                    // Vérifier le format de l'e-mail
                    if (filter_var($emaili, FILTER_VALIDATE_EMAIL)) {
                        // Vérifier la longueur du numéro de téléphone
                        if (strlen($telephonei) === 8 && ctype_digit($telephonei)) {
                            // Vérification de la longueur du mot de passe
                            $passwordlength = strlen($passwordi);
                            if ($passwordlength >= 8) {
                                // Utilisation de password_hash pour sécuriser le mot de passe
                                $hashedPassword = password_hash($passwordi, PASSWORD_DEFAULT);
                                $hashedConfirmPassword = password_hash($confirmpasswordi, PASSWORD_DEFAULT);

                                // Préparation et exécution la requête SQL
                                $inserti = $bdd->prepare("INSERT INTO register(type_m, pseudo, nom, prenom, adresse, telephone, email, password, confirm_password, sexe, photo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                                $inserti->execute(array($type_m, $pseudoi, $nomi, $prenomi, $adressei, $telephonei, $emaili, $hashedPassword, $hashedConfirmPassword, $radios, $imagei));

                                echo "<script>alert('Inscription Réussie'); window.location.href='login.php';</script>";
                                exit();
                            } else {
                                $erreur = "Mot de passe trop court.";
                            }
                        } else {
                            $erreur = "Le numéro de téléphone doit contenir exactement 8 chiffres.";
                        }
                    } else {
                        $erreur = "Format d'e-mail incorrect.";
                    }
                } else {
                    $erreur = "Les mots de passe ne correspondent pas.";
                }
            } else {
                $erreur = "Pseudo trop court.";
            }
        } else {
            $erreur = "Remplissez d'abord tous les champs.";
        }
    } else {
        // Pseudo ou email existe déjà
        $erreur = "Pseudo ou email déjà utilisé.";
    }
}
?>
