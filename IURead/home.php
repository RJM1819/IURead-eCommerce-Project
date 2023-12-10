<?php   
  session_start(); 
  
  //Connect to database 


  include('connection.php'); 
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["book"]))  
      {  
           $item_array_id = array_column($_SESSION["book"], "book_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  

               //An Array is created to grab book id, title, price, and quanity from book table in database

                $count = count($_SESSION["book"]);  
                $item_array = array(  
                     'book_id'               =>     $_GET["id"],  
                     'title'               =>     $_POST["hidden_name"],  
                     'price'          =>     $_POST["hidden_price"],  
                     'quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["book"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="cart.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'book_id'               =>     $_GET["id"],  
                'title'               =>     $_POST["hidden_name"],  
                'price'          =>     $_POST["hidden_price"],  
                'quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["book"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["book"] as $keys => $values)  
           {  
                if($values["book_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["book"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="home.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>IURead Homepage</title>

            <!--Bootstraps-->
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
           <!-- bootstap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

      </head>  
      <body>  
           <br />  
           <div class="container" style="width:700px;">  
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
           <br />  
           <div class="container" style="width:700px;">  
                <?php  
                $query = "SELECT * FROM book ORDER BY book_id ASC";  
                $result = mysqli_query($conn, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="cart.php?action=add&id=<?php echo $row["book_id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="<?php echo $row["img"]; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["title"]; ?></h4>  
                               <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  


               
                </div>  
           </div>  
           <br />  
      </body>  
 </html>