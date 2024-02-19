
<?php
include ('db_conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/png" href="yum.png">

    <title>Sign up</title>
</head>
<body background="food.jpg">
    <div class="login-container">
        <form method="POST" action="" class="login-form">
            <h2>Create an account</h2>
            
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="username">username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
            <button type="submit">Continue</button>
            <a href="login.php">Already have an account? login</a>
        </form>
    </div>
    <?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $username= $_POST['username'];
    $password=$_POST['password'];
    
    $ins = $conn->query("insert into registration(name, username, password) values('$name','$username','$password')");
}
?>
</body>
</html>