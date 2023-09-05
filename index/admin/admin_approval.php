<?php
    include('connect.php');

    $select = "SELECT * FROM `application` WHERE `Status` = 'pending' ORDER BY id ASC";
    $query = mysqli_query ($conn, $select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Approval</title>
</head>
<body>
    <div class="center">
        
        <table align='center' border='1px' style='width:1000px; line-height:30px;' >
            
            <tr>
            <th colspan='7'><h2>Pending Request</h2></th>
            </tr>
            <t>
                <th>SN</th>
                <th>ID</th>
                <th>Surname</th>
                <th>Other Names</th>
                <th>Email</th>
                <th>Course</th>
                <th>Action</th>
            </t>

            <?php
                $num =1;
                while ($fetch = mysqli_fetch_array ($query))
                {
            ?>
                <tr>
                    <td><?php echo $num++; ?></td>
                    <td><?php echo $fetch["id"];?></td>
                    <td><?php echo $fetch["Surname"];?></td>
                    <td><?php echo $fetch["Other_names"];?></td>
                    <td><?php echo $fetch["Email"];?></td>
                    <td><?php echo $fetch["Course"];?></td>
                    <td>
                        <form action="admin_approval.php" method="post">
                            <input type = "hidden" name = "id" value = "<?php echo $fetch["id"];?>"/>
                            <input type = "submit" name = "approve" value = "Approve"/>
                            <input type = "submit" name = "deny" value = "Deny"/>
                        </form>
                    </td>
                </tr>

            <?php
                }
            ?>

        </table>

        
    </div>
    
    <?php
        if(isset($_POST["approve"])){
            $id = $_POST["id"];

            $update = "UPDATE `application` SET `Status`= 'approved' WHERE id = '$id'";
            $result = mysqli_query($conn, $update);

            echo "<script type = 'text/javascript'>";
            echo "alert('Application Approved')";
            echo "window.location.href = 'admin_approval.php";
            echo "</script>";

        }
    
        if(isset($_POST["deny"])){
            $id = $_POST["id"];
            

            $update = "UPDATE `application` SET `Status`= 'denied' WHERE id = '$id'";
            $result = mysqli_query($conn, $update);

            echo "<script type = 'text/javascript'>";
            echo "alert('Application Denied')";
            echo "window.location.href = 'admin_approval.php";
            echo "</script>";

        }
    ?>

</body>
</html>