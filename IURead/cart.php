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
                echo '<script>window.location="home.php"</script>';  
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
                     echo '<script>window.location="cart.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
 <!--Added Items with order details-->
<html>
     <!-- bootstap CSS link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--IURead Log-in page-->

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

 <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["book"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["book"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["title"]; ?></td>  
                               <td><?php echo $values["quantity"]; ?></td>  
                               <td>$ <?php echo $values["price"]; ?></td>  
                               <td>$ <?php echo number_format($values["quantity"] * $values["price"], 2); ?></td>  
                               <td><a href="cart.php?action=delete&id=<?php echo $values["book_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["quantity"] * $values["price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table> 
                     <a class="nav-link active" aria-current="page" href="Checkout.php"><b>Checkout</b></a>
                </div>  
           </div>  
           <br />  
      </body>  
 </html>