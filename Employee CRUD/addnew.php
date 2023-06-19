<?php
    include('conn.php');
    session_start();
     
    $name=$_POST['name'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $department=$_POST['department'];
    $designation=$_POST['designation'];  
    $area_id=$_POST['area_id'];
     
    $conn->query("insert into employees (name, email, age, department, designation, area_id) values ('$name', '$email', '$age','$department','$designation','$area_id')");
    $_SESSION['msg']="Employee Added Succesfully";
    header('location:index.php');
?>