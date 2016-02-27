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
			        <a href="#!" class="breadcrumb black-text ">บริการพิเศษ</a>
			        <a href="#!" class="breadcrumb white-text ">ชำระค่าบริการ</a>
			      </div>
			    </div>
			   </nav>

			  	<div class="card green lighten-4 col s12" style="width:100%; height:80px;">
			  		<h5> สัมภาระ</h5>
			  		<p>สามารถเพิ่มน้ำหนกได้</p>
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
			            <td><b>CNX - 18:05</b><p>Thai Lion air, SL 8525</p></td>
			            <td>
							<select class="browser-default">
							    <option value="" disabled selected>Choose your option</option>
							    <option value="1">Option 1</option>
							    <option value="2">Option 2</option>
							    <option value="3">Option 3</option>
						  	</select>
			            </td>
			            <td>
			            	<select class="browser-default">
							    <option value="" disabled selected>Choose your option</option>
							    <option value="1">Option 1</option>
							    <option value="2">Option 2</option>
							    <option value="3">Option 3</option>
						  	</select>		                 
						 <td>
			          </tr>
			         </form>
			        </tbody>
			      </table>
			  	</div>


		</div>
	</div>


	<?php include 'inc/footer.php';?>



</body>
</html>