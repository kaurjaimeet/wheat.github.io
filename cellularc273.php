
<?php include 'homepage.php';?>
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


$sql = "SELECT GO_id,TERM,number FROM c273celllar";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
echo "<table border=1>"; 
        echo "<tr>"; 
        echo "<th bgcolor='  #d2b4de '>GO_ID</th>"; 
        echo "<th bgcolor=' #bb8fce '>Term</th>"; 
        echo "<th bgcolor=' #ecc1f6 '>Number of Sequences</th>";
echo "</tr>"; 
    while($row = $result->fetch_assoc()) {
     echo "<tr>"; 
            echo "<td bgcolor='  #d2b4de '>".$row['GO_id']."</td>"; 
            echo "<td bgcolor=' #bb8fce '>".$row['TERM']."</td>"; 
            echo "<td bgcolor=' #ecc1f6 '>".$row['number']."</td>"; 
echo "</tr>";  
    }
 echo "</table>"; 
} else {
    echo "0 results";
}

$conn->close();
?>
<form>
  <form action="indexhome.php" method="get">
 <input type="button" value="Go back!" onClick="history.go(-1);">
</form>
