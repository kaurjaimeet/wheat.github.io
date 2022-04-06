<?php include 'homepage.php';?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.collapsible {
  background-color: #e8f8f5;
  color:  #27ae60 ;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color:   #d9ecf9  ;
}
</style>
</head>
<body bgcolor="f4fcdb">

<h2 style="text-align:center;background-color: #abebc6 ">Data</h2>


<button class="collapsible">TRANSCRIPTS Detail</button>
<div class="content">
<p style="color:red;">Aegilops Speltoides</p>
  <table align = "center" border="1 px solid black" frame="BOX" rules="NONE"> 
  <tr bgcolor ="  #e8daef ">
  <td height="50">Reads </td>  
  <td height="50">27991059</td>
    </tr>
<tr bgcolor =" #d4efdf ">
<td height="50">Reads</td> 	
<td height="50">Paired-end</td>

</tr>
<tr bgcolor ="  #e8daef  ">
    <td height="50">Contig N50 </td>  
    <td height="50">1402</td>
</tr>
<tr bgcolor =" #d4efdf ">
    <td height="50">Total genes </td> 	
    <td height="50">94805</td>

  </tr>

</table>


<p style="color:blue;">Triticum aestivum </p>
  <table align = "center" border="1 px solid black" frame="BOX" rules="NONE"> 
  <tr bgcolor =" #f1948a ">
  <td height="50">Reads </td>  
  <td height="50">15044857</td>
    </tr>
<tr bgcolor =" #f0b27a ">
<td height="50">Reads</td> 	
<td height="50">Paired-end</td>

</tr>
<tr bgcolor =" #f1948a ">
    <td height="50">Contig N50 </td>  
    <td height="50">1226</td>
</tr>
<tr bgcolor =" #f0b27a ">
    <td height="50">Total genes </td> 	
    <td height="50">65085</td>

  </tr>

</table>

</div>



<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
<form>
 <center><form action="indexhome.php" method="get">
 <input type="button" value="Go back!" onClick="history.go(-1);">
</form>
</body>
</html>










