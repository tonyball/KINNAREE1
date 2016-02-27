<!DOCTYPE html>
<html>
<head>
	<title>บริการพิเศษ</title>
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
			        <a href="#!" class="breadcrumb black-text ">บริการพิเศษ</a>
			        <a href="#!" class="breadcrumb white-text ">ชำระค่าบริการ</a>
			      </div>
			    </div>
			   </nav>

			  	<div class="card green lighten-4 col s12" style="width:100%; height:80px;">
					<h5 style="padding-top:10px; padding-left:10px">สัมภาระ</h5>	
					<span style="padding-left:10px">สามารถเพิ่มน้ำหนักสัมภาระได้</span>
				</div>

			  	<div>
			  		<table>
			        <thead>
			          <tr>
			              <th data-field="id">ชื่อผู้โดยสาร</th>
			              <th data-field="name">สัมภาระขาไป</th>
			              <th data-field="price">สัมภาระขากลับ</th>
			          </tr>
			        </thead>

			        <tbody>
			        <form>
			          <tr>
			            <td><p>KEERANAT TASSANAEKAJIT</p></td>
			            <td>
							<select class="browser-default">
							    <option value="" disabled selected>Choose your option</option>
							    <option value="1">+5 Kgs (245THB)</option>
							    <option value="2">+15 Kgs (525THB)</option>
							    <option value="3">+25 Kgs (875THB)</option>
						  	</select>
			            </td>
			            <td>
			            	<select class="browser-default">
							    <option value="" disabled selected>Choose your option</option>
							    <option value="1">+5 Kgs (245THB)</option>
							    <option value="2">+15 Kgs (525THB)</option>
							    <option value="3">+25 Kgs (875THB)</option>
						  	</select>		                 
						 <td>
			          </tr>
			           <tr>
			            <td><p>WEERAPHAT SIRAPHAUBOON</p></td>
			            <td>
							<select class="browser-default">
							    <option value="" disabled selected>Choose your option</option>
							    <option value="1">+5 Kgs (245THB)</option>
							    <option value="2">+15 Kgs (525THB)</option>
							    <option value="3">+25 Kgs (875THB)</option>
						  	</select>
			            </td>
			            <td>
			            	<select class="browser-default">
							    <option value="" disabled selected>Choose your option</option>
							    <option value="1">+5 Kgs (245THB)</option>
							    <option value="2">+15 Kgs (525THB)</option>
							    <option value="3">+25 Kgs (875THB)</option>
						  	</select>		                 
						 <td>
			          </tr>
			           <tr>
			            <td><p>PLOY WARANGKANA</p></td>
			            <td>
							<select class="browser-default" disabled>
							    <option value="" disabled selected>Choose your option</option>
							    <option value="1">+5 Kgs (245THB)</option>
							    <option value="2">+15 Kgs (525THB)</option>
							    <option value="3">+25 Kgs (875THB)</option>
						  	</select>
			            </td>
			            <td>
			            	<select class="browser-default" disabled>
							    <option value="" disabled selected>Choose your option</option>
							    <option value="1">+5 Kgs (245THB)</option>
							    <option value="2">+15 Kgs (525THB)</option>
							    <option value="3">+25 Kgs (875THB)</option>
						  	</select>		                 
						 <td>
			          </tr>
			         </form>
			        </tbody>
			      </table>
			  	</div>
		</div>
		<div class="divider">
			
		</div>
		<div class="card">
		<div class="container" >
				<h5 style="padding-top:10px; ">รวมค่าใช้จ่าย</h5>
				 <table>
			         <thead>
			          <tr>
			              <th data-field="id">ประเภท</th>
			              <th data-field="name">จำนวนคน</th>
			              <th data-field="price">ราคา</th>
			          </tr>
			        </thead>

			        <tbody>
			          <tr>
			            <td>ผู้โดยสาร ผู้ใหญ่</td>
			            <td>2 คน</td>
			            <td>5,900 บาท</td>
			            
			          </tr>
			          <tr>
			            <td>ผู้โดยสาร เด็ก</td>
			            <td>1 คน</td>
			            <td>2,950 บาท</td>
			            
			          </tr>
			          <tr>
			            <td>เพิ่มน้ำหนักกระเป๋า </td>
						<td></td>
			            <td>490 บาท</td>
			            
			          </tr>
			          <tr>
			            <td>รวมราคา</td>
			            <td></td>
			            <td>9,290 บาท</td>
			            
			          </tr>

			        
			        </tbody>
			      </table>
			</div>  
			<a href="pay.php" class="waves-effect waves-light btn green right" style="margin-top:-20px;" width="100%">&nbsp&nbsp&nbsp&nbspต่อไป&nbsp&nbsp&nbsp&nbsp</a>
		</div>
	</div>


	<?php include 'inc/footer.php';?>



</body>
</html>