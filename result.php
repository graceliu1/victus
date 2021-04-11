<!DOCTYPE html>
<html>
<head>
    <title>The Food App Result</title>
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
					<!-----------------------START OF PHP------------------------->
				<?php
						$information_entered = true;
						
						$grade = $_REQUEST['grade'];
						//THE SECTION BELOW PREVENTS INFORMATION FROM APPEARING------------
						if ($grade == "") {
							//echo '<div class = "card-footer">';
							echo '<div class="alert alert-danger" role="alert">';
							echo 'You have not completed and submitted <a href="index.php" class="alert-link">the form on the home page</a> yet.';
							echo ' You must fill it out and submit before a result will appear.</div>';
							//echo '<h3><strong>You have not completed and submitted the form yet. </strong></h3>';
							echo '<a href="index.php" class="btn btn-danger" >Return</a>';
							
							echo '</div> </div> <br>';
							echo '</div></div><br></div>';
						} 
						else {
								
						echo "<h4>Grade:</h4>";
						echo "You are currently in grade ", $grade, "<br>";
						

						$current_courses = array(
							"Course 3" => $_REQUEST['Course3'] != "" ? $grade : 1000,
							"Algebra 1A" => $_REQUEST['Algebra1A'] != ""?$grade : 1000,
							"Algebra 1" => $_REQUEST['Algebra1'] != "" ? $grade : 1000,
							"Advanced Algebra" => $_REQUEST['AdvancedAlgebra'] != ""? $grade : 1000,
							"Geometry" => $_REQUEST['Geometry'] != ""? $grade : 1000,
							"Advanced Geometry" => $_REQUEST['AdvancedGeometry'] != ""? $grade : 1000,
							"Algebra 2" => $_REQUEST['Algebra2'] != ""? $grade : 1000,
							"Advanced Algebra 2" => $_REQUEST['AdvancedAlgebra2'] != ""? $grade : 1000,
							"Statistics" => $_REQUEST['Statistics'] != ""? $grade : 1000,
							"Trigonometry" => $_REQUEST['Trigonometry'] != ""? $grade : 1000,
							"PreCalculus" => $_REQUEST['PreCalculus'] != ""? $grade : 1000, 
							"AP Statistics" => $_REQUEST['APstatistics'] != ""? $grade : 1000,
							"Calculus" => $_REQUEST['Calculus'] != ""? $grade : 1000,
							"AP Calculus AB" => $_REQUEST['APCalculusAB'] != ""? $grade : 1000,
							"AP Calculus BC" => $_REQUEST['APCalculusBC'] != ""? $grade : 1000,
							"Personal Finance" => $_REQUEST['PersonalFinance'] != ""?$grade : 1000,
						);

						
						echo "<br>";
						echo "<h4>Courses taken:</h4>";
						foreach($current_courses as $x => $x_value) {
							if($x_value != 1000)  {
								echo  $x, "<br>";
							}
						} 
						echo "<br>";
						$plan_courses = array(
							"Course 3" => $_REQUEST['plan_Course3'],
							"Algebra 1A" => $_REQUEST['plan_Algebra1A'],
							"Algebra 1" => $_REQUEST['plan_Algebra1'],
							"Advanced Algebra" => $_REQUEST['plan_AdvancedAlgebra'],
							"Geometry" => $_REQUEST['plan_Geometry'],
							"Advanced Geometry" => $_REQUEST['plan_AdvancedGeometry'],
							"Algebra 2" => $_REQUEST['plan_Algebra2'],
							"Advanced Algebra 2" => $_REQUEST['plan_AdvancedAlgebra2'],
							"Statistics" => $_REQUEST['plan_Statistics'],
							"Trigonometry" => $_REQUEST['plan_Trigonometry'],
							"PreCalculus" => $_REQUEST['plan_PreCalculus'], 
							"AP Statistics" => $_REQUEST['plan_APstatistics'],
							"Calculus" => $_REQUEST['plan_Calculus'],
							"AP Calculus AB" => $_REQUEST['plan_APCalculusAB'],
							"AP Calculus BC" => $_REQUEST['plan_APCalculusBC'],
							"Personal Finance" => $_REQUEST['plan_PersonalFinance'],
						);
						//echo print_r( $plan_courses , TRUE), "<br>";
						echo "<h4>Planned courses:</h4>";
						$count  = 0;
						foreach($plan_courses as $x => $x_value) {
						if($x_value != "")  {
							echo  $x;
							echo "<br>";
							$count = $count + 1;
						}
						}
						if ($count == 0) {
							echo "You did not select any planned courses.";
						}
						echo "<br>";
						echo "<br>";
						echo "</div>";
					echo "</div>";
					echo '<div class = "card-footer">';
						echo '<div class = "container">';
							echo '<div class="alert alert-info" role="alert">
							Note that the above information may vary based on additional restrictions. There may 
							also be a <strong>minimum grade requirement</strong> or <strong>waiver form requirement</strong> 
							for certain courses that is not listed on this application.<br><br>Furthermore, there may be a 
							<strong>dual enrollment</strong> option available for certain courses. Check the FAQ section
							for more information.</div>';
							echo '<a href="index.php" class="btn btn-secondary" >More Information</a>';
						echo '</div>';
					echo '</div>';
					echo '</div>';
		
					//THE END OF CURRENT INFORMATION CARD//////////////////////////////

					function check_single_course($current_courses, $course, $tgrade){
						if ($course == "Course 3") {
							return false;
						}
						if($course == "Algebra 1A") {
							if ($current_courses["Algebra 1"] <= $tgrade or $current_courses["Advanced Algebra"] <= $tgrade  ) return false;
							if ($current_courses["Course 3"] <= $tgrade) return true;
							return false;
						}
						if($course == "Algebra 1") {
							if($current_courses["Advanced Algebra"] <= $tgrade) return false;
							if ($current_courses["Course 3"] <= $tgrade or $current_courses["Algebra 1A"] <= $tgrade) return true;
							return false;
						}
						if ($course == "Advanced Algebra") {
							if($current_courses["Algebra 1"] <= $tgrade) return false;
							if ($current_courses["Course 3"] <= $tgrade or $current_courses["Algebra 1A"] <= $tgrade) return true;
							return false;
						}
						if($course == "Geometry"){
							if($current_courses["Advanced Geometry"] <= $tgrade) return false;
							if ($current_courses["Algebra 1"] <= $tgrade  or $current_courses["Advanced Algebra"] <= $tgrade) return true;
							return false;
						}
						
						if($course == "Advanced Geometry"){
							if($current_courses["Geometry"] <= $tgrade) return false;
							if($current_courses["Algebra 1"] <= $tgrade  or $current_courses["Advanced Algebra"] <= $tgrade) return true;
							return false;
						}	
						
						if($course == "Advanced Algebra 2"){
							if ($current_courses["Algebra 2"] <= $tgrade) return false;
							if( $current_courses["Geometry"] <= $tgrade  or $current_courses["Advanced Geometry"] <= $tgrade) return true;
							return false;
						}	

						if($course == "Algebra 2"){
							if ($current_courses["Advanced Algebra 2"] <= $tgrade) return false;
							//echo $current_courses["Geometry"], "<br>";
							//echo $tgrade;

							if($current_courses["Geometry"] <= $tgrade) {return true;}
							if ($current_courses["Advanced Geometry"] <= $tgrade ) {return true;}
							return false;
						}	 
						if ($course == "Personal Finance") {
							if (($current_courses["Advanced Algebra 2"] <= $tgrade or $current_courses["Algebra 2"] <= $tgrade) and ($tgrade >= 10)) return true;
							return false;
						}
						
						if($course == "Statistics"){
							if ($current_courses["AP Statistics"] <= $tgrade) return false;
							if($current_courses["PreCalculus"] <= $tgrade or $current_courses["Algebra 2"] <= $tgrade or $current_courses["Advanced Algebra 2"] <= $tgrade) return true;
							return false;		
						}
						
						if($course == "Trigonometry"){
							if($current_courses["PreCalculus"] <= $tgrade or $current_courses["Algebra 2"] <= $tgrade or $current_courses["Advanced Algebra 2"] <= $tgrade) return true;
							return false;		
						}	
						
						if($course == "PreCalculus"){
							if($current_courses["Advanced Algebra 2"] <= $tgrade or $current_courses["Algebra 2"] <= $tgrade) return true;
							return false;		
						}
						
						if($course == "AP Statistics"){
							if($current_courses["PreCalculus"] <= $tgrade or $current_courses["Statistics"] <= $tgrade) return true;
							return false;		
						}

						if($course == "Calculus"){
							if ($current_courses["AP Calculus AB"] <= $tgrade or $current_courses["AP Calculus BC"] <= $tgrade) return false;
							if($current_courses["PreCalculus"] <= $tgrade  or $current_courses["Trigonometry"] <= $tgrade) return true;
							return false;		
						}	
						
						if($course == "AP Calculus AB"){
							if ($current_courses["AP Calculus BC"] <= $tgrade) return false;
							if($current_courses["PreCalculus"] <= $tgrade) return true;
							return false;		
						}	

						if($course == "AP Calculus BC"){
							if($current_courses["AP Calculus AB"] <= $tgrade) return true;
							return false;		
						}		
						
						return false;
					}
					
					//BEGINNING OF SECOND INFORMATION CARD ////////////////////////////////////////////////////////////////////////
					echo '<div class = "card card-style2">';
						echo '<div class = "card-header"> <br>';
							echo '<h2 class = "container" >POSSIBLE PATHWAY:</h2>';
						echo '</div>';
						echo '<div class = "container">';
							echo '<div class = "card-body">';
								$valid_planned = 0;
								//FIRST SECTION: CHECKS FOR WHAT COURSES YOU ARE ALLOWED TO TAKE
								if($count != 0){
									echo "<h4>Validation: </h4>";
									//echo print_r( $current_courses , TRUE), "<br>";
									echo 'In grade ', $grade+1, ":<br>";
									echo "<ul>";
									foreach($plan_courses as $x => $x_value) {
										if($x_value != "")  {
											//echo $x_value;
											if(check_single_course($current_courses, $x, $grade+1) == true) {
												echo "<li>";
												echo 'You are allowed to take ', $x;
												echo "</li>";
												$valid_planned ++;
											}
											else {
												echo "<li>You are <strong>not</strong> allowed to take ", $x, ". You have either not met the prerequisites or have already taken this course.</li><br>";
											}
												
										}
									}
									echo "</ul>";
								}
								//SECOND SECTION: PRINTS OUT YOUR COURSE PROGRESSION IF YOU DO NOT SELECT PLANNED COURSES
								else{
									
									echo "<h4>Your Course Progression: </h4>";	
									
									$current_course_values = array_search(1000,$current_courses);
										
									$grade = $grade + 1;
									while($current_course_values != "" && $current_course_values == true && $grade <= 12){
										echo "In grade ", $grade, " you may take the following courses:";
										
										echo "<ul>";
										foreach($current_courses as $x => $x_value) {
											//echo $x, " ", $x_value, "<br>";
											//echo $x_value, "<br>";
											if($x_value == 1000)  {
												if(check_single_course($current_courses, $x, $grade-1) == true){
													echo "<li><strong>", $x, "</strong></li>";
													//echo "-------------<br>";
													
													$current_courses[$x] = $grade;
												}
												//THE SECTION BELOW CAN BE REMOVED, SO DUPLICATES WILL NO LONGER DISPLAY
											} /*else if ($current_courses[$x] != 1 and $current_courses[$x]<= $grade-1 and check_single_course($current_courses, $x, $grade-1) == true) {
												echo "<li><strong>", $x, "</strong></li>";
											}*/
										}	
										echo "</ul>";	
										//print_r($current_courses);
										$current_course_values = array_search(1000,$current_courses);
										$grade = $grade+1;
										
									} 
								}
								//THIRD SECTION: PRINTS OUT YOUR COURSE PROGRESSION IF YOU SELECTED PLANNED COURSES
								if ($valid_planned > 0 && $count != 0) {
									echo "<br><h4>Your Course Progression: </h4>";	

									echo 'In grade ', $grade+1, " you plan to take the following courses: ";
									echo "<ul>";
									foreach($plan_courses as $x => $x_value) {
										if($x_value != "" && check_single_course($current_courses, $x, $grade) == true)  {
											echo "<li>",$x, '</li>';	
											$current_courses[$x] = $grade+1; 
										}
									}
									echo "</ul>";
									
									$current_course_values = array_search(1000,$current_courses);
										
									$grade = $grade + 2;
									while($current_course_values != "" && $current_course_values == true && $grade <= 12){
										echo 'In grade ', $grade, " you may take the following courses: <br>";	
										echo "<ul>";
										foreach($current_courses as $x => $x_value) {
											if($x_value == 1000)  {
												if(check_single_course($current_courses, $x, $grade-1) == true){
													echo "<li>", $x, "</li>";
													$current_courses[$x] = $grade;
												}
											}
										}	
										echo "</ul>";	
										//print_r($current_courses);
										$current_course_values = array_search(1000,$current_courses);
										$grade = $grade+1;
									}
								}
							echo '</div>';
						echo '</div>';
						echo '<div class = "card-footer">
							<div class = "container">
								<div class="alert alert-warning" role="alert">
									<strong>Notice:</strong> You may also take any courses that appear as options in previous years.
								</div>
								<a href="index.php" class="btn btn-light" >Go Back</a>
							</div>';
						echo '</div>';

					echo '</div>';
		
					echo '</div><br>'; //THIS DIV MARKS THE END OF THE CARD ROW;
					
					echo '</div>'; //THIS DIV MAKRS END OF THE CONTAINER
				}?> 
	<?php include 'footer.php';?>
	<!-----------------------END OF PHP------------------------->

</body>
</html>