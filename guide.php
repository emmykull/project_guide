<?php
session_start();

if (!isset($_POST['project_name']) || !isset($_POST['project_type'])) {
    header("Location: start_project.php");
    exit();
}

$project_name = $_POST['project_name'];
$type = $_POST['project_type'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Project Guide</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<script>
function toggleMenu() {
    document.getElementById("navLinks").classList.toggle("active");
}
</script>

<script>
const checkboxes = document.querySelectorAll("input[type='checkbox']");
const progressText = document.getElementById("progressText");

checkboxes.forEach(cb => {
    cb.addEventListener("change", updateProgress);
});

function updateProgress() {
    let checked = document.querySelectorAll("input[type='checkbox']:checked").length;
    let total = checkboxes.length;

    let percent = Math.round((checked / total) * 100);
    progressText.innerText = "Progress: " + percent + "%";
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

        <h2><?php echo $project_name; ?></h2>

        <?php
if ($type == "undergraduate") {
    echo "<h3>🎓 Supervisor Mode Activated</h3>";

    echo "<form>";
    echo "<p><b>Supervisor:</b> Let's begin your undergraduate project step-by-step.</p>";
    echo "<label><input type='checkbox'> Choose project topic</label><br>";
    echo "<label><input type='checkbox'> Write Chapter 1</label><br>";
    echo "<label><input type='checkbox'> Literature Review</label><br>";
    echo "<label><input type='checkbox'> Methodology</label><br>";
    echo "<label><input type='checkbox'> Implementation</label><br>";
    echo "<label><input type='checkbox'> Testing & Conclusion</label><br>";
    echo "<label><input type='checkbox'> Prepare Defense</label><br>";
    echo "</form>";

    echo "<p id='progressText'>Progress: 0%</p>";
}
?>

    </div>
</div>

</body>
</html>