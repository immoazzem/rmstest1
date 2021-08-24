<?php $mysqli = new mysqli("localhost","root","", "wdpf47_rms") or die("Connection error")?>
<?php require_once "partials/_header.php"; ?>
<?php require_once "partials/_sidebar.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage  <small> Stores</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Stores</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-xs-12">
            <?php 
            if(isset($_POST['submit']))
            {
              extract($_POST);
              $name = $_POST["store_name"];
              $active = $_POST['active'];
              $query = "INSERT INTO stores(name, active)
              VALUES('$name','$active')";
              $result = $mysqli->query($query);
              
            }
            ?>
            <div id="messages"></div>

            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add Store</button>
            <br><br>

            <div class="box">
              <div class="box-header">
                <h5 class="box-title">Manage Order</h5>
              </div>
              <div class="box-body">
                <table id="manageTable" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Store Name</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- create-add-modal -->
  <div class="modal fade" tabindex="-1" role="dialog" id="addModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Store</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <form action="" method="post" id="createForm" role="form">
          <div class="modal-body">
            <div class="form-group">
              <label for="brand_name">Store Name</label>
              <input type="text" name="store_name" id="store_name" class="form-control" placeholder="Enter Store Name" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="active">Status</label>
              <select name="active" id="active" class="form-control">
                <option value="1">Active</option>
                <option value="2">Inactive</option>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- create-edit-modal -->
  <div class="modal fade" tabindex="-1" role="dialog" id="editModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Store</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <form action="" method="post" id="updateForm" role="form">
          <div class="modal-body">
            <div class="form-group">
              <label for="brand_name">Store Name</label>
              <input type="text" name="edit_store_name" id="edit_store_name" class="form-control" placeholder="Edit Store Name" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="edit_active">Status</label>
              <select name="edit_active" id="edit_active" class="form-control">
                <option value="1">Active</option>
                <option value="2">Inactive</option>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save< Changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- create-edit-modal -->
  <div class="modal fade" tabindex="-1" role="dialog" id="deleteModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Remove Store</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <form action="" method="post" id="removeForm" role="form">
          <div class="modal-body">
            <p>Do you really want to remove?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function(){
      $("#creteForm").unbind('submit').on('submit',function(){
        
        $.ajax({
          url: "stores.php",
          method: "POST",
          data: $("#createForm").serialize(),
          success:function(data){
            $('#createForm')[0].reset;
            $('#addModal').modal('hide');
            $('#manageTable').html(data);
          }
        });
        
      });
    });
  </script>

<?php require_once "partials/_footer.php"; ?>

