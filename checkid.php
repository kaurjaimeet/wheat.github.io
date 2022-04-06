
<?Php

$id=$_GET['id'];
// Checking data it is a number or not
if(!is_numeric($id)){
echo "Data Error";
exit;
}
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

$count="SELECT * FROM Transcripts WHERE where id=?";


if($stmt = $connection->prepare($count)){
  $stmt->bind_param('i',$id);
  $stmt->execute();

 $result = $stmt->get_result();
 echo "No of records : ".$result->num_rows."<br>";
 $row=$result->fetch_object();
 echo "<table>";
 
                echo "<tr bgcolor=' #f4d03f'><th colspan=2>Protein Family</th></tr>";
               echo "<tr><td bgcolor='#e9f7ef'>Sequence Id</td><td bgcolor='14e7ea'>".$row['Sequence_Id']."</td></tr>";
               echo "<tr><td>hmm_acc</td><td bgcolor='#d2b4de'>".$row['hmm_acc']."</td></tr>";
                echo "<tr><td>hmm_name</td><td>".$row['hmm_name']."</td></tr>";
               echo "<tr><td>hmm_start</td><td>".$row['hmm_start']."</td></tr>";
                echo "<tr><td>hmm_end</td><td>".$row['hmm_end']."</td></tr>";

		echo "</tr>"; 

    }

print_r($arr1);  

 

 echo "</table>"; 
} else {
    echo "0 results";
}

