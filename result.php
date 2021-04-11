<!DOCTYPE html>
<html>
<head>
    <title>Results</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<?php include 'head.php'; ?>

	<style>
        .jumbotron-header {
			color: white;
            background-image: linear-gradient(
            rgba(0, 0, 0, 0.05),
            rgba(0, 0, 0, 0.05)
            ), url("Images/result_background.jpg");
            
            min-height: 450px;

			background-position: top;
        }
		.jumbotron-content {
			background-color: black;
			color: white;
			font-family: 'Crimson Text', serif;
			border: 3px solid black;
			padding: 0 25px 0 20px;
            font-size: 70px;
		}
		.jumbotron-content:hover {
			background-color: white;
            color: black;
            transition: 0.5s;
		}
        .card-style1 {
            background-color: #B7D6A2; /*champagne color*/
        }
        .card-style2 {
            background-color: #628369; /*dark green color*/
			color: white;
        }
        .card-style3 {
            background-color: #c2e5fa;
        }
        .card-style4 {
            background-color: #3B2D5B;
        }
		.card-columns {	
			column-count: 2;
		}
        
	</style> 

</head>  
<body>
	<script>
        AOS.init();
	  </script>
	<?php $filename = 'result.php'?>
	<?php include 'header.php';?>

    <div class = "jumbotron text-center jumbotron-header"> 
        <br><br><br><br>
        
    	<span class = "jumbotron-content">RESULTS</span>
		<br><br>
		<a href="index.php" class="btn btn-lg btn-outline-light">Home</a>
       
	</div>
	
	<div class = "container " data-aos="fade-in" data-aos-duration="1500" >
	
	<div class = "card-deck">

		<div class = "card container card-style1">
			
			<div class=  "">
				<div class = "card-body"> 
				<div class = "card-title">Your Results</div>
				</div>
			</div>
		</div>
	</div>
	
	</div>
	<br>
	<?php include 'footer.php'; ?>

</body>
</html>