<?php

$link = mysqli_connect("localhost", "root", "admin", "WHEAT");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM Transcripts";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                
             echo "<th>Sequence_Id</th>";
             echo "<th>Sequence</th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Sequence_Id'] . "</td>";
                echo "<td>" . $row['Sequence'] . "</td>";
                
            echo "</tr>";
        }
if($_POST["GC"]==1){
                // calculate G+C content
                $result.=GC_content($seq);
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
