<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="register">

<div class="container">
    <div class="form-box">
        <h2>Create Account</h2>

        <form method="POST">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit" name="register">Register</button>

            <p>Already have an account? 
                <a href="index.php">Login</a>
            </p>
        </form>

        <?php
        if (isset($_POST['register'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (name, email, password) 
                    VALUES ('$name', '$email', '$password')";

            if ($conn->query($sql)) {
                echo "<p style='color:green;'>Registration successful</p>";
            } else {
                echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
            }
        }
        ?>

    </div>
</div>

</body>
</html>