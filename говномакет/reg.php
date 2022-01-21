<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  
        <div class= "header">
            <div class="row">
                <div class="col">
                   
                </div>
                <div class="col-5">
                <form action="index.html">
                    <img src="img/logo.jpg"> 
                </form>
                </div>
               
                <div class="col d-flex flex-row justify-content-between">
                    <form action="reg.php">
                        <button name="button" class="button1">Регистрация</button>
                    </form>
                    <form action="login.php">
                        <button name="button" class="button2">Вход</button>
                    </form>
                </div>
                
            
                <div class="col">
                    
                  </div>
            </div>
        </div>
  

    <div class="container-fluid">
        <div class="container">
            <div class="row main-form">
            <form class="" method="POST" action="">
            
            <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Your Name</label>
            <div class="cols-sm-10">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name"/>
            </div>
            </div>
            </div>
           
            <div class="form-group">
            <label for="username" class="cols-sm-2 control-label">Login</label>
            <div class="cols-sm-10">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="login" id="login" placeholder="Enter your Login"/>
            </div>
            </div>
            </div>

            <div class="form-group">
            <label for="email" class="cols-sm-2 control-label">Your Email</label>
            <div class="cols-sm-10">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email"/>
            </div>
            </div>
            </div>
           
         
           
            <div class="form-group">
            <label for="password" class="cols-sm-2 control-label">Password</label>
            <div class="cols-sm-10">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password"/>
            </div>
            </div>
            </div>
           
            <div class="form-group">
            <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
            <div class="cols-sm-10">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
            <input type="password" class="form-control" name="confirm" id="confirm" placeholder="Confirm your Password"/>
            </div>
            </div>
            </div>
           
            <div class="form-group ">
            <input type="submit" target="_blank" id="button" class="btn btn-primary btn-lg btn-block login-button">Register</a>
            </div>
            
            </form>

<?php
require_once('include.php');
 if (($_POST['password']) == ($_POST['confirm'])){
    echo "yes";
    
    $name = $_POST['name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo $name . "<br>";
    $sql = mysqli_query($conn, "INSERT INTO `dripreg` (`id`, `name`, `login`, `email`, `pass`) VALUES (NULL, '$name', '$login', '$email', '$password')");
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
else{
    echo "no" . "<br>"; 
    // var_dump($_POST['password'], $_POST['confirm']);
}
?>
         </div>
      </div>
    

<div class="footer" background-color="#8FC0EC">

    <img src="img/footer_logo.png" class="footer_logo">
        
    <div class="socseti">
    <img src="img/fb.png" class="fb">
        
    <img src="img/twitter.png" class="tw">
        
    <img src="img/inst.png" class="inst">
        
    <img src="img/vk.png" class="vk">
    </div>
        
    <div class="comitet">© 2014-2021 Комитет по информатизации и связи</div>
        
    <div class="polit">Политика конфиденциальности</div>
        
    <div class="ysl">Условия пользования</div>
    </div>
    </div>
</body>
</html>