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
<body>
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
			$servername="lovett.usask.ca";
			$username = "cmpt350_mjl566";
			$dbname = "cmpt350_mjl566";
			$password = "j3n1l21kn0";
			
			$conn = new mysqli($servername,$username,$password,$dbname);
			
			if($conn->connect_error){
				die("Connection failed: ".$conn->connect_error);
			}
			//echo $_POST["password"];
			
			$sql = "INSERT INTO survey(nsid) VALUES ( '".$_POST["username"]."')";
			
			
			
			// Insert NSID into suvery table and terms table	
			$conn->query($sql);
			
			$sql = "INSERT INTO terms(nsid) VALUES ('".$_POST["username"]."')";
			
			$conn->query($sql);
			/*if($conn->query($sql) == TRUE)
				echo "<h1>Added NSID: ".$_POST['username']." pwd: ".$_POST['password']."</h1>";
			else
				echo "\nError adding nsid: ".$conn->error." Pwd: ".$_POST['password']; */
				
		 ?> 
		 
<h1>Information Security Survey</h1>
<h5>This survey should take approximately 5 minutes to complete. Once you are done, make sure to press the "Submit and Logout" button in order for your answers to be stored in our database and your NSID entered for prize draw.</h5>
<div id="survey">
    
	<form id="fm1" class="fm-v clearfix" action="submit.php" method="post">
		<div class="row">
		</br>
		</br>
			<div class="hidden">
				<input type="hidden" name="username" value='<?php echo $_POST["username"] ?>' >
			</div>
			<div class="col-md-12">
				<label  for="crse" >1. Please select the class in which you are enrolled in:</label>
				<select id="crse" name="crse">
					<option value="cmpt">CMPT 115</option>
					<option value="geol">GEOL 122</option>
					<option value="other">Other</option>
				</select>
			</div>
		</div>
		
	    <div class="row">
		<div class="col-md-12">
			<p>2. On a scale from 1 to 10, how computer savy do you consider yourself to be?</p>
				<label class="radio-inline">
				  <input type="radio" name="optradio" value="1">1
				</label>
				<label class="radio-inline">
				  <input type="radio" name="optradio" value="2">2
				</label>
				<label class="radio-inline">
				  <input type="radio" name="optradio" value="3">3
				</label>
				 <label class="radio-inline">
				  <input type="radio" name="optradio" value="4">4
				</label>
				<label class="radio-inline">
				  <input type="radio" name="optradio" value="5">5
				</label>
				<label class="radio-inline">
				  <input type="radio" name="optradio" value="6">6
				</label>
				 <label class="radio-inline">
				  <input type="radio" name="optradio"value="7" >7
				</label>
				<label class="radio-inline">
				  <input type="radio" name="optradio" value="8">8
				</label>
				<label class="radio-inline">
				  <input type="radio" name="optradio" value="9">9
				</label>
				<label class="radio-inline">
				  <input type="radio" name="optradio" value="10">10
				</label>
		</div>
		</div>
		
		<div class="row">
		
		<div class="col-md-12">
			<p>3. To the best of your knowledge, has your computer ever been infected with a virus?</p>
			<label class="radio-inline">
				  <input type="radio" name="virus" value="yes">Yes
				</label>
				<label class="radio-inline">
				  <input type="radio" name="virus" value="no">No
				</label>
		</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<p>4. Have you even been a victim of computer fraud?</p>
				<div class="form-group">
				<label class="radio-inline">
					  <input type="radio" name="fraud"value="yes">Yes
					</label>
					<label class="radio-inline">
					  <input type="radio" name="fraud"value="no">No
					</label>
				</div>
			
				<p>If Yes, please specify what kind of fraud.</p>
				<div class="form-group">
					<textarea class="form-control " rows="5" cols="62" name="fraudcomment"></textarea>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<p>5. Has anyone you know been a victim?</p>
				<div class="form-group">
					<label class="radio-inline">
					  <input type="radio" name="fraudother"value="yes">Yes
					</label>
					<label class="radio-inline">
					  <input type="radio" name="fraudother"value="no">No
					</label>
				</div>
			
				<p>If Yes, please specify what kind of fraud.</p>
				<div class="form-group">
					<textarea class="form-control" rows="5" style="width: 50%" name="otherfraudcomment"></textarea>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<p>6. Please select any of the below terms if you've heard them before?</p>
				<div class="form-group">
					<div class="checkbox">
					  <label><input type="checkbox" name="phish" value="1">Phishing</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" name="whale" value="1">Whaling</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" name="twin" value="1">Evil Twin</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" name="419" value="1">419 Scams</label>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" name="phreak" value="1">Phreaking</label>
					</div>
					<br><br>
				</div>
			</div>
		</div>
		
		<div class="row ">
			<div class="col-md-12">
				<div class="form-group">
					<button class="btn btn-primary"  name="submit_form"  aria-live="polite" >Submit and Logout</button>
				</div>
			</div>
		</div>

	
         </form>

	
</div>
<!--<h2>The SSRL Consists of Seven  Research Laboratories</h2>

<a href="javascript:ssrl_openAll();">Show All</a> | <a href="javascript:ssrl_closeAll();">Hide All</a>
<br/>

<div class="ssrl_labinfo">
<div class="ssrl_labheaders"><img class="ssrl_headericon" src="images/icons/plusicon.png"><span class="ssrl_labtitle">Experimental Decision Laboratory</span></div>
<div class="ssrl_labdetails">
<system-data-structure><PageContent><h1>EDL Facilities and Services</h1>
<p>The Experimental Decision Laboratory (EDL) assists researchers in conducting applied behavioural experiments.</p>
<p class="text">&#160;</p>
<h2>Available facilities include:</h2>
<ul>
<li>A 23 computer station lab equipped with a SMART Board and modular meeting table.</li>
<li>Five highly portable eye tracking systems.</li>
<li>Laptops and iPads that can be signed out&#160;to assist with onsite or mobile data collection.</li>
</ul>
<h2>Services offered include:</h2>
<ul>
<li>Development of research proposals using experimental methodologies.</li>
<li>Assistance with the development of experimental designs, methods and tools.</li>
<li>Custom programming of online and/or in lab studies using E-Prime, Z-Tree, Qualtrics, Python, PHP, HTML and JavaScript.</li>
<li>Recruitment of participants for online and in-lab studies through the SSRL&#160;<a href="http://ssrl.usask.ca/rpg/public/" target="_blank">Research Participant Group (RPG)</a>.</li>
<li><span>Creation of data visualizations and <span>infographics</span>.</span></li>
</ul></PageContent></system-data-structure></div>
</div>

<div class="ssrl_labinfo">
<div class="ssrl_labheaders"><img class="ssrl_headericon" src="images/icons/plusicon.png"><span class="ssrl_labtitle">EEG Hyperscanning Laboratory</span></div>
<div class="ssrl_labdetails">
<system-data-structure><PageContent><h1>EHL Facilities and Services</h1>
<p>Coming soon!</p></PageContent></system-data-structure></div>
</div>

<div class="ssrl_labinfo">
<div class="ssrl_labheaders"><img class="ssrl_headericon" src="images/icons/plusicon.png"><span class="ssrl_labtitle">Qualitative Research Laboratory</span></div>
<div class="ssrl_labdetails">
<system-data-structure><PageContent><h1>QRL Facilities and Services</h1>
<p>The Qualitative Research Laboratory (QRL) provides resources for researchers conducting qualitative and exploratory research.</p>
<p class="text">&#160;</p>
<h2>Available facilities include:</h2>
<ul>
<li>A 10 computer station lab equipped with NVivo software.</li>
<li>Interview and focus group meeting rooms.</li>
<li>Digital audio recorders, laptops and iPads that can be signed out to assist with research studies.</li>
</ul>
<h2>Services offered include:</h2>
<ul>
<li>Development of research proposals using qualitative methodologies.</li>
<li>Transcription of interview and focus group recordings <em>(full and clean transcription services available)</em>.</li>
<li>Interview and focus group recruitment and moderation services.</li>
<li>Qualitative analysis and NVivo training.</li>
<li>Environmental scans and literature reviews.</li>
</ul></PageContent></system-data-structure></div>
</div>

<div class="ssrl_labinfo">
<div class="ssrl_labheaders"><img class="ssrl_headericon" src="images/icons/plusicon.png"><span class="ssrl_labtitle">Spatial Analysis For Innovation in Health Research Laboratory</span></div>
<div class="ssrl_labdetails">
<system-data-structure><PageContent><h1>SAFIHR Facilities and Services</h1>
<p>The Spatial Analysis For Innovation in Health Research (SAFIHR) laboratory assists researchers in the creation, management, analysis and presentation of spatial information.</p>
<p class="text">&#160;</p>
<h2>Available facilities include:</h2>
<ul>
<li>10 Windows workstations with several Geographic Information Systems (GIS) and related software.</li>
<li>Two Mac workstations for tool creation, data collection and data visualization.</li>
<li>Five field data collection suites that include a laptop, tablet, and handheld computers, cameras, activity monitors and communication tools.</li>
</ul>
<h2>Services offered include:</h2>
<ul>
<li>Development of research proposals using GIS technology and spatial analysis.</li>
<li>Acquisition, enhancement, maintenance and dissemination of digital spatial databases.</li>
<li>Research and development of GIS-related tools and technologies.</li>
<li>Mapping and cartography services.</li>
<li>Provision of spatial and GIS-related training for faculty, students and staff using ArcGIS.</li>
</ul></PageContent></system-data-structure></div>
</div>

<div class="ssrl_labinfo">
<div class="ssrl_labheaders"><img class="ssrl_headericon" src="images/icons/plusicon.png"><span class="ssrl_labtitle">Survey and Group Analysis Laboratory</span></div>
<div class="ssrl_labdetails">
<system-data-structure><PageContent><h1>SGAL Facilities and Services</h1>
<p>The Survey and Group Analysis Laboratory (SGAL) supports researchers in conducting telephone, online and mixed-mode surveys.</p>
<p class="text">&#160;</p>
<h2>Available facilities include:</h2>
<ul>
<li>A 20 seat telephone survey lab that may be expanded to 43 stations for large studies.</li>
<li>A 16 seat focus group room equipped with audio and video recording, SMART Board and teleconference capabilities.</li>
<li>Laptops and iPads that can be signed out&#160;to assist with onsite or mobile data collection.</li>
</ul>
<h2>Services offered include:</h2>
<ul>
<li>Development of research proposals using quantitative and survey research methodologies.</li>
<li>Assistance with the creation and refinement of survey tools (questionnaires) and methods.</li>
<li>Complete survey administration and oversight &#8211; surveying in multiple languages is available.</li>
<li>Quantitative analysis (using SPSS, SAS or Stata) and reporting services.</li>
<li>Custom training using the Qualtrics Online Survey Suite.</li>
</ul></PageContent></system-data-structure></div>
</div>

<div class="ssrl_labinfo">
<div class="ssrl_labheaders"><img class="ssrl_headericon" src="images/icons/plusicon.png"><span class="ssrl_labtitle">Social Network Laboratory</span></div>
<div class="ssrl_labdetails">
<system-data-structure><PageContent><h1>SNL&#160;Facilities and Services</h1>
<p>The Social Network Laboratory (SNL) provides support and resources to researchers in conducting social network analysis and interpretation.</p>
<p class="text">&#160;</p>
<h2>Available facilities include:</h2>
<ul>
<li>A 6 computer station lab equipped with a colour printer and scanner.</li>
<li>Laptops and iPads that can be signed out to assist with onsite or mobile data collection.</li>
</ul>
<h2>Services offered include:</h2>
<ul>
<li>Development of research proposals using social network analysis.</li>
<li>Support in the identification and/ or creation of relational data (i.e., questionnaires, interviews, direct observation, archival material).</li>
<li>Custom programming, data queries and statistical analysis using R, SPSS, SAS or Stata.</li>
<li>Creation of social network models and visualizations using UCINet, NetDraw and KrackPlot.</li>
</ul></PageContent></system-data-structure></div>
</div>

<div class="ssrl_labinfo">
<div class="ssrl_labheaders"><img class="ssrl_headericon" src="images/icons/plusicon.png"><span class="ssrl_labtitle">Video Therapy Analysis Laboratory</span></div>
<div class="ssrl_labdetails">
<system-data-structure><PageContent><h1>ViTAL Facilities and Services</h1>
<p>The Video Therapy Analysis Laboratory (ViTAL) provides space and technology to assist researchers in the collection and analysis of qualitative and intervention research.</p>
<p class="text">&#160;</p>
<h2>Available facilities include:</h2>
<ul>
<li>A two-person interview/ data collection room equipped with multi-angle high resolution cameras.</li>
<li>A three-person interview/ data collection room equipped with multi-angle high resolution cameras.</li>
<li>Data analysis space that allows for the annotation and analysis of audio and video data in real time.</li>
</ul>
<h2>Services offered include:</h2>
<ul>
<li>Development of research proposals using qualitative methodologies and intervention research.</li>
<li>Annotation and analysis of audio and video data.</li>
<li>Transcription of interview and focus group recordings&#160;<em>(full and clean transcription services available)</em>.</li>
<li>Interview and focus group recruitment and moderation services.</li>
<li>Qualitative and quantitative analysis and reporting services.</li>
</ul></PageContent></system-data-structure></div>
</div>-->



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
