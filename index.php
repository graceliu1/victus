<!DOCTYPE html>
<html>

<head>
    <title>The Food App</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    
    <?php include 'head.php'; ?>
    
    <style>
        /**JUMBOTRON AND GENERAL STYLING**/
        .jumbotron-header {
            
            background-image: linear-gradient(
            rgba(0, 0, 0, 0.1),
            rgba(0, 0, 0, 0.1)
            ), url("Images/main_background.png");
        
            min-height: 600px;

            background-position: left;
            display: flex;
            justify-content: center;
            align-items: center;
            
        }
        .jumbotron-content {
            background-color: black;
            color: white;
            border: 3px solid black;
            max-width: 50%;
            padding: 0 25px 0 20px;
            font-size: 70px;
            font-family: 'Crimson Text', serif;
        }
        .overlay-content {
            background-color: #C88092;
            color: black;
            overflow: hidden;
            
            max-width: 50%;
            padding: 0 25px 0 20px;
            
        }
        .jumbotron-content:hover {
            background-color: white;
            color: black;
            transition: 0.5s;
        }
        /**For FAQ Section */
        button {
            all: unset;
        }
        /*****************/

        /**CARD STYLES CSS**/
            .card-style1 { background-color: #D9A404; } /*YELLOW*/
            .card-style2 { background-color: #BF1515; color: white; } /*DARK RED*/
            .card-style3 { background-color: #A9BF04; } /*LIGHT GREEN */
            .card-style4 { background-color: #E39F55; } /*ORANGE*/
        

        
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
    <?php $filename = 'index.php'?>
    <?php include 'header.php'; ?>
    <div class = "jumbotron text-center jumbotron-header" > 
        <div class = "jumbotron-content">
       <!--<h1 style = "font-family: 'Crimson Text', serif;">Dublin High School</h1>-->
       THE FOOD APP
        </div>
        <br>
    
       
    </div>
    <br>
    <div class = "container">

    <!--INTRODUCTION-->
    <div class = "card-deck">
        <div data-aos="fade-right" data-aos-duration="1000" class = "card container card-style1" style = "color: white"> 

            <div class = "">
                <div class = "card-body">
                    <div class = "card-title">
                        Who We Are
                    </div>
                    <p class = "large-paragraph"> We are what we eat. </p>
                        <!--Enter your grade and the math courses you have taken so far. The planned courses section is 
                        optional. After you click submit, a possible course pathway will be generated for you based on your input. 
                        
                        You must click "Reset" if you want to change any options.--> 
                    <p class = "large-paragraph">But do you know what you're actually eating?
                    </p>
                    <p class = "large-paragraph"> According to a report on the environmental impacts of food production, 
                        26% of global greenhouse gas emissions are caused by food. 
                    
                    </p>
                    <p class = "large-paragraph">At <em>The Food App</em>, we're committed to helping our users 
                        remain aware of what they're eating and the <b>environmental impact of every bite</b>. Our 
                        application allows users to instantly check the environmental cost of food items.
                        To read more about our mission and how we're increasing sustainability, scroll down below.
                    </p>
                    <br>
                    <a href="math_selection_action_page.php" class="btn btn-lg btn-outline-light">Learn More</a>
                </div>
            </div>
        </div>
        <div data-aos="fade-left" data-aos-duration="1000" class = "col-md-6" style = "color: white">
            <img src ="Images/main_1.png" class = "img-thumbnail">
        </div>
    </div>
    <br>

    <!--FORM SECTION BELOW-->
    <div data-aos="fade-right" data-aos-duration="1000" class = "card container card-style2">
        
        <div class = "card-body">
            <div class = "card-title">
                FILL OUT THE FOLLOWING FORM
            </div>
            <div class = "">
                <form name="MathCourse" id="form1" action="/math_selection_action_page.php">
                <br>
                <!--GRADE-->
                <div>
                    <h5>Please select your current grade:</h5>
                    <hr>
                    <div class = "form-check" > 
                        <input type="radio" id="grade8" name="grade" value=8 required>
                        <label  for="grade9">Grade 8</label>
                        <input type="radio" id="grade9" name="grade" value=9 required>
                        <label for="grade9">Grade 9</label>
                        <input type="radio" id="grade10" name="grade" value=10 required>
                        <label for="grade9">Grade 10</label>
                        <input type="radio" id="grade11" name="grade" value=11 required>
                        <label for="grade11">Grade 11</label>
                        <input type="radio" id="grade12" name="grade" value=12 required>
                        <label for="grade12">Grade 12</label><br>
                    </div>
                </div>
                <br>

                <!--PREVIOUS COURSES-->
                <div> 
                <h5>Please select all of the math courses you have taken, including your current course:</h5>
                <hr>
                <div class = "form-check" > 
                    <div class = "form-row">
                        <div class = "form-group col-md-4"> 
                            <input type="checkbox" id="Course3" name="Course3" value="Course3" >
                            <label for="Course3"> Course 3</label><br>

                            <input type="checkbox" id="Algebra1A" name="Algebra1A" value="Algebra1A" >
                            <label for="Algebra1A"> Algebra 1A </label><br>

                            <input type="checkbox" id="Algebra1" name="Algebra1" value="Algebra1" >
                            <label for="Algebra1"> Algebra 1 </label><br>
                            
                            <input type="checkbox" id="AdvancedAlgebra" name="AdvancedAlgebra" value="AdvancedAlgebra" >
                            <label for="AdvancedAlgebra"> Advanced Algebra </label><br>
                            
                            <input type="checkbox" id="Geometry" name="Geometry" value="Geometry" >
                            <label for="Geometry"> Geometry</label><br>

                            <input type="checkbox" id="AdvancedGeometry" name="AdvancedGeometry" value="AdvancedGeometry" >
                            <label for="AdvancedGeometry"> Advanced Geometry </label><br>
                            
                            <input type="checkbox" id="Algebra2" name="Algebra2" value="Algebra2" >
                            <label for="Algebra2"> Algebra 2 </label><br>
                            
                            <input type="checkbox" id="AdvancedAlgebra2" name="AdvancedAlgebra2" value="AdvancedAlgebra2" >
                            <label for="AdvancedAlgebra2"> Advanced Algebra 2 </label><br>
                            <!--
                            <input type="checkbox" id="AdvAlgebra2" name="AdvAlgebra2" value="AdvAlgebra2" >
                            <label for="AdvAlgebra2"> Adv. Algebra 2 </label><br>-->
                        </div> 
                        <div class = "form-group col-md-4"> 
                            <input type="checkbox" id="Statistics" name="Statistics" value="Statistics" >
                            <label for="Statistics"> Statistics </label><br>
                            
                            <input type="checkbox" id="Trigonometry" name="Trigonometry" value="Trigonometry" >
                            <label for="Trigonometry"> Trigonometry </label><br>
                            
                            <input type="checkbox" id="PreCalculus" name="PreCalculus" value="PreCalculus" >
                            <label for="PreCalculus"> PreCalculus </label><br>
                            
                            <input type="checkbox" id="PersonalFinance" name="PersonalFinance" value="PersonalFinance" >
                            <label for="PersonalFinance"> Personal Finance </label><br>
                            
                            <input type="checkbox" id="Calculus" name="Calculus" value="Calculus" >
                            <label for="Calculus"> Calculus </label><br>

                            <input type="checkbox" id="APstatistics" name="APstatistics" value="APstatistics">
                            <label for="APstatistics"> AP Statistics </label><br>
                            
                            <input type="checkbox" id="APCalculusAB" name="APCalculusAB" value="APCalculusAB" >
                            <label for="APCalculusAB"> AP Calculus AB </label><br>
                            
                            <input type="checkbox" id="APCalculusBC" name="APCalculusBC" value="APCalculusBC" >
                            <label for="APCalculusBC"> AP Calculus BC </label><br>
                        </div>
                    </div>
                </div>
                </div>
                <br>
                
                <!--ALERT AND BUTTONS-->
                  
                <div class="alert alert-warning col-md-6 " role="alert">
                    You must click <strong>"Submit"</strong> or <strong>"Reset"</strong> 
                    each time you fill out this form. 
                </div>

                <input class="btn btn-success" type="submit" value="Submit" >
                <input class="btn btn-danger"  type="reset" >
                
                </form>
            </div>
        </div>
        <br>
        <br>
    </div>
    <br>

    
    <!--IMAGE CARD BELOW-->
    <div data-aos="fade-left" data-aos-duration="1000" class = "card container card-style4 image-card" style = "color: white"> 
        
        <div class = "card-body card-img-overlay overlay-content" > 
        <br>

        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque interdum est eget commodo tempus. Nam porta purus in quam egestas, 
        non pharetra lacus ullamcorper. Ut facilisis maximus nulla sed hendrerit. Vestibulum erat tortor,
         scelerisque nec tortor sit amet, porta interdum leo. Aliquam erat volutpat. Class aptent taciti 
         sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean imperdiet vulputate 
         venenatis. Mauris a turpis non magna vulputate faucibus vitae in dui. Duis in metus a sem porttitor
          iaculis in at massa. Fusce quis quam porttitor, cursus enim vitae, euismod nibh. Pellentesque 
          habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam pharetra 
          justo a elementum rhoncus. Nunc in ex ut erat bibendum congue. Nulla quis blandit metus.
        
            <br><br>
        Nunc gravida purus mollis, varius arcu nec, vestibulum velit. Vivamus justo ipsum, laoreet a laoreet
        ut, scelerisque vel dui. Orci varius natoque penatibus et magnis dis parturient montes, nascetur r
        idiculus mus. Nulla vitae ligula vitae nibh facilisis accumsan. Duis vehicula justo in ante tincidu
        nt, vitae mollis eros sagittis. Mauris imperdiet bibendum mi a maximus. Suspendisse id elit a velit
        sodales ornare a sed eros. Suspendisse sodales aliquet hendrerit.
        </div> 
    </div>
    <br>

    <!--FAQ SECTION IS BELOW-->
    <div  class = "card-deck" >
        <div data-aos="fade-right" data-aos-duration="1000"  class = "col-md-5" style = "color: white">
            <img src ="Images/main_2.jpg" class = "img-thumbnail">
        </div>
        <div data-aos="fade-left" data-aos-duration="1000" class = "card container col-md-7 card-style3"> 
            
            <div class = "card-body">
                <div class = "card-title">
                    common QUESTIONS
                </div>
                <div class="accordion" id="accordion-tab-1">
                    <div class="card">
                        <div class="card-header" id="accordion-tab-1-heading-1">
                            <button class="btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">
                                Q: What are the criteria for the food based on? </button>
                        </div>
                        <div class="collapse" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                            <div class="card-body">
                                <p>We've used multiple reports from organizations like the Barilla Center for Food and Education.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="accordion-tab-1-heading-2">
                            <button class="btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">
                            Q: <br>
        In nec sollicitudin magna, ac convallis tellus. </button>
                        </div>
                        <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                            <div class="card-body">
                            <p>Quisque blandit nisi metus, suscipit sollicitudin odio
        elementum eu. Fusce egestas, odio vitae ullamcorper sodales, velit neque porta velit, vel mattis leo
        mauris posuere tortor. Praesent eleifend libero quis massa vestibulum consequat. Vestibulum et mattis
        turpis, sit amet mattis nisl. Duis bibendum semper enim non tempor. Donec vel cursus magna, sed 
        egestas risus. Vestibulum auctor massa ut quam varius, sed luctus justo ultricies. Duis eu elit 
        turpis. Aliquam aliquet vitae tortor ut tempus. Pellentesque habitant morbi tristique senectus et
            netus et malesuada fames ac turpis egestas. Aliquam blandit massa quis mi semper pulvinar. Praesent 
            tortor massa, dignissim eu mauris scelerisque, pharetra scelerisque velit. Mauris rutrum lacus 
            ulvinar hendrerit egestas. Aenean non nisl et nunc pulvinar elementum. Nam eu volutpat metus.is impossible to take this course based on your current course progression.
                                </p>
                                <p><strong>Example: </strong>If you have taken Algebra 2, there is no need to take Advanced Algebra 2.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="accordion-tab-1-heading-3">
                            
                                <button class="btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">
                                    Q: I've already taken/will have taken all of the avaliable math courses at Dublin High School by the time I graduate. What are my other options?</button>
                            
                        </div>
                        <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                            <div class="card-body">
                                <p>There may be alternative math courses avaliable online at local community colleges. Please contact your counselor for more information.</p>
                                <p><strong>Example: </strong>If you finish AP Calculus BC before 12th grade, you must take an advanced course such as Multivariable Calculus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="accordion-tab-1-heading-4">
                            
                                <button class="btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">
                                    Q: I am planning to take DPIE or another summer option for a math course. How will this affect my pathway?</button>
                           
                        </div>
                        <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                            <div class="card-body">
                                <p>Summer courses are currently not supported. However, you can input your planned course for the next school year based on what you have taken
                                    so far in DPIE. 
                                </p>
                                <p><strong>Example: </strong>If you are taking Algebra I and plan to take Geometry during the summer, select both of those courses as "Taken"</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="accordion-tab-1-heading-5">
                            
                                <button class="btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-5" aria-expanded="false" aria-controls="accordion-tab-1-content-5">
                                    Q: I'm interested in dual enrollment. Where can I find more information'?</button>
                           
                        </div>
                        <div class="collapse" id="accordion-tab-1-content-5" aria-labelledby="accordion-tab-1-heading-5" data-parent="#accordion-tab-1">
                            <div class="card-body">
                                <p>To dual enroll in two math classes at once, you must fill out an approval form. Please visit the Math Department tab for 
                                    more information. 
                                </p>
                                <p><strong>Example: </strong>If you are taking AP Statistics and plan to dual enroll in AP Calculus AB, please fill out the form.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    
    <br>

    <!--CONTACT FORM BELOW
    <div data-aos="fade-in" data-aos-duration="1000" class = "card card-style4" style = "color: white"> 
        <div class = "card-header">
            <br>
            <h2 class = "container">CONTACT US:</h2>
        </div>
        <div class = "card-body">
            <form class = "container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="first">First Name</label>
                        <input type="text" class="form-control" placeholder="" id="first">
                        </div>
                    </div>
                
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="last">Last Name</label>
                        <input type="text" class="form-control" placeholder="" id="last">
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-md-6">
                
                        <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                </div>
                <div class = "row"> 
                    <div class="form-group col-md-6">
                        <label for="form_message">Message </label>
                        <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="4" data-error="Please, leave us a message."></textarea>
                    </div>
                </div>
                <br>
                <button type="submit" class="button" id = "button-2">Submit</button>
            </form>
            <br>
        </div>
    </div>
    -->
    <br>
    

    <br>
    </div> <!--END OF THE CONTAINER-->
    
    <!----------- Footer ------------>
    <?php include 'footer.php'; ?>
    

    <!-- OLD FOOTER
        <footer class= "text-center">
            <div class = "jumbotron jumbotron-footer"> 
            <h5>Copyright 2020 @ Grace Liu </h5>
            </div>
        </footer>
    -->
</body>

</html>