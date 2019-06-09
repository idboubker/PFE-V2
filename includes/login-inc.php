    <?php
    // 
    if (!isset($_POST['email'], $_POST['pwd'])) {
        header('Location: ../authentification.php?error=reqfieldusr');
        exit;
    }
    if (empty($_POST['email']) || empty($_POST['pwd'])) {

        if (empty($_POST['email']) && empty($_POST['pwd'])) {
            header('Location: ../authentification.php?error=reqfields'); exit();
        }
        if (empty($_POST['email'])) {
            header('Location: ../authentification.php?error=reqfieldusr');
        }
        else if(empty($_POST['pwd']))
        {header('Location: ../authentification.php?error=reqfieldpwd&login='.$_POST['email']);}
        exit;
    }
    if (!isset($_POST['account_type'])) {
        header('Location: ../authentification.php?error=account type error');
    }
    session_start();
    include '../connexion.php';
    if (isset($_POST['account_type']) && $_POST['account_type'] == 'hirafy') {
        $stmt = mysqli_prepare($link, 'SELECT * FROM artisan WHERE email_art = ?');
        mysqli_stmt_bind_param($stmt, 's', $_POST['email']);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_assoc($result);


        if (!$user) {
            header('Location: ../authentification.php?error=user');
            exit;
        }

        if (!password_verify($_POST['pwd'], $user['pwd_art'])) {
            header('Location: ../authentification.php?error=pwd&login='.$_POST['email']);
            exit;
        }

        $_SESSION['username'] = $user['email_art'];
		$_SESSION['id_art'] = $user['id_art'];
        header("location: ../dashboard/index.php");
    } else if (isset($_POST['account_type']) && $_POST['account_type'] == 'basic') {
        $stmt = mysqli_prepare($link, 'SELECT * FROM utilisateurs WHERE email_uti = ?');
        mysqli_stmt_bind_param($stmt, 's', $_POST['email']);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_assoc($result);
       // $hashedPwdA = password_hash($_POST['pwd'], PASSWORD_DEFAULT);

        if (!$user) {
            header('Location: ../authentification.php?error=user not found');
            exit;
        }
        if (!password_verify($_POST['pwd'], $user['pwd_uti'])) {
            header('Location: ../authentification.php?error=password incorrect');
            exit;
        }
        $_SESSION['username'] = $user['email_uti'];
		$_SESSION['id_uti']= $user['id_uti'];
        header("location: ../index.php?login=success");
    }
