<?php
	include("connection.php");
	if(isset($_POST['submit']))
	{
		//$today=getdate();
		//$sdate=$today['weekday'].", ".$today['mday']." ".$today['month']." ".$today['year']." - ".$today['hours'].":".$today['minutes'];
		
		$today = date("D, j F Y - g:i A"); 
		$sdate = $today;

		$name=$_POST['inputName'];
		$email=$_POST['inputEmail'];
		$comment=$_POST['inputComment'];
		
		if(!empty($name)&&!empty($email)&&!empty($comment))
		{
			$sql="INSERT INTO user_comment(name,email,date,comment) VALUES('$name','$email','$sdate','$comment')";
			$addcomment=mysql_query($sql);
		}
	}	
	header("location:formComment.php");

?>