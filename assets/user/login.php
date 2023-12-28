<link rel="stylesheet" href="../csstyle/login.css">


<?php
session_start();

include "dbconn.php";

if(isset($_POST["submit"])){
   $username = mysqli_real_escape_string($conn, $_POST["user"]); 
   $password = mysqli_real_escape_string($conn, $_POST["pass"]);

   $sql = "SELECT * FROM user WHERE username = '$username' OR email = '$username'"; 
   $result = mysqli_query($conn, $sql); 
   $row = mysqli_fetch_assoc($result); 
   
   if ($row) {
     if (password_verify($password, $row["password"])) {
       $_SESSION['username'] = $row['username'];
       header("location: ../../index.php");
           exit(); 
           
           
        } else {
            echo '<script>
               alert("Invalid your password!!!");
               window.location.href="login.php"; 
               </script>';
        }
     } else {
        echo '<script>
               alert("Invalid username or password");
               window.location.href="login.php";
               </script>';
   }
} 
?>



<!-- login form start -->
<div class="wrapper">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <h1>Login</h1>
        <h5>YOU CANNOT ACCESS THE PROJECT WITHOUT LOGIN OR REGISTERING, PLEASE DO SO..?</h5>
        <div class="input-box">
            <input type="text" name="user" placeholder="Username" required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="password" name="pass" placeholder="password" required>
            <i class='bx bxs-lock-alt'></i>
        </div>
        <div class="remember-forgot">
            <label><input type="checkbox">Remember me
            </label>
            <a href="#">Forgot password?</a>
        </div>
        <button type="submit" name="submit" class="btn">Login</button>
        <div class="register-link">
            <p>Don't have an account? <a href="register.php">
                    Register
                </a></p>
        </div>
    </form>
</div>
<!-- login form end -->