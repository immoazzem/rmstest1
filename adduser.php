<?php require_once "partials/_header.php"; ?>
<?php require_once "partials/_sidebar.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <form role="form" action="" method="post">
          <div class="form-group">
            <label for="groups">Groups</label>
            <select class="form-control" id="groups" name="groups">
              <option value="" hidden>Select Groups</option>
              <option value="5">Staff</option>
              <option value="4">Members</option>
            </select>
          </div>
          <div class="form-group">
            <label for="store">Store</label>
            <select name="store" id="store" class="form-control">
              <option value="" hidden>Select One</option>
            </select>
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="username" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="gender">Gender</label>
            <div class="radio">
              <label>
                <input type="radio" name="gender" id="male" value="1">
                Male
              </label>
              <label>
                <input type="radio" name="gender" id="female" value="2">
                Female
              </label>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="index.php" class="btn btn-warning">Back</a>
          </div>
        </form>
        
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
    $(document).ready(function() {
      $("#groups").select2();

      $("#userMainNav").addClass('active');
      $("#createUserSubNav").addClass('active');
      
    });
  </script>

<?php require_once "partials/_footer.php"; ?>