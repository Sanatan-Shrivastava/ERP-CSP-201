<?php include "dbCon.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student INFO</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>City</th>
        </tr>

        <?php
        

        $query="select * from students";
        $result = mysqli_query($con ,$query);
        while($data=mysqli_fetch_assoc($result)){
            


            echo "<tr>
            <td> " . $data['ID'] . "  </td>
            <td> "   . $data['Name'] . "</td>
            <td>" . $data['Department'] . "</td>
            <td> " . $data['City'] . "</td>
            
        </tr>"; 
        }
        if(!$result){
            echo "query failed";
        }


        
        ?>
        
    </table>   
<a href="insert.php"> Insert </a> <br>
<a href="delete.php"> Delete </a>

</body>
</html>