	
<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript">
	$("document").ready(function(){
		var flag = 0;
	
	$.ajax({
		
		type: "GET",
		url: "get_data.php",
		data: {
			'offset': 0,
			'limit': 3
		},
		success: function(data){
			alert(data)
			//$('body').append(data);
			flag += 3;
		}
	});	
	$(window).scroll(function(){
		if($window).scrollTop() >= $(document).height() - $(window).height()){
				$.ajax({
			
			type: "GET",
			url: "get_data.php",
			data: {
				'offset': flag,
				'limit': 3
			},
			success: function(data){
				alert (data)
				//$('body').append(data);
				flag += 3;
			}
		});	
		}
	}; 
	







//nav bar fixed top codes

var	navOffset = jQuery("nav").offset().top;
jQuery("nav").wrap('<div class="nav-placeholder"></div'>);
jQuery(".nav-placeholder").height(jQuery("nav").outerHeight());

//alert(navOffset);
jQuery(window).scroll(function() {
	var scrollPos = jQuery(window).scrollTop();
	
	if (scrollPos >= navOffset){
		jQuery("nav").addClass("fixed");
	} else {
		jQuery("nav").removeClass("fixed");
	}
});


 






















	});
	
	
	</script>