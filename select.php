<!DOCTYPE html>
<html>
<head>
	<title>หน้าเลือกตั๋ว</title>
</head>
<body>
<style type="text/css">
	.trcolor{
		color: #66bb6a !important;
	}
		[type="radio"]:checked+label:after{
		border: 2px solid #4caf50 !important;
		background-color: #4caf50 !important;
	}
</style>
	<?php include 'inc/nav.php';?>

	<div class="container">
		<div class="card-panel col s12">
			  <nav>
			    <div class="nav-wrapper  green lighten-3">
			      <div class=" container col s12">
			        <a href="#!" class="breadcrumb black-text">เลือกเที่ยวบิน</a>
			        <a href="#!" class="breadcrumb white-text ">กรอกรายละเอียด/จ่ายเงิน</a>
			        <a href="#!" class="breadcrumb white-text ">ตรวจสอบข้อมูล</a>
			      </div>
			    </div>
			   </nav>
			<div class="row ">
				<div class="col s4 ">
					<table class="">
				        <thead>
				          <tr>
				              <th data-field="id" class="trcolor">ผู้ใหญ่</th>
				              <th data-field="name" class="trcolor">เด็ก</th>
				              <th data-field="price" class="trcolor">ทารก</th>
				          </tr>
				        </thead>

				        <tbody>
				          <tr>
				            <td>1</td>
				            <td>0</td>
				            <td>0</td>
				          </tr>
				        </tbody>
				      </table>
				</div>
				<div class="col s8">
					<h5><i class="fa fa-plane"></i>โปรดเลือกเที่ยวบินที่ต้องการโดยการติ้กถูกข้างหลังราคา</h5>
				</div>
			</div>
			<div>
				<h4><img src="images/airplane_take_off.png" width="32" height="32">เที่ยวบินขาไป</h4>
			</div>
			<div>
				<div class="row">
				    <div class="col s12">
				      <ul class="tabs">
				        <li class="tab col s5"><a href="#test1" class="waves-effect waves-light btn black-text green lighten-2"> <i class="fa fa-angle-left"></i>วันก่อนหน้า</a></li>
				        <li class="tab col s1 "><a href="#test3" class="black-text">อา. 28 ก.พ. </a></li>
				        <li class="tab col s1"><a href="#test4" class="selected active">จ. 29 ก.พ.</a></li>
				        <li class="tab col s1"><a href="#test4" class="black-text">อ. 1 มี.ค.</a></li>
				        <li class="tab col s4"><a href="#test4" class="waves-effect waves-light btn black-text green lighten-2">วันถัดไป <i class="fa fa-angle-right"></i></a></li>
				      </ul>
				    </div>
				</div>
			<div>
				<table>
			        <thead>
			          <tr>
			              <th data-field="id">ไฟท์บิน</th>
			              <th data-field="name">ออกจาก</th>
			              <th data-field="price">ถึง</th>
			              <th data-field="price">ราคา</th>
			          </tr>
			        </thead>

			        <tbody>
			        <form>
			          <tr>
			            <td>NE-333</td>
			            <td>DMK</td>
			            <td>CNK</td>
			            <td>
			            	<input name="group1" type="radio" id="test1"  />
			      			<label for="test1" class="black-text">10000 บาท</label>
		                 <td>
			          </tr>
			          <tr>
			            <td>NE-333</td>
			            <td>DMK</td>
			            <td>CNK</td>
			            <td>
			            	<input name="group1" type="radio" id="test2"  />
			      			<label for="test2" class="black-text">10000 บาท</label>
		                 <td>
			          </tr>

			         </form>
			        </tbody>
			      </table>
			</div>
						<div>
				<h4><img src="images/airplane_landing.png" width="32" height="32">  เที่ยวบินขากลับ</h4>
			</div>
				<div class="row">
				    <div class="col s12">
				      <ul class="tabs">
				        <li class="tab col s5"><a href="#test1" class="waves-effect waves-light btn black-text green lighten-2"> <i class="fa fa-angle-left"></i>วันก่อนหน้า</a></li>
				        <li class="tab col s1 "><a href="#test3" class="black-text">พฤ. 3 มี.ค. </a></li>
				        <li class="tab col s1"><a href="#test4" class="selected active">ศ. 4 มี.ค.</a></li>
				        <li class="tab col s1"><a href="#test4" class="black-text">ส. 5 มี.ค.</a></li>
				        <li class="tab col s4"><a href="#test4" class="waves-effect waves-light btn black-text green lighten-2">วันถัดไป <i class="fa fa-angle-right"></i></a></li>
				      </ul>
				    </div>
				</div>
			<div>
				<table>
			        <thead>
			          <tr>
			              <th data-field="id">ไฟท์บิน</th>
			              <th data-field="name">ออกจาก</th>
			              <th data-field="price">ถึง</th>
			              <th data-field="price">ราคา</th>
			          </tr>
			        </thead>

			        <tbody>
			          <tr>
			            <tr>
			            <td>NE-333</td>
			            <td>DMK</td>
			            <td>CNK</td>
			            <td>
			            	<input name="group1" type="radio" id="test3"  />
			      			<label for="test3" class="black-text">10000 บาท</label>
		                 <td>
			          </tr>
			          <tr>
			            <td>NE-333</td>
			            <td>DMK</td>
			            <td>CNK</td>
			            <td>
			            	<input name="group1" type="radio" id="test4"  />
			      			<label for="test4" class="black-text">10000 บาท</label>
		                 <td>
			          </tr>			          </tr>
			        </tbody>
			      </table>
			</div>
			<a class="waves-effect waves-light btn green right" style="margin-top:0px;" width="100%">&nbsp&nbsp&nbsp&nbspต่อไป&nbsp&nbsp&nbsp&nbsp</a>
			  	
		</div>
		</div>		
	</div>

	<?php include 'inc/footer.php';?>



</body>
</html>