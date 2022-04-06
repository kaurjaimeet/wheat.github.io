<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<h2>Mercator</h2>


<button class="collapsible"> Detail</button>
<div class="content">
<p>Aegilops Speltoides</p>
  <table align = "center" border="1 px solid black" frame="BOX" rules="NONE"> 
  <tr bgcolor ="#CCC">
  <td height="50">Reads </td>  
  <td height="50">27991059</td>
    </tr>
<tr bgcolor ="#FFF">
<td height="50">Reads</td> 	
<td height="50">Paired-end</td>

</tr>
<tr bgcolor ="#CCC">
    <td height="50">Contig N50 </td>  
    <td height="50">1402</td>
</tr>
<tr bgcolor ="#FFF">
    <td height="50">Total genes </td> 	
    <td height="50">94805</td>

  </tr>

</table>

</div>

<button class="collapsible">Transcript Assembly </button>
<div class="content">
<p>Aegilops Speltoides</p>
<a href="transcriptcheck.php">Sequences </a>

</div>

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


$sql="SELECT * FROM mercator WHERE Sequence_Id ='$name'";
#$sql="SELECT * FROM Pfam WHERE Sequence_Id='$name'";
#$sql = "SELECT Sequence, Sequence_Id FROM Transcripts WHERE Sequence_Id ='$name'";
#$sql="SELECT * FROM Transcripts,blast WHERE Transcripts.Sequence_Id=blast.Sequence_Id AND Transcripts.Sequence_Id ='$name'";
#$sql = "SELECT type,alignment_start, alignment_end FROM pfam_data WHERE seq_id ='$name'";
#$sql="SELECT * FROM Transcripts,blast,Pfam WHERE Transcripts.Sequence_Id=blast.Sequence_Id AND Transcripts.Sequence_Id = Pfam.Sequence_Id AND Transcripts.Sequence_Id ='$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
echo "<table align=center border=1 width='50%'>"; 
        
    
        
echo "</tr>"; 
    while($row = $result->fetch_assoc()) {
   
 if ($row["type"] == "Domain") {
         echo "<tr><td>Name</td><td>".$row['hmm_name']."</td></tr>";
    }



 	echo "<caption><b>MERCATOR RESULTS</b></caption>";
                
              
              
                echo "<tr bgcolor='D2B48C'><td> Bincode</td><td>".$row['bincode']."</td></tr>";
              
               

               echo "<tr bgcolor='87CEEB'><td>Name</td><td>".$row['name']."</td></tr>";
               echo "<tr bgcolor='FFB6C1'><td>Location</td><td>".$row['location']."</td></tr>";
               echo "<tr bgcolor='FFF8DC'><td>Function</td><td>".$row['function_in']."</td></tr>";
              echo "<tr bgcolor='87CEEB'><td>Involve In</td><td>".$row['involved_in']."</td></tr>";
               echo "<tr bgcolor='66CDAA'><td>Located In</td><td>".$row['located_in']."</td></tr>";
               echo "<tr bgcolor='8FBC8F'><td> Expressed In</td><td>".$row['expressed_in']."</td></tr>";
               echo "<tr bgcolor='EE82EE'><td> Expressed During</td><td>".$row['expressed_during']."</td></tr>";
              echo "<tr bgcolor='#99CCFF'><td>Domains</td><td>".$row['contain_domain']."</td></tr>";
               echo "<tr bgcolor='#00bfff'><td>Best Arabiodopsis Thaliana protein match</td><td>".$row['best_arabiophotosystemis']."</td></tr>";		
              echo "<tr bgcolor='#ffb3b3'><td>Blast</td><td>".$row['blast']."</td></tr>";
              

		echo "</tr>"; 

    }

print_r($arr1);  

 

 echo "</table>"; 
} else {
    echo "0 results";
}

?>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

</body>
</html>










