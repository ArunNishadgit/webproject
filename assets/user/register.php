<link rel="stylesheet" href="../csstyle/login.css">


<?php
if(isset($_POST['submit'])){
  include "dbconn.php";
  $username = mysqli_real_escape_string($conn, $_POST['user']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['pass']);
  $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);

  $sql = "select * from user where username='$username'";
  $result = mysqli_query($conn, $sql);
  $count_user = mysqli_num_rows($result);

  $sql = "select * from user where email='$email'";
  $result = mysqli_query($conn, $sql);
  $count_email = mysqli_num_rows($result);

  if ($count_user == 0 && $count_email == 0) {
    if ($password == $cpassword) {
      $password = password_hash($password, PASSWORD_BCRYPT);
      $sql = "insert into `user` (username, email, password) values ('$username','$email', '$password')";
      $result = mysqli_query($conn, $sql);

      if ($result) {
        echo '<script>alert("Registration successful!"); window.location.href="login.php";</script>';
      } else {
        echo '<script>alert("Error in registration. Please try again."); window.location.href="register.php";</script>';
      }
    } else {
      echo '<script>alert("Passwords do not match!"); window.location.href="register.php";</script>';
    }
  } else {
    echo '<script>alert("User or email already exists!"); window.location.href="register.php";</script>';
  }
}
?>

<div class="wrapper">
    <form name="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <h1>Registration</h1>
        <div class="input-box">
            <input name="user" type="text" placeholder="Username" required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input name="email" type="email" placeholder="Email" required>
            <i class='bx bxs-like bx-tada '></i>
        </div>
        <div class="input-box">
            <input name="pass" type="password" placeholder="password" required>
            <i class='bx bxs-lock-alt'></i>
        </div>
        <div class="input-box">
            <input name="cpass" type="password" placeholder="Confirm password" required>
            <i class='bx bxs-lock-alt'></i>
        </div>
        <button name="submit" type="submit" class="btn">Register</button>
    </form>
</div>
<!-- registratiion form stop -->