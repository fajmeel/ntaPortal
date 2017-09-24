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
	
	
<!--<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>  -->
	<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
	<link href="css/animate.min.css" rel="stylesheet">
	<script src="js/wow.min.js"></script>

    <title>NTA</title>

    <!-- core CSS -->
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="dist/css/bootstrap4.css" rel="stylesheet">
    
  
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <link rel="stylesheet" href="styles.css">
  <!-- offline links for modal --> 
	<script src="modalofflinefiles/prefixfree.min.js"></script>
	<script src="modalofflinefiles/jquery.min.js"></script>
	<script src="modalofflinefiles/bootstrap.min.js"></script>
   
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script> -->
  <script type="text/javascript" src="navbar-fixed-top.js"></script>
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  
</head>

<body style="background: url(images/4.jpg) fixed;">

	<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
	<link href="css/animate.min.css" rel="stylesheet">
	
	<!--Google -Fonts-->
	<link href='https://fonts.googleapis.com/css?family=Sintony:400,700&subset=latin-ext' rel='stylesheet' type='text/css'>
		
	<!--Font-awsome-->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
 
            
        <div class="container" style="margin-top: -1px;">
					
			<div class="xs-menu-cont" >
			<a id="menutoggle" ><i class="glyphicon glyphicon-align-justify"></i> </a>
             <nav class="xs-menu displaynone">
					<ul>
						<li class="active"><a href="home.php">Home</a> </li>
						<li><a href="new.php">Upload</a></li>
						<li id="superadminsm"><a href="admin.php">Admin</a></li>
						<li><a href="network.php">Network</a></li>
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
				<ul><li class="active"><a href="home.php">Home</a>	</li>
					<li><a href="new.php">Upload</a></li>
					<li id="superadmin"><a href="admin.php">Admin</a></li>
					<li><a href="network.php">Network</a></li>
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
      <h1> <font size="3"> NTA the largest TV network in Africa...</font></h1>
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
		<div class="col-md-2"><font size="3"><b>SORT BY DATE:</b></font></div>
		
		<div class="col-md-5"><font size="3">From:</font><input class="form-control" id="date" type="date" style="border-color:#F00; float:leftt;">	</div>
		
		<div class="col-md-5"><font size="3">To:</font><input class="form-control" id="date" type="date " style="border-color:#F00;float:leftt;"></div>

		</div>
		</div>
		</div> <!-- sort container close -->
		
		
		<!-- Modal -->
	<div id="myModal" class="modal fade "role="dialog">
	  <div class="modal-dialog modal-lg">

		<!-- Modal content-->
		<div class="modal-content" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body" style="height:500px; overflow:scroll;">
			<p class="news-body" ></p>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div> <!-- Modal close-->
    <!-- start comment-->
	
	<style>
	.imagecont {
	border-radius: 0px 15px 0px 15px;
	background: red;	
	}
	</style>
	
	<!---end comment-->
      <!-- Example row of columns -->
	  <div class="row wow fadeInUp" >
	  <div class="col-lg-8 col-md-11 col-sm-11 col-xs-11 newscontainer"  style="border: 0px solid #666666; 
         margin-right:-15px; border-radius: 5px;  margin-top: 5px;">
    	
	<?php
		$sql="select * from user inner join post on user.userId=post.postBy order by date DESC limit 0,7";
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
		<div class="row" style="margin-bottom:10px;" id="postcontainer'.$id.'">
		<div class="imagecont col-lg-2 col-md-2 col-sm-2 col-xs-2" style=" border: 1px solid #666666;
		margin-left:3px; margin-top:5px; width:11%; height:60px;">
		
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
		<td style='color:darkGoldenRod;'><font size='3'>$fn $sn $ln</font></td>
		<td>$date</td>
		
		<td style='color:red; float:right;'>$department</td>
		</tr>
		</table>
		
		
	  
		<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12' style='border-bottom: 2px solid #ddd7d7; 
		margin-top:0px;'>
		<h1>$title</h1>
		</div>
		<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
		<p>".$shortenednews ."</p>
		</div>";
	echo'
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-top: 2px solid #ddd7d7; margin-bottom:-12px;">
		<span style="float:right; margin-right:-14px;">
		<a href="#" class="btn btn-sm btn-success viewContent" data-id="'.$id.'" data-title="'.$title.'" data-toggle="modal" data-target="#myModal">View</a>
		<a href="edit.php?postId='.$id.'&title='.$title.'" class="btn btn-sm btn-success">Edit</a>
		<a href="" class="btn btn-sm btn-success showcomment" data-commentbox="'.$id.'">Comment</a>
		</span>
		</div>
		</div>
		
		</div>

		</div>
	  
		</div>';
	
	echo '<form><div class="container comment hidecomment" style="display:none" id="'.$id.'" >
	<div class="row">
	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="float:right;margin-right:-19px; margin-top:-7px;">
	
	<div class="input-group input-group-md"> 
    <textarea type="text" class="form-control" name="comment" id="postcomment'.$id.'" placeholder="Comment" style="height:34px; border-color: #f00;"">  </textarea>
    <span class="input-group-btn"> 
    <input type ="submit" class="btn btn-warning btn-md my-2 my-sm-0 sendcomment" name="sendbutton" data-id="'.$id.'"  style="border-color: #f00;" value="Send">
     </span>
	
     <span class="input-group-btn">
	 <a href="#" class="btn btn-md btn-danger closecomment" data-close="'.$id.'">
	 <span  class="" style="margin-right:0px;">X</span>
	 </a>
      </span>
	  
	
     </div>
	 
	 
	 <div class="form-group">
	 <input type="text" class="form-control"id="showcomment'.$id.'" style="margin-top:10px; display:none;">
	 </div>

	 
	 
	</div>
	
	</div>
	</div>
	</form>';	
	
	}
	
	?>
	
	<?php
	/*$sql="select * from comment order by date DESC";
	$result=mysql_query($sql);
	while($row=mysql_fetch_array($result))
	{
		$comment=$row["comment"];
		
		$date=$row["date"];
		echo $comment;
		echo $postBy;
		echo $date;
		
	}*/
	?>

	<!--comment section---->
	

	<!--<script>
	$("document").ready(function()
	{
		$("#sendcomment").click(function()
		{
		alert("am here");
		})
	});
	</script>--->
		</div>
		

  <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12"  style="position:relative;">
  <div class="col-11" style="border:1px solid #666666; padding:10px; border-radius:5px; margin:5px; 
  margin-left:15px; position:relative">
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
	<div style="text-align:right; width:100%;"><a href="http://www.surfing-waves.com/feed.htm" target="_blank" style="color:#ccc;font-size:10px"></div> 
	<!-- end sw-rss-feed code -->	

		
  
       </div>
	   
     
	  <div class="col-11" style="border:1px solid #666666; padding:10px; border-radius:5px; margin:5px;margin-left:15px">
  
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
   $(".comment")
   $(".showcomment").click(function(e)
   {
	   e.preventDefault();
	id = $(this).attr('data-commentbox')
	
	$("#"+id).show(1000)
   })
	var data = localStorage.getItem('nta')
 
	//alert(JSON.stringify(data))
	data = JSON.parse(data);
	var role = data.role;
	if(role!=="EDITOR" && role!=="ADMIN" )
	{
	   $("#superadmin").hide()
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
	$(".closecomment").click(function(){
		toclose = $(this).attr('data-close')
		$('#'+toclose).hide(1000)
		
	})
	
	$('body').on("click",".viewContent",function(){
		id = $(this).attr("data-id");
		title = $(this).attr("data-title")
		$.ajax({
			url:'http://localhost/NTA/api.php/post/'+id+'?transform=1',
			type:"GET",
			success:function(data){
				alert
				newsRecord = data.news
				$(".modal-title").text(title);
		$(".news-body").html(newsRecord);
				
			}
		})
		//alert(title)
		
	})
    /* $(".viewContent").click(function(e){
		e.preventDefault()
		news = $(this).attr("data-news");
		title = $(this).attr("data-title")
		alert(title)
		$(".modal-title").text(title);
		$(".news-body").html(news);
        //$("#myModal").modal()
   
	 })
    */
	
	function getCommentById(id){
		$.ajax({
		url:"http://localhost/NTA/api.php/comment?filter=postId,eq,"+id+"&transform=1",
		type:"GET",
		contentType: "application/json",
		
		success:function(data){
			
			comments = data.comment
			//alert(comments)
			//alert("The comment is")
			//window.location="home.php";
			$.each(comments,function(index,value){
				//console.log("the value"+ JSON.stringify(value))
				var data = localStorage.getItem('nta')
	  //alert(JSON.stringify(data))
	  data = JSON.parse(data);
	  $("#name").text(data.firstName+" "+" "+data.secondName+" "+" "+data.lastName);
	  $("#firstName").text(data.firstName);
	  $("#department").text(data.department);
	  allcomment='<div class="sortcont col-lg-10 col-md-9 col-sm-9 col-xs-9;" style="border-radius:5px; border:3px; color:grey;'
		allcomment+='margin-top:8px; margin-right:10px; float:right; width:76%;">'
				allcomment += "<table width='98%' border='1' cellspacing='1' cellpadding='1' style='margin-top:-5px; float:left;'>"
		allcomment += "<tr>"
		//data = JSON.parse(data);
		allcomment += "<td style='color:green;'><font size='2'>"+data.firstName+" "+" "+data.secondName+" "+" "+data.lastName+" "+"</font> </td> </tr>"
		allcomment +="<tr><td colspan='2'>"+value.comment+"</td></tr>"
		allcomment +="<tr><td style='color:grey;'>"+data.department+"</td>"
		allcomment +="<td style='color:grey;'>"+value.date+"</td><td></td>"
		allcomment +="</tr>"
		
		allcomment +="</table></div>"
			$("#postcontainer"+id).append(allcomment)
				
			})
		
      		
			
			$(".hidecomment").hide();
			
		},
		error:function(){
			alert("something went wrong")
			
		}
	})
	} 
	
	$.ajax({
		url:"http://localhost/NTA/api.php/post?transform=1",
		type:"GET",
		contentType: "application/json",
		
		success:function(data){
		allnews = data.post
		$.each(allnews,function(index,value){
			console.log(JSON.stringify("comment value"+value))
			getCommentById(value.postId)
		})
			
		}
	})

	
  var data = localStorage.getItem('nta')
  //alert(JSON.stringify(data))
  data = JSON.parse(data);
  $("#name").text(data.firstName+" "+" "+data.secondName+" "+" "+data.lastName);
  $("#firstName").text(data.firstName);
  
  //logout function
  
   //load more
  // var initialnews=value.news;
   //var shortenednews=initialnews.subtr(0,400);
		var flag = 2;
		var interval = 5;
	$(window).scroll(function(){
		if($(window).scrollTop() >= $(document).height() - $(window).height()){
			//end = flag + interval ;
				$.ajax({
			
			type: "GET",
			url: "http://localhost/nta/api.php/post?include=user&order=postId&page="+flag+","+interval +"&transform=1",
			data: {
				'offset': flag,
				'limit': 3
			},
			success: function(data){
				
			$.each(data.post,function(index,value){
				
		var newsLineTemplate = "";
		newsLineTemplate +=	'<div class="row" style="margin-bottom:10px">'
		newsLineTemplate +='<div class="imagecont col-lg-2 col-md-2 col-sm-2 col-xs-2" style=" border: 1px solid #666666;margin-left:3px; margin-top:5px; width:11%; height:60px;"> </div>'
		
	
		
		newsLineTemplate +='<div class="newscont col-lg-10 col-md-9 col-sm-9 col-xs-9;" style="border-radius:5px; margin-top:5px; margin-right:10px; float:right; width:86%;">'

		newsLineTemplate +='<div class="row">'
		newsLineTemplate +='<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-bottom: 0px solid #ddd7d7; margin-top:-30px;">'
		newsLineTemplate +="<table width='98%' border='1' cellspacing='1' cellpadding='1' style='margin-top:20px; float:left;'>"
		newsLineTemplate +='<tr>'
		
		newsLineTemplate +="<td style='color:green;'><font size='3'>"+value.user[0].firstName + " "+value.user[0].secondName + " "+value.user[0].lastName+"</font></td>"
		newsLineTemplate +="<td>"+" "+value.date+" "+"</td>"
		
		newsLineTemplate +='<td style="color:red; float:right;">'+value.user[0].department+'</td>'
		newsLineTemplate +='</tr>'
		newsLineTemplate +='</table>'
	  
		newsLineTemplate +='<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-bottom: 2px solid #ddd7d7; margin-top:0px;">'
		newsLineTemplate +='<h1>'+ value.title+ '</h1> </div>'
		
		newsLineTemplate +='<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><span>'+value.news.substring(0,400)+'</span></div>'
	
		newsLineTemplate +='<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-top: 2px solid #ddd7d7; margin-bottom:-12px;"><span style="float:right; margin-right:-14px;">'
		newsLineTemplate +='<a href="#" class="btn btn-sm btn-success viewContent" style="margin:2px;"data-title="'+value.title+'" data-id="'+value.postId+'" data-toggle="modal" data-target="#myModal">View</a>'
		newsLineTemplate +='<a style="margin:2px;" href="edit.php?postId='+value.postId+'&title='+value.title+'&news='+value.news+'" class="btn btn-sm btn-success">Edit</a>'
		newsLineTemplate +='<a href="" style="margin:2px;" class="btn btn-sm btn-success" >Comment</a></span>'
		newsLineTemplate +='</div></div></div></div>'
	  
		newsLineTemplate +='</div>'	
		$('.newscontainer').append(newsLineTemplate);
		
		
		//comment section
		/*
		newsLineTemplate +='<form>'
		newsLineTemplate +='<div class="container comment" style="display:none" id='+data.id+'>'
		newsLineTemplate +='<div class="row">'
		newsLineTemplate +='<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="float:right;margin-right:-19px; margin-top:-7px;">'
		
		newsLineTemplate +='<div class="input-group input-group-md">'
		newsLineTemplate +='<textarea type="text" class="form-control" id="postcomment'+data.id+'"placeholder="Comment" style="height:34px; border-color: #f00;"">  </textarea>'
		newsLineTemplate +='<span class="input-group-btn">'
		newsLineTemplate +='<button class="btn btn-warning btn-md my-2 my-sm-0" id="sendcomment" style="border-color: #f00;"> Send</button>' 
		newsLineTemplate +='</span>'
		newsLineTemplate +='<span class="input-group-btn">'
		newsLineTemplate +='<a href="#" class="btn btn-md btn-danger closecomment" data-close='+data.id+'>'
		newsLineTemplate +='<span  class="" style="margin-right:0px;">X</span>'
		newsLineTemplate +='</a>'
		newsLineTemplate +='</span>'
		newsLineTemplate +='</div>	
		
		newsLineTemplate +='<div class="form-group">'
		newsLineTemplate +='<input type="text" class="form-control"id="showcomment'+ata.id+'" style="margin-top:10px; display:none;">'
		newsLineTemplate +='</div>'
		
		newsLineTemplate +='</div> </div> </div>'
		newsLineTemplate +='</form>' 
		*/		 
			//})
				
				//alert (data)
				flag++;
				
				//flag += 3;
			})
				}
		});	
		}
	})
	$(".sendcomment").click(function(e){
		var data = localStorage.getItem('nta')
		data = JSON.parse(data);
		userid = data.userId;
		
		
		id = $(this).attr('data-id')
		e.preventDefault()
	var formdata={ 
	comment : $("#postcomment"+id).val(),
	postId: id,
	commentBy: userid
	
	
	
	}
	//alert(JSON.stringify(formdata))
	
	
		//alert(JSON.stringify(formdata))
	$.ajax({
		url:"http://localhost/NTA/api.php/comment",
		type:"POST",
		contentType: "application/json",
		dataType:"json",
		data: JSON.stringify(formdata),
		success:function(data){
			//alert(data)
			//window.location="home.php";
	
			
		},
		error:function(){
			alert("something went wrong")
			
		}
	})
	getCommentById(id)
	 /*
	$.ajax({
		url:"http://localhost/NTA/api.php/comment?filter=postId,eq,"+id+"&transform=1",
		type:"GET",
		contentType: "application/json",
		dataType:"json",
		success:function(data){
			
			comments = data.comment
			//alert(comments)
			//alert("The comment is")
			//window.location="home.php";
			$.each(comments,function(index,value){
				//console.log("the value"+ JSON.stringify(value))
				var data = localStorage.getItem('nta')
  //alert(JSON.stringify(data))
  data = JSON.parse(data);
  $("#name").text(data.firstName+" "+" "+data.secondName+" "+" "+data.lastName);
  $("#firstName").text(data.firstName);
  $("#firstName").text(data.department);
  allcomment='<div class="newscont col-lg-10 col-md-9 col-sm-9 col-xs-9;" style="border-radius:5px; border:3px; color:grey;'
		allcomment+='margin-top:8px; margin-right:10px; float:right; width:76%;">'
				allcomment += "<table width='98%' border='1' cellspacing='1' cellpadding='1' style='margin-top:-5px; float:left;'>"
		allcomment += "<tr>"
		//data = JSON.parse(data);
		allcomment += "<td style='color:green;'><font size='2'>"+data.firstName+" "+" "+data.secondName+" "+" "+data.lastName+" "+"</font> </td> </tr>"
		allcomment +="<tr><td colspan='2'>"+value.comment+"</td></tr>"
		allcomment +="<tr><td style='color:grey;'>"+data.department+"</td>"
		allcomment +="<td style='color:grey;'>"+value.date+"</td><td></td>"
		allcomment +="</tr>"
		
		allcomment +="</table></div>"
			$("#postcontainer"+id).append(allcomment)
				
			})
		
      		
			
			$(".hidecomment").hide();
			
		},
		error:function(){
			alert("something went wrong")
			
		}
	})
	
	*/
	
	
	
	
	})
		
	});
	
	
	</script>
	
	
	
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="js/main.js"></script>
</body>
</html>