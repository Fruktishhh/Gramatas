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
    <a href="index.php" >Izsniegtās grāmatas</a>
    <a href="page2.htm" >Grāmatu saraksts</a>
    </center>

    <a href="insert2.php" >Pievienot ierakstu</a>
    
    
    
    <?php

   include('connection.php');
    
    mysqli_select_db($con,"root");
    $sql = "SELECT ID, bookname,yyear,pages,genre FROM books";
    $result = mysqli_query($con,$sql);
    
    
    
    echo "<table id= myTable >
    
    <tr>
    <th>ID</th>
    <th>Nosaukums</th>
    <th>Gads</th>
    <th>LPP</th>
    <th>Žanrs</th>
   
    
    
    </tr>";
    
    while($row = mysqli_fetch_array($result)) {
      
      echo "<tr>";
     
      echo "<td>" . $row['ID'] . "</td>";
      echo "<td>" . $row['bookname'] . "</td>";
      echo "<td>" . $row['yyear'] . "</td>";
      echo "<td>" . $row['pages'] . "</td>";
      echo "<td>" . $row['genre'] . "</td>";
      echo '<td><a href="delete.php?id=' . $row['ID'] . '">Dzēst</a>'; 
    
      
      
    
     
    
      
      echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>
<script>
  
</script>
      

</body>
</html>