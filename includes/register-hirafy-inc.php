<?php

if (isset($_POST['hirafy-reg'])) {

    require '../connexion.php';


    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = isset($_POST['gender']) ? $_POST['gender'] : $_POST['gender'] = '';
    $dateNaissance = $_POST['dateNaissance'];
    $ville = $_POST['ville'];
    $metier = $_POST['metier'];
    $email = $_POST['email'];
    $tele = $_POST['tele'];
    $pwd = $_POST['pwd'];
    $pwdrep = $_POST['pwdrep'];
    $avatar = "img/464220-PFPXU4-11d3.jpg";
    date_default_timezone_set(date_default_timezone_get());
    //$dateInscription = date('Y-m-d', time());


    $err = "";
    if (empty($_POST['nom'])  || !isset($_POST['nom'])) {
        $err = "errn=req&";
    }
    if (empty($_POST['prenom']) || !isset($_POST['prenom'])) {
        $err = $err . "errpn=req&";
    }
    if (empty($_POST['email']) || !isset($_POST['email'])) {
        $err = $err . "errmail=req&";
    }
    if (empty($_POST['pwd']) || !isset($_POST['pwd'])) {
        $err = $err . "errpwd=req&";
    }
    if (empty($_POST['dateNaissance']) || !isset($_POST['dateNaissance'])) {
        $err = $err . "errdn=req&";
    }
    if (empty($_POST['tele']) || !isset($_POST['tele'])) {
        $err = $err . "errtele=req&";
    }
    if (empty($_POST['ville']) || !isset($_POST['ville']) || $_POST['ville'] = 'ville') {
        $err = $err . "errville=req&";
    }
    if (empty($_POST['metier']) || !isset($_POST['metier']) || $_POST['metier'] = 'metier') {
        $err = $err . "errmet=req";
    }
    // if (empty($pwd) || empty($pwdrep)) {
    //     header("location: ../register_basic.php?error=emptyfieldpwd&login=" . $login . "&email=" . $email . "&tele=" . $tele);
    // }


    
    $i = 0;
    foreach ($_POST as $p) {
        if (empty($p)) {
            $i++;
        }
    }
    if ($i > 0) {
        header("location: ../register_hirafy.php?" . $err);
        exit();
    }



    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location: ../register_hirafy.php?error=invalidmail&nom=" . $nom . "&prenom=" . $prenom . "&dateNaissance=" . $dateNaissance . "&ville=" . $ville . "&tele=" . $tele);
        exit();
    } else if ($pwd !== $pwdrep) {
        header("location: ../register_hirafy.php?error=notmatch&nom=" . $nom . "&prenom=" . $prenom . "&dateNaissance=" . $dateNaissance . "&ville=" . $ville . "&email=" . $email . "&tele=" . $tele);
        exit();
    } else {
        $sql = "SELECT * FROM artisan WHERE email_art=? ";
        $stmt = mysqli_stmt_init($link);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../register_hirafy.php?error=sqlerr");
            exit();
        } else {

            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("location: ../register_hirafy.php?error=usertaken&nom=" . $nom . "&prenom=" . $prenom . "&dateNaissance=" . $dateNaissance . "&ville=" . $ville . "&email=" . $email . "&tele=" . $tele);
                exit();
            } else {

                $sqlt = "INSERT INTO  artisan (nom_art, prenom_art, sexe_art, dateNaissance, ville, metier, email_art, tele, pwd_art) VALUES ( ?, ?, ?,?,?, ?,?, ?,?) ";
                $stmt = mysqli_stmt_init($link);
                if (mysqli_stmt_prepare($stmt, $sqlt)) {
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sssssssss", $nom, $prenom, $sexe, $dateNaissance, $ville, $metier, $email, $tele, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("location: ../authentification.php?register=success");
                    $idp = mysqli_insert_id($link);
                    $insertAvatar = "INSERT INTO artisan_details (photo,id_art) VALUES ('img/464220-PFPXU4-113.jpg',$idp)";
                    mysqli_query($link,$insertAvatar);
                    exit();
                } else {
                    header("location: ../register_hirafy.php?error=sqlerror");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($link);
} else {
    header("location: ../register_hirafy.php");
    exit();
}
