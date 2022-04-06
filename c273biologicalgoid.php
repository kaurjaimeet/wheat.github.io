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


$sql = "SELECT GO_id,TERM,number FROM c273biological";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
echo "<table border=1>"; 
        echo "<tr>"; 
        echo "<th bgcolor=' #ff6699'>GO_ID</th>"; 
        echo "<th bgcolor='#ffb3cc'>Term</th>"; 
        echo "<th bgcolor='#ffb3ff'>Number</th>";
echo "</tr>";

    while($row = $result->fetch_assoc()) {
     echo "<tr>"; 
            echo "<td bgcolor='#ff6699'>".$row['GO_id']."</td>"; 
            echo "<td bgcolor='#ffb3cc'>".$row['TERM']."</td>"; 
            echo "<td bgcolor='#ffb3ff'>".$row['number']."</td>"; 
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

