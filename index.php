<?php  include "logic.php";?>


<!doctype html>
<html lang="en">
  <head>
  	<title>Practice</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="style.css">

	</head>
	<body>
		<style>
			a:hover{
				color:#008000 !important;
			}


        </style>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Practice Problems</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-bordered table-dark table-hover">
						  <thead>
						    <tr>
						      <th>Count</th>
						      <th>Problem</th>
						      <th>Difficulty</th>
						      <th>Topic</th>
						    </tr>
						  </thead>
						  <tbody>
                           <?php
						   $count = 0;
                           foreach($data as $key => $value){
							   $count++;
						   ?>


						    <tr>
						      <th scope="row"><?php echo $count; ?></th>
						      <td><a style="color:white; " href="<?php  echo $value['link'] ; ?>"><?php  echo $value['topic'] ; ?></a></td>
						      <td><?php  echo $value['difficulty'] ; ?></td>
						     
						    </tr>
							
							<?php } ?>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
			
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

