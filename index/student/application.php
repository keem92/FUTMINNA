
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Applicatication Form</title>
    <link rel="stylesheet" href="applications.css">
</head>
<body>
    <div class="nav-bar">
        <div class="contact">
            <b>registrar@futminna.edu.ng
            +234(0) 703 586 2582</b>
        </div>
        <nav>
            <ul id="menuList"><b>
                <li><a href="http://localhost/futminna/index/" target="_blank">Home</a></li>
                <li style= "background-color:green; background-size: cover"><a href="#">Student</a></b>
                    <div class="sub-menu">
                        <ul>
                            <a href="#"><li>Login</li></a>
                        </ul>
                    </div>
                </li>    
            </ul>
        </nav>
        <img src="nav-icon-removebg-preview.png" class="menu-icon">
    </div>
    <div class="application_form">
        <div class="header"><h2>Enter Details</h2></div><br>
        <form action="application.php" method="post">
            <b><label for="Surname">Surname</label></b><br>
            <input name="Surname" type="text" placeholder="Input surname" required><br><br>
            <b><label for="Other_names">Other Names</label></b><br>
            <input name="Other_names" type="text" placeholder="Input Other names" required><br><br>
            <b><label for="Email">Email</label></b><br>
            <input name="Email" type="mail" placeholder="Input Email Address" required><br><br>
            <b><label for="Password">Password</label></b><br>
            <input name="Password" type="Password" placeholder="Input password" required><br><br>
            <b><label for="Course">Select the course you wish to apply</label></b><br>
                <select name="Course" id="Courses">
                    <option value="Agricultural Science">Agricultural Science</option>
                    <option value="Biochemistry">Biochemistry</option>
                    <option value="Enterpreneurship and Business Management">Enterpreneurship and Business Management</option>
                    <option value="Cybersecurity">Cybersecurity</option>
                    <option value="Education Technology">Education Technology</option>
                    <option value="Project Management">Project Management</option>
                    <option value="Estate Management and Valuation">Estate Management and Valuation</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                </select><br><br>
            
           
            <button name="register" type="submit">Register</button>
            <a href="login.php">Login Here</a>
        </form>
    </div>

    <?php
    include('connect.php');

    if(isset($_POST["register"])){
        $Surname = $_POST["Surname"];
        $Other_names = $_POST["Other_names"];
        $Email = $_POST["Email"];
        $Password = $_POST["Password"];
        $Course = $_POST["Course"];

        $select = "SELECT * FROM `application` WHERE `Email` = '$Email'";
        $query = mysqli_query($conn, $select);
        
        if(mysqli_num_rows($query) > 0){
            echo "<script type = 'text/javascript'>";
            echo "alert('Email Already Taken!!!')";
            echo "window.location.href = 'application.php";
            echo "</script>";
        }else{
            $register = "INSERT INTO `application`(Surname, Other_names, Email, Password, Course, Status) VALUES ('$Surname','$Other_names','$Email','$Password','$Course','pending')";
            mysqli_query($conn, $register);
            echo "<script> alert('Successfully submitted, pending for approval!!!')</script>";
            
        }
    }
    ?>

</body>
</html>