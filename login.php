<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <?php 
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            require "DBcon.php";
            $username=$_POST['uname'];
            $password = sha1($_POST['password']);
            mysqli_select_db($con,DB_NAME);
            $q2= "SELECT password FROM regularusers WHERE username='$username'";
            $result = mysqli_query($con,$q2);
            $row = mysqli_fetch_row($result);
            if($row[0]===$password)
            {
                header('location:index.php');
            }
            else{
                echo "wrong password or username";
            }
        }
    ?>
    <div class="container">
        <form action="" method="POST">
            <div class="row">
                <div class="form-group">
                    <label for="username" class="col-md-2 col-forppm-label" >username</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="username" name="uname" placeholder="enter username" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="password" class="col-md-2 col-form-label">password</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" id="password" name="password" placeholder="enter password" required>
                    </div>
                </div>
            </div>

        <button class="btn btn-success">login</button>
        </form>
    </div>
</body>
</html>