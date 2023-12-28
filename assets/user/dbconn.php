<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "web user";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if(!$conn) 
{
    die("sorry dose not conect : ". mysqli_connect_error());
}else{
echo "";
};

?>