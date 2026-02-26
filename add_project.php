<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Project</title>
    <link rel="stylesheet" href="/research_management/style.css">
</head>
<body>

<h1>Add Project</h1>

<form method="POST">
    <input type="text" name="project_name" placeholder="Project Name" required><br><br>
    <input type="date" name="start_date" required><br><br>
    <input type="date" name="end_date" required><br><br>
    <input type="number" name="faculty_id" placeholder="Faculty ID" required><br><br>
    <input type="submit" name="submit" value="Add Project">
</form>

<?php
if(isset($_POST['submit'])){

    $project_name = $_POST['project_name'];
    $start_date   = $_POST['start_date'];
    $end_date     = $_POST['end_date'];
    $faculty_id   = $_POST['faculty_id'];

    $sql = "INSERT INTO projects 
            (project_name, start_date, end_date, status, faculty_id)
            VALUES 
            ('$project_name', '$start_date', '$end_date', 'Ongoing', '$faculty_id')";

    if($conn->query($sql)){
        echo "<p>Project Added Successfully!</p>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

</body>
</html>