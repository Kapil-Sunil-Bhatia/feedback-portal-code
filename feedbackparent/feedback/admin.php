<?php
include("header.php");
include("sidebar.php");
if(isset($_POST['submit']))
{
	if(isset($_GET['editid']))
	{
		$sql ="UPDATE `admin` SET `adminname`='".$_POST['adminname']."',`loginid`='".$_POST['loginid']."',`password`='".$_POST['password']."',`status`='".$_POST['status']."' WHERE adminid='".$_GET['editid']."'";
		$qsql = mysqli_query($con,$sql);
			echo mysqli_error($con);
		if(mysqli_affected_rows($con) ==1)
		{		
			echo "<script>alert('Admin record Updated successfully...');</script>";
			//echo "<script>window.location='category.php';</script>";
		}
	}
	else
	{  
		$sql ="INSERT INTO admin SET `adminname`='".$_POST['adminname']."',`loginid`='".$_POST['loginid']."',`password`='".$_POST['password']."' ,`status`='".$_POST['status']."' ";
		
		$qsql = mysqli_query($con,$sql);
			echo mysqli_error($con);
		if(mysqli_affected_rows($con) ==1)
		{
			$insid=mysqli_insert_id($con);
			echo "<script>alert('Admin record inserted successfully...');</script>";
			echo "<script>window.location='admin.php';</script>";
		}
	}
}
if(isset($_GET['editid']))
{
	$sqledit = "SELECT * FROM admin where adminid='".$_GET['editid']."'";
	$qsqledit = mysqli_query($con,$sqledit);
	$rsedit = mysqli_fetch_array($qsqledit);
}
?>
<style>
	 .content{
       color:#9b2928;
       font-weight:bold;
    }
    .card-header{
        background-color:#9b2928;
        color:white;
    }
    .card{
        background-color:#FFECEC;
    }
	.card-title{
		text-transform: uppercase;
		font-weight: bold;
	}
	.card-footer{
		background-color:#FFECEC;	
	}
	.btn-primary {
    color: #fff;
    background-color: #9b2928;
    border-color: #9b2928;
    box-shadow: none;

}
     .btn-primary:hover{
         background-color:#630606;
          border-color:#630606;
     }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	 <br>
    <!-- Main content -->
    <section class="content">
<form method="post" action="" onsubmit="return confirmvalidation()">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Admin Master</h3>
        </div>
        <div class="card-body">
		

<div class="row">
	<div class="col-md-3">Admin Name</div>
	<div class="col-md-5">
		<input type="text" class="form-control" name="adminname" id="adminname" value="<?php if(isset($rsedit['adminname'])) { echo $rsedit['adminname']; } ?>"  />
	</div>
	<div class="col-md-4"><span class="errmsg flash" id="erradminname" style="color: red;"></span></div>
</div>
<br>
<div class="row">
	<div class="col-md-3">Login Id</div>
	<div class="col-md-5">
		<input type="text" class="form-control" name="loginid" id="loginid" value="<?php if(isset($rsedit['loginid'])) { echo $rsedit['loginid']; } ?>"  />
	</div>
	<div class="col-md-4"><span class="errmsg flash" id="errloginid" style="color: red;"></span></div>
</div>
<br>
<div class="row">
	<div class="col-md-3">Password</div>
	<div class="col-md-5">
		<input type="password" class="form-control" name="password" id="password" value="<?php if(isset($rsedit['password'])) { echo $rsedit['password']; } ?>"  />
	</div>
	<div class="col-md-4"><span class="errmsg flash" id="errpassword" style="color: red;"></span></div>
</div>
<br>
<div class="row">
	<div class="col-md-3">Confirm Password</div>
	<div class="col-md-5">
		<input type="password" class="form-control" name="confirmpassword" id="confirmpassword" value="<?php if(isset($rsedit['password'])) { echo $rsedit['password']; } ?>"  />
	</div>
	<div class="col-md-4"><span class="errmsg flash" id="errconfirmpassword" style="color: red;"></span></div>
</div>
<br>
<div class="row">
	<div class="col-md-3">Status</div>
	<div class="col-md-5">
		<select class="form-control" name="status" id="status">
		<option value="">Select Status</option>
		<?php
		 $arr  = array("Active","Inactive");
		 foreach($arr as $val)
			{
				if($rsedit['status'] == $val)
				{
				echo "<option value='$val' selected>$val</option>";
				}
				else
				{
				echo "<option value='$val'>$val</option>";
				}
			}
		?>
		</select>
	</div>
	<div class="col-md-4"><span class="errmsg flash" id="errstatus" style="color: red;"></span></div>
</div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">

<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-5">
		<input class="btn btn-primary"  type="submit" name="submit" id="submit" value="Submit">
	</div>
	<div class="col-md-4"></div>
</div>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
</form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include("footer.php");
?>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>


<script src="dist/js/pages/dashboard3.js"></script>

<script>
function confirmvalidation()
{
	var i = 0;
	$('.errmsg').html('');
	if(document.getElementById("adminname").value == "")
	{
		document.getElementById("erradminname").innerHTML="Admin name should not be empty";
		i=1;
	}
	
	if(document.getElementById("loginid").value == "")
	{
		document.getElementById("errloginid").innerHTML="Login Id should not be empty";
		i=1;
	}
	
	if(document.getElementById("password").value == "")
	{
		document.getElementById("errpassword").innerHTML="Password should not be empty";
		i=1;
	}
	if(document.getElementById("confirmpassword").value == "")
	{
		document.getElementById("errconfirmpassword").innerHTML="Confirm Password should not be empty";
		i=1;
	}

	if(document.getElementById("password").value != document.getElementById("confirmpassword").value)
	{
		document.getElementById("errconfirmpassword").innerHTML=" Confirm Password should match the password";
		i=1;
	}
	
	
	if(document.getElementById("status").value == "")
	{
		document.getElementById("errstatus").innerHTML="Kindly select the status";
		i=1;
	}
	 
	if(i == 0)
	{
		return true;
	}
	else
	{
		return false;
	}
}
</script>
</body>
</html>
