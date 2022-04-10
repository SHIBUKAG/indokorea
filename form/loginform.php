<?php
include('connection.php');

$uname = $_POST['uname'];
$pass = $_POST['pass'];

$sql = "select *from register where uname = '$uname' and password = '$pass'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    echo "<h1><center> Login successful </center></h1>";
} else {
    echo "<h1> Login failed. Invalid username or password.</h1>";
}
