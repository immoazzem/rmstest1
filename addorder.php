<?php require_once "partials/_header.php";
  require_once "partials/_sidebar.php";
  date_default_timezone_set('Asia/Dhaka'); ?>
  <?php
  $id = '';
  if(isset($_POST['product'])){
    $id = $_POST['product'];
  }
  

  ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Order</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Order</a></li>
              <li class="breadcrumb-item active">Add Order</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
    <div class="box">
          <div class="box-header">
            <h3 class="box-title">Add Order</h3>
          </div>
          <!-- /.box-header -->
          <form role="form" action="" method="post" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="gross_amount" class="col-sm-12 control-label">Date: <?php echo date('Y-m-d') ?></label>
                </div>
                <div class="form-group">
                  <label for="gross_amount" class="col-sm-12 control-label">Date: <?php echo date('h:i a') ?></label>
                </div>

                <div class="col-md-4 col-xs-12 pull pull-left">

                  <div class="form-group">
                    <label for="gross_amount" class="col-sm-5 control-label" style="text-align:left;">Table</label>
                    <div class="col-sm-7">
                      <select class="form-control" id="table_name" name="table_name">
                          <option value="<?php ?>"><?php  ?></option>  
                      </select>
                    </div>
                  </div>

                </div>
                
                
                <br /> <br/>
                <table class="table table-bordered" id="product_info_table">
                  <thead>
                    <tr>
                      <th style="width:50%">Product</th>
                      <th style="width:10%">Qty</th>
                      <th style="width:10%">Rate</th>
                      <th style="width:10%">Vat</th>
                      <th style="width:20%">Amount</th>
                      <th style="width:10%"><button type="button" id="add_row" class="btn btn-default"><i class="fa fa-plus"></i></button></th>
                    </tr>
                  </thead>

                   <tbody>
                     <tr id="row_">
                       <td>
                        <select class="form-control select_group product" data-row-id="row_1" id="product_" name="product[]" style="width:100%;" required>
                            <option value=""></option>
                          </select>
                        </td>
                        <td><input type="text" name="qty[]" id="qty_" class="form-control" required></td>
                        <td><input type="text" name="rate[]" id="rate_" class="form-control" autocomplete="off"></td>
                        <td><input type="text" name="vat[]" id="vat_" class="form-control" autocomplete="off"></td>
                        <td><input type="text" name="amount[]" id="amount_" class="form-control" disabled autocomplete="off"></td>
                        <td><button type="button" class="btn btn-default"><i class="far fa-window-close"></i></button></td>
                     </tr>
                   </tbody>
                </table>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Create Order</button>
                <a href="" class="btn btn-warning">Back</a>
              </div>
            </form>
          <!-- /.box-body -->
        </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php require_once "partials/_footer.php"; ?>
<script>
  $(document).ready(function(){
    var i = 1;
    $("#add_row").click(function(){
      i++;
      $("#product_info_table").append('<tr id="row_'+i+'"><td><select class="form-control select_group product" data-row-id="row_'+i+'" id="product_'+i+'" name="product[]" style="width:100%;" required><option value=""></option></select></td><td><input type="text" name="qty[]" id="qty_'+i+'" class="form-control" required></td><td><input type="text" name="rate[]" id="rate_'+i+'" class="form-control" autocomplete="off"></td><td><input type="text" name="vat[]" id="vat_'+i+'" class="form-control" autocomplete="off"></td><td><input type="text" name="amount[]" id="amount_'+i+'" class="form-control" disabled autocomplete="off"></td><td><button name="remove" id="'+i+'" type="button" class="btn btn-default btn_remove"><i class="far fa-window-close"></i></button></td></tr>');
    })
    $(document).on('click', '.btn_remove', function(){
      var button_id = $(this).attr("id");
      $('#row_'+button_id+'').remove();
    })
  });
</script>

