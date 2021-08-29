<?php require_once "partials/_header.php"; ?>
<?php require_once "partials/_sidebar.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Product</a></li>
              <li class="breadcrumb-item active">Add Product</li>
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

            <div id="messages"></div>

            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Add Product</h3>
              </div>
              <!-- /.box-header -->
              <form role="form" action="" method="post" enctype="multipart/form-data">
                  <div class="box-body">

                    <div class="form-group">
                      <label for="product_image">Image</label>
                      <div class="kv-avatar">
                        <div class="file-loading">
                            <input id="product_image" name="product_image" type="file">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="product_name">Product name</label>
                      <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter product name" autocomplete="off" value="" />
                    </div>

                    <div class="form-group">
                      <label for="price">Price</label>
                      <input type="text" class="form-control" id="price" name="price" placeholder="Enter price" autocomplete="off" value=""/>
                    </div>

                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea type="text" class="form-control" id="description" name="description" placeholder="Enter 
                      description" autocomplete="off">
                      </textarea>
                    </div>

                    <div class="form-group">
                      <label for="category">Category</label>
                      <select class="form-control select_group" id="category" name="category[]" multiple="multiple">
                        <option value=""></option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="store">Store</label>
                      <select class="js-example-basic-multiple js-states form-control" id="store" name="store[]" multiple="multiple">
                        <option value=""></option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="store">Active</label>
                      <select class="js-example-basic-single" id="active" name="active">
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                      </select>
                    </div>
                    <select class="form-select" multiple aria-label="multiple select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    <a href="" class="btn btn-warning">Back</a>
                  </div>
                </form>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- col-md-12 -->
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
    $(document).ready(function() {
      $("#productMainNav").addClass('active');
      $("#createProductSubMenu").addClass('active');
    });

  </script>

<?php require_once "partials/_footer.php"; ?>