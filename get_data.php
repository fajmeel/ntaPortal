
<?php
include("dbcon.php");
	if(isset($_GET['offset']) && isset($_GET['limit'])){
		$limit = $_GET['limit'];
		//$offset = $_GET['offset'];
		$offset = $limit;
		//$connection = mysqli_connect('localhost', 'root', 'post');
		
		$data = mysql_query("select * from user inner join post on user.userId=post.postBy order by date DESC LIMIT 0,1") or die(mysql_error());
		while($row = mysql_fetch_array($data)){
			//echo '
		
			
			//';
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
			
			
		
	$loadmore=array(
	"postId"=>$id,
	"title"=>$title,
	"firstName"=>$fn,
	"secondName"=>$sn,
	"lastName"=>$ln,
	"news"=>$shortenednews,
	"postBy"=>$postBy,
	"date"=>$date,
	"department"=>$department
	
);


		//echo $title;echo $fn;
echo json_encode($loadmore);		
}

	}	

?>
