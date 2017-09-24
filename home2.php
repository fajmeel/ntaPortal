<?php 
include("dbcon.php");
?>
<!DOCTYPE html>
<html lang="en">

<script>
	var userDetail=localStorage.getItem('nta')
	if (userDetail==undefined)
	{
	window.location="index.html"
	}
</script>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
	<!--<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>  -->
	<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
	<link href="css/animate.min.css" rel="stylesheet">
	<script src="js/wow.min.js"></script>
	

    <title>NTA</title>

    <!-- Bootstrap core CSS -->
    <link href="css/main.css" rel="stylesheet">
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="dist/css/bootstrap4.css" rel="stylesheet">
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<!--<link href="my nav bar.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
 
    <!-- <link href="justified-nav.css" rel="stylesheet">  

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
	<link rel="stylesheet" href="styles.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body class="wow fadeInDown" style="background: url(images/4.jpg) fixed;">
  
		<!--Google -Fonts-->
		<link href='https://fonts.googleapis.com/css?family=Sintony:400,700&subset=latin-ext' rel='stylesheet' type='text/css'>
		
		<!--Font-awsome-->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
 
        <!-- Navbar -->  
        <div class="container" style="margin-top: -1px;" >
	
			<div class="xs-menu-cont" >
			<a id="menutoggle"><i class="glyphicon glyphicon-align-justify"></i> </a>
             <nav class="xs-menu displaynone">
					<ul>
						<li class="active"><a href="#">Home</a> </li>
						<li id="uploadersm"><a href="new.php">Upload</a></li>
						<li id="editorsm"><a href="edit.php">Edit News</a></li>
						<li id="superadminsm"><a href="#">Manage Users</a></li>
						<li>		
        			 	<div class="input-group input-group-sm">
         				<input type="text" class="form-control" placeholder="Search">
         				<span class="input-group-btn">
                        <button class="btn btn-outline-success my-2 my-sm-0"> Search</button>
         				</span>
         				</div>
           				</li>
                    </ul>
			</nav>			
			</div>
			<nav class="menu">
				<ul><li class="active"><a href="muss">Home</a>	</li>
					<li  id="uploader" ><a href="new.php">Upload</a></li>
					<li id="editor" ><a href="edit.php">Edit News </a></li>
				
					<li  id="superadmin"><a href="#">Manage Users</a></li>
					
									
         			<span style="float:right; margin-right:3px; margin-top:5px;">
          			<form class="form-inline mt-2 mt-md-2"> 
	 	  			<input class="form-control mr-sm-2" type="text" placeholder="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        			</form> </span>
        		
            	</ul>
			</nav>    
		</div> <!-- navbar -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="menu/js/index.js"></script>

<!-- first main container -->
<div class="container" style="background: rgba(580, 400, 400, 0.90);margin-top:-9px; width:94%;">
  
   <!-- second main container -->
   <div class="row" style="border: 1px solid #f00;overflow:scroll;"> 


    <div class="masthead" >
	  <div class="row">
	  <div class="col-lg-12">
	  <div class="row">
	  <div class="col-lg-5">
      <h1> <font size="3">&nbsp; NTA the largest TV network in Africa...</font></h1>
	  </div>
	  <div class="col-lg-3"> &nbsp;
	  
	 <?php
	 $current_date = date("d-M-Y");
	 echo $current_date;
	 ?>
<!-- <script> 
	  var now = new date();
	  document.write(now.toLocaleDateString());
	  
	 </script> -->
	  </div>
	  <div class="col-lg-4"> 
	  
	  <h2 align="right" style="color:red;">
	  
		<script language="JavaScript"> 
			var myDate = new Date(); 
				/* hour is before noon */
			if ( myDate.getHours() < 12 )  
			{ 
				document.write("Good Morning!"); 
			} 
			else  /* Hour is from noon to 5pm (actually to 5:59 pm) */
			if ( myDate.getHours() >= 12 && myDate.getHours() <= 17 ) 
			{ 
				document.write("Good Afternoon!"); 
			} 
			else  /* the hour is after 5pm, so it is between 6pm and midnight */
			if ( myDate.getHours() > 17 && myDate.getHours() <= 24 ) 
			{ 
			document.write("Good Evening!"); 
			} 
			else  /* the hour is not between 0 and 24, so something is wrong */
			{ 
			document.write("I'm not sure what time it is!"); 
			} 
  
		</script> 
		
	  <span  id="firstName" style="color:green;font-weight: bold;"> </span> &nbsp; 
	  <a href="profile.php" class="btn btn-xs btn-success">Profile</a>
	  <a href="" class="btn btn-danger btn-xs logout">Logout</a> &nbsp; </h2> 
	  </div>
	  </div>
	  </div>
	  </div>
    </div>
    

		<!-- sort container begins -->
       <div class="sortcont col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="border: 1px solid #666666; background:transparent; 
       border-radius: 5px;  padding:5px;" id="newscont">
       	
		<div class="row" style="align:right;">
		<div class="col-md-2"><font size="3">Sort by Date:</font></div>
		<div class=" col-md-1"><font size="3">From:</font></div>
		<div class="col-md-2"><input class="form-control" id="date" type="date" style="border-color:#F00;">	</div>
		<div class=" col-md-1"><font size="3">To:</font></div>
		<div class="col-md-2"><input class="form-control" id="date" type="date" style="border-color:#F00;"></div>
		<div class="col-md-2"><font size="3">Sort by Station:</font></div>
		<div class="col-md-2">
		<select name="stations" class="form-control" style="border-color:#F00;" class="form-date-w3-agileits">
			<option name="select station" value="Choose Role" class="form-control" selected disabled style="border-color:#F00;" required>Choose Station</option>
			<option name="Network" value="Network" class="form-control" style="border-color:#F00;">Network</option>
			<option name="News24" value="News24" class="form-control" style="border-color:#F00;">News24</option>
			<option name="International" value="International" class="form-control" style="border-color:#F00;">International</option>
			<option name="parliament" value="Parliament" class="form-control" style="border-color:#F00;">Parliament</option>
			<option name="localStations" value="Local Stations" class="form-control" style="border-color:#F00;">Local Stations</option>
		</select>
		
		</div>
		</div>
		</div> <!-- sort container close -->

<!-- Modal -->
<div id="myModal" class="modal fade "role="dialog">
  <div class="modal-dialog modal-lg" >

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
		</div>
		<div class="modal-body" style="overflow:scroll;">
        <p class="news-body"></p>
		</div>
		<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div > <!-- Modal close-->
	
	
	<!-- Second Container -->
	<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12"  style="border: 0px solid #666666; margin-left:0px; 
       margin-right: 0px; border-radius: 7px;  margin-top: 5px; height:500px;">	
	  
	
	 <?php
		$sql="select * from user inner join post on user.userId=post.postBy order by date DESC";
		$result=mysql_query($sql) or die ("could not select post" .mysql_error());
		while ($row = mysql_fetch_array($result))
		{
			$id = $row["postId"];
			$title = $row["title"];
			$fn = $row["firstName"];
			$sn = $row["secondName"];
			$ln = $row["lastName"];
			$news = $row["news"];
			$shortenednews=substr($news,0,400);
			$postBy = $row["postBy"];
			$date = $row["date"];
			$department = $row["department"];
		echo'
		<div class="row">
	<div class="imagecont col-lg-2 col-md-2 col-sm-2 col-xs-2" style=" border: 1px solid #666666;
	margin-left:3px; margin-top:15px; width:11%; height:14%;">
	
	</div>
	
	<div class="newscont col-lg-10 col-md-9 col-sm-9 col-xs-9;" style="border-radius:5px;
	margin-top:15px; margin-right:10px; float:right; width:86%;">

	<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-bottom: 0px solid #ddd7d7; margin-top:-30px;">
	
		';
	echo"
	
	<table width='98%' border='1' cellspacing='1' cellpadding='1' 
	style='margin-top:20px; float:left;'>
  <tr>
    <td style='color:blue;'><font size='3'>$fn $sn $ln</font></td>
    <td>$date</td>
	
    <td style='color:red; float:right;'>$department</td>
  </tr>
  </table>
  
	<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12' style='border-bottom: 2px solid #ddd7d7; 
	margin-top:0px;'>
	<h1>$title</h1>
	</div>
	<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
	<span>$shortenednews </span>
	</div>";
	echo'<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-top: 2px solid #ddd7d7; margin-bottom:-12px;">
	<span style="float:right; margin-right:-14px;">
	<a href="#" class="btn btn-sm btn-success viewContent" data-title="'.$title.'" data-news="'.$news.'" data-toggle="modal" data-target="#myModal" >View</a>
	<a href="edit.php?postId='.$id.'&title='.$title.'&news='.$news.'" class="btn btn-sm btn-success">Edit</a>
	<a href="" class="btn btn-sm btn-success" >Comment</a>
	</span>
	</div>
	</div>
	
	</div>

	</div>
  
	</div>';	
		}
	?>
	
	
	</div>

  <div class="row">
 
  <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" style="border:0px solid #666666; padding:10px; 
  border-radius:5px; margin-left:0px; margin-right:0px; margin-top:5px">
  
  	<!-- begin my rss feed -->
	<h2><font size="4"> Foreign News </font></h2>
	<!-- start sw-rss-feed code --> 
	<script type="text/javascript"> 
	<!-- 
	rssfeed_url = new Array(); 
	rssfeed_url[0]="https://news.google.com/news/rss/?ned=us&hl=en";  
	rssfeed_frame_width="100%"; 
	rssfeed_frame_height="260"; 
	rssfeed_scroll="on"; 
	rssfeed_scroll_step="6"; 
	rssfeed_scroll_bar="off"; 
	rssfeed_target="_blank"; 
	rssfeed_font_size="12"; 
	rssfeed_font_face=""; 
	rssfeed_border="on"; 
	rssfeed_css_url="https://feed.surfing-waves.com/css/style4.css"; 
	rssfeed_title="off"; 
	rssfeed_title_name=""; 
	rssfeed_title_bgcolor="#3366ff"; 
	rssfeed_title_color="#fff"; 
	rssfeed_title_bgimage=""; 
	rssfeed_footer="off"; 
	rssfeed_footer_name="rss feed"; 
	rssfeed_footer_bgcolor="#fff"; 
	rssfeed_footer_color="#333"; 
	rssfeed_footer_bgimage=""; 
	rssfeed_item_title_length="50"; 
	rssfeed_item_title_color="#666"; 
	rssfeed_item_bgcolor="#fff"; 
	rssfeed_item_bgimage=""; 
	rssfeed_item_border_bottom="on"; 
	rssfeed_item_source_icon="off"; 
	rssfeed_item_date="off"; 
	rssfeed_item_description="on"; 
	rssfeed_item_description_length="120"; 
	rssfeed_item_description_color="#666"; 
	rssfeed_item_description_link_color="#333"; 
	rssfeed_item_description_tag="off"; 
	rssfeed_no_items="0"; 
	rssfeed_cache = "786ec4853bc0df72cd465e52718dd7a9"; 
	//--> 
	</script> 
	<script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script> 
	<!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. --> 
	<div style="text-align:right; width:100%;"></div> 
	<!-- end sw-rss-feed code -->	
		 
       </div>
	   
     
	  
	  <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" style="border:0px solid #666666; padding:10px; 
	  border-radius:5px; margin-left:0px; margin-right:-2px;">
  
			<h2> <font size="4">Local News</font></h2>
       	  <p><a href="#">www.dailytrust.com</p>
		  <p><a href="#">www.leadershiponline.com</p>
		  <p><a href="#">www.saharareporters.com</p>
		   <p><a href="#">www.thenationonline.com</p>
		    <p><a href="#">www.premiumstimes.com</p>
			 <p><a href="#">www.theblueprint.com</p>
			  <p><a href="#">www.thesunnews.com</p>
			  <p><a href="#">www.vanguard.com</p>			  
        <p><a class="btn btn-danger" href="#" role="button">More Feeds &raquo;</a></p>
       </div>   

    </div>
      
	</div>	 <!-- second main container -->
</div> <!-- first main container close -->
	
	<!-- footer open -->
	<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <footer class="footer" class="navbar navbar-default navbar-fixed-bottom" style=" 
	  margin-top:-10px; margin-bottom:-10px;">

      <div style="background: #7f1515; border-top:4px solid #FF0; padding:10px;"> 
        <p style="color:#FF0">&copy; 2017 NTA, Inc.</p>
        <p style="color:#FF0">All rights reserved</p>
      </div>
      </footer>
	</div>
	</div>
	<!-- footer close -->
   <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
   <link href="css/animate.min.css" rel="stylesheet">
	 
  <script>
  
   $("document").ready(function() 
   { 
  var data = localStorage.getItem('nta')
 
  //alert(JSON.stringify(data))
  data = JSON.parse(data);
   var role = data.role;
   if(role!=="editor" && role!=="Admin" )
   {
	   $("#editor").hide()
	   $("#superadmin").hide()
	   $("#editorsm").hide()
	   $("#superadminsm").hide()
   }
   
  $("#name").text(data.firstName+" "+" "+data.secondName+" "+" "+data.lastName);
  $("#department").text(data.department);
  $("#email").text(data.email);
  $("#phone").text(data.phone);
  
  $("#firstName").text(data.firstName);
	// Logout Function 
	
	$(".logout").click(function(e){
		e.preventDefault()
		localStorage.clear()
		window.location="index.html"
	})
	
     $(".viewContent").click(function(e){
		e.preventDefault()
		news = $(this).attr("data-news");
		title = $(this).attr("data-title")
		//alert(title)
		$(".modal-title").text(title);
		$(".news-body").text(news);
        //$("#myModal").modal()
   
	 })
    
	
  var data = localStorage.getItem('nta')
  //alert(JSON.stringify(data))
  data = JSON.parse(data);
  $("#name").text(data.firstName+" "+" "+data.secondName+" "+" "+data.lastName);
  $("#firstName").text(data.firstName);
  
  //logout function
  
   });
	
	</script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="js/main.js"></script>
</body>
</html>