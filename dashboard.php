<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<script>
function toggleMenu() {
    document.getElementById("navLinks").classList.toggle("active");
}
</script>
<body class="dashboard">
    <div class="navbar">
    <div class="logo">ProjectPal</div>

    <div class="menu-toggle" onclick="toggleMenu()">
        ☰
    </div>

    <div class="nav-links" id="navLinks">
        <a href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
        <a href="start_project.php"><i class="fa fa-play"></i> Start Project</a>
        <a href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
    </div>
</div>

<div class="container">
    <div class="form-box">
        <h2>Welcome, <?php echo $_SESSION['name']; ?> 👋</h2>

        <p>What would you like to do?</p>

        <button onclick="location.href='start_project.html'">
            Start New Project
        </button>

        <br><br>

        <button onclick="location.href='continue_project'">
            Continue Project
        </button>
    </div>
</div>

</body>
</html>
