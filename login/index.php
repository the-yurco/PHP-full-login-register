<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>

<body>
    <div class="container">
        <h1>LOGIN</h1>
        <form action="./login.php" method="post">

            <?php
            if (isset($_GET['err'])) {
                echo ('<p class="error">' . $_GET['err'] . '</p>');
            }

            ?>
            <div class="inputs">
                <label for="meno"><strong>Name:</strong></label><br>
                <input type="text" id="meno" name="meno" placeholder="Name" class="input_meno"><br>

                <label for="Heslo"><strong>Password:</strong></label><br>
                <input type="password" id="heslo" name="heslo" placeholder="Password"><br>
            </div>

            <button type="submit"><strong>Login</strong></button>
            <a href="../register/register.php">Create an account</a>


        </form>
    </div>
</body>

</html>