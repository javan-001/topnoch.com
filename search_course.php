<?php
if (!isset($_COOKIE['user'])) {
    echo "You must login first";
} else {

    include_once "dbconfig.php";
    include_once "utilities.php";
   // include_once "courses.php";
   // include_once "insert_course.php"
    

    $sql = " SELECT * FROM temp_courses ";
    $result = $conn->query($sql);
    if ($result === FALSE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } else {
        
    
   
}
?>

<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>courses</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>
 
<body>
    <section>
        <h1>Available Courses</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Course ID</th>
                <th>Course Name</th>
                <th>Enrollment</th>
                <th>Faculty</th>
                <th>Room</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                if (mysqli_num_rows($result) > 0){
                    while($rows=$result->fetch_assoc())
                    {
            ?>
                <tr>
                    <!-- FETCHING DATA FROM EACH
                        ROW OF EVERY COLUMN -->
                    <td><?php echo $rows['cid'];?></td>
                    <td><?php echo $rows['name'];?></td>
                    <td><?php echo $rows['Enrollment'];?></td>
                    <td><?php echo $rows['FacultyName'];?></td>
                    <td><?php echo $rows['BuildingRoom'];?></td>
                </tr>
                <?php
                    }
                }
            }
                ?>
            
        </table>
    </section>
</body>
 
</html>