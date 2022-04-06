<html>
<head>
</head>
<body>  
<body style="background-color:powderblue;">
<?php
// define variables and set to empty values
$forwardprimerErr = $reverseprimerErr = $primeridErr ="";
$forwardprimer = $reverseprimer = $primerid ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["forward primer"])) {
    $forwardprimerErr = "Foward primer is required";
  } else {
    $forwardprimer = test_input($_POST["forwardprimer"]);
  }
  
  // check if forwardprimer,contains letters
    if (!preg_match("/^[a-zA-Z ]*$/",$forwardprimer)) {
      $forwardprimerErr = "Only letters allowed";
    }
  }


  if (empty($_POST["reverseprimer"])) {
    $reverseprimerErr = "reverseprimer is required";
  } else {
    $reverseprimer = test_input($_POST["reverseprimer"]);
  }
    
// check if reverseprimer,contains letters
    if (!preg_match("/^[a-zA-Z ]*$/",$reverseprimer)) {
      $reverseprimerErr = "Only letters allowed";
    }
  }

  if (empty($_POST["primerid"])) {
    $primerid = "";
  } else {
    $primerid = test_input($_POST["primerid"]);
  }

 
?>
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


<h1 style="color:GREEN"><center>WHEAT GENOME</center> </h1> 
<p><span class="error"> <font color="red">*required field.</span></p>
<form id="frm1" action="index.php" method="post">
  <font color="yellow">
Forward Primer: <input type="text" name="Forwardprimer">
  <span class="error"><font color="red">* <?php echo $forwardprimerErr;?></span>
  <br><br>
   <font color="blue">
 Reverse Primer<input type="text" name="reverseprimer"
  <span class="error"><font color="red">* <?php echo $reverseprimer;?></span>
  <br><br>
  <font color="brown"> 
Primer Id<input type="text" name="primerid"
  <span class="error"><?php echo $primerid;?></span>
  <br><br>
  
  <br><br>
  
  <br><br>
   <center>

<input type="submit" value="Submit">


</center> 
</form>



</body>
</html>




