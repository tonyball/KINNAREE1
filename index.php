<!DOCTYPE html>
<html>
<head>
	<title>KINNAREE</title>
	
</head>
<style type="text/css">
  .inline{
    display:inline;
  }
	.ui-datepicker-multi-2{
	width:25% !important;
	font-family:tahoma !important;
	font-size:11px !important;
	text-align:center !important;
}
	[type="radio"]:checked+label:after{
		border: 2px solid #4caf50 !important;
		background-color: #4caf50 !important;
	}
</style>
<body>
	<?php include 'inc/nav.php';?>
	<div class="col l12">
      <ul class="tabs" style="width: 100%;">
        <li class="tab col s3"><a href="#" class="black-text  man"><i class="fa fa-home"></i> หน้าหลัก</a></li>
      	<li class="tab col s3"><a href="#" class="black-text man"><img src="images/Cinema_ticket.png" width="16" height="16"> จองการเดินทาง</a></li>
	  	<li class="tab col s3"><a href="#" class="black-text man"><i class="fa fa-table"></i> ตารางการบิน</a></li>
	  	<li class="tab col s3"><a href="#" class="black-text man"><img src="images/10.png" width="22" height="22"> ตั๋วราคาประหยัด</a></li>
	  	<li class="tab col s3"><a href="#" class="black-text man"><i class="fa fa-question-circle"></i> คำถามที่พบบ่อย</a></li>
	  	<li class="tab col s3"><i class="material-icons black-text" style="margin-top: 5px;">search</i><input id="search" type="search" required></li>
      </ul>
    </div>

	  <div class="row">

      <div class="col s5">
        <div class="card-panel Large" width="100%">
        	<div class="card-title">
        		<h5><i class="fa fa-plane"></i>จองเที่ยวบิน</h5>
        	</div>
        	 <form action="select.php" class="container" method="POST">
			    <p class="inline" >
			      <input name="group1" type="radio" id="test1" checked />
			      <label for="test1" class="black-text">ไป-กลับ</label>
			    </p>
			    <p class="inline" > 
			      <input name="group1" type="radio" id="test2" />
			      <label for="test2" class="black-text">เที่ยวเดียว</label>
			    </p>
			    <br/>
			    <br/>

				<label style="font-size:16px;" class="black-text"><img src="images/airplane_take_off.png" width="16" height="16"> ต้นทาง</label>
			  	<select class="browser-default">
				    <option value="" disabled selected>จาก</option>
				    <option value="1">Bangkok (DMK)</option>
				    <option value="2">Chiang Mai (CNX)</option>
				    <option value="3">Chiang Rai (CEI)</option>
				    <option value="4">Hat Yai (HDY)</option>
				    <option value="5">Krabi (KBV)</option>
				    <option value="6">Nakhon Si Thammarat (NST)</option>
				    <option value="7">Phuket (HKT)</option>
				    <option value="8">Surat Thani (URT)</option>
				    <option value="9">Ubon Ratchathani (UBP)</option>
				    <option value="10">Tokyo (NRT)</option>
				    <option value="11">Kuala Lumpur (KUL)</option>
				    <option value="12">Singapore (SIN)</option>
			  	</select>
			  	<br/>
			  	<label style="font-size:16px;" class="black-text"><img src="images/airplane_landing.png" width="16" height="16">  ปลายทาง</label>
			  	<select class="browser-default">
				    <option value="" disabled selected>ถึง</option>
				    <option value="1">Bangkok (DMK)</option>
				    <option value="2">Chiang Mai (CNX)</option>
				    <option value="3">Chiang Rai (CEI)</option>
				    <option value="4">Hat Yai (HDY)</option>
				    <option value="5">Krabi (KBV)</option>
				    <option value="6">Nakhon Si Thammarat (NST)</option>
				    <option value="7">Phuket (HKT)</option>
				    <option value="8">Surat Thani (URT)</option>
				    <option value="9">Ubon Ratchathani (UBP)</option>
				    <option value="10">Tokyo (NRT)</option>
				    <option value="11">Kuala Lumpur (KUL)</option>
				    <option value="12">Singapore (SIN)</option>
			  	</select>
			  	<div class="row">
			  		<div class="col s6">
			  		 	<i class="fa fa-calendar"></i><input type="date" class="datepicker">

			  			
			  		</div>
			  		<div class="col s6" >
			  			<i class="fa fa-calendar"></i><input type="date" class="datepicker1">
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col s4">
			  			<label class="black-text" style="font-size:16px;"><i class="fa fa-male"></i>ผู้ใหญ่(12+)</label>
			  			<select class="browser-default" id="a">
						    <option value="1"selected>1</option>
						    <option value="2">2</option>
						    <option value="3">3</option>
						    <option value="4">4</option>
						    <option value="5">5</option>
						    <option value="6">6</option>
						    <option value="7">7</option>
					  	</select>

			  		</div>
			  		<div class="col s4">
			  			<label class="black-text" style="font-size:16px;"><i class="fa fa-child"></i>เด็ก(3-12)</label>
			  			<select class="browser-default" id='b'>
						    <option value="0"selected>0</option>
						    <option value="1">1</option>
						    <option value="2">2</option>
						    <option value="3">3</option>
						    <option value="4">4</option>
						    <option value="5">5</option>
						    <option value="6">6</option>				    
					  	</select>

			  		</div>
			  		<div class="col s4">
			  			<label class="black-text" style="font-size:16px;"><img src="images/newborn-512.png" width="14" height="14"></i>ทารก(0-3)</label>
			  			<select class="browser-default" id='c'>
						    <option value="0"selected>0</option>
						    <option value="1">1</option>
						    <option value="2">2</option>
						    <option value="3">3</option>
					  	</select>

			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col s4">
			  			<label class="black-text" style="font-size:16px;"><i class="fa fa-money"></i>สกุลเงิน</label>
			  			<select class="browser-default">
					    <option value=""  selected>THB</option>
					    <option value="1">SGD</option>
					    <option value="2">MYR</option>
				  	</select>

			  		</div>
			  		<div class="col s8">
			  			<a id='send' class="waves-effect waves-light btn green" style="margin-top:28px;" width="100%">&nbsp&nbsp&nbsp&nbspค้นหาเที่ยวบิน&nbsp&nbsp&nbsp&nbsp</a>
			  		</div>
			  	</div>

  			</form>
		     <span class="white-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span>
		 </div>

      </div>

      <div class="col s7"> 
      		<div class="slider">
		    <ul class="slides">
		      <li>
		        <img src="images/low1.jpg" > <!-- random image -->
		        <div class="caption left-align ">
		          
		        </div>
		      </li>
		      <li>
		        <img src="images/low3.jpg"> <!-- random image -->
		        <div class="caption left-align">
		         
		        </div>
		      </li>
		      <li>
		        <img src="images/low4.jpg"> <!-- random image -->
		        <div class="caption right-align">
		          
		        </div>
		      </li>
		      <li>
		        <img src="images/low2-2.jpg"> <!-- random image -->
		        <div class="caption center-align">
		          </div>
		      </li>
		    </ul>
		</div>

      </div>

    </div>




	 <div class="row">
     <div class="col s4">
       <div class="card" style="height: 380px">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="images/pro1.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">บินกระบี่สุดคุ้ม<i class="material-icons right">more_vert</i></span>
          <p><a href="#">จองเลย</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">ดอนเมือง-กระบี่ เริ่มต้นเที่ยวละ 690 บาท<i class="material-icons right">close</i></span>
          <p>
			ราคาพิเศษเริ่มต้นที่ 690 บาทต่อเที่ยวบิน
			สำหรับ 1 ท่าน (รวมทุกอย่างแล้ว)
			 สำหรับเส้นทาง กระบี่-ดอนเมือง , ดอนเมือง-กระบี่
			จองด่วน ก่อนหมดเขต
			 วันนี้-28กุมภาพันธ์ 2559
			สามารถเดินทางได้เฉพาะ 
			เดือนพฤษภาคม – เดือนกันยายน 2559
			</p>
        </div>
      </div>
                
     </div> 
     <div class="col s4">
       <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="images/pro2.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">กลับกรุงเทพ ราคาสุดคุ้ม<i class="material-icons right">more_vert</i></span>
          <p><a href="#">จองเลย</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">เดินทาง เข้าสู่ ดอนเมือง 690 บาท<i class="material-icons right">close</i></span>
          <p>ราคาพิเศษเริ่มต้นที่ 690 บาทต่อเที่ยวบินสำหรับ 1 ท่าน (รวมทุกอย่างแล้ว)
			 สำหรับเส้นทาง กระบี่ เชียงใหม่ เดินทางเข้าสู่ ดอนเมือง(กรุงเทพ)
			จองด่วน ก่อนหมดเขต วันนี้-28กุมภาพันธ์ 2559
			สามารถเดินทางได้เฉพาะ เดือนพฤษภาคม – เดือนกันยายน 2559</p>
        </div>
      </div>
     </div> 
     <div class="col s4">
       <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="images/pro3.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">ดอนเมือง-สิงคโปร์<i class="material-icons right">more_vert</i></span>
          <p><a href="#">จองเลย</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">ไปกลับสิงคโปร์ เริ่มเที่ยวละ 990บาท<i class="material-icons right">close</i></span>
          <p>ราคาพิเศษเริ่มต้นที่ 990 บาทต่อเที่ยวบินสำหรับ 1 ท่าน (รวมทุกอย่างแล้ว)
			 สำหรับเส้นทาง ดอนเมือง-สิงคโปร์
			จองด่วน ก่อนหมดเขต วันนี้-28กุมภาพันธ์ 2559
			สามารถเดินทางได้เฉพาะ เดือนพฤษภาคม – เดือนกันยายน 2559</p>
        </div>
      </div>
     </div> 
    </div>
    <div class="row">
     <div class="col s4">
       <div class="card Large">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="images/pro4.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">บินมาเลเซีย พร้อมที่พัก สุดคุ้ม<i class="material-icons right">more_vert</i></span>
          <p><a href="#">จองเลย</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">มาเลเซีย พร้อมที่พัก 990บาท<i class="material-icons right">close</i></span>
          <p>ราคาพิเศษเริ่มต้นที่ 1,390 บาทต่อเที่ยวบินสำหรับ 1 ท่าน (รวมทุกอย่างแล้ว)
			 สำหรับเส้นทาง ดอนเมือง-มาเลเซีย พร้อมที่พัก 1 คืน
			จองด่วน ก่อนหมดเขต วันนี้-28กุมภาพันธ์ 2559
			สามารถเดินทางได้เฉพาะ เดือนพฤษภาคม – เดือนกันยายน 2559</p>
        </div>
      </div>
     </div> 
     <div class="col s4">
       <div class="card Large">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="images/pro5.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">ดูหมีแพนด้า สุดคุ้ม<i class="material-icons right">more_vert</i></span>
          <p><a href="#">จองเลย</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">เที่ยวเชียงใหม่ถูกสุด 499บาท<i class="material-icons right">close</i></span>
          <p>ราคาพิเศษเริ่มต้นที่ 499 บาทต่อเที่ยวบินสำหรับ 1 ท่าน (รวมทุกอย่างแล้ว)
			 สำหรับเส้นทาง ดอนเมือง-เชียงใหม่, เชียงใหม่-ดอนเมือง
			จองด่วน ก่อนหมดเขต วันนี้-28กุมภาพันธ์ 2559
			สามารถเดินทางได้เฉพาะ เดือนพฤษภาคม – เดือนกันยายน 2559</p>
        </div>
      </div>
     </div> 
     <div class="col s4">
       <div class="card "style="height: 380px">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="images/pro6.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">เที่ยวญี่ปุ่นง่าย ราคาสุดติ่ง<i class="material-icons right">more_vert</i></span>
          <p><a href="#">จองเลย</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">โตเกี่ยวสุดคุ้ม<i class="material-icons right">close</i></span>
          <p>ราคาพิเศษเริ่มต้นที่ 4990 บาทต่อเที่ยวบินสำหรับ 1 ท่าน (รวมทุกอย่างแล้ว)
			 สำหรับเส้นทาง ดอนเมือง-นาริตะ
			จองด่วน ก่อนหมดเขต วันนี้-28กุมภาพันธ์ 2559
			สามารถเดินทางได้เฉพาะ เดือนพฤษภาคม – เดือนกันยายน 2559</p>
        </div>
      </div>
     </div> 
    </div>
  </div>

        </div>



	<?php include 'inc/footer.php';?>
	<script type="text/javascript">
		$.extend( $.fn.pickadate.defaults, {
		    monthsFull: [ 'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม' ],
		    monthsShort: [ 'ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.' ],
		    weekdaysFull: [ 'อาทติย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์' ],
		    weekdaysShort: [ 'อ.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.' ],
		    today: 'วันนี้',
		    clear: 'ลบ',
		    close: 'ปิด',
		    format: 'd mmmm yyyy',
		    formatSubmit: 'yyyy/mm/dd'
		});		
	</script>
	<script type="text/javascript">  
		$(function(){  
		    $("#send").click(function(){  
		    	if($("select#a").val()== 1 && $("select#b").val()==0){
		    		window.location="select.php"
		    	}
		    	else if($("select#a").val()== 2 && $("select#b").val()==1){
		    		window.location="select1.php"
		    	}
		    });  
		});  
	</script> 

	<script>
		$(document).ready(function(){
			$(".button-collapse").sideNav();
			$(".dropdown-button").dropdown();
			$('.slider').slider({full_width: false, height: 600});
			$('ul.tabs').tabs();
			$('.datepicker').pickadate({
			    selectMonths: true, // Creates a dropdown to control month
			    selectYears: 3, // Creates a dropdown of 15 years to control year
			    numberOfMonths: 2,
			    selectYears: 4,
			    min:new Date()

			  });
			$('.datepicker1').pickadate({
			    selectMonths: true, // Creates a dropdown to control month
			    selectYears: 3, // Creates a dropdown of 15 years to control year
			    numberOfMonths: 2,
			    selectYears: 4,
			    min: new Date()
			  });

		})		

	</script>
</body>
</html>