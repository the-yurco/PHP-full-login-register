<?php

session_start();


include './funkcie.php';


if (isset($_POST['meno']) && isset($_POST['heslo'])) {
    $meno = validate($_POST['meno']);
    $heslo = validate($_POST['heslo']);
    $dbMeno = $_SESSION['meno'];
    $dbHeslo = $_SESSION['heslo'];

    if (empty($meno)) {
        header("Location: index.php?err=Meno aj heslo uživateľa je povinné");
        exit();
    } elseif (empty($heslo)) {
        header("Location: index.php?err=Heslo uživateľa je povinné");
        exit();
    } else {
        if ($dbMeno == $meno && $dbHeslo == $heslo) {
            $_SESSION['meno'] = $meno;
            header("Location: ./pages/home.php");
            exit();
        } else {
            header("Location: index.php?err=Nesprávne meno, alebo heslo");
            exit();
        }
    }
} else {
    header("Location: index.php");
    exit();
}
