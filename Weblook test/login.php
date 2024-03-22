<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>

    <?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $database = "weblook";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die ("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM details WHERE Email='$email' AND Password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            session_start();
            $_SESSION['email'] = $email;
            header("Location: index.php");
            exit();
        } else {
            // echo "<p>Invalid email or password. Please try again.</p>";
        }
    }

    $conn->close();
    ?>
</body>

</html>