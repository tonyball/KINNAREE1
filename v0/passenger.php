<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include 'inc/nav.php';?>

	<div class="container">
		<div class="card-panel col s12">
			   <nav>
			    <div class="nav-wrapper  green lighten-3">
			      <div class=" container col s12">
			        <a href="#!" class="breadcrumb black-text">เลือกเที่ยวบิน</a>
			        <a href="#!" class="breadcrumb black-text ">กรอกรายละเอียด</a>
			        <a href="#!" class="breadcrumb white-text ">บริการพิเศษ</a>
			        <a href="#!" class="breadcrumb white-text ">ชำระค่าบริการ</a>
			      </div>
			    </div>
			   </nav>

			<div class="card green lighten-4 col s12" style="width:100%; height:80px;">
				<h5 style="padding-top:10px; padding-left:10px">คุณมีบัญชีอยู่แล้ว ?</h5>	
				<a class="waves-effect waves-light btn green right" style="margin-top:-25px;" width="100%">&nbsp&nbsp&nbsp&nbspเข้าสู่ระบบ&nbsp&nbsp&nbsp&nbsp</a>
				<span style="padding-left:10px">โปรดลงชื่อเข้าใช้เพื่อใช้ข้อมูลเก่าของคุณ</span>


			</div>
			<div class=" col s12 ">
				 <form class="container col s12">
				      <div class="row">
				      	<div class="col s2">
				      		
				      	
						  <label style="font-size:10px;" class="black-text"><img src="images/airplane_take_off.png" width="16" height="16"> คำนำหน้าชื่อ</label>
						  	<select class="browser-default">
							    <option value="" disabled selected>Choose your option</option>
							    <option value="1">Option 1</option>
							    <option value="2">Option 2</option>
							    <option value="3">Option 3</option>
						  	</select>
						 </div>
						 <div class="col s5">
						 	<div class="input-field">
					          <input id="last_name" type="text" class="validate">
					          <label for="last_name">Last Name</label>
					        </div>
						 </div>
						 <div class="col s5">
						 	<div class="input-field">
					          <input id="last_name" type="text" class="validate">
					          <label for="last_name">Last Name</label>
					        </div>
						 </div>


				      </div>
				      <div class="row">
				      	<div class="col s7">
				      		<label style="font-size:10px;" class="black-text"><img src="images/airplane_take_off.png" width="16" height="16"> วันเกิด</label>
				      		<div class="row">
				      			<div class="col s3">
				      				<select class="browser-default">
									    <option value="" disabled selected>Choose your option</option>
									    <option value="1">Option 1</option>
									    <option value="2">Option 2</option>
									    <option value="3">Option 3</option>
								  	</select>
				      			</div>
				      			<div class="col s3">
				      				<select class="browser-default">
									    <option value="" disabled selected>Choose your option</option>
									    <option value="1">Option 1</option>
									    <option value="2">Option 2</option>
									    <option value="3">Option 3</option>
								  	</select>
				      			</div>
				      			<div class="col s3">
				      				<select class="browser-default">
									    <option value="" disabled selected>Choose your option</option>
									    <option value="1">Option 1</option>
									    <option value="2">Option 2</option>
									    <option value="3">Option 3</option>
								  	</select>
				      			</div>
				      		</div>
				      	</div>
				      	<div class="col s3">
				      		 <label style="font-size:10px;" class="black-text"><img src="images/airplane_take_off.png" width="16" height="16"> คำนำหน้าชื่อ</label>
						  	<select class="browser-default">
							    <option value="" disabled selected>Choose your option</option>
							    <option value="1">Option 1</option>
							    <option value="2">Option 2</option>
							    <option value="3">Option 3</option>
						  	</select>
				      	</div>
				      </div>
				    </form>
			</div>
				<a class="waves-effect waves-light btn green right" style="margin-top:0px;" width="100%">&nbsp&nbsp&nbsp&nbspต่อไป&nbsp&nbsp&nbsp&nbsp</a>
			
		</div>
	</div>

	<?php include 'inc/footer.php';?>



</body>
</html>