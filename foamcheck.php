<html>
<head>
<title>sequence</title>
</head>
<body>
 
<form method="post">
Enter Sequence_Id : <input type="text" name="Sequence_Id"><br/>
<input type="submit" value="SELECT" name="Submit1"> <br/>
 
 
</form>
<?php
if(isset($_POST['Submit1']))
{ 
$username = "root";
$password = "admin";
$hostname = "localhost"; 
$database="WHEAT";
 
//connection to the mysql database,
$dbhandle = mysqli_connect($hostname, $username, $password,$database);
 
if(!empty($_POST["Sequence_Id"]))
{
$result = mysqli_query($dbhandle, "SELECT Sequence_Id, Sequence FROM Transcripts=".$_POST["Sequence_Id"] );
}
else
{ 
$result = mysqli_query($dbhandle, "SELECT Sequence_Id, Sequence FROM Transcripts" );
}
 
 
//fetch tha data from the database 
while ($row = mysqli_fetch_array($result)) {
echo "Sequence_Id:" .$row{'Sequence_Id'}." Sequence:".$row{'Sequence'}."<br>";
}
//close the connection
mysqli_close($dbhandle);
}
?>
</body>
</form>
