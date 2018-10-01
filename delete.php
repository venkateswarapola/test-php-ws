<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="./styles.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container">
		<h1>Delete</h1>
		<br>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	
		<div class="form-group">
			<label>Email:</label>
			<input type="Email" name="email" class="form-control">
		</div>	
		
		
		<div class="form-group">
			<button type="submit" class="btn btn-default">Submit</button>
		</div>
	</form>
    <a href="main.html"><button  type="submit"></button></a>
	</div>
    <?php
include('connect.php');
if ($_SERVER["REQUEST_METHOD"]=="POST")
{       
$Email=$_POST['email']; 
 // sql to delete a record
$sql = "DELETE FROM details WHERE Email='$Email'";
 if ($conn->query($sql) === TRUE) {
echo"<script>
    window.alert('User deleted');
</script>";
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
}
 $conn->close();
?>
<?php
include('connect.php');
$sqla = "SELECT * from details";
            $temp=1;
            $result = $conn->query($sqla);
            if($result->num_rows>0)
            {
                echo "<div><table class=\"table table-striped table-test\">" .
                    "<tr><th>Name</th><th>Email</th><th>Phone</th></tr>";
                $position=1;                
                while($row=$result->fetch_assoc())
                {
                     
                        global $position;
                        echo "<tr class=''>" .
                            "<td>".$position."</td>" .
                             "<td>".$row['name']."</td>" .
                            "<td>".$row['Email']."</td>" .
                            "<td>".$row['Phone']."</td>" .
                                "</tr>";
                        $position=$position+1;
                                         
                } 
                
                echo "</table>";
            }
 ?>
</body>
</html> 