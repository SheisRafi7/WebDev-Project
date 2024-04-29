<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check credentials (Replace with your own authentication logic)
    $username = "admin";
    $password = "password";

    if ($_POST["username"] == $username && $_POST["password"] == $password) {
        $_SESSION["username"] = $username;
        header("Location: products.php"); // Redirect to products page after successful login
        exit;
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
