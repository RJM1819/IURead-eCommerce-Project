<?php 
    include("connection.php");
    include("welcome.php")
    ?>
    
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- bootstap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--IURead Log-in page-->

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

    <!--Navigation Bar-->
<body>
    <div class="container">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img src="/IURead/images/logo.png" alt="logo" height="120" width=200>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php"><b>Home</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php"><b>Physical Books</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php"><b>eBooks</b></a>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><b>Blogs</b></a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php"><b>Login</b></a>
        </li>
        <br>
        <form>
            <input type="text" placeholder="Search">
        </form>
        <i class="fas fa-shopping-cart cart-icon" onclick="location.href='cart.php'"></i>
        </ul>
    </div>
  </div>
</nav>
<script src="https://kit.fontawesome.com/your-font-awesome-kit-code.js" crossorigin="anonymous"></script>
</div>

    </head>
    <body>
        
        <!--Login Form Page-->
        
        <div id="form">
            <h1>Login Form</h1>
            <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
                <label>Username: </label>
                <input type="text" id="user" name="user"></br></br>
                <label>Password: </label>
                <input type="password" id="pass" name="pass"></br></br>
                <input type="submit" id="btn" value="Login" name = "submit"/>
            </form>
        </div>
        <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert(" Username and password field is empty!!!");
                    return false;
                }
                else if(user.length==""){
                    alert(" Username field is empty!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }
                
            }
        </script>
    </body>
</html>