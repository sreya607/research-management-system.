<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
    <link rel="stylesheet" href="/research_management/style.css">
</head>
<body>

<h2>Student List</h2>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Course</th>
    <th>Year</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM students");
while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['student_id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['course']}</td>
            <td>{$row['year']}</td>
          </tr>";
}
?>
</table>

</body>
</html>