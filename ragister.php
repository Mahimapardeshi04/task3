<?php
include('connection.php');

if (isset($_POST['signup'])) {
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $check = "SELECT * FROM users WHERE email='$email'";
    $check_result = mysqli_query($conn, $check);

    if (mysqli_num_rows($check_result) > 0) {
        echo "Email already exists.";
    } else {
        $query = "INSERT INTO users (fName, lName, email, password) VALUES ('$fName', '$lName', '$email', '$password')";
        if (mysqli_query($conn, $query)) {
            echo "Registration successful.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
if(isset($_post["signIn"])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    $password=md5($password);
    
    $sql="select * from users where email='$email' and password='$password'";
    $result=mysqli_query($conn,$sql);
    if($result->num_row>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("location:homepage.php");
        exist();
    }
    else{
        echo "Invalid email or password";
    }
}
?>