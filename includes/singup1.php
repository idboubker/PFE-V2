<?php

if (isset($_POST['submit1'])) {

    require '../connexion.php';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $tele = $_POST['tele'];
    $pwd1 = $_POST['pwd1'];
    $pwd2 = $_POST['pwd2'];
    $type = 1;

    if (empty($login) || empty($email) || empty($tele) || empty($pwd1) || empty($pwd2)) {
        header("location: ../register.php?error=emptyfields&login=" . $login . "&email=" . $email . "&tele=" . $tele);
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $login)) {
        header("location: ../register.php?error=invalidmaillogin");
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location: ../register.php?error=invalidmail&login=" . $login);
        exit();
    } else if (!preg_match("/^[a-zA-Z0-9]*$/", $login)) {
        header("location: ../register.php?error=invalidlogin&login=" . $login);
        exit();
    } else if ($pwd1 !== $pwd2) {
        header("location: ../register.php?error=passwordchecklogin=" . $login . "&email=" . $email);
        exit();
    } else {
        $sql = "SELECT nom_uti FROM utilisateurs WHERE nom_uti=? ";
        $stmt = mysqli_stmt_init($link);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../register.php?error=sqlerror");
            echo "<b>else pre hhhhhh</b>";
            exit();
        } else {
            
            mysqli_stmt_bind_param($stmt, "s", $login);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("location: ../register.php?error=usertaken&mail=" . $email);
                exit();
            } else {
                echo "<b>hhhhhh</b>";
                $sql = "INSERT INTO  utilisateurs ( nom_uti ,  email_uti ,  tele ,  pwd_uti ,  type1 ) VALUES ( ?, ?, ?, ?, 1) ";
                $stmt = mysqli_stmt_init($link);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: ../register.php?error=sqlerror");
                    exit();
                } else {
                    $hashedPwd = password_hash($pwd1, PASSWORD_DEFAULT);


                    mysqli_stmt_bind_param($stmt, "ssss", $login, $email, $tele, $hashedPwd);
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
