<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="/research_management/style.css">
</head>
<body>

<h1>Add Student</h1>

<form method="POST">
    <input type="text" name="name" placeholder="Student Name" required><br>
    <input type="text" name="course" placeholder="Course" required><br>
    <input type="number" name="year" placeholder="Year" required><br>
    <input type="submit" name="submit" value="Add Student">
</form>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $course = $_POST['course'];
    $year = $_POST['year'];

    $sql = "INSERT INTO students(name, course, year)
            VALUES('$name','$course','$year')";

    if($conn->query($sql)){
        echo "Student Added Successfully!";
    } else {
        echo $conn->error;
    }
}
?>

</body>
</html>