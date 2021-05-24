<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css_files/login.css">
</head>
<body>

    <div class = "logincontainer">
                        
        <label for = "show" class = "close-btn" title ="close" >&times;</label>
        <h2 id = "loginheading">Welcome Back</h2>
        
        <form id = "loginForm"  action = "..\php\connection.php" method = "get">
                <input type = "text" placeholder = "Email" class = "form-control" id = "loginemail" name = "loginemail">
                <input type = "text" placeholder = "Password" class = "form-control" id = "loginpassword" name = "loginpassword">
                
                <button type = "submit" name = "submit" class = "loginsubmit">Submit</button>
        </form>
                        
    </div>

</body>
</html>