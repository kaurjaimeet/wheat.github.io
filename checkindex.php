<?php

$rows = [];
//var_dump(isset($_POST['seq_id']);
if( isset($_POST['seq_id']))
{

	$mysqli = new mysqli("localhost", "root", "admin", "WHEAT");

	/* check connection */
	if ($mysqli->connect_errno) {
	    printf("Connect failed: %s\n", $mysqli->connect_error);
	    exit();
	}
	//var_dump($_POST['seq_id'];
	$query = 'SELECT * FROM data WHERE seq_id = "' . $_POST['seq_id'] . '" ;

	/* Select queries return a resultset */
	if ($result = $mysqli->query($query)) {
	    //printf("Select returned %d rows.\n", $result->num_rows);

	    while ($row = $result->fetch_object()){
	        $rows[] = $row;
	    }

	    /* free result set */
	    $result->close();
	}


	$mysqli->close();
}

//var_dump($rows);
?>
<html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<title>search</title>

<!-- CSS -->
<style>
.myForm {
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 0.8em;
width: 30em;
padding: 1em;
}

.myForm * {
box-sizing: border-box;
}

.myForm label {
padding: 0;
font-weight: bold;
text-align: right;
display: block;
}

.myForm input,
.myForm select,
.myForm textarea {
margin-left: 2em;
float: right;
width: 20em;
border: 1px solid #ccc;
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 0.9em;
padding: 0.3em;
}

.myForm textarea {
height: 100px;
}

.myForm button {
padding: 1em;
border-radius: 0.5em;
background: #eee;
border: none;
font-weight: bold;
margin-left: 14em;
margin-top: 1.8em;
}

.myForm button:hover {
background: #ccc;
cursor: pointer;
}
</style>

</head>
<body>

<form class="myForm" method="post" action="/">


<p><label>Sequence Id 
<input type="text" name="seq_id" required>
</label> 
</p>

<p><button>Submit </button></p>


</form>

<?php
	foreach($rows as $row){
		echo '<ul>';
		foreach ($row as $k => $v) {
     	echo '<li>'.$k.' - '.$v.'</li>';
   	}
		echo '</ul>';
	}
?>
</body>

</html>
