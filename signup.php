<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <?php
       
       if($_SERVER['REQUEST_METHOD']=='POST')
       {
           $username=$_POST['uname'];
           $email=$_POST['email'];
           $YOB=$_POST['YOB'];
           $password1=$_POST['password1'];
           $password2=$_POST['password2'];
           $passhash =sha1($password1);
           if($password1===$password2)
           {
               require "DBcon.php";
               mysqli_select_db($con,DB_NAME);
               $q1 ="INSERT INTO regularusers (username,registration_date,birthdate,password,email)
                VALUES('$username',now(),'$YOB','$passhash','$email')";
               $result=mysqli_query($con,$q1);
               //$stm=$con->prepare($q1);
               //$stm->bind_param("ssss",$username,$YOB,sha1($password1),$email);
               //$stm->execute();
               if($result)
               {
                header('location:login.php');
               }
               else{
                   echo mysqli_error($con);
               }
           }
           else{
               echo "password did not match";
           }

       }
     ?>
<div class="container justify-content-centre">
    <form action="" method='POST'>
        <div class="form-row">
            <div class="form-group">
                <label for="username" class="col-md-2 col-form-label" >username</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="username" name="uname" placeholder="enter username" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="email" class="col-md-2 col-form-label">email</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="email" name="email" placeholder="enter email" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="YOB" class="col-md-2 col-form-label">birthdate</label>
                <div class="col-md-10">
                    <input type="date" class="form-control" id="YOB" name="YOB" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="password" class="col-md-2 col-form-label">password</label>
                <div class="col-md-10">
                    <input type="password" class="form-control" id="password" name="password1" placeholder="enter password" required> 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="confirm-password" class="col-md-2 col-form-label">confirm password</label>
                <div class="col-md-10">
                    <input type="password" class="form-control" id="confirm-password" name="password2" placeholder="confirm password" required>
                </div>
            </div>
        </div>

        <input type="submit" value="submit" class="btn btn-success">
    </form>
</div>
</body>
</html>