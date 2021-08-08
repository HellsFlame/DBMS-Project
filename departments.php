<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depertments</title>
</head>
<body>
    <!-- //Set Connection Variables
    
    //Create a Database Connection -->
    
    <table>
    <tr>
    <th>depart_id</th>
    <th>depart_name</th>
    <th>chairman_id</th>
    </tr>
    
    <?php
    $server = "localhost";
    $username = "root";
    $pwd = "";
    
    $con = mysqli_connect($server,$username,$pwd,"neduet_db");
    
            if (!$con) {
                die("Can not connect to this database due to" . mysqli_connect_error());
            }else{
                echo "Success connecting to the database";
            }
    
            $sql = "SELECT depart_id, depart_name, chairman_id from Departments";
            $result = $con -> query($sql);
    
            if ($result-> num_rows > 0) {
                while ($row = $result -> fetch_assoc()){
                    echo "<tr><td>" . $row["depart_id"] . "</td><td>" . $row["depart_name"] . "</td><td>" . $row["chairman_id"] .
                    "</td></tr>";
                }
                echo "</table>";
            }
            else{
                echo "0 result";
            }
    
            $con -> close();
        
            ?>
            
    </table>
        
    
</body>
</html>

    
    


    //Check for Connection Success


    //Collect Post Variables

  /*   $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['date of birth'];
    $batch = $_POST['batch'];
    $rno = $_POST['roll no'];
    $departid = $_POST['depart id'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
 */
