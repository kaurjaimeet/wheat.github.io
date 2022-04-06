
<!DOCTYPE html>
<html>
<head>
<Title>comparative analysis of heat stress genes in ageliops speltiodes and Triticum aestivum</Title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.dropbtn {
  background-color:  #d2b4de ;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color:   #f5bdcd  ;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
</head>
<body bgcolor="f4fcdb"> 
<center><h1 background-color="white" center>  HEAT STRESS GENES DATABASE</h1>
  <center><img src="logo.jpg" width="1150" height="250">
<p><b>Responsive <b>genes<b> in <b> Aegilops Speltoides <b> and <b>Triticum aestivum </b> </p></center>

<center><img src="headdrop.png" width="1150" height="60">
  

<div class="dropdown">
  <button class="dropbtn">Ageiops speltoides</button>
  <div class="dropdown-content">
  
  
 <a href="submitsequencesearch.php">sequence Id</a>

						<a href="">Protein Family</a>
						<ul>
							<li><a href="pfamsequence.php">Sequence Id</a></li>
							
                                                        <li><a href="pfamhmmaccfoam.php"> Accession</a></li>
							<li><a href="pfamhmmnamefoam.php">Domain/Family</a></li>
						</ul>
					
					
						<a href="">Gene ontology</a>
						<ul>
							<li><a href="gofoam.php">Sequence id</a></li>
							<li><a href="gotermfoam.php">Gene ontology Function</a></li>
							<li><a href="goidfoam.php"> Gene ontology Id</a></li>
						</ul>
<a href="mercatorfoam.php"> Mercator</a>
      
</div>


</div>
<br>
<br>
<br>
<br>
<form>
  <form action="indexhome.php" method="get">
 <input type="button" value="Go back!" onClick="history.go(-1);">
</form>


</body>
</html>

