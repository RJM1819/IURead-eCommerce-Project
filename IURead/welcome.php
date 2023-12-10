<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];

        //Query to grab username and password

        $sql = "select * from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        //If else statments for login success or fail

        if($count == 1){  
            header("Location: LoginSuccessful.php");
        }  
        else{  
            echo  '<script>
                        window.location.href = "login.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }     
    }
    ?>