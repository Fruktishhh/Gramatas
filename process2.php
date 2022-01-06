<?php
include('connection.php');
if(isset($_POST['save']))
{	 
	 $bookname = $_POST['bookname'];
	 $yyear = $_POST['yyear'];
	 $pages = $_POST['pages'];
	 $genre = $_POST['genre'];
	  
	 $sql = "INSERT INTO books (bookname,yyear,pages,genre)
	 	 VALUES ('$bookname','$yyear','$pages','$genre')";
	
	 if (mysqli_query($con, $sql)) {
		echo "Jauns ieraksts izveidots";
	?>
<html>
<head>
</head>

<body>
<div id="center_button">
    <button onclick="location.href='page2.php'">Doties atpakal</button>
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