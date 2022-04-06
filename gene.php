<?php include 'homepage.php';?>
<br>
<br>

<?php
$name=$_POST["Seq_id"];
$servername = "localhost";
$username = "root";
$password = "admin";
$dbName = "WHEAT";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql="SELECT * FROM blast WHERE Sequence_Id='$name'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

echo "<table align=center border=1 width='50%'>"; 
        
      
        
echo "</tr>"; 
$counter = 1;
    while($row = $result->fetch_assoc()) {
   


                
                echo "<tr bgcolor='#ffad33'><th colspan=2> $counter Gene Ontology</th></tr>";
               echo "<tr bgcolor='#ffebcc'><td>Sequence Id</td><td>".$row['Sequence_Id']."</td></tr>";
               echo "<tr bgcolor='#ffe6ff'><td>Number of Go terms</td><td>".$row['GO']."</td></tr>";
                echo "<tr bgcolor='#e3e56a'><td>Go Id</td><td>".$row['GO_Id']."</td></tr>";
                echo "<tr bgcolor='#90EE90'><td>Description</td><td>".$row['GO_names']."</td></tr>";
                

		echo "</tr>"; 

$counter++; //increment counter by 1 on every pass
    }

print_r($arr1);  

 

 echo "</table>"; 
} else {
    echo "0 results";
}

?>

<form>
  <form action="indexhome.php" method="get">
 <input type="button" value="Go back!" onClick="history.go(-2);">
</form>

</body>
</html>
