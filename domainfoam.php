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
<body bgcolor="white"> 

<div class="navbar">
 <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a> 
  <div class="dropdown">
    <button class="dropbtn">Species
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     
      
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Data
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     
      
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Tools
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">

     
   </div>

</div>
<div class="dropdown">
    <button class="dropbtn">Search
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">

				
      
    
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Quality Check
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      
      
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Busco
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     
      
    </div>
</div>

  <div class="dropdown">
    <button class="dropbtn">Alignments 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      
      
    </div>
</div>

  <div class="dropdown">
    <button class="dropbtn">Browse 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     
      
    </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Structure
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      
      
</div>
</div>
 <div class="dropdown">
  <button class="dropbtn">Go Term 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      

  
</div>

</div>

</div>

<body>
 <br>
<br>
<center><form action="domaintype.php" method="post">
Type : <input type="text" name="Seq_id"><br/>
<input type="submit" value="SELECT" name="Submit1"> <br/>
 
 </form>

<form>
  <form action="indexhome.php" method="get">
 <input type="button" value="Go back!" onClick="history.go(-1);">
</form>
</body>
</html>
