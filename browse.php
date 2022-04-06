<html>
<?php include 'homepage.php';?>

<body><center><h1> Sequence Id </h1>
 
    <?php

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 50;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $conn=mysqli_connect("localhost","root","admin","WHEAT");
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }

        $total_pages_sql = "SELECT COUNT(*) FROM Transcripts";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM Transcripts LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);
        echo "<table align=center border=1 width='20%'>"; 
        
        while($row = mysqli_fetch_array($res_data)){
            //here goes the data
               
                
           	
echo "<tr bgcolor='#e8daef'><td><a href='linkcheck.php?Seq_Id=".$row['Sequence_Id']."'>".$row['Sequence_Id']."</a>  </td></tr>";

						
				   
              
        }

        mysqli_close($conn);
    ?>
 <table><tr><td align='bottom'><ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>

<table width="50%" align='center'>
<tr><td>&nbsp;</td></tr>
<tr><td align='left'>
<input type="button" value="Back" name="ClickBack" onclick=(history.back(-1))>
</td>
<!--<td align='center'>
<INPUT TYPE="BUTTON" VALUE="home page" ONCLICK="Indexhome.php'">
</td></tr> -->
<td align='right'>
<a href="#top" style="text-decoration:none" title="RETURN TO TOP"><b>TOP</b></a>
</td></tr>
</table>
</table>
	
</body>
</html>

