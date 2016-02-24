<!DOCTYPE html>
<html>
<head>
	<title>KINNAREE</title>
	
</head>
<body>
	<?php include 'inc/nav.php';?>
	<p>KINNAREE</p>

	  <div class="slider">

    <ul class="slides">
 
      <li>

        <img src="images/k1.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
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


	<script>
		$(document).ready(function(){
			$(".button-collapse").sideNav();
			$(".dropdown-button").dropdown();
			 $('.slider').slider({full_width: true});
		})
	</script>

</body>
</html>