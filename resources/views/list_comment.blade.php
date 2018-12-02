<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List comment</title>
	<link rel="stylesheet" href="public/bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
<body>
<div class="all-comment">
	<div class="row">

		<?php 
			foreach ($data as $key ) {
			

		?>
		<div class="col-md-6">
			<div class="comment" style="padding: 10px 0; margin: 5px 0;">
				<div class="name-user" style="font-weight: bold; font-size: 18px; margin-bottom: 8px">
					<?php echo $key->NameUser ?>
				</div>

				<div class="date">
					<?php echo $key->ReviewDate ?>
				</div>

				<div class="review">
					<?php  echo $key->ContentReview ?>
				</div>

			</div>
		</div>

		<?php
	}

		?>

	

		
	</div>

</div>
</body>
</html>