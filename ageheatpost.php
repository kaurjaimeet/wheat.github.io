
<?php include 'homepage.php';?>
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



#$sql="SELECT * FROM ageheat WHERE Sequence_Id='$name'";
#$sql="SELECT * FROM Pfam WHERE Sequence_Id='$name'";
#$sql="SELECT * FROM Transcripts,blast,Pfam WHERE Transcripts.Sequence_Id=blast.Sequence_Id AND Transcripts.Sequence_Id = Pfam.Sequence_Id AND Transcripts.Sequence_Id ='$name'";
$sql="SELECT * FROM ageheat,ageheatsequence,mercator WHERE ageheat.Sequence_Id=ageheatsequence.Sequence_Id AND ageheat.Sequence_Id=mercator.Sequence_Id AND ageheat.Sequence_Id  ='$name'";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
echo "<table align=center border=1 width='50%'>"; 
        
  
        
echo "</tr>";


    while($row = $result->fetch_assoc()) {
    



		echo "<tr bgcolor=' #f8c471 ' ><td><b>Sequence Id</b></td><td>".$row['Sequence_Id']."</td></tr>"; 
           	 
                	
              echo "<tr bgcolor='#FF1493'><th colspan=2>Functional Annotation</th></tr>";
                echo "<tr bgcolor='#ffe6ff'><td> Best Blast homolog</td><td>".$row['best_hit']."</td></tr>";
                echo "<tr bgcolor='#ffe6ff'><td>Function</td><td>".$row['description']."</td></tr>";
              
                echo "<tr bgcolor='#00BFFF'><th colspan=2>Protein family Detail</th></tr>";
             
              echo "<tr bgcolor='#87CEFA'><td><b> Type</b></td><td>".$row['pfam']."</td></tr>";
              
                
                echo "<tr bgcolor='#6B8E23'><th colspan=2>Transcripts Per Million</th></tr>";
                echo "<tr bgcolor=' #DAF7A6 '><td><b> TPM</b></td><td>".$row['TPM']."</td></tr>";
               
               echo "<tr bgcolor=' #f5bdcd '><th colspan=2>Fragments Per Kilobase of transcript per Million mapped reads</th></tr>";
               echo "<tr bgcolor='  #f5cba7  '><td><b> FPKM</b></td><td>".$row['FPKM']."</td></tr>";

            
echo "<tr bgcolor=' #f7dc6f '><td><b>Sequence</b></td><td align=justify>".wordwrap($row['Sequence'],66,'<br>', TRUE)."</td></tr>"; 
            echo "<tr bgcolor=' #a569bd '><th colspan=2>MERCATOR RESULTS</th></tr>";
echo "<tr bgcolor='#D8BFD8'><td><b>Description</td><td bgcolor='#DDA0DD'>".$row['location']."</td></tr>";
               echo "<tr bgcolor='#D8BFD8'><td><b>Function</td><td bgcolor='#DDA0DD'>".$row['function_in']."</td></tr>";
              echo "<tr bgcolor='#D8BFD8'><td><b>Involve In</td><td bgcolor='#DDA0DD'>".$row['involved_in']."</td></tr>";
               echo "<tr bgcolor='#D8BFD8'><td><b>Located In</td><td bgcolor='#DDA0DD'>".$row['located_in']."</td></tr>";
               
             echo "</tr>"; 


    }

print_r($arr1);  

 

 echo "</table>"; 
} else {
    echo "0 results";
}

?>

<form>
  <form action="indexhome.php" method="get">
 <input type="button" value="Go back!" onClick="history.go(-1);">
</form>

</body>
</html>
