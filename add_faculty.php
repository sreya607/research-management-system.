<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Faculty</title>
    <link rel="stylesheet" href="/research_management/style.css">
</head>
<body>

<h1>Add Faculty</h1>

<form method="POST">
    <input type="text" name="name" placeholder="Faculty Name" required><br>
    <input type="text" name="department" placeholder="Department" required><br>
    <input type="text" name="expertise" placeholder="Expertise" required><br>
    <input type="submit" name="submit" value="Add Faculty">
</form>

<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $dept=$_POST['department'];
    $exp=$_POST['expertise'];

    $sql="INSERT INTO faculty(name,department,expertise)
          VALUES('$name','$dept','$exp')";

    if($conn->query($sql)){
        echo "<p>Faculty Added Successfully!</p>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

</body>
</html>