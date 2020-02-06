<?php
include("../function/check.php");
	include("../Controller/Dbcontext.php");
	
	
		$query = "SELECT sname,semail,smessage,files,id FROM appform ORDER BY id DESC";
		$returnMessage = mysqli_query($con,$query);
		$returnMessage1 = mysqli_query($con,$query);
		$result = mysqli_fetch_assoc($returnMessage);


?>
<?php include '../layout/header.php';?>
<div class="container mt-5">
	<div class="row">
		<div class="col-md-2" style="background:#becbd6;height:100vh"> </div>
		<div class="col-md-10" style="background: #f7f7f7;">
			<table class="table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Email</th>
						<th>Message</th>
						<th>Files</th>


					</tr>
				</thead>
				<tbody>
					<?php
				while($result1 = mysqli_fetch_assoc($returnMessage1) ){
				?>
					<tr>
						<td><?php echo ucfirst($result1['id']); ?></td>
						<td><?php echo ucfirst($result1['sname']); ?></td>
						<td><?php echo ($result1['semail']); ?></td>
						<td><?php echo ucfirst($result1['smessage']); ?></td>
						<td> <img src="../<?php echo ($result1['files']); ?>" height="70" width="70"
								class="img-thumnail" />
						</td>
						<td> <a href="../Controller/edit.php?id=<?php echo $result1['id'];?>">Edit </a></td>
						<td><a
								href="../Controller/postcontroller.php?activity=deletecontact&id=<?php echo $result1['id'];?>">Delete
							</a></td>
						</td>
						<td>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Important</label>
							</div>
						</td>

					</tr>
					<?php
				}
			?>

				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include '../layout/footer.php';?>