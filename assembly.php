<?php include 'homepage.php';?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.collapsible {
  background-color:  #641e16 ;
  color: white ;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #c39bd3;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color:  #d1f2eb;
}
</style>
</head>
<body bgcolor="f4fcdb">







<button class="collapsible">Transcript Assembly </button>
<div class="content">
<p style="color: #5499c7 ;">Aegilops Speltoides</p>
<a href="transcriptcheck.php">Sequences </a>
<br>
<br>
<p style="color:  #138d75  ;">Triticum aestivum</p>
<a href="transcriptc273.php">Sequences </a>


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
<br>
<form>
 <center><form action="indexhome.php" method="get">
 <input type="button" value="Go back!" onClick="history.go(-1);">
</form>
</body>

</html>
