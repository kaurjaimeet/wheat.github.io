<?php
$name=$_POST["go_nam"];
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

$sql="SELECT * FROM pfam_check WHERE type ='$name'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
echo "<table align= center border=1 width='50%'>"; 
        
     
echo "</tr>"; 
    while($row = $result->fetch_assoc()) {
    

		
                
                 echo "<tr><th colspan=2>protein</th></tr>";
                echo "<tr><td>GO ID</td><td>".$row['Sequence_Id']."</td></tr>";
                echo "<tr><td>Term</td><td>".$row['type']."</td></tr>";
                echo "<tr><td>Number</td><td>".$row['hmm_acc']."</td></tr>";
               
		
echo "</tr>"; 

    }

print_r($arr1);  

 

 echo "</table>"; 
} else {
    echo "0 results";
}

?>


