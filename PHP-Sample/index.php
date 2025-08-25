<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        echo "<p>Username: $username</p>";
        echo "<p>Password: $password</p>";
    }
    ?>

    <form method="POST" action="">
        <h1>Welcome User</h1>
        <label>Username: <input type="text" name="username"></label><br>
        <label>Password: <input type="password" name="password"></label><br>
        <input type="submit" value="Login">
    </form>

</body>
</html>