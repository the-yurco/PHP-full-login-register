<?php

session_start();

include '../login/funkcie.php';


if (isset($_POST['name']) && isset($_POST['password']) && (isset($_POST['username'])) && isset($_POST['re_password'])) {
    $meno = validate($_POST['name']);
    $username = validate($_POST['username']);
    $heslo = validate($_POST['password']);
    $repassword  =  validate($_POST['re_password']);

    // $DB_name = $meno;
    // $DB_password = $DB_password;

    if (empty($meno) || empty($heslo) || empty($repassword) || empty($username)) {
        header("Location: register.php?err=Vyplnte vsetky polia");
        exit();
    } elseif (strlen($heslo) < 3) {
        header("Location: register.php?err=Heslo uživateľa musi mat minimalne 3 znaky a maximalne 10 znakov");
        exit();
    } elseif (strlen($heslo) > 10) {
        header("Location: register.php?err=Heslo uživateľa musi mat MAXIMALNE 10 znaky a maximalne 10 znakov");
        exit();
    } else {
        if ($heslo == $repassword) {
            $_SESSION['meno'] = $meno;
            $_SESSION['password'] = $heslo;
            $_SESSION['username'] = $username;
            header("Location: ../login/index.php");
            exit();
        } else {
            header("Location: register.php?err=Nesprávne meno, alebo heslo");
            exit();
        }
    }
} else {
    header("Location: index.php");
    exit();
}
