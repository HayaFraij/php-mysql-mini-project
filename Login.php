<?php

$errorHandling = array('email' => '', 'password' => '');

$email = '';
$password = '';


if(isset($_POST['submit'])){

//    echo $_POST["email"];
//    echo $_POST['password'];
    if(empty($_POST["email"])){
        $errorHandling['email'] = "please fill your email";
    } else {
        $email = $_POST["email"];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errorHandling['email'] = "please fill a valid email";
        }

    }
    if(empty($_POST["password"])){
        $errorHandling['password'] = "please fill your password";
    }else {
        $password = $_POST["password"];
        if(preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password))
        {
            // echo $password;
        }else {
            $errorHandling['password'] = "your password is invalid!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">
    <style>
        form{
            width: 30%;
            margin: 0 auto;
            margin-top: 150px;
            background-color: white;
            opacity: 0.6;
            border-radius: 5px;
            padding: 60px;
        }
    </style>
</head>

<body>



<form action="" method="POST">
  <div class="form-group" >
    <label for="exampleInputEmail1">Email address</label>
    <input value="<?php echo $email ?>" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@email.com">
    <small id="emailHelp" class="form-text text-muted"><?php echo $errorHandling["email"]?></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input value="<?php echo $password ?>" name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <small id="passwordHelp" class="form-text text-muted"><?php echo $errorHandling["password"]?></small>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <input type="submit" name="submit" class="btn btn-primary"/>
</form>

<?PHP
echo "Hello from Login Page! ";

?>

<!--<script>-->
<!--    const style = {-->
<!--        -->
<!--    }-->
<!--</script>-->

</body>

</html>
