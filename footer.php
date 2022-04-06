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
ul {
  display: block;
  list-style-type: disc;
  margin-top: 1em;
  margin-bottom: 1 em;
  margin-left: 0;
  margin-right: 0;
  padding-left: 60px;
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
               
                
           	
echo "<tr bgcolor='#e8daef'><td><a href='browselist.php?".$row['Sequence_Id']."'>".$row['Sequence_Id']."</a>  </td></tr>";

						
				   
              
        }

        mysqli_close($conn);
    ?>
  

<footer>
         
                
                  <ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>

              
            
        </footer>
   </body>  
</html>       
