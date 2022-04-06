<html>
<head>
<title>sequence</title>
</head>
<body>
 
<form method="post">
Gene Ontology : <input type="text" name="Go_id"><br/>
<input type="submit" value="SELECT" name="Submit1"> <br/>
 
 </form>

<?php
$name=$_POST["Go_id"];
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


$sql = "SELECT GO_ID,Term,Number FROM Biological WHERE GO_ID ='$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
echo "<table border=1>"; 
        echo "<tr>"; 
        echo "<th>GO_ID</th>"; 
        echo "<th>Term</th>"; 
        echo "<th>Number</a></th>"; # link with other list

echo "</tr>"; 
    while($row = $result->fetch_assoc()) {
     echo "<tr>"; 
            echo "<td>".$row['GO_ID']."</td>"; 
            echo "<td>".$row['Term']."</td>"; 
            echo "<td><a href='0001850.txt'>".$row['Number']."</td>";
echo "</tr>";  
    }
 echo "</table>"; 
} else {
    echo "0 results";
}

$conn->close();
?>
</body>
</html>

