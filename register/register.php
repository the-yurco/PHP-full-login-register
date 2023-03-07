<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../styles/register.css">
</head>

<body>
    <h1>REGISTER</h1>
    <form action="register_auth.php" method="post">

        <?php
        if (isset($_GET['err'])) {
            echo ('<p class="error">' . $_GET['err'] . '</p>');
        }

        ?>
        <div class="inputs">
            <label for="meno"><strong>Name:</strong></label><br>
            <input type="text" id="meno" name="name" placeholder="Name" class="input_meno"><br>

            <label for="meno"><strong>User Name:</strong></label><br>
            <input type="text" id="meno" name="username" placeholder="User Name" class="input_meno"><br>

            <label for="Heslo"><strong>Password:</strong></label><br>
            <input type="password" id="heslo" name="password" placeholder="Password"><br>

            <label for="Heslo"><strong>Re Password:</strong></label><br>
            <input type="password" id="heslo" name="re_password" placeholder="Re_Password"><br>
        </div>

        <button type="submit"><strong>Register</strong></button>
        <a href="../login/index.php">Already have an account</a>


    </form>
</body>

</html>