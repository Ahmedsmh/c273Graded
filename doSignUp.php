<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("dbFunctions.php");

$username = $_POST['username'];
$password = $_POST['password'];
$height = $_POST['height'];
$weight = $_POST['weight'];


$query = "INSERT INTO patient(username, password, height, weight) 
          VALUES 
          ('$username','$password','$height','$weight')";

//echo $query;
$status = mysqli_query($link, $query) or die(mysqli_error($link));

if ($status) {
    $msg = "Account created successfully. Click here to <a href='login.html'>login</a>";
} else {
    $msg = "form insertion failed.<br/>";
}
?>