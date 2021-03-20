<?php
require_once 'includes/header.php';
?>

    <h1>Login</h1>
    <p>NO ACCOUNT? <a href="register.php">Register here!</a></p>

    <form action="" method="post">
        <input type="text" name="username" id="username" placeholder="Username">
        <input type="password" name="password" id="password" placeholder="Password">
        <button type="submit" name="submit">Login</button>
    </form>
<?php
    require_once 'includes/footer.php';
?>