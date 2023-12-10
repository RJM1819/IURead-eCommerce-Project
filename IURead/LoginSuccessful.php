<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Successful</title>
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
          <a class="nav-link active" aria-current="page" href="index.php"><b>Home</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><b>Physical Books</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><b>eBooks</b></a>
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
        <i class="fas fa-shopping-cart cart-icon" onclick="location.href='Shopping Cart.php'"></i>
        </ul>
    </div>
  </div>
</nav>
<script src="https://kit.fontawesome.com/your-font-awesome-kit-code.js" crossorigin="anonymous"></script>
</div>

</head>
<body>
    <h1>Login Successful</h1>
    <a class="nav-link active" aria-current="page" href="home.php"><b>Start Shopping</b></a>

</body>
</html>