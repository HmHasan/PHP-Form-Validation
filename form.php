<?php

  
if(isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_POST['name'];
    $user_name=$_POST['user_name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    if(empty($_POST['name']))
    {
        $errorname="Your Name Must Not Be Empty";
    }
    else
    {
        $_REQUEST["name"];
    }

    if(empty($_POST['user_name']))
    {
        $user_error="Your User Name Must be include";
    }

    else
    {
        $_REQUEST["user_name"];
    }

    if(empty($_POST['email']))
    {
        $error_mail="Your Mail Should be Required";
    }

    else
    {
        $email1=$_REQUEST["email"];
        if(!filter_var($email1,FILTER_VALIDATE_EMAIL)){
            $error_mail="Your Mail Must Be Valid Format";

        }
    }

    if(empty($_POST['password']))
    {
        $errorpass="Your Password Must is Required";
    }
   
    else
    {
        $pass=$_REQUEST["password"];

        if(strlen($pass)<5)
        {
            $errorpass="Your Password Is Too Short";
        }

        elseif(strlen($pass)>10)
        {
            $errorpass="Your Password Is too Long";
        }
    }
    if (empty($_POST['username'])) {
        $erroruser = 'Username is required';
      }else{
        $user = $_REQUEST['username'];
        $pattern = "/^[a-zA-Z0-9]$/";
        if (!preg_match($pattern, $user)) {
          $erroruser = 'Username must include uppercase,lowercase,number';
        }
      }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>PHP Validation</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
            <form action="<?php echo($_SERVER['PHP_SELF']);?>" method="POST">
                <div class="form-group">
                  <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" autocomplete="off">
                    <small class="text-danger form-text"><?php if(isset($errorname)){echo($errorname);}?></small>
                </div>
                <div class="form-group">
                  <label for="name">User Name</label>
                    <input type="text" name="user_name" id="user_name" class="form-control"  autocomplete="off">
                    <small class="text-danger form-text"><?php if(isset($user_error)){echo($user_error);}?></small>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control"  autocomplete="off">
                    <small class="text-danger form-text"><?php if(isset($error_mail)){echo($error_mail);}?></small>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control"  autocomplete="of">
                    <small class="text-danger form-text"><?php if(isset($errorpass)){echo($errorpass);}?></small>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="submit">Submit</button>
                    <button type="reset" class="btn btn-danger" name="">Reset</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>