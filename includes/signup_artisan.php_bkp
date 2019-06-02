<?php

if (isset($_POST['submit1'])) {

    require '../connexion.php';

    // id_art	nom_art	prenom_art	sexe_art dateNaissance	ville	metier	email_art tele	pwd_art	dateInscription	type1

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $dateNaissance = $_POST['dateNaissance'];
    $ville = $_POST['ville'];
    $metier = $_POST['metier'];
    $email = $_POST['email'];
    $tele = $_POST['tele'];
    $pwd = $_POST['pwd'];
    $pwdrep = $_POST['pwdrep'];
    $dateInscription = $_POST['dateInscription'];
    $type = 2;

    if (empty($nom) || empty($prenom) || empty($sexe) || empty($dateNaissance) || empty($ville)
     || empty($metier) || empty($email) || empty($tele) || empty($pwd)
     || empty($pwdrep)
     ) {
        header("location: ../register.php?error=emptyfields&nom=
        " . $nom . "&prenom=" . $prenom . "&dateNaissance=" . $dateNaissance. "
        &ville=" . $ville . "&metier=" . $metier."
        &email=" . $email . "&tele=" . $tele
    );
        exit();
    }  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location: ../register.php?error=invalidmail&login=" . $email);
        exit();
    } else if ($pwd !== $pwdrep) {
        header("location: ../register.php?error=passwordchecklogin=" . $login . "&email=" . $email);
        exit();
    } else {
        $sql = "SELECT nom_uti FROM utilisateurs WHERE email_art=? ";
        $stmt = mysqli_stmt_init($link);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../register.php?error=sqlerror");
        
            exit();
        } else {
            
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("location: ../register.php?error=usertaken&email=" . $email);
                exit();
            } else {

                $sql = "INSERT INTO  artisan (nom_art, prenom_art, sexe_art, dateNaissance, ville, metier, email_art, tele, pwd_art, dateInscription,type1) VALUES ( ?, ?, ?, ?,?, ?, ?, ?,?,?,?) ";
                $stmt = mysqli_stmt_init($link);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: ../register.php?error=sqlerror");
                    exit();
                } else {
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);


                    mysqli_stmt_bind_param($stmt, "sssssssssss", $nom, $prenom, $tele, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("location: ../register.php?signup1=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($link);
} else {
    header("location: ../register.php");
    exit();
}
