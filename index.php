<!DOCTYPE html>
<html>

<head>
    <title>Invictus</title>
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
            text-transform:uppercase;
            font-family: 'Crimson Text', serif;s
        }
        
        .jumbotron-content:hover {
            transition: 0.5s;
            background-color: white;
            color: black;
        }

        .overlay-content {
            background-color: #C88092;
            
            overflow: hidden;
            
            max-width: 50%;
            padding: 0 25px 0 20px;
            
        }
        /**For FAQ Section */
        button {
            all: unset;
        }
        /*****************/

        /**CARD STYLES CSS**/
            .card-style1 { background-color: #D9A404; } /*YELLOW*/
            .card-style2 { background-color: #BF1515; color: white; } /*DARK RED*/
            .card-style3 { background-color: #A9BF04; color: white;} /*LIGHT GREEN */
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
        <br><br><br><br>
    	<span class = "jumbotron-content">Invictus</span>
		<br><br>
    
       
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
                    <p class = "large-paragraph">At <em>Invictus</em>, we're committed to helping our users 
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
            <p class = "large-paragraph"> 
            Proin luctus, urna vitae pharetra iaculis, sem lectus pulvinar mauris, vel pharetra 
            ipsum ante consectetur libero. Aenean pellentesque sed enim at vulputate. Integer 
            vehicula aliquam mi, ac dictum lacus pretium in. Nam ut urna in risus ornare condimentum 
            at nec justo. Cras mattis est nisi, euismod consequat erat efficitur feugiat. Suspendisse
             potenti. Nunc sit amet mattis erat. Quisque et lacus nec nunc pellentesque ultrices 
             eu sit amet enim. Quisque et posuere ligula, et aliquet ligula.
            </p>
            
        </div>
        <br>
        <br>
    </div>
    <br>

    
    <!--IMAGE CARD BELOW-->
    <div data-aos="fade-left" data-aos-duration="1000" class = "card container card-style4 image-card" style = "color: white"> 
        
        <div class = "card-body card-img-overlay overlay-content" style = "padding-left: 30px;"> 
        <br>
        <div class = "card-title">
            Two main options
        </div>

        <p class = "large-paragraph">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque interdum est eget commodo tempus. Nam porta purus in quam egestas, 
        non pharetra lacus ullamcorper. Ut facilisis maximus nulla sed hendrerit. Vestibulum erat tortor,
         scelerisque nec tortor sit amet, porta interdum leo. Aliquam erat volutpat. Class aptent taciti 
         sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean imperdiet vulputate 
         venenatis. Mauris a turpis non magna vulputate faucibus vitae in dui. Duis in metus a sem porttitor
          iaculis in at massa. Fusce quis quam porttitor, cursus enim vitae, euismod nibh. Pellentesque 
          habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam pharetra 
          justo a elementum rhoncus. Nunc in ex ut erat bibendum congue. Nulla quis blandit metus.
        </p>
        <p class = "large-paragraph">
        Nunc gravida purus mollis, varius arcu nec, vestibulum velit. Vivamus justo ipsum, laoreet a laoreet
        </p>
        </div> 
    </div>
    <br>

    <!--FAQ SECTION IS BELOW-->
    <div  class = "card-deck" >
        <div data-aos="fade-right" data-aos-duration="1000"  class = "col-md-5" style = "color: white">
            <img src ="Images/main_2.jpg" class = "img-thumbnail">
        </div>
        <div data-aos="fade-left" data-aos-duration="1000" class = "card container col-md- card-style3"> 
            
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
                            Q: In nec sollicitudin magna, ac convallis tellus. </button>
                        </div>
                        <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                            <div class="card-body">
                            <p>Quisque blandit nisi metus, suscipit sollicitudin odio elementum eu. 
                                </p>
                                <p><strong>Example: </strong>If you have taken Algebra 2, there is no need to take Advanced Algebra 2.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="accordion-tab-1-heading-3">
                            
                                <button class="btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">
                                    Q: usce egestas, odio vitae ullamcorper sodales, velit neque porta velit, vel mattis leomauris posuere tortor. </button>
                            
                        </div>
                        <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                            <div class="card-body">
                                <p>Praesent eleifend libero quis massa vestibulum consequat. Vestibulum et mattis</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="accordion-tab-1-heading-4">
                            
                                <button class="btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">
                                    Q: turpis, sit amet mattis nisl. Duis bibendum semper enim non tempor. Donec vel cursus magna, sed egestas risus. Vestibulum auctor massa ut quam varius, sed luctus justo ultricies.</button>
                           
                        </div>
                        <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                            <div class="card-body">
                                <p> Duis eu elit turpis. Aliquam aliquet vitae tortor ut tempus. </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="accordion-tab-1-heading-5">
                            
                                <button class="btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-5" aria-expanded="false" aria-controls="accordion-tab-1-content-5">
                                    Q: Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam blandit massa quis mi semper pulvinar. </button>
                           
                        </div>
                        <div class="collapse" id="accordion-tab-1-content-5" aria-labelledby="accordion-tab-1-heading-5" data-parent="#accordion-tab-1">
                            <div class="card-body">
                                <p>Praesent tortor massa, dignissim eu mauris scelerisque, pharetra scelerisque velit. Mauris rutrum lacus </p>
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