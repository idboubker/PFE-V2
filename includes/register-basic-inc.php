<?php

if (isset($_POST['basic-reg'])) {

    require '../connexion.php';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $tele = $_POST['tele'];
    $pwd = $_POST['pwd'];
    $pwdrep = $_POST['pwdrep'];
    

    if (empty($login) || empty($email) || empty($tele) || empty($pwd) || empty($pwdrep)) {
        if (empty($login) && empty($email) && empty($tele) && empty($pwd)  && empty($pwdrep)) {
            header("location: ../register_basic.php?error=emptyfields&login=" . $login . "&email=" . $email . "&tele=" . $tele);
            exit();
        } else if (empty($login)) {
            header("location: ../register_basic.php?error=emptyfieldlogin&email=" . $email . "&tele=" . $tele);
        } else if (empty($email)) {
            header("location: ../register_basic.php?error=emptyfieldmail&login=" . $login . "&tele=" . $tele);
        } else if (empty($tele)) {
            header("location: ../register_basic.php?error=emptyfieldtele&login=" . $login . "&email=" . $email);
        }
        if (empty($pwd) || empty($pwdrep)) {
            header("location: ../register_basic.php?error=emptyfieldpwd&login=" . $login . "&email=" . $email . "&tele=" . $tele);
        }
        exit();
    }
        
        
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location: ../register_basic.php?error=invalidmail&login=" . $login . "&email=" . $email . "&tele=" . $tele);
        exit(); //heeeeeere
    } 

    else if ($pwd !== $pwdrep) {
        header("location: ../register_basic.php?error=pwdmatch&login=" . $login . "&email=" . $email . "&tele=" . $tele);
        exit();
    }
     else {
        $sql = "SELECT nom_uti FROM utilisateurs WHERE nom_uti=? ";
        $stmt = mysqli_stmt_init($link);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../register_basic.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("location: ../register_basic.php?error=usertaken&login=" . $login . "&tele=" . $tele);
                exit();
            } else {

                $sql = "INSERT INTO  utilisateurs ( nom_uti ,  email_uti ,  tele ,  pwd_uti ) VALUES ( ?, ?, ?, ?) ";
                $stmt = mysqli_stmt_init($link);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: ../register_basic.php?error=sqlerror");
                    exit();
                } else {
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);


                    mysqli_stmt_bind_param($stmt, "ssss", $login, $email, $tele, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("location: ../authentification.php?register=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($link);
} else {
    header("location: ../register_basic.php");
    exit();
}
