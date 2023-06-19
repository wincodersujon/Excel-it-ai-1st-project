<?php
    include('conn.php');
    session_start();
 
    $id=$_GET['id'];
 
    $conn->query("delete from employees where id='$id'");
    $_SESSION['msg']="Employee Deleted Succesfully";
    header('location:index.php');
?>