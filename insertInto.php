<?php
require_once 'connection.php';

if(isset($_POST['submit'])){
    $fname = mysqli_real_escape_string($conn,$_POST['fname']);
    $lname = mysqli_real_escape_string($conn,$_POST['lname']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $dob = mysqli_real_escape_string($conn,$_POST['dob']);
    $weight = mysqli_real_escape_string($conn,$_POST['weight']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']); 

    $sql="INSERT INTO kenya(firstName,lastName,gender,dateOfBirth,email,password,weight,)
    VALUES('$fname','$lname','$gender','$dob','$email','$password','$weight')";
    if (mysqli_query($conn,$sql)){
        echo "<script type='text/javascript'> window.alert('person added successfully')</script>";
        
        header("Location:index.php");
        exit();
    }else{
        echo "ERROR: not able to execute $sql. " . mysqli_error ($conn);
    };

}

