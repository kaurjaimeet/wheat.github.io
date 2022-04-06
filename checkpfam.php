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



$sql="SELECT * FROM Pfam WHERE type LIKE '%$name%'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

echo "<table align=center border=1 width='50%'>"; 
        
      
        
echo "</tr>"; 
    while($row = $result->fetch_assoc()) {
   


                
                echo "<tr bgcolor=' #f4d03f'><th colspan=2>Protein Family</th></tr>";
               echo "<tr><td bgcolor='#e9f7ef'>Sequence Id</td><td bgcolor='14e7ea'>".$row['Sequence_Id']."</td></tr>";
                echo "<tr bgcolor='FFB6C1'><td>".$row['type']."</td><td>".$row['hmm_name']."</td></tr>";
                echo "<tr bgcolor='FFF8DC'><th colspan=3>Alignment</th></tr>";
                echo "<tr bgcolor='D2B48C'><td> Start</td><td>".$row['alignment_start']."</td></tr>";
               echo "<tr bgcolor='D2B48C'><td> End</td><td>".$row['alignment_end']."</td></tr>";
                echo "<tr bgcolor='4682B4'><th colspan=2>Envelope</th></tr>";
               echo "<tr bgcolor='87CEEB'><td>Start</td><td>".$row['envelope_start']."</td></tr>";
               echo "<tr bgcolor='87CEEB'><td>End</td><td>".$row['envelope_end']."</td></tr>";
               echo "<tr bgcolor='66CDAA'><th colspan=2>hmm</th></tr>";
               echo "<tr bgcolor='8FBC8F'><td>Acc</td><td>".$row['hmm_acc']."</td></tr>";
                echo "<tr bgcolor='8FBC8F'><td> Start</td><td>".$row['hmm_start']."</td></tr>";
                echo "<tr bgcolor='8FBC8F'><td> end</td><td>".$row['hmm_end']."</td></tr>";
                echo "<tr bgcolor='8FBC8F'><td>Length</td><td>".$row['hmm_length']."</td></tr>";
                echo "<tr bgcolor='EE82EE'><th colspan=2>Other Information</th></tr>";
                echo "<tr bgcolor='DDA0DD'><td>Bit Score</td><td>".$row['bit_score']."</td></tr>";
                echo "<tr bgcolor='DDA0DD'><td>E value</td><td>".$row['e-value']."</td></tr>";		
                echo "<tr bgcolor='DDA0DD'><td>Significance</td><td>".$row['significance']."</td></tr>";
                echo "<tr bgcolor='DDA0DD'><td>Clan</td><td>".$row['clan']."</td></tr>";

		echo "</tr>"; 

    }

print_r($arr1);  

 

 echo "</table>"; 
} else {
    echo "0 results";
}

?>


