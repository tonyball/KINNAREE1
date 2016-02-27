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
				 	<h5><i class="fa fa-male"></i>ผู้โดยสาร ผู้ใหญ่</h5>
				 	<div class="divider"></div><br/>
				      <div class="row">
				      	<div class="col s2">
				      		
				      	
						  <label style="font-size:11px;" class="black-text"><img src="images/Name-52.png" width="16" height="16"> คำนำหน้าชื่อ</label>
						  	<select class="browser-default">
							    <option value=""selected>Mr.</option>
							    <option value="1">Mrs.</option>
							    <option value="2">Ms.</option>
							    <option value="2">Miss.</option>

						  	</select>
						 </div>
						 <div class="col s5">
						 	<div class="input-field">
					          <input name='text'id="name" type="text"  required class="validate" onKeyPress="return KeyCode(text)" onChange="javascript:this.value=this.value.toUpperCase();">
					          <label for="last_name">ชื่อ</label>
					        </div>
						 </div>
						 <div class="col s5">
						 	<div class="input-field">
					          <input name='text' id="last_name" type="text" required class="validate" onKeyPress="return KeyCode(text)" onChange="javascript:this.value=this.value.toUpperCase();">
					          <label for="last_name">นามสกุล</label>
					        </div>
						 </div>


				      </div>
				      <div class="row">
				      	<div class="col s7">
				      		<label style="font-size:12px;" class="black-text"><img src="images/Birthday Cake-52.png" width="16" height="16"> วันเกิด</label>
				      		<div class="row">
				      			<div class="col s3">
				      				<select class="browser-default">
									    <option value=""selected>1</option>
									    <option value="1">2</option>
									    <option value="2">3</option>
									    <option value="3">4</option>
									    <option value="4">5</option>
									    <option value="5">6</option>
									    <option value="6">7</option>
									    <option value="7">8</option>
									    <option value="8">9</option>
									    <option value="9">10</option>
									    <option value="10">11</option>
									    <option value="11">12</option>
									    <option value="12">13</option>
									    <option value="13">14</option>
									    <option value="14">15</option>
									    <option value="15">16</option>
									    <option value="16">17</option>
									    <option value="17">18</option>
									    <option value="18">19</option>
									    <option value="19">20</option>
									    <option value="20">21</option>
									    <option value="21">22</option>
									    <option value="22">23</option>
									    <option value="23">24</option>
									    <option value="24">25</option>
									    <option value="25">26</option>
									    <option value="26">27</option>
									    <option value="27">28</option>
									    <option value="28">29</option>
									    <option value="29">30</option>
									    <option value="30">31</option>
									    <option value="31"></option>

								  	</select>
				      			</div>
				      			<div class="col s3">
				      				<select class="browser-default">
									    <option value=""selected>มกราคม</option>
									    <option value="1">กุมภาพันธ์</option>
									    <option value="2">มีนาคม</option>
									    <option value="3">เมษายน</option>
									    <option value="4">พฤษาคม</option>
									    <option value="5">มิถุนายน</option>
									    <option value="6">กรกฎาคม</option>
									    <option value="7">สิงหาคม</option>
									    <option value="8">กันยายน</option>
									    <option value="9">ตุลาคม</option>
									    <option value="10">พฤศจิกายน</option>
									    <option value="11">ธันวาคม</option>
								  	</select>
				      			</div>
				      			<div class="col s3">
				      				<select class="browser-default">
									    <option value=""elected>2004</option>
									    <option value="1">2003</option>
									    <option value="2">2002</option>
									    <option value="3">2001</option>
									    <option value="4">2000</option>
									    <option value="5">1999</option>
									    <option value="6">1998</option>
									    <option value="7">1997</option>
									    <option value="8">1996</option>
									    <option value="9">1995</option>
									    <option value="10">1994</option>
									    <option value="11">1993</option>
									    <option value="12">1992</option>
										<option value="13">1991</option>
									    <option value="14">1990</option>
									    <option value="15">1989</option>
									    <option value="16">1988</option>
									    <option value="17">1987</option>
									    <option value="18">1986</option>
									    <option value="19">1985</option>
									    <option value="20">1984</option>
									    <option value="21">1983</option>
									    <option value="22">1982</option>
								  	</select>
				      			</div>
				      		</div>
				      	</div>
				      	<div class="col s3">
				      		 <label style="font-size:12px;" class="black-text"><img src="images/Globe-52.png" width="16" height="16"> สัญชาติ</label>
						  	<select class="browser-default">
							    <option value=""selected>Thai</option>
							    <option value="1">Singaporean</option>
							    <option value="2">Malaysian</option>
							    <option value="3">Japanese</option>
							    <option value="4">UK</option>
							    <option value="5">USA</option>
						  	</select>
				      	</div>
				      </div>
				    </form>
			</div>
				<a href="optional.php" class="waves-effect waves-light btn green right" style="margin-top:0px;" width="100%">&nbsp&nbsp&nbsp&nbspต่อไป&nbsp&nbsp&nbsp&nbsp</a>
			
		</div>
	</div>

	<?php include 'inc/footer.php';?>

	<script type="text/javascript">
		function KeyCode(objId)
		{
		if (event.keyCode >= 97 && event.keyCode<=122 || event.keyCode >= 65 && event.keyCode<=90  ) //48-57(ตัวเลข) ,65-90(Eng ตัวพิมพ์ใหญ่ ) ,97-122(Eng ตัวพิมพ์เล็ก)
		{
		return true;
		}
		else
		{
		alert("กรอกได้เฉพาะ A-Z ");
		return false;
		}
		}
	</script>

</body>
</html>