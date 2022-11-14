<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
    <h1>สมัครสมาชิก</h1>
    </div>
    <form action="register" method="post">
        <?php include('errors.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
    <div class="input-group">
    <label for="name">name</label>
        <input type="text" name="name">
</div>
<div class="input-group">
        <br><label for="email">email</label>
        <input type="text" name="email">
</div>
<div class="input-group">
        <br><label for="password">password</label>
        <input type="password" name="password">
</div>
<button type="reset">reset</button>
<p>Already a member?<a href="login.php">Sign in</a></p>
</body>
</html>