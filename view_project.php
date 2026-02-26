<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>View Projects</title>
    <link rel="stylesheet" href="/research_management/style.css">
</head>
<body>

<h2>Project List</h2>

<table>
<tr>
    <th>ID</th>
    <th>Project Name</th>
    <th>Start</th>
    <th>End</th>
    <th>Status</th>
    <th>Faculty ID</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM projects");
while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['project_id']}</td>
            <td>{$row['project_name']}</td>
            <td>{$row['start_date']}</td>
            <td>{$row['end_date']}</td>
            <td>{$row['status']}</td>
            <td>{$row['faculty_id']}</td>
          </tr>";
}
?>
</table>

</body>
</html>