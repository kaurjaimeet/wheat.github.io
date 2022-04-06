<html>
   
   <head>
      
   </head>
   
   <body>


<body style="background-color:powderblue;">


      <?php
         
         // define variables and set to empty values
         $forwardprimer = $reverseprimer = $primerid = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $forwardprimer = test_input($_POST["primer"]);
            $reverseprimer = test_input($_POST["primer"]);
            $primerid = test_input($_POST["primerid"]);
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
   
     <h1 style="color:GREEN"><center>WHEAT GENOME</center> </h1> 
       <p><span class="error"><font color="red">* required field.</span></p>

      
      <form method="post" action="wheat.php">

<table width="60%" border="4"align="center">
        
     

            <tr>
            
               <td><font color="orange">FORWARD PRIMER</td> 
               <td><input type = "text" name = "primer1"></td>
            </tr>
            
            <tr>
               <td><font color="blue">REVERSE PRIMER</td>
               <td><input type = "text" name = "primer2"></td>
            </tr>
            
            <tr>
               <td><font color="brown"> PRIMER ID</td>
               <td><input type = "text" name = "id"></td>
            </tr>
            
            <tr><td><font color="red"> DATABASE
  		<input type="radio" name="action"  value="WHEAT"  checked="checked" >WHEAT 
  		<input type="radio" name="action"   value="RICE">RICE  
  		<input type="radio" name="action"  value="MAIZE">MAIZE
                
                
                   <select name="dropdown" value="options">
                
                <option value"line.php">Choose an option</option>

                <option value="Chromosome 1">Chromosome 1</option>
                <option value="Chromosome 2">Chromosome 2</option>

                                                      </SELECT></td>

		</tr>
  
  <br><br>
  

 <tr>
            
               <td>
                  <input type = "submit" name = "submit" value = "Submit"> 

                  <input name="reset" type="submit" value="Reset" />
               </td>
            </tr>
         </table>
      </form>
      
      <?php
         
         echo $FORWARD;
         echo "<br>";
         
         echo $REVERSE;
         echo "<br>";
        
      ?>
      
   </body>
</html>
