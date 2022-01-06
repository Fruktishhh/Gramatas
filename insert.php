
<!DOCTYPE html>
<html>
  <body>
	  <center>
	<form method="post" action="process.php">
		Vards:<br>
		<input type="text" name="nname">
		<br>
		Uzvards:<br>
		<input type="text" name="surname">
		<br>
		Datums:<br>
		<input type="date" name="ddate">
		<br><br>
		
		Grāmata:<br>
  <select name="bookid">
    <option disabled selected>-- Izvēleties grāmatu --</option>
    <?php
        include "connection.php";
        $records = mysqli_query($con, "SELECT * From books");  

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['bookname'] ."'>" .$data['bookname'] ."</option>";	
        }	
    ?> */ 
  </select>
 		 <br><br>
 
		
		   
		<input type="submit" name="save" value="submit">
	</form>
	</center>
  </body>
</html>