
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


$sql = "SELECT GO_ID,Term,Number FROM cellular";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
echo "<table border=1>"; 
        echo "<tr>"; 
        echo "<th bgcolor='#58ACFA'>GO_ID</th>"; 
        echo "<th bgcolor='#81DAF5'>Term</th>"; 
        echo "<th bgcolor='#81F7F3'>Number of Sequences</th>";
echo "</tr>"; 
    while($row = $result->fetch_assoc()) {
     echo "<tr>"; 
            echo "<td bgcolor='#58ACFA'>".$row['GO_ID']."</td>"; 
            echo "<td bgcolor='#81DAF5'>".$row['Term']."</td>"; 
            echo "<td bgcolor='#81F7F3'>".$row['Number']."</td>"; 
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
