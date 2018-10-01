<!DOCTYPE HTML>
 <html>
  <head> 
    <title>Register</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     </head>
<div class="container">
<br></br>
<br></br>
  <div>
      <div class="container">
                <form method="POST">
                <div class="form-group"> 
                    <label for="name">Name</label>
                     <input type="text" class="form-control" name="name">
                        </div>
                     <div class="form-group">                
                     	<label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                        <div class="form-group">
                         
                          <label for="email">Email</label>
                           <input type="text" class="form-control" name="email">
                             </div> 
                        <input id="button" type="submit" name="submit" value="Sign-Up">
                          
                    </form> 
                   </table> 
                
               </div> 
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="test";
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed" . $conn->connect_error);
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["name"])||empty($_POST["phone"])||empty($_POST["email"]))
	{
		echo "<script type='text/javascript'>alert('Invalid or Empty Input');</script>";
	}

    else
    {
	    $sql="INSERT INTO details(
	    name,phone,email)VALUES('$name','$phone','$email')";
	    if($conn->query($sql)===TRUE)
	  {
		echo "<script type='text/javascript'>alert('Entry Successfull');</script>";
	  }
    }
}
$conn->close();
?>
</body>
</html>