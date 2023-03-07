<?php
session_start();

if (isset($_SESSION['meno'])) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../styles/home.css">
        <title>Home</title>
    </head>

    <body>
        <div class="wrapper">
            <h1>Ahoj, <?php echo ($_SESSION['meno']); ?></h1>
            <a href="../pages/logout.php">Logout</a>
        </div>
    </body>

    </html>

<?php
} else {
    header("Location: ../login/index.php");
    exit();
}


?>