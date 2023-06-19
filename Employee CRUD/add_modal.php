<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form method="POST" action="addnew.php">
                <div class="row">
                    <div class="col-md-2">
                        <label class="control-label" style="position:relative; top:7px;">District:</label>
                    </div>
                    <div class="col-md-10">
                        <select type="integer" class="form-control" name="dis_name">
                            <option value="" disabled >Select District</option>
                            <?php
                            $query=$conn->query("select district.dis_name,INNER JOIN thana
                            ON district.id = thana.thana_name ;");
                            $data = array("dis_name");
                             foreach($data as $value){
                               
                            ?>

                            <option value="{{$value->dis_name}}">Select District</option>
                          
                            <?php 
                            }
                            ?>

                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label class="control-label" style="position:relative; top:7px;">Thana:</label>
                    </div>
                    <div class="col-md-10">
                        <select type="integer" class="form-control" name="thana">
                            <option value="">Select Thana</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label class="control-label" style="position:relative; top:7px;">Area:</label>
                    </div>
                    <div class="col-md-10">
                        <select type="integer" class="form-control" name="area_id">
                            <option value="">Select Area</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label class="control-label" style="position:relative; top:7px;">Name:</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <div style="height:10px;"></div>
                <div class="row">
                    <div class="col-md-2">
                        <label class="control-label" style="position:relative; top:7px;">Email:</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="email">
                    </div>
                </div>
                <div style="height:10px;"></div>
                <div class="row">
                    <div class="col-md-2">
                        <label class="control-label" style="position:relative; top:7px;">Age:</label>
                    </div>
                    <div class="col-md-10">
                        <input type="integer" class="form-control" name="age">
                    </div>
                </div>
                <div style="height:10px;"></div>
                <div class="row">
                    <div class="col-md-2">
                        <label class="control-label" style="position:relative; top:7px;">Department:</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="department">
                    </div>
                </div>
                <div style="height:10px;"></div>
                <div class="row">
                    <div class="col-md-2">
                        <label class="control-label" style="position:relative; top:7px;">Designation:</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="designation">
                    </div>
                </div>
                <div style="height:10px;"></div>
                <div style="height:10px;"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>