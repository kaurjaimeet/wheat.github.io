<html>
<body>
<?php include 'homepage.php';?>

<br>
<br>

<body>

<center><form action="gotri.php" method="post">
Gene Ontology Id : <input type="text" name="go_nam"><br/>
(eg GO:0043531) <br/>
<input type="submit" value="SELECT" name="Submit1"> <br/>
 
 </form>

<form>
  <form action="indexhome.php" method="get">
 <input type="button" value="Go back!" onClick="history.go(-1);">
</form>
</body>
</html>
