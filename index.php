<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/Icon.png">
    <link rel="stylesheet" href="css/style.css">
    <title>TP1</title>
</head>
<body>
<?php $LoginValid = "";?>
    <div class="L_Form">
        <form action="Login.php" method="post">
                <b class='LoginValid'><?php echo $LoginValid ?></b>
                <label for="Username">Username</label>
                <p><input type="text" placeholder="Username" name="Username"></p>
                <label for="Password">Password</label>
                <p><input type="password" placeholder="Password" name="Password"></p>
               <p><input type="submit" name='submit' value="Login"></p>
        </form>
    </div>
    
</body>
</html>