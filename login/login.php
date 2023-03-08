<?php

// This line starts a PHP session, which allows you to store and retrieve data across multiple pages on a website. In this case, the session is being used to store the user's login credentials.
session_start();

// This file likely contains some custom functions or code that is needed by this script
include './funkcie.php';

//  $_POST is a PHP superglobal variable that contains all of the form data submitted via the POST method
if (isset($_POST['meno']) && isset($_POST['heslo'])) {

    // These lines use a custom function named "validate" to sanitize and validate the "meno" "heslo" field submitted via the form.
    $meno = validate($_POST['meno']);
    $heslo = validate($_POST['heslo']);

    // These lines retrieve the user's stored login credentials from the PHP session and store them in the $dbMeno and $dbHeslo variables.
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
