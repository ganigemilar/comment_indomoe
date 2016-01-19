<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<form action="addComment.php" method="POST" name="form-comment">
				<div class="form-group">
					<div class="form-group">
						<p><h3>Leave comment</h3></p>
						<p><small>Your email address will not be published</small></p>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Your name">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Your email">
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="6" id="comment" name="inputComment" placeholder="Comment"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-default" value="Submit" id="submit" name="submit">
					</div>
				</div>
			</form>

			<?php
				include("connection.php");

				$sql = "SELECT * FROM user_comment ORDER BY id_comment DESC";
				$result = mysql_query($sql);
				$i=mysql_num_rows($result);
			?>
				<p><h3><?php echo $i;?> Comment(s)</h3></p>

			<?php
				if ($i > 0) {
    			// output data of each row
    			while($row = mysql_fetch_assoc($result)) {
			?>
    		<!-- Parent comment-->
			<div class="panel panel-default">
  				<!-- Default panel contents -->
  				<div class="panel-heading"><b><?php echo $row['name'];?></b>&nbsp | &nbsp<small><?php echo $row['date'] ?></small></div>
  				<div class="panel-body">
    			<p><?php echo $row['comment'];?></p>	
    			<div class="row">
    				<div class="col-md-11"></div>
    				<div class="col-md-1">
    					<button data-id="<?php echo $row['id_comment']?>" class="btn btn-default reply-btn" name="reply" id="reply" data-toggle="modal" data-target="#balasModal" onclick="getId()">Reply</button>
    				</div>
    			</div> 
    			</div>
			</div>
			
			<!--<script type="text/javascript">
			

			function getId()
			{
				var id = document.getElementById("reply").value;
				document.getElementById("replyId").value = id;
				document.getElementById("submitReply").innerHTML = id;
			}
			</script>-->

			<?php
			$id_com = $row['id_comment'];
			$sql1 = "SELECT * FROM user_reply WHERE user_reply.id_comment = '$id_com' ORDER BY id_reply ASC";
			$result1 = mysql_query($sql1);
			$i1 = mysql_num_rows($result1);
				
			if($i1>0)
			{
				while ($row1 = mysql_fetch_assoc($result1)) 
				{?>
					<!--Child comment-->
			<div class="row">
    			<div class="col-md-11 col-md-offset-1">
    				<div class="panel panel-default">
    					<div class="panel-heading"><b><?php echo $row1['name'];?></b>&nbsp | &nbsp<small><?php echo $row1['date'];?></small></div>
   						<div class="panel-body">
   							<p><?php echo $row1['comment'];?></p>
   						</div>
   					</div>
    			</div>
    		</div>
    		<?php
				}
			}?>
			
			<?php
    			}
			} else {
    			//echo $i;
			}
			?>			
			
			<!-- Parent comment-->
			<!--<div class="panel panel-default">
  				<div class="panel-heading"><b>Gani Gemilar</b> <small>13 Januari 2016</small></div>
  				<div class="panel-body">
    			<p>asdasdasdkgadjgasjdkgjd</p>
    			<div class="row">
    				<div class="col-md-11"></div>
    				<div class="col-md-1">
    					<button class="btn btn-default" name="reply" id="reply" data-toggle="modal" data-target="#balasModal">Reply</button>
    				</div>
    			</div>
    			</div>
			</div>-->
			<!--Child comment-->
			<!--<div class="row">
    			<div class="col-md-11 col-md-offset-1">
    				<div class="panel panel-default">
    					<div class="panel-heading"><b>Anonymous</b> <small>14 Januari 2016</small></div>
   						<div class="panel-body">
   							<p>Fak</p>
   						</div>
   					</div>
    			</div>
    		</div>-->

    		<!--Form reply-->
    		<div id="balasModal" class="modal fade" tabindex="-1" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<form action="replyComment.php" method="POST" name="form-comment">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Reply comment</h4>
						</div>
						<div class="modal-body">
								<div class="form-group">
									<div class="form-group">
										<p><small>Your email address will not be published</small></p>
									</div>
								<div class="form-group">
									<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Your name">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Your email">
								</div>
								<div class="form-group">
									<textarea class="form-control" rows="6" id="comment" name="inputComment" placeholder="Comment"></textarea>
								</div>
								<div class="row">
									<div class="col-md-10"></div>
									<div class="col-md-2">
										
									</div>
								</div>
								</div>
							
						</div>
						<div class="modal-footer">
							<input type="hidden" id="replyId" name="replyId">
							<!--<button type="submit" name="submitReply" id="submitReply" class="btn btn-default">Submit</button>-->
							<button type="submit" name="submitReply" id="submitReply" class="btn btn-default" value="">Submit</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						</div>
						</form>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		
		</div>
	</body>
	<script type="text/javascript">
		$(document).ready(function(){
				$('body').delegate('.reply-btn','click',function(){
					var id = $(this).data('id');
					$('#replyId').val(id);
					alert($('#replyId').val());
					//$('#submitReply').html(id);
				});
			});
	</script>
</html>