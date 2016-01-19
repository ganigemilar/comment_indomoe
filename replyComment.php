<?php
	include("connection.php");
	if(isset($_POST['submitReply']))
	{
		//$today=getdate();
		//$sdate=$today['weekday'].", ".$today['mday']." ".$today['month']." ".$today['year']." - ".$today['hours'].":".$today['minutes'];
		
		$today = date("D, j F Y - g:i A"); 
		$sdate = $today;

		//$idCom=$_POST['submitReply'];

		$idCom=$_POST['replyId'];
		$name=$_POST['inputName'];
		$email=$_POST['inputEmail'];
		$comment=$_POST['inputComment'];
		
		if(!empty($name)&&!empty($email)&&!empty($comment))
		{
			$sql="INSERT INTO user_reply(id_comment,name,email,date,comment) VALUES('$idCom','$name','$email','$sdate','$comment')";
			$replyComment=mysql_query($sql);
		}

	}
	header("location:formComment.php");
?>