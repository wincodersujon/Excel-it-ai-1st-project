<!-- Delete -->
<div class="modal fade" id="deleteModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
                <div class="modal-body">
                <?php
                    $del=mysqli_query($conn,"select * from employees where id='".$row['id']."'");
                    $drow=mysqli_fetch_array($del);
                ?>
                <div class="container-fluid">
                    <h5><center>Name: <strong><?php echo $drow['name']; ?></strong></center></h5> 
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"> Delete</a>
                </div>
            </div>
        </div>
    </div>

 
<!-- Edit -->
    <div class="modal fade" id="editModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
                <div class="modal-body">
                <?php
                    $edit=$conn->query("select * from employees where id='".$row['id']."'");
                    $erow=$edit->fetch_array();
                ?>
                <div class="container-fluid">
                <form method="POST" action="edit.php?id=<?php echo $erow['id']; ?>">

                <div class="row">
                        <div class="col-md-2">
                            <label style="position:relative; top:7px;">Area:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="arae_id" class="form-control" value="<?php echo $erow['area_id']; ?>">
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                <div class="row">
                    <div class="col-md-2">
                        <label style="position:relative; top:7px;">District:</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="dis_name">
                            <option value="<?php echo $erow['dis_name']; ?>">Select District</option>
                        </input>
                    </div>
                </div>
                <div style="height:10px;"></div>
                <div class="row">
                    <div class="col-md-2">
                        <label style="position:relative; top:7px;">Thana:</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="thana_name">
                            <option value="<?php echo $erow['thana_name']; ?>">Select Thana</option>
                        </input>
                    </div>
                </div>
               
                <div style="height:10px;"></div>
                <div class="row">
                        <div class="col-md-2">
                            <label style="position:relative; top:7px;">Name:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="name" class="form-control" value="<?php echo $erow['name']; ?>">
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-md-2">
                            <label style="position:relative; top:7px;">Email:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="email" class="form-control" value="<?php echo $erow['email']; ?>">
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-md-2">
                            <label style="position:relative; top:7px;">Age:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="age" class="form-control" value="<?php echo $erow['age']; ?>">
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-md-2">
                            <label style="position:relative; top:7px;">Department:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="department" class="form-control" value="<?php echo $erow['department']; ?>">
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-md-2">
                            <label style="position:relative; top:7px;">Designation:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="designation" class="form-control" value="<?php echo $erow['designation']; ?>">
                        </div>
                    </div>
                    
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-warning">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>