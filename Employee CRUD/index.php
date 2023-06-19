<?php 
    include('conn.php');
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP - OOP CRUD Operation</title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <link rel = "stylesheet" type = "text/css" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
    <div style="height:50px;"></div>
    <div class="well" style="margin-left:auto; margin-right:auto; padding:auto; width:100%;">
        <span style="font-size:25px; color:blue"><strong>Employee CRUD</strong></span>    
        <span class="pull-right">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addnew">
        <i class="bi bi-clipboard2-plus-fill"></i> Add New
        </button>
        </span>
        <div style="height:15px;"></div>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <th>Area</th>
                <th>District</th>
                <th>Thana</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Department</th>
                <th>Designation</th>
                <th>Action</th>
            </thead>
            <tbody>
            <?php
                $query=$conn->query("select employees.name,thana.thana_name,district.dis_name,employees.area_id,employees.age,employees.department,employees.designation,employees.email,employees.id from employees INNER JOIN thana
                ON employees.area_id = thana.id INNER JOIN district
                ON district.id = thana.district_id ;");
                while($row=$query->fetch_array()){
                    ?>
                    <tr>
                    <td><?php echo $row['area_id']; ?></td>
                        <td><?php echo $row['dis_name']; ?></td>
                        <td><?php echo $row['thana_name']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['department']; ?></td>
                        <td><?php echo $row['designation']; ?></td>
                        <td>
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $row['id']; ?>"><i class="bi bi-pencil"></i> Edit</button>  ||
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $row['id']; ?>"><i class="bi bi-trash"></i> Delete</button>
                            <?php include('modal.php'); ?>
                        </td>
                    </tr>
                    <?php
                }
             
            ?>
            </tbody>
        </table>
        <?php
            if(isset($_SESSION['msg'])){
                ?>
                    <div class="alert alert-success">
                        <center><?php echo $_SESSION['msg']; ?></center>
                    </div>
                <?php
                unset($_SESSION['msg']);
            }
        ?>
    </div>
    <?php include('add_modal.php'); ?>
</div>
</body>
</html>