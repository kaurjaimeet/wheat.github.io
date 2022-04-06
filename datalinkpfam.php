<?php  
$link = mysqli_connect("localhost", "root", "admin", "WHEAT"); 
  
if ($link ===  false) { 
    die("ERROR: Could not connect. "
                .mysqli_connect_error()); 
} 
  
$sql = "SELECT * FROM data"; 
if ($res = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 
        echo "<table border=1>"; 
        echo "<tr>"; 
        echo "<th>Seq_id</th>"; 
        echo "<th>alignment_start</th>"; 
        echo "<th>alignment_end </th>";
        echo "<th>envelope_start </th>";
        echo "<th>envelope_end </th>";
        echo "<th>hmm_acc </th>";
        echo "<th>hmm_name </th>";
        echo "<th>hmm_length </th>";
        echo "<th>bit_score </th>";
        echo "<th>e_value </th>";
        echo "<th>significance </th>";
        echo "<th>clan </th>";

         echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['seq_id']."</td>"; 
            echo "<td>".$row['alignment_start']."</td>"; 
            echo "<td>".$row['alignment_end']."</td>";
            echo "<td>".$row['envelope_start']."</td>";
            echo "<td>".$row['envelope_end']."</td>";
            echo "<td>".$row['hmm_acc']."</td>";
            echo "<td>".$row['hmm_name']."</td>";
            echo "<td>".$row['hmm_length']."</td>";
            echo "<td>".$row['bit_score']."</td>";
            echo "<td>".$row['e_value']."</td>";
            echo "<td>".$row['significance']."</td>";
            echo "<td>".$row['clan']."</td>"; 

            echo "</tr>"; 
        } 
        echo "</table>"; 
        mysqli_free_res($res); 
    } 
    else { 
        echo "No matching records are found."; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($link); 
} 
mysqli_close($link); 
?> 

