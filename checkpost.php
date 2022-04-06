<?php
$name=$_GET["Seq_Id"];
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



$sql="SELECT * FROM Transcripts WHERE Sequence_Id='$name'";
#$sql="SELECT * FROM Pfam WHERE Sequence_Id='$name'";
#$sql="SELECT * FROM Transcripts,blast,Pfam WHERE Transcripts.Sequence_Id=blast.Sequence_Id AND Transcripts.Sequence_Id = Pfam.Sequence_Id AND Transcripts.Sequence_Id ='$name'";
#$sql="SELECT * FROM Transcripts,blast,Pfam,mercator WHERE Transcripts.Sequence_Id=blast.Sequence_Id AND Transcripts.Sequence_Id = Pfam.Sequence_Id AND Transcripts.Sequence_Id = mercator.Sequence_Id AND Transcripts.Sequence_Id ='$name'";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
echo "<table align=center border=1 width='50%'>"; 
        
  
        
echo "</tr>";


    while($row = $result->fetch_assoc()) {
    



		echo "<tr bgcolor='#00BFFF' ><td><b>Sequence Id</b></td><td>".$row['Sequence_Id']."</td></tr>"; 
           	 
              echo "<tr bgcolor='#87CEFA'><td><b>Sequence</b></td><td align=justify>".wordwrap($row['Sequence'],66,'<br>', TRUE)."</td></tr>"; 
                	
              echo "<tr bgcolor='#FF1493'><th colspan=2>Functional Annotation</th></tr>";
                echo "<tr bgcolor='#ffe6ff'><td> Best Blast homolog</td><td>".$row['best_hit']."</td></tr>";
                echo "<tr bgcolor='#ffe6ff'><td>Function</td><td>".$row['description']."</td></tr>";
              
                echo "<tr bgcolor='#00BFFF'><th colspan=2>Protein family Detail</th></tr>";
              # echo "<tr><td>".$row['type']."</td><td>".$row['hmm_name']."</td></tr>";
              echo "<tr bgcolor='#87CEFA'><td>".$row['type']."</td><td>".$row['hmm_name']."</td></tr>";
               #echo "<tr><td></td><td>".$row['type']."</td></tr>";
              # echo "<tr><td>Name</td><td>".$row['hmm_name']."</td></tr>";
                echo "<tr bgcolor='#87CEFA'><td>hmm acc</td><td>".$row['hmm_acc']."</td></tr>";
                 echo "<tr bgcolor='#87CEFA'><td>Clan</td><td>".$row['clan']."</td></tr>";
                echo "<tr bgcolor='#6B8E23'><th colspan=2>Gene Ontology</th></tr>";
               
             echo "</tr>"; 


    }

print_r($arr1);  

 

 echo "</table>"; 
} else {
    echo "0 results";
}

?>


