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

#$sql="SELECT * FROM blast WHERE Sequence_Id='$name'";
#$sql = "SELECT Sequence, Sequence_Id FROM Transcripts WHERE Sequence_Id ='$name'";
$sql="SELECT * FROM Transcripts,blast WHERE Transcripts.Sequence_Id=blast.Sequence_Id AND Transcripts.Sequence_Id ='$name'";
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



		echo "<tr><td>Sequence Id</td><td>".$row['Sequence_Id']."</td></tr>"; 
           	echo "<tr><td>Sequence</td><td>".wordwrap($row['Sequence'],60,'<br>', TRUE)."</td></tr>";  
                echo "<tr><td>Annotation</td><td>".$row['']."</th></tr>";
                #echo "<tr><td colspan="2">Monthly Savings</td></tr>";
                echo "<tr><td> Best Hit</td><td>".$row['best_hit']."</td></tr>";
                echo "<tr><td>Description</td><td>".$row['description']."</td></tr>";
		echo "</tr>"; 

    }

print_r($arr1);  

 

 echo "</table>"; 
} else {
    echo "0 results";
}

?>


