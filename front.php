<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
</head>
<body>
 

<center><h1 background-color="white" center>  HEAT STRESS GENES DATABASE</h1>
  <center><img src="logo.jpg" width="1150" height="250">
<p><b>Responsive <b>genes<b> in <b> Aegilops Speltoides <b> and <b>Triticum aestivum </b> </p></center>
  

<style>
{
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color:green;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;


}
</style>
</head>
<body bgcolor="white"> 

<div class="navbar">
 <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a> 
  <div class="dropdown">
    <button class="dropbtn">Species
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="frame2.html">Aegilops Speltoides</a>
      <a href="triticum_species.html">Triticum aestivum</a>
      
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Data
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="data_overview.html">Data overview</a>
      <a href="">Assembly</a>
      
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Tools
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
<a href="https://www.bioinformatics.babraham.ac.uk/projects/fastqc/"> FastQC</a>
<a href="http://www.usadellab.org/cms/?page=trimmomatic">Trimmomatic</a>
<a href="https://github.com/trinityrnaseq/trinityrnaseq/releases">Trinity</a>
<a href="https://blast.ncbi.nlm.nih.gov/Blast.cgi?LINK_LOC=blasthome&PAGE_TYPE=BlastSearch&PROGRAM=blastx">blastx</a>
<a href="https://busco.ezlab.org/">BUSCO </a>     
<a href="https://github.com/TransDecoder/TransDecoder/releases">TransDecoder </a>
<a href="https://pfam.xfam.org/"> PfamScan </a>
<a href="https://mapman.gabipd.org/app/mercator">Mercator </a>
<a href="https://www.blast2go.com/">Blast2Go</a>
     
   </div>

</div>
<div class="dropdown">
    <button class="dropbtn">Search
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
<a href="submitsequencesearch.php">sequence Id</a>
<li>
						<a href="">Protein Family</a>
						<ul>
							<li><a href="pfamsequence.php">Sequence Id</a></li>
							
                                                        <li><a href="pfamhmmaccfoam.php"> Accession</a></li>
							<li><a href="pfamhmmnamefoam.php">Domain/Family</a></li>
						</ul>
					</li>
					<li>
						<a href="">Gene ontology</a>
						<ul>
							<li><a href="gofoam.php">Sequence id</a></li>
							<li><a href="gotermfoam.php">Gene ontology Function</a></li>
							<li><a href="goidfoam.php"> Gene ontology Id</a></li>
						</ul>
					</li>
				
     
     <a href="mercatorfoam.php"> Mercator</a>
      
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Quality Check
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="output_R1_paired_fastqc.html">Aegilops Speltoides Read 1</a>
      <a href="output_R2_paired_fastqc.html">Aegilops Speltoides Read 2</a>
      
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Busco
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="busco_figure.png">Aegilops Speltoides </a>
      <a href="">Triticum aestivum</a>
      
    </div>
</div>

  <div class="dropdown">
    <button class="dropbtn">Alignments 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="multi.php">Multiple Alignments</a>
      
    </div>
</div>

  <div class="dropdown">
    <button class="dropbtn">Browse 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="browse.php">Sequence Id</a>
      
    </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Structure
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="">homologs</a>
      
</div>
</div>
 <div class="dropdown">
  <button class="dropbtn">Go Term 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="biologicalblast.php">Biological Process</a>
      <a href="cellularblast.php">Cellular Component</a>
      <a href="molecularblast.php">Molecular Function</a>

  <a href="graph.html">Annotation Graph</a>
</div>

</div>

</div>


</body>
</html>

