<?php
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


$sql = "SELECT Sequence, Sequence_Id FROM Transcriptsc273";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
echo "<table align=center border=1 width='50%'>"; 
        
       # echo "<th>Sequence_Id</th>"; 
       # echo "<th></th>"; 
        
echo "</tr>"; 
    while($row = $result->fetch_assoc()) {
    # echo "<tr>"; 
         #   echo "<td>".$row['Sequence_Id']."</td>"; 
         #  # echo "<td>".$row['Sequence']."</td>"; 
        #  $arr1 = str_split($row['Sequence'], 60);
	#echo "</tr>";  


#wordwrap($str,15,"<br>\n");
		echo "<tr><td>Sequence Id</td><td>".$row['Sequence_Id']."</td></tr>"; 
           	echo "<tr><td>Sequence</td><td>".wordwrap($row['Sequence'],60,'<br>', TRUE)."</td></tr>";  
          
		echo "</tr>"; 

    }

print_r($arr1);  

 

 echo "</table>"; 
} else {
    echo "0 results";
}

$conn->close();
?>
