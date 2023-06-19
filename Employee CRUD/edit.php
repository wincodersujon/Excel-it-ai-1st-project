<?php
    include('conn.php');
    session_start();
 
    $id=$_GET['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $department=$_POST['department'];
    $designation=$_POST['designation'];
    $area_id=$_POST['area_id'];
     
    $conn->query("update employees set name='$name', email='$email', age='$age', department='$department' ,designation='$designation' , department='$department'  where id='$id'");
    $_SESSION['msg']="Employee Updated Succesfully";
    header('location:index.php');
?>