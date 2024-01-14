<?php

$con = mysqli_connect('localhost', 'root', '', 'userinfo');

if ($con) {
    echo "Connection successful";
} else {
    echo "Connection failed";
}

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = "INSERT INTO userinfodata (`user`, `email`, `mobile`, `comments`) VALUES ('$user', '$email', '$mobile', '$comments')";

mysqli_query($con, $query);

header('Location: index.php');

?>

