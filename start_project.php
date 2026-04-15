<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Start Project</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<script>
function toggleMenu() {
    document.getElementById("navLinks").classList.toggle("active");
}
</script>
<body>

<div class="navbar">
    <div class="logo">Buildora</div>

    <div class="menu-toggle" onclick="toggleMenu()">
        ☰
    </div>

    <div class="nav-links" id="navLinks">
        <a href="dashboard.php">Dashboard</a>
        <a href="start_project.php">Start Project</a>
        <a href="logout.php">Logout</a>
    </div>
</div>
<div class="container">
    <div class="form-box">
        <h2>Start New Project</h2>

        <form action="guide.php" method="POST">
            
            <input type="text" name="project_name" placeholder="Project Name" required>

            <select name="project_type" required>
                <option value="">Select Project Type</option>
                <option value="undergraduate">Undergraduate Project</option>
                <option value="web">Web Application</option>
                <option value="mobile">Mobile App</option>
            </select>

            <select name="format" required>
                <option value="">Select Format</option>
                <option value="php">PHP & MySQL</option>
                <option value="html">HTML/CSS/JS</option>
                <option value="kotlin">Kotlin (Android)</option>
            </select>

            <button type="submit">Start Guide</button>

        </form>
    </div>
</div>

</body>
</html>