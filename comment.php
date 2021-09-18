<?php 
   require 'action.php';
    
   ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  
 

<title>Comment form</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


 
</head>
<body class="bg-dark">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-5 bg-light rounded mt-2">
			<h4 class="text-center p-2">Write your comment!</h4>
			<form action="comment.php" method="POST" class="p-2">
				<input type="hidden" name="id" value="<?= $u_id;?>">
				<div class="form-group">
					<input type="text" name="name" class="form-control rounded-0" placeholder="Write your name" required value="<?= $u_name; ?>">

				</div>
				<div class="form-group">
					<textarea name="comment" class="form-control rounded-0" placeholder="write your comment here"required><?= $u_comment;?></textarea>
				</div>
				<div class="form-group">
					<?php if($update==true){?>
						<input type="submit" name="update" class="btn btn-success rounded-0" value="Update Comment">
					<?php } else{?>

					<input type="submit" name="submit" class="btn btn-primary rounded-0" value="Post Comment">
				<?php } ?>

					<h6 class="float-right text-success p-2"></h6>
				</div>
			</form>
			</div>
		</div>
	
	<div class="row justify-content-center">
		<div class="col-lg-5 rounded bg-light p-3">
			<?php
			$sql="SELECT * FROM comment_table ORDER BY id DESC";
			$result = $conn->query($sql);
			// echo '<pre>';
			// print_r($result->fetch_assoc());
			// die;
			while ($row = $result->fetch_assoc()) {
			?>

			<div class="card mb-2 border-secondary">
				<div class="card-header bg-secondary py-1 text-light">
					<span>Posted By : <?= $row['name'];?></span>
					<span class="float-right font-italic">On :<?= $row['cur_date']?></span>
				</div>
				<div class="card-body py-2">
					<p class="card-text" ><?php echo $row['comment']; ?></p>
				</div>
				<div class="card-footer py-2">
					<div class="float-right">
						<a href="comment.php?del=<?= $row['id']?>" class="text-danger mr-2"onclick="return confirm('Do you want to delete this comment');" title="Delete"><i class="fa fa-trash"></i></a>

						<a href="comment.php?edit=<?= $row['id'] ?>" class="text-success" title="Edit"><i class="fa fa-edit"></i></a>
					</div>
				</div>
			</div>

           <?php } ?> 
 
			
		</div>
	</div>
	</div>

</body>
</html>