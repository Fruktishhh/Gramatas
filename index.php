<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>   
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <center>
    <a href="insert.php" >Izsniegtās grāmatas</a>
    <a href="page2.php" >Grāmatu saraksts</a>
    </center>

    <a href="insert.php" >Pievienot ierakstu</a>
    
    
    
    <?php

    include('connection.php');
    
    mysqli_select_db($con,"root");
    $sql = "SELECT nname,surname,bookid,ddate FROM iznemsana";
    $result = mysqli_query($con,$sql);
    
    
    
    echo "<table id= myTable >
    
    <tr>
    <th>Vards</th>
    <th>Uzvards</th>
    <th>Grāmata</th>
    <th>Datums</th>
   
    
    
    </tr>";
    
    while($row = mysqli_fetch_array($result)) {
      
      echo "<tr>";
     
      echo "<td>" . $row['nname'] . "</td>";
      echo "<td>" . $row['surname'] . "</td>";
      echo "<td>" . $row['bookid'] . "</td>";
      echo "<td>" . $row['ddate'] . "</td>";
    
      
      
    
     
    
      
      echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>
<script>
  
</script>
      

</body>
</html>