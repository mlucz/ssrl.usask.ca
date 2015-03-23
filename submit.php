<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Social Sciences Research Laboratories (SSRL)  - College of Arts and Science . University of Saskatchewan</title>
  <!-- favicon //-->
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

  <!-- stylesheets -->
  <link rel="image_src" href="arts-logo.jpg" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/ui-lightness/jquery-ui-1.8.16.custom.css" />
  <link rel="stylesheet" type="text/css" href="css/menustyle.css" />
  <link rel="stylesheet" type="text/css" href="index.css" />
  <link href="css/login.css" rel="stylesheet" type="text/css"/>
    <!-- scripts -->
  <script src="js/jquery-1.5.1.min.js" type="text/javascript"></script>
  <script src="js/jquery-ui-1.8.12.custom.min.js" type="text/javascript"></script>
  <script src="js/nicemenu.js" type="text/javascript"></script>
  <script src="js/cycle.js" type="text/javascript"></script>
  <script language="javascript">
    $(document).ready(function() {

	  $('#slideshow').cycle({
		fx: 'fade',
		timeout: 4000,
		speed: 1300,
		delay: -1000,
		random: 1
	  });

  }); // end ready()
  </script>

  <script type="text/javascript" src="index.js"></script>
  <script language="javascript">
    function canSearch() {
      var q = $("#searchEntry").val();
      if ((q == "") || (q == "People, places, web...")) {
        return(false);
      } else {
        return(true);
      }
    }


    $(function() {
      $(".jqmenu").ASNiceMenu();
      $("#searchEntry").focus(function() {
        var q = $(this).val();
        if (q == "People, places, web...") {
          $(this).val("");
        }
        $(this).removeClass("searchNotEntered").addClass("searchEntered");
        this.select()
      });
      $("#searchEntry").blur(function() {
        var q = $(this).val();
        if (q == "") {
          $(this).val("People, places, web...");
        }
        $(this).removeClass("searchEntered").addClass("searchNotEntered");
        this.select()
      });
    });
  </script>
  
  <script type="text/javascript">
		
		function partA() {
		  window.setTimeout(partB,6000);
		}

		function partB() {
		   window.location.href = "http://ssrl.usask.ca";
		}
		
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2791713-6']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body onload="partA()">
<div id="topbanner" align="center"><img src="images/elements/topbanner.jpg" alt="College of Arts and Science - where great minds meet" width="616" height="119" border="0" usemap="#topbannerlinks"  />
</div>

<map name="topbannerlinks" id="topbannerlinks"><area shape="rect" coords="298,4,611,112"  href="/" alt="Home"  />
<area shape="rect" coords="3,29,284,86" href="http://www.usask.ca/" target="_blank" alt="http://www.usask.ca/"  />
</map>

<div id="navcontainer" >
  <ul class="jqmenu" >
    <li class="current"><a href="/"> <img src="images/elements/house.png" alt="HOME" width="14" height="24" border="0" /></a></li>
    <li ><a href="#">Laboratories</a>
      <ul>
        <li><a href="/edl/">EDL - Experimental Decision Laboratory</a></li>
        <li><a href="/ehl/">EHL - EEG Hyperscanning Laboratory</a></li>
        <li><a href="/qrl/">QRL - Qualitative Research Laboratory</a></li>
        <li><a href="/safihr/">SAFIHR - Spatial Analysis For Innovation in Health Research</a></li>
        <li><a href="/sgal">SGAL - Survey and Group Analysis Laboratory</a></li>
        <li><a href="/snl/">SNL - Social Network Laboratory</a></li>
        <li><a href="/vital/">ViTAL - Video Therapy Analysis Laboratory</a></li>
      </ul>
    </li>
    </li>
    <li ><a href="http://ssrl.usask.ca/ssrl/people.php">Our People</a>    </li>
    </li>
    <li ><a href="http://ssrl.usask.ca/news/">News</a> </li>

    <li ><a href="http://ssrl.usask.ca/events/">Events</a> </li>

    <li ><a href="http://ssrl.usask.ca/ssrl/governance.php"> Governance</a> </li>
    <li ><a href="http://ssrl.usask.ca/ssrl/reports.php">Reports</a> </li>

    <li ><a href="http://ssrl.usask.ca/student/">Students</a> </li>

    <li ><a href="http://ssrl.usask.ca/contact/">Contact</a> </li>
   
  </ul>
</div>

<div id="bannerhome">
  <div id="slideshow">
    <img src="banners/qrl4.jpg" width="938" height="220">
    <img src="banners/safihr3.jpg" width="938" height="220">
    <img src="banners/edl3.jpg" width="938" height="220">
    <img src="banners/sgal2.jpg" width="938" height="220">
    <img src="banners/vital2.jpg" width="938" height="220">
</div>
</div>


<div id="container">

  <div id="widecontent"><img src="images/home/ssrl-logo1.jpg" width="446" height="161" hspace="4" border="0" align="right" />
	<?php
			//header("Refresh: 4; url=http://ssrl.usask.ca");
			
			$servername="lovett.usask.ca";
			$username = "cmpt350_mjl566";
			$dbname = "cmpt350_mjl566";
			$password = "j3n1l21kn0";
			
			$conn = new mysqli($servername,$username,$password,$dbname);
			
			if($conn->connect_error){
				die("Connection failed: ".$conn->connect_error);
			}else{
				//echo "Database connection succesful. ";
			}
			//echo $_POST["password"];
			
			$sql = "UPDATE survey SET 
				class= '".$_POST["crse"]."',
				savvines = '".$_POST["optradio"]."',
				virus = '".$_POST["virus"]."',
				victim = '".$_POST["fraud"]."',
				victimkind = '".$_POST["fraudcomment"]."',
				othervic = '".$_POST["fraudother"]."',
				othervickind = '".$_POST["otherfraudcomment"]."'";
			
			
			$sql .="WHERE nsid = '".$_POST["username"]."'";
			
			if($conn->query($sql) == TRUE)
				//echo "<h1>Updated data for NSID: ".$_POST['username']."</h1>";
			else
				//echo "\nError adding nsid: ".$conn->error;
				
			$sql = "UPDATE terms SET
				phish = '".$_POST["phish"]."',
				whale = '".$_POST["whale"]."',
				twin = '".$_POST["twin"]."',
				scam = '".$_POST["419"]."',
				phreak = '".$_POST["phreak"]."'";
				
			$sql .="WHERE nsid = '".$_POST["username"]."'";
			
			if($conn->query($sql) == TRUE)
				//echo "<h1>Updated data for NSID: ".$_POST['username']."</h1>";
			else
				//echo "\nError adding nsid: ".$conn->error;
				
		 ?> 
		 
<h1>Information Security Survey</h1>
<h5>Thank, you're being redirected to main page</h5>
<div id="survey">
    
	
	
	
</div>




  </div>
 
  <div class="clearfix"></div> 
</div>

<div class="footer"> 

<p>&copy; 2014 . SSRL. College of Arts &amp;  Science . University of Saskatchewan  | <a href="/">home</a> | <a href="/contact/">contact us</a>  | <a href="http://www.usask.ca/disclaimer.php">disclaimer</a>
<a href="http://artsandscience.usask.ca/" title="University of Saskatchewan"><img src="images/bottom-logo-grey.jpg" alt="University of Saskatchewan" border="0" align="right" /></a>
</p>
<a href="https://twitter.com/SSRLUofS" target="_blank"><img src="images/Twitter_24x24.png" alt="Twitter" border="0" /></a>

</div>



<p>&nbsp; </p>
<p>&nbsp; </p>
<p>&nbsp; </p>

</body>
</html>
