<?php include 'layout/header.php';?>
<div class="container mt-5">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="model-box">
   <h1 class="form-title">CONTACT US</h1>
  <form action="index.php" method="POST" enctype="multipart/form-data">
<label for="exampleInputEmail1" class="text-light">Name</label>
<input class="form-control form-control-lg" type="text" placeholder="Your name" name="firstname" required>
<br>
 <br>
<div class="form-group">
    <label for="exampleInputEmail1" class="text-light">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="abc@example.com" aria-describedby="emailHelp" name="useremail1" required>
    <small id="emailHelp" class="form-text text-muted" style="color:white!important">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1" class="text-light">Message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="message" required></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1" class="text-light"> Upload screenshot</label>
    <input type="file" class="form-control-file text-light" id="exampleFormControlFile1"  name="uploaded_file">
  </div>
<input type="hidden" name="form_submitted" value="1" />
<br>
<button type="submit" class="btn btn-primary" value="submit">Send</button>
</form>
</div>
</div>
<div class="col-md-4"></div>
</div>
</div>
<?php include 'layout/footer.php';?>