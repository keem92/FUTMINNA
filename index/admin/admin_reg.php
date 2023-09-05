

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Applicatication Form</title>
    <link rel="stylesheet" href="admin.css">
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
                <li style= "background-color:green; background-size: cover"><a href="#">Admin</a></b>
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
            <input name="surname" type="text" placeholder="Input surname" required><br><br>
            <b><label for="Other_names">Other Names</label></b><br>
            <input name="Other_names" type="text" placeholder="Input Other names" required><br><br>
            <b><label for="Email">Email</label></b><br>
            <input name="Email" type="mail" placeholder="Input Email Address" required><br><br>
            <b><label for="Password">Password</label></b><br>
            <input name="Password" type="Password" placeholder="Input password" required><br><br>
                        
           
            <button name="button" type="submit">Submit</button>
        </form>
    </div>
</body>
</html>