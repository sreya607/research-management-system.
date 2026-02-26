<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>View Faculty</title>
    <link rel="stylesheet" href="/research_management/style.css">
</head>
<body>

<h2>Faculty List</h2>

<table border="1" cellpadding="8">
<tr>
    <th>Faculty ID</th>
    <th>Faculty Name</th>
    <th>Department</th>
    <th>Email</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM faculty");

while($row = $result->fetch_assoc()){
    echo "<tr>
            <td>".$row['faculty_id']."</td>
            <td>".$row['faculty_name']."</td>
            <td>".$row['department']."</td>
            <td>".$row['email']."</td>
          </tr>";
}
?>
</table>

</body>
</html>