<!DOCTYPE html>
<html>

<head>
    <title>DHS Math Course Selection Guide</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php include 'head.php'; ?>

    <style>
       
       .jumbotron-header {
			color: white;
            background-image: linear-gradient(
            rgba(0, 0, 0, 0.1),
            rgba(0, 0, 0, 0.1)
            ), url("Images/guide_background.jpg");
            
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
            text-transform: uppercase;
		}
		.jumbotron-content:hover {
			background-color: white;
            color: black;
            transition: 0.5s;
		}
        .card-style1 {
            background-color: #F2D0A7; /*CREAM*/
            color: black;
        }
        .card-style2 {
            background-color: #8C634A; /*DARK BROWN*/
            color: white;
        }
        .card-style3 {
            background-color: #F28705; /*EGG YOLK*/
        }
        .card-style4 {
            background-color: #5A7302; /*GREEN*/
        }
        button {
            all: unset;
        }
        
    </style> 
</head>  

<body>
    <script>
        AOS.init();
      </script>
    <!--THE BELOW IS OPTIONAL JAVASCRIPT CODE-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php $filename = 'guide.php'?>
    
    <?php include 'header.php'; ?>

    <div class = "jumbotron text-center jumbotron-header" > 
        <br><br><br><br>
    	<span class = "jumbotron-content">User Guide</span>
		<br><br>
		<a href="index.php" class="btn btn-lg btn-outline-light">Home</a>
    </div>

    <!--HOW TO USE-->
    <div class = "container">
        <div data-aos="fade-in" data-aos-duration="1500" class = "row" > 
            <div data-aos="fade-in" data-aos-duration="1500" class = "col-md-6" style = "color:lightpink">
                <img src ="Images/guide_1.jpg" class = "img-thumbnail">
            </div>
            <div class = "card card-style1 col-md-6" >
            
                
                <div class = "card-body">
                    <div class = "card-title">
                        Who We Are
                    </div>

                    <ol>
                        <li>Enter your grade in the first section of the form.</li>
                        <li>Select <strong>all</strong> of the math courses you have taken so far.</li>
                        <li>The planned courses section is optional. The application will verify if these courses are possible 
                            to take next school year based on your current qualifications.</li>
                        <li>Click "Submit" to see your pathway.</li>
                        <li>If you want to change your input, click "Reset". </li>
                        <li>Your results will <strong>not</strong> be saved. Please take a screenshot.</li>
                    </ol>
                    <div class = "text-center">
                        <br>
                    <a href="index.php" class="btn btn-light" >Start</a>
                    </div> 
                </div>
            </div>
            
        </div>
    
    <br>
    <div data-aos="fade-in" data-aos-duration="1500" class = "card container card-style2" > 
        
        <div class = "card-body">
            <div class = "card-title">
                Who We Are
            </div>
            
            <p>Selected Grade 10.<br>Courses taken already: Algebra I, Geometry, and Algebra II.<br>Planned courses: No planned courses.</p>
            
            <p> Results:<br>
            In grade 11 you may take the following courses: Statistics, Trigonometry, PreCalculus.<br>
            In grade 12 you may take the following courses: AP Statistics, Calculus, AP Calculus AB.
            </p>
            <p>Note that courses are not repeatedly printed. For example, if this student chose to take PreCalculus in grade 11, 
                they would still be able to take Statistics in grade 12. 
            </p>
        </div>
    </div>
    <br>
    </div>
    <br>
    <?php include 'footer.php'; ?>
    <!--
    <footer class= "jumbotron text-center">
        
        <div class="container">
            <div class = "fa-3x">
                <i class="fab fa-facebook-square"></i>
                <i class="fas fa-envelope-square"></i>
                <i class="fas fa-phone-square-alt"></i>
                <i class="fas fa-camera"></i>

        
            </div>
        </div>
        <br>
        <h6>Copyright 2020 @ Grace Liu </h6>
    </footer>
    -->
</body>

</html>