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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Edit Profile</title>

    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
    
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Cuprum:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="dist/css/bootstrap.css" rel="stylesheet">


    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
	
	
  </head>

 
  <body>
  <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
  <link href="css/animate.min.css" rel="stylesheet">
  
<div class="wow fadeInDown">
    <div class="about-bottom book-form col-md-offset-4">
	<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	  
	  <form id="profileForm" style="display;"> 
	  <h3 style="margin-top:-10px; text-color:red; text-shadow:1px 1px 1px #666666;"> Edit Profile</h3>
	  <br>
		<div class="form-group">
		<input type="text" name="firstName" id="firstName" placeholder="First Name" class="form-control" style="border-color:#F00">
		</div>
        <div class="form-group">
		<input type="text" name="secondName" id="secondName" placeholder="Second Name" class="form-control" style="border-color:#F00">
		</div>
		<div class="form-group">
		<input type="text" name="lastName" id="lastName" placeholder="Last Name" class="form-control" style="border-color:#F00">
		</div>
		<div class="form-group">
		<select name="role" class="form-control" style="border-color:#F00;" class="form-date-w3-agileits">
		<option id="department" value="Choose Role" class="form-control" selected disabled style="border-color:#F00;" required>Select Stations</option>
		<option name="network" value="NETWORK" class="form-control" style="border-color:#F00;">NETWORK</option>
		<option name="ews24" value="NEWS24" class="form-control" style="border-color:#F00;">NEWS24</option>
		<option name="international" value="INTERNATIONAL" class="form-control" style="border-color:#F00;" >INTERNATIONAL</option>
		<option name="parliament" value="PARLIAMENT" class="form-control" style="border-color:#F00;">PARLIAMENT</option>
		</select>
		</div>
		<div class="form-group">
		<input type="text" name="phone" id="phone" placeholder="Phone" class="form-control" style="border-color:#F00">
		</div>
		<div class="form-group">
		<input type="email" name="email" id="email" placeholder="Email" class="form-control" style="border-color:#F00">
		</div>
		<div class="form-group">
		<input type="password" name="password" id="password" placeholder="Password" class="form-control" style="border-color:#F00">
		</div>
		
		
		<div class="row">
		<div class="col-md-6"> 
		<div class="form-group">
		<a href="" class="btn btn-info btn-md btn-block" id="saveProfile">Save</a>
		</div>
		</div>
		<div class="col-md-6"> 
		<div class="form-group">
		<a type="button" value="Reset"href="profile.php" class="btn btn-danger btn-md btn-block">Discard Changes</a>
		</div>
		</div>
		</div>

		</div>
      </form>
	  </div>

    </div> <!-- /container -->
</div>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	<!--<script src="js/jquery-3.2.0.min.js"></script> -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	 <script>
  
	$("document").ready(function()
	{
	userDetail = JSON.parse(userDetail);
	 //$(".username").text(userDetail.firstName + " "+  userDetail.lastName )
	 $("#firstName").attr('value',userDetail.firstName )
	 $("#secondName").attr('value',userDetail.secondName )
	 $("#lastName").attr('value',userDetail.lastName )
	 $("#department").attr('value',userDetail.department )
	 $("#phone").attr('value',userDetail.phone )	
	 $("#email").attr('value',userDetail.email )
	 $("#password").attr('value',userDetail.password )
	 userId = userDetail.userId

	// Edit Profile 
	
	$(".editProfile").click(function(e){
		e.preventDefault()
		$("#profileForm").show(1000)
	
	})
	
	// Save Profile 
	
	$("#saveProfile").click(function(e){
	e.preventDefault()
		formData = {
		firstName: $("#firstName").val(),
		secondName: $("#secondName").val(),
		lastName: $("#lastName").val(),
		department: $("#department").val(),
		phone: $("#phone").val(),
		email: $("#email").val(),
		password: $("#password").val()
		}
		//alert(JSON.stringify(formData))
		
		$.ajax({
		url:"http://localhost/NTA/api.php/user/"+userId,
		type:"PUT",
		contentType: "application/json",
		dataType:"json",
		data: JSON.stringify(formData),
		success:function(data){
		//alert(data)
			if(data){
			  //get the new data 
			  $.ajax({
						url:"http://localhost/NTA/api.php/user/"+userId,
						type:"GET",
						contentType: "application/json",
						dataType:"json",
						data: JSON.stringify(formData),
						success: function(data){
						localStorage.setItem('nta',JSON.stringify(data))
						window.location="profile.php"
						
						alert("Changes saved successfully")
						}
						})
				}
			},
			
			error:function(){
			alert("something went wrong")
			
		}
	
		})
	
	
	})

	
	})
	
	</script>

	<script src="js/main.js"></script>
  </body>
</html>
