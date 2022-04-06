<!DOCTYPE html>
<html>
<head>
<Title>comparative analysis of heat stress genes in ageliops speltiodes and Triticum aestivum</Title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
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
<body bgcolor="f4fcdb"> 
<center><h1 background-color="white" center>  HEAT STRESS GENES DATABASE</h1>
  <center><img src="logo.jpg" width="1150" height="250">
<p><b>Responsive <b>genes<b> in <b><em> Aegilops Speltoides </em><b> (accession pau 3809) and <b><em>Triticum aestivum </em></b> (accession  pau C273)</p></center>
  

<div class="navbar">
 <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a> 
  <div class="dropdown">
    <button class="dropbtn">Species
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="age.php">Aegilops Speltoides</a>
      <a href="triticum.php">Triticum aestivum</a>
      
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Data
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="data_overview.php">Data overview</a>
      <a href="assembly.php">Assembly</a>
      
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
<a href="drop.php">Aegilops Speltoides</a>
<a href="triseqsearch.php">Triticum aestivum</a>

      
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Quality Check
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="qualityage.php">Clean Reads </a>
   
       
      
      
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Busco
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="busco.php">Aegilops Speltoides </a>
      <a href="buscoc273.php">Triticum aestivum</a>
      
    </div>
</div>

  <div class="dropdown">
    <button class="dropbtn">Orthologs 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="orth.php">orthologs in both species</a>
      
    </div>
</div>

  <div class="dropdown">
    <button class="dropbtn">Heat Stress Genes
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="ageheat.php">Aegilops Speltoides</a>
      <a href="triheat.php">Triticum aestivum</a>
       </div>
</div>

 <div class="dropdown">
  <button class="dropbtn">Go Term 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="biologicalgoid.php">Biological Process</a>
      <a href="cellulargoid.php">Cellular Component</a>
      <a href="moleculargoid.php">Molecular Function</a>
<a href="wegoale.php">Annotation Graph</a>
</div>

</div>
</div>

<?php include 'slide.php';?>


</body>
</html>
