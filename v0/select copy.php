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
				            <td><?php echo $_POST['name']?></td>
				            <td><?php echo $_POST['b']?></td>
				            <td><?php echo $_POST['c']?></td>
				          </tr>
				        </tbody>
				      </table>
				</div>
				<div class="col s8">
					<h5><i class="fa fa-plane"></i>เลือกเที่ยวบินที่คุณต้องการ</h5>
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
			            <td>Chiang Mai (CNX) To Bangkok (DMK)</td>
			            <td><b>CNX - 18:05</b><p>Thai Lion air, SL 8525</p></td>
			            <td><b>DMK - 19:35</b><p>Duration :  01h 30mins</p></td>
			            <td>
			            	<input name="group1" type="radio" id="test1"  />
			      			<label for="test1" class="black-text">2,625.00 บาท</label>
		                 <td>
			          </tr>
			          <tr>
			            <td>Chiang Mai (CNX) To Bangkok (DMK)</td>
			            <td><b>CNX - 21:50</b><p>Thai Lion air, SL 8517</p></td>
			            <td><b>DMK - 23:15</b><p>Duration :  01h 25mins</p></td>
			            <td>
			            	<input name="group1" type="radio" id="test2"  />
			      			<label for="test2" class="black-text">1,925.00 บาท</label>
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
			            <td>Bangkok (DMK) To Chiang Mai (CNX)</td>
			            <td><b>DMK - 08:35</b><p>Thai Lion air, SL 8522</p></td>
			            <td><b>CNX - 09:35</b><p>Duration :  01h</p></td>
			            <td>
			            	<input name="group1" type="radio" id="test3"  />
			      			<label for="test3" class="black-text">1,025.00 บาท</label>
		                 <td>
			          </tr
			          <tr>
			            <td>Bangkok (DMK) To Chiang Mai (CNX)</td>
			            <td><b>DMK - 09:40</b><p>Thai Lion air, SL 8506</p></td>
			            <td><b>CNX - 10:55</b><p>Duration :  01h 15mins</p></td>
			            <td>
			            	<input name="group1" type="radio" id="test4"  />
			      			<label for="test4" class="black-text">1,025.00 บาท</label>
		                 <td>
			          </tr>			          </tr>
			        </tbody>
			      </table>
			</div>
			 	
		</div>
		
		</div>	
		<div class="divider">
			
		</div>
		<div class="card">
			<h4>รวมค่าใช้จ่าย</h4>
			<p>asdsadasdasdasdasdasdasd</p>
			<a class="waves-effect waves-light btn green right" style="margin-top:-30px;" width="100%">&nbsp&nbsp&nbsp&nbspต่อไป&nbsp&nbsp&nbsp&nbsp</a>
		</div>
			 	
	</div>

	<?php include 'inc/footer.php';?>



</body>
</html>