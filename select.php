<html>
<head>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) 
        {
            xmlhttp = new XMLHttpRequest();
        } else 
        {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
         {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<form>
<select name="users" onchange="showUser(this.value)">
  <option value="">Select a person:</option>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM  details ";
$result=$conn->query($sql);
 if ($result->num_rows > 0)
 {
  while($row = $result->fetch_assoc())
  {
  echo "<option value=".$row["name"].">".$row["name"]."</option>";
  }
 }
 $conn->close();
 ?>
  </select>
</form>
<div id="txtHint"><b>Person info will be listed here...</b>
</div>

</body>
</html>