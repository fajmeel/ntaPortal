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
	
	<script src="js/wow.min.js"></script>
	
	
<!--	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>  -->
	<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
	<link href="css/animate.min.css" rel="stylesheet">
	<script src="js/wow.min.js"></script>

    <title>Network</title>

    <!-- core CSS -->
    <link href="css/main.css" rel="stylesheet">
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="dist/css/bootstrap4.css" rel="stylesheet">
    
  
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <link rel="stylesheet" href="styles.css">
   

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body style="background: url(images/4.jpg) fixed;">

	<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
	<link href="css/animate.min.css" rel="stylesheet">
	<!--Google -Fonts-->
	<link href='https://fonts.googleapis.com/css?family=Sintony:400,700&subset=latin-ext' rel='stylesheet' type='text/css'>
		
	<!--Font-awsome-->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
 
            
            <div class="container" style="margin-top: -1px;" >
					
			<div class="xs-menu-cont" >
			<a id="menutoggle" ><i class="glyphicon glyphicon-align-justify"></i> </a>
            <nav class="xs-menu displaynone">
					<ul>
						<li><a href="home.php">Home</a> </li>
						<li><a href="new.php">Upload</a></li>
						<li><a href="admin.php">Admin</a></li>
						<li class="active"><a href="network.php">Network</a></li>
						<li><a href="news24.php">News24</a></li>
						<li><a href="international.php">International</a></li>
						<li><a href="parliament.php">Parliament</a></li>
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
				<ul><li><a href="home.php">Home</a>	</li>
					<li><a href="new.php">Upload</a></li>
					<li><a href="admin.php">Admin</a></li>
					<li class="active"><a href="network.php">Network</a></li>
					<li><a href="news24.php">News24</a></li>
					<li><a href="international.php">International</a></li>
					<li><a href="parliament.php">Parliament</a></li>				
         			<span style="float:right; margin-right:3px; margin-top:5px;">
          			<form class="form-inline mt-2 mt-md-2"> 
					
					  <div class="input-group input-group-md">
					  <input type="text" class="form-control" placeholder="Search"/>
					  <span class="input-group-btn"> 
					  <button class="btn btn-outline-success my-2 my-sm-0">Search</button>
					  </span>
					  </div>
		
        			</form> </span>
        		
            	</ul>
			</nav>    
		</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="menu/js/index.js"></script>

<div class="container" style="background: rgba(580, 400, 400, 0.90); margin-top:-9px">
    
 

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

	  </div>
	  <div class="col-lg-4"> 
	  
	  <h2 align="right" style="color:red;">
	  
		<script language="JavaScript"> 
			var myDate = new Date(); 
				
			if ( myDate.getHours() < 12 )  
			{ 
				document.write("Good Morning!"); 
			} 
			else  
			if ( myDate.getHours() >= 12 && myDate.getHours() <= 17 ) 
			{ 
				document.write("Good Afternoon!"); 
			} 
			else  
			if ( myDate.getHours() > 17 && myDate.getHours() <= 24 ) 
			{ 
				document.write("Good Evening!"); 
			} 
			else  
			{ 
				document.write("I'm not sure what time it is!"); 
			} 
  
		</script> 

	  <span  id="firstName" style="color:green;font-weight: bold;"> </span> &nbsp; 
	  <a href="profile.php" class="btn btn-xs btn-success">Profile</a>
	  <a href="" class="btn btn-danger btn-xs logout">Logout</a> </h2>
	  </div>
	  </div>
	  </div>
	  </div>
        <!-- Static navbar -->
    
    		<!-- sort container begins -->
		<div class="sortcont col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="border: 1px solid #666; background:transparent; 
		border-radius: 5px;  padding:5px;" id="newscont">
       	
		<div class="row">
		<div class="col-md-2"><font size="3"><br>SORT BY DATE:</b></font></div>
		
		<div class="col-md-5"><font size="3">From:</font><input class="form-control" id="date" type="date" style="border-color:#F00; float:leftt;">	</div>
		
		<div class="col-md-5"><font size="3">To:</font><input class="form-control" id="date" type="date" style="border-color:#F00;float:leftt;"></div>
		
		</div>
		</div>
		</div> <!-- sort container close -->

      <!-- Example row of columns -->
      <div class="row wow fadeInUp" >
<div class="col-lg-8 col-md-11 col-sm-11 col-xs-11"  style="border: 0px solid #666666; 
         margin-right:-15px; border-radius: 5px;  margin-top: 5px;">
      
	<?php
		$sql="select * from user inner join post on user.userId=post.postBy where user.department = 'NETWORK' order by date DESC";
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
		margin-top:5px; margin-right:10px; float:right; width:86%;">

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
	echo'
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-top: 2px solid #ddd7d7; margin-bottom:-12px;">
		<span style="float:right; margin-right:-14px;">
		<a href="#" class="btn btn-sm btn-success viewContent" data-title="'.$title.'" data-news="'.$news.'" data-toggle="modal" data-target="#myModal">View</a>
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
  <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" style="position:relative;">
  <div class="col-11" style="border:1px solid #666666; padding:10px; border-radius:5px; margin:5px; 
  margin-left:15px; position:relative;">
  	<!-- begin my rss feed -->
	<h2> Foreign News </h2>
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
	<div style="text-align:right; width="100%;"><a href="http://www.surfing-waves.com/feed.htm" target="_blank" style="color:#ccc;font-size:10px"></div> 
	<!-- end sw-rss-feed code -->	

		
  
       </div>
	   
     
	  <div class="col-11" style="border:1px solid #666666; padding:10px; border-radius:5px; margin:5px; margin-left:15px">
  
			<h2> Local News feed </h2>
       	  <p><a href="#">www.dailytrust.com</p>
		  <p><a href="#">www.leadershiponline.com</p>
		  <p><a href="#">www.saharareporters.com</p>
		   <p><a href="#">www.thenationonline.com</p>
		    <p><a href="#">www.premiumstimes.com</p>
			 <p><a href="#">www.theblueprint.com</p>
			  <p><a href="#">www.thesunnews.com</p>
			  <p><a href="#">www.vanguard.com</p>
			  <p><a href="#">www.newnigeria.com</p>
			  <p><a href="#">www.telegraph.com</p>
			  <p><a href="#">www.dailyindipendent.com</p>
              <p><a href="#">www.newnigeria.com</p>
			  <p><a href="#">www.dailysun.com</p>
        <p><a class="btn btn-danger" href="#" role="button">More Feeds &raquo;</a></p>
       </div>   

	   
	   
       </div>
      </div>
      
      
      <!-- Site footer -->
      <footer class="footer" class="navbar navbar-default navbar-fixed-bottom" 
	  style=" margin-left:-15px; margin-right:-15px; margin-bottom: -9px;">

      <div style="background: #7f1515; border-top:4px solid #FF0; padding:10px;"> 
        <p style="color:#FF0">&copy; 2017 NTA, Inc.</p>
        <p style="color:#FF0">All rights reserved</p>
      </div>
      </footer>
</div>

</div> <!-- /container -->
      
     <script>
   $("document").ready(function() 
   { 
  var data = localStorage.getItem('nta')
  //alert(JSON.stringify(data))
  data = JSON.parse(data);
  $("#name").text(data.firstName+" "+" "+data.secondName+" "+" "+data.lastName);
  $("#department").text(data.department);
  $("#email").text(data.email);
  $("#phone").text(data.phone);
  $("#role").text(data.role);
  
  $("#firstName").text(data.firstName);
	// Logout Function 
	
	$(".logout").click(function(e){
		e.preventDefault()
		localStorage.clear()
		window.location="index.html"
	})
	
      });
   </script> 
    


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="js/main.js"></script>
</body>
</html>