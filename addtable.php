<?php require_once "partials/_header.php"; ?>
<?php require_once "partials/_sidebar.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Table</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Table</a></li>
              <li class="breadcrumb-item active">Add Table</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="box">
        <div class="row">
          <div class="col-md-12 col-xs-12">
              <div class="box-header">
                <h5 class="box-title">Add Table</h5>
              </div>
            <form role="form" action="" method="post" id="createForm">
              <div class="box-body">
                <div class="form-group">
                  <label for="brand_name">Table Name</label>
                  <input type="text" class="form-control" id="table_name" name="table_name" placeholder="Enter table name" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="brand_name">Capacity</label>
                  <input type="text" class="form-control" id="capacity" name="capacity" placeholder="Enter capacity" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="active">Status</label>
                  <select class="form-control" id="active" name="active">
                    <option value="1">Active</option>
                    <option value="2">Inactive</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="active">Store</label>
                  <select class="form-control" id="store" name="store">
                    <option value="1">NK</option>
                    <option value="2">Barishal</option>
                  </select>
                </div>
              </div>
              <div class="box-footer">
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <button type="reset" class="btn btn-warning">Reset</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php require_once "partials/_footer.php"; ?>