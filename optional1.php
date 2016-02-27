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
			         </form>
			        </tbody>
			      </table>
			  	</div>
		</div>
		<div class="divider">
			
		</div>
		<div class="card">
			<h4>รวมค่าใช้จ่าย</h4>
			<p>Adult(s)                                   THB                 2x2,950</p>
			<p>Children(s)                                THB                 1x2,950</p>
			<p>Bag(s)                                     THB                  3x245</p>
			<p>Total Amount                               THB                  9,585</p>
			<p>                                                             Include VAT. </p>
			<a href="pay.php" class="waves-effect waves-light btn green right" style="margin-top:-30px;" width="100%">&nbsp&nbsp&nbsp&nbspต่อไป&nbsp&nbsp&nbsp&nbsp</a>
		</div>
	</div>


	<?php include 'inc/footer.php';?>



</body>
</html>