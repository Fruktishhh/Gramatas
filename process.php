<?php
include('connection.php');
if(isset($_POST['save']))
{	 
	 $nname = $_POST['nname'];
	 $surname = $_POST['surname'];
	 $bookid = $_POST['bookid'];
	 $ddate = $_POST['ddate'];
	  
	 $sql = "INSERT INTO iznemsana (nname,surname,bookid,ddate)
	 	 VALUES ('$nname','$surname','$bookid','$ddate')";
	
	 if (mysqli_query($con, $sql)) {
		echo "Jauns ieraksts izveidots";
	?>
<html>
<head>
</head>

<body>
<div id="center_button">
    <button onclick="location.href='index.php'">Doties atpakal</button>
</div>



</body>
</html>

<?php
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($con);
	 }
	 mysqli_close($con);
}
?>