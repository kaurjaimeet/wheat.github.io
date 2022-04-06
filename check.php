

<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'admin';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $sql = 'SELECT Sequence id, Sequence FROM Transcriptome sequence';

   mysql_select_db('WHEAT');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "Sequence id :{$row['Sequence id']}  <br> ".
         "Sequence: {$row['Sequence']} <br> ".
        
         "--------------------------------<br>";
   } 
   echo "Fetched data successfully\n";
   mysql_close($conn);
?>
