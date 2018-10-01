<!DOCTYPE html>
<html>
<head>
<title>leader Board</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
<?php
$q = intval($_GET['q']);
$servername="localhost";
$username="root";
$password="";
$dbname="test";
$conn = new mysqli($servername,$username,$password,$dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}
$sql="SELECT * FROM details WHERE name ='".$q."'";
$result = mysqli_query($conn,$sql);
echo "<table>
<tr>
<th>NAME</th>
<th>PHONE NUMBER</th>
<th>EMAIL</th>
</tr>";
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</tr>";
}
echo "</table>";
$conn->close();;
?>
</body>
</html>