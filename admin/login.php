<?php include '../layout/header.php';
include("../Controller/Dbcontext.php");
session_start();
// database ko check garya
if (isset($_POST['username'])){
        // space haru vaye
	$username = stripslashes($_REQUEST['username']);
 $username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['upassword']);
	$password = mysqli_real_escape_string($con,$password);
 $query = "SELECT * FROM `admin` WHERE uname='$username'
and upassword='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['uname'] = $username;
 header("Location:admin_index.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 pt-5">
      <div class="model-box pt-5" style="border: solid 1px #d3dae4;
    padding: 12px;">
        <h1 class="form-title text-center">Log in</h1>
        <form action="" method="POST">
          <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="your name" name="username"
              required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="upassword" required>
          </div>
          <input type="hidden" name="login" value="1" />
          <br>
          <button type="submit" class="btn btn-primary" value="submit">login</button>
          <p>Not registered yet? <a href='register.php'>Register Here</a></p>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-4"></div>
</div>
<?php } ?>
<?php include '../layout/footer.php';?>