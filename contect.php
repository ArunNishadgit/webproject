<link rel="stylesheet" href="./assets/csstyle/contect.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
session_start();
include ('header.php');
include ('./assets/user/dbconn.php');

if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);

    $sql = "INSERT INTO `contect` (`name`, `email`, `message`) VALUES ('{$name}', '{$email}', '{$message}')";
    
    if ($conn->query($sql) === true) {
       echo '<script>Swal.fire({
        position: "center",
        icon: "success",
        title: "successeful send your message?",
        showConfirmButton: false,
        timer: 1500
      });</script>';
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>


<!-- start contact section -->
<div class="hed">
    <h1>Contact us</h1>
</div>
<div id="form">
    <div class="fish" id="fish"></div>
    <div class="fish" id="fish2"></div>
    <form id="waterform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="formgroup" id="name-form">
            <label for="name">Your name*</label>
            <input type="text" id="name" name="name" />
        </div>
        <div class="formgroup" id="email-form">
            <label for="email">Your e-mail*</label>
            <input type="email" id="email" name="email" />
        </div>
        <div class="formgroup" id="message-form">
            <label for="message">Your message</label>
            <textarea id="message" name="message"></textarea>
        </div>
        <input type="submit" name="submit" value="Send your message!" />
    </form>
</div>

<!-- stop contect section -->

<script src="assets/javascript/contect.js"></>