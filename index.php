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
        	 <form action="#" class="container">
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
				    <option value="" disabled selected>Choose your option</option>
				    <option value="1">Option 1</option>
				    <option value="2">Option 2</option>
				    <option value="3">Option 3</option>
			  	</select>
			  	<br/>
			  	<label style="font-size:16px;" class="black-text"><img src="images/airplane_landing.png" width="16" height="16">  ปลายทาง</label>
			  	<select class="browser-default">
				    <option value="" disabled selected>Choose your option</option>
				    <option value="1">Option 1</option>
				    <option value="2">Option 2</option>
				    <option value="3">Option 3</option>
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
			  			<select class="browser-default">
						    <option value="" disabled selected>Choose your option</option>
						    <option value="1">Option 1</option>
						    <option value="2">Option 2</option>
						    <option value="3">Option 3</option>
					  	</select>

			  		</div>
			  		<div class="col s4">
			  			<label class="black-text" style="font-size:16px;"><i class="fa fa-child"></i>เด็ก(3-12)</label>
			  			<select class="browser-default">
						    <option value="" disabled selected>Choose your option</option>
						    <option value="1">Option 1</option>
						    <option value="2">Option 2</option>
						    <option value="3">Option 3</option>
					  	</select>

			  		</div>
			  		<div class="col s4">
			  			<label class="black-text" style="font-size:16px;"><img src="images/newborn-512.png" width="14" height="14"></i>ทารก(0-3)</label>
			  			<select class="browser-default">
						    <option value="" disabled selected>Choose your option</option>
						    <option value="1">Option 1</option>
						    <option value="2">Option 2</option>
						    <option value="3">Option 3</option>
					  	</select>

			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col s4">
			  			<label class="black-text" style="font-size:16px;"><i class="fa fa-money"></i>สกุลเงิน</label>
			  			<select class="browser-default">
					    <option value="" disabled selected>Choose your option</option>
					    <option value="1">Option 1</option>
					    <option value="2">Option 2</option>
					    <option value="3">Option 3</option>
				  	</select>

			  		</div>
			  		<div class="col s8">
			  			<a class="waves-effect waves-light btn green" style="margin-top:28px;" width="100%">&nbsp&nbsp&nbsp&nbspค้นหาเที่ยวบิน&nbsp&nbsp&nbsp&nbsp</a>
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
		        <img src="images/smileG.jpg" > <!-- random image -->
		        <div class="caption left-align ">
		          <h3>ยินดีต้อนรับ</h3>
		          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
		        </div>
		      </li>
		      <li>
		        <img src="images/k2.jpg"> <!-- random image -->
		        <div class="caption left-align">
		          <h3>Left Aligned Caption</h3>
		          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
		        </div>
		      </li>
		      <li>
		        <img src="images/k3.jpg"> <!-- random image -->
		        <div class="caption right-align">
		          <h3>Right Aligned Caption</h3>
		          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
		        </div>
		      </li>
		      <li>
		        <img src="images/k2.jpg"> <!-- random image -->
		        <div class="caption center-align">
		          <h3>This is our big Tagline!</h3>
		          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
		        </div>
		      </li>
		    </ul>
		</div>

      </div>

    </div>




	  <div class="row">
        <div class="col s6 m4 animated fadelnUp">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Card Titlesdfsdfsdfsdfdsf</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>  
        <div class="col s6 m4">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Card Title</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
          <div class="card col s6 m4 animated shake">
		    <div class="card-image waves-effect waves-block waves-light">
		      <img class="activator" src="images/k1.jpg">
		    </div>
		    <div class="card-content">
		      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
		      <p><a href="#">This is a link</a></p>
		    </div>
		    <div class="card-reveal">
		      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
		      <p>Here is some more information about this product that is only revealed once clicked on.</p>
		    </div>
  </div>

        </div>


	<?php include 'inc/footer.php';?>
	<script type="text/javascript">
		$.extend( $.fn.pickadate.defaults, {
		    monthsFull: [ 'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม' ],
		    monthsShort: [ 'ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.' ],
		    weekdaysFull: [ 'อาทติย', 'จันทร', 'องัคาร', 'พุธ', 'พฤหสั บดี', 'ศกุร', 'เสาร' ],
		    weekdaysShort: [ 'อ.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.' ],
		    today: 'วันนี้',
		    clear: 'ลบ',
		    format: 'd mmmm yyyy',
		    formatSubmit: 'yyyy/mm/dd'
		});

		$.extend( $.fn.pickatime.defaults, {
		    clear: 'ลบ'
		});
	</script>

	<script>
		$(document).ready(function(){
			$(".button-collapse").sideNav();
			$(".dropdown-button").dropdown();
			$('.slider').slider({full_width:false});
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