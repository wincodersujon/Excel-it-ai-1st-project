<?php
    include('conn.php');
    session_start();
 
    $id=$_GET['id'];
    $dis_name=$_POST['dis_name'];
    $thana_name=$_POST['thana_name'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $department=$_POST['department'];
    $designation=$_POST['designation'];
    $area_id=$_POST['area_id'];
     
    $query=$conn->query("select employees.name,thana.thana_name,district.dis_name,employees.area_id,employees.age,employees.department,employees.designation,employees.email,employees.id from employees INNER JOIN thana
    ON employees.area_id = thana.id INNER JOIN district
    ON district.id = thana.district_id ;");
    $_SESSION['msg']="Employee Updated Succesfully";
    header('location:index.php');
?>
