<?php 

session_start();

$username="";
$email="";
$password_1="";
$password_2="";

$errors=array();

//connect to db
$db= mysqli_connect('localhost','root','','hms') or die("Failed to connect to database");

//register users
if (isset($_POST['reg_user'])) {
    $username = mysqli_real_escape_string($db ,$_POST["username"]);
    $email =  mysqli_real_escape_string($db ,$_POST["email"]);
    $password_1 = mysqli_real_escape_string($db ,$_POST["password_1"]);
    $password_2 =  mysqli_real_escape_string($db ,$_POST["password_2"]);
}

//form validation
if (empty($username)) {
    array_push($errors,"Username is required");
}
if (empty($email)) {
    array_push($errors,"Email is required");
}
if (empty($password_1)) {
    array_push($errors,"Password is required");
}
if ($password_1 !=$password_2) {
    array_push($errors,"Passwords do not match");
}

//check db for existing username
$user_check_query= "SELECT * FROM user WHERE username  = '$username' or email = '$email' LIMIT 1";

$results= mysqli_query($db,$user_check_query);
$user= mysqli_fetch_assoc($results);

if ($user) {
    if($user['username'] === $username){
        array_push($errors,"Username already exists");
    }
    if ($user['email'] === $email) {
        array_push($errors,"This email already exists");
    }
}

//register the user if no errors

if (count($errors)==0) {
    $password = $password_1; // password is encrypted using md5 encryption
    $query= "INSERT INTO user(username,email,password) values('$username','$email','$password')";
    
    mysqli_query($db,$query);
    $_SESSION['username'] = $username;
    $_SESSION['success']= "You are logged in now";

    header('location: index.php');


}

?>