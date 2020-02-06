
<?php include("../Controller/Dbcontext.php");?>
<?php include '../layout/header.php';?>
<div class="container">
  <div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-5 mt-5 " style="border: solid 1px #d3dae4;
    padding: 12px;">
  <div class="header">
  	<h2 class="text-center">Register</h2>
  </div>
  <form action="admin.php" method="POST"  enctype="multipart/form-data">
  <div class="d-flex">
  <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="your name" name="name" required>
  </div>
  <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email" required>
    </div>
    </div>
    <div class="d-flex">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Confirm password</label>
      <input type="password" class="form-control" id="confirm_password" name="confirmpassword" required>
    </div>
    </div>
    <div class="form-group">
    <label for="exampleFormControlFile1" class="text-dark"> Profile picture</label>
    <input type="file" class="form-control-file text-dark" id="exampleFormControlFile1"  name="uploaded_file">
  </div>
    <input type="hidden" name="registered" value="1" />
<br>
<button type="submit" class="btn btn-primary" value="submit">Register</button>
  	<p>
  		Already a member? <a href="login.php">Log in</a>
  	</p>
  </form>
  </div>
  <div class="col-md-3"></div>
  </div>
  </div>
  <?php include '../layout/footer.php';?>
