<html lang="en">
<meta charset="utf-8">
   
	<head>
    <title>Yudi Alvin</title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="./CSS/style.css" rel="stylesheet" />
    <script src='./JS/jscode.js'></script>
    </head>
	<body data-spy="scroll" data-target="#navbarSupportedContent">	 
 
        <nav id="navbar-top" class="navbar  navbar-expand-lg navbar-dark fixed-top" > <!--navbar-dark for dark bg-->
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="#">Personal Profile</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse font-weight-bold w-100" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link " href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#profile">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#experience">Experience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#project">Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./credentials.php">Credentials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <!-- with dropdown-->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Something fun!
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li> -->

            
                    </ul>

                </div>
            </div>
        </nav>
        <div class="icon-bar" id="shareButton">
        <?php $myurl= 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $shareurl = urlencode($myurl); 
        echo "
            <h6 style='color:blue;'>Share!</h6>
            <a href='http://www.facebook.com/sharer.php?u=$shareurl' class='facebook'><i class='fa fa-facebook'></i></a>
            <a href='https://twitter.com/intent/tweet?text=Share%20Icons%20Tutorial%20by%20Bootstrapious.com&amp;url=https%3A%2F%2Fbootstrapious.com%2Fp%2Fshare-icons&amp;via=bootstrapious' class='twitter'><i class='fa fa-twitter'></i></a>
            <a href='https://plus.google.com/share?url=https%3A%2F%2Fbootstrapious.com%2Fp%2Fshare-icons' class='google'><i class='fa fa-google'></i></a>
            <a href='https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fbootstrapious.com%2Fp%2Fshare-icons&amp;summary=Check%20out%20this%20nice%20tutorial&amp;source=https%3A%2F%2Fbootstrapious.com%2F' class='linkedin'><i class='fa fa-linkedin'></i></a>
            ";?>
            <!-- <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> -->
        </div>

        <div class="main-container">
            <!-- home page -->
            
            <div id="home" class="jumbotron mb-0" >
                <div class="container">
                    <h1>Yudi Alvin</h1>
                    <p class="lead">Interactive resume</p>
                </div>
                
                <div class="overlay"></div>
                <!-- <button type="button" class="btn btn-primary">Primary</button> -->

            </div>

            <!-- profile -->
            <div class="background-profile" id="profile">
                <div  class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <h2>Profile</h2>
                            <p class="lead">Finance and Technology Enthusiast!</p>           
                            <hr />
                            <div class="row">
                                <div class="col-md-4 ">
                                    <h3 class="text-md-center">About me</h3>
                                    <p>I am a business undergraduate with a strong passion for finance and software development. 
                                        My unsatisfiable curiosity for knowledge in finance and software development is my driver for keep improving myself. 
                                        Currently, I am in my final year of study and I will be graduating by the end of December 2019. </p>
                                        
                                </div>
                                <div class="col-md-4 text-md-center">
                            
                                    <img id= "profile-pic"src="./image/profile.jpg" alt="Yudi Alvin" width="200px" height="auto"/>
        
                                </div>
                                <div class="col-md-4 ">
                                    <h3 class="text-md-center">Details</h3>
                                
                                    <table  class="mx-auto" >
                                        <tr>
                                            <td><strong>Name: </strong></td>
                                            <td>Yudi Alvin</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Location: </strong></td>
                                            <td>Singapore</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Highest Education: </strong></td>
                                            <td>Bachelor of Business Management</td>
                                        </tr>
                                        <tr>
                                            <td><strong>1st Major:</strong></td>
                                            <td>Finance</td>
                                        </tr>
                                        <tr>
                                            <td><strong>2nd Major:</strong></td>
                                            <td>Information Systems</td>
                                        </tr>
                                        <tr>
                                            <td><strong>My CV link:</strong></td>
                                            
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><a href="./Resume.pdf"><img src="./image/pdf.png"></a></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- API to get new -->
                            <div class = "col-md-12 col-sm-6 col-xs-12 shadow " id="news" >
                                <h5 style="color:black;">Breaking News:</h5>
                            </div>
                        </div>
                    </div>
                  
  

    
                    </div>

  


                </div>



            </div>

            <div class="background-skills">
                
                <div class="container" id="skills" >
                    <h2>Abilities</h2>
                    <p class="lead">“If you always do what you’ve always done, you’ll always be where you’ve always been.” —T.D. Jakes</p>  
                    <hr />
                
                    <div class="row" >
                        
                        <?php
                        $skills1 =["Python"=> "OOP, Pandas, Numpy, QtDesigner", "Java"=> "OOP", "C"=>"", "VBA"=>""];
                        $skills2 =["HTML"=> "", "CSS"=> "Bootstrap", "PHP" =>"", "Javascript"=>"Vue.js", ];
                        $skills3 =["MySQL"=>"Database Management", "R" =>"Data Cleaning, Data Analysis, Data Visualisation", "Github"=> "", "Linux"=> "Debugging, Bufferoverflow exploitation "];
                        $skills = [$skills1, $skills2, $skills3];
                        foreach($skills as $skill){
                            echo"<div class='col-md-4 col-sm-6 col-xs-12'>";
                            foreach($skill as $sk=>$description){
                                echo"
                                <div class='class-item d-flex align-items-center '>
                                    <a     class='class-item-thumbnail'>
                                        <img src='./image/$sk.png'>
                                    </a>
                                    <div class='class-item-text'>
                                        <h3 class='mb-0'>$sk</h3>";
                                if(!empty($description)){
                                    echo "<span>$description</span>";
                                }
                                echo" </div>
                                </div>
                                ";
                            }
                            echo"</div>";
                        }
                        ?>
                    </div>
                            
                </div>
            </div>
            
            
            <!-- >>>>> -->
            <div class="background-experience" id="experience">
                
                <div class="container" >
                    <h2>Experience</h2>
                    <p class="lead">“If you can't make it good, at least make it look good". – Bill Gates.</p>  
                    <hr />
                    <div >
                        <div>
                            <h3 class="text-left">Bank of Montreal (BMO), Private Banking Asia</h3>
                            <h5 class="text-left">Operations Intern | Period : 11 June 2018 - 31 December 2018</h5>
                        </div>
                        <p>During my internship with BMO, I was attached to the Operations Control Department under the guidance of Ng Chee Heng, Head of Operations, Hongkong & Singapore. 
                            It was a very richful experience where I was given the opportunity to be involved in all BMO's day to day operations process, 
                            including process on credit monitoring, Anti-Money Laundering checks and Customer due diligence check on new account. 
                            I was also very fortunate to be appointed as the key participant in he Bank's credit management system project. 
                            It was indeed challenging, but It was very rewarding experience as I had the opportunity to 
                            interact with different people from various departments as well as external vendors to work together, as a team, to enhance the credit management system in BMO.
                            In addition, I had also given the privilege attended the BMO Process Management course on Lean and Six Sigma processes.                            

                        </p>
                    </div>
                    <div>
                        <div>
                            <h3 class="text-left">SMU Banking and Finance Interest Group (BFIG)</h3>
                            <h5 class="text-left">Finance Director | Period :  August 2016 - August 2017</h5>
                        </div>
                        
                        <p>During my second year of university, I took up a leadership position in SMU Banking and Finance Interest Group (BFIG).
                            The main objective of the group was to promote financial interest in SMU and serve as a bridge to connect the students and the industry professionals.
                            My role as a finance director was liaise with external and internal parties to organize various banking related events for our members. 
                            My team and I invited banking professionals from various big banks as our guest speakers for weekly sharing session. 
                            The objective was to allow our members to gain insights and perspectives from the industry professionals. 
                            We also organized networking night event for our team member to have the opportunity to network with the professional from the industry.
                            In addition, we published weekly financial analysis for our members. 
                        </p>
                        
    
                    </div>
                    <div >
                        <div>
                            <h3 class="text-left">SMU Assurance and Advisory Team (SAAT)</h3>
                            <h5 class="text-left">Audit Executive Committee | Period :  January 2016 - December 2016</h5>
                        </div>
                        
                        <p>I joined SMU Assurance and Advisory Team (SAAT) to gain more insights on assessing the financial statements.
                            The objective of the club was to ensure sound financial audit and operational audit system in SMU. 
                            Therefore, as an executive committee, we had to liase with different student clubs and school admin to ensure proper procedure in financial reporting.
                            Through the collaboration with external party, we were given the work experience to assess the disclosure of various organizations in Singapore.
                        </p>
    
                    </div>
                </div>
            </div>
                    
            <!-- >>>> -->
            <div class="background-project" id="project">
                
                <div class="container" >
                    <h2>Project Highlight</h2>
                    <hr />
                    <div class="row">
                        <div class="col-lg-6 text-center d-flex justify-content-center">
                            <div class="card" style="width: 30rem;">
                                <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/btaD3NKaLhw" allowfullscreen></iframe>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">VUplayer Vulnerability Exploitation</h3>
                                    <p class="card-text text-left">This project worked on buffer overflow exploitation on VUplayer version 2.49. 
                                    The objective was to perform buffer overflow attack and force the application to perform any arbirary codes that are injected. </p>
                                    <a href="https://www.youtube.com/watch?v=btaD3NKaLhw" class="btn btn-primary">Youtube</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center d-flex justify-content-center">
                            <div class="card" style="width: 30rem;">
                                <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9mS8jz-kY2o" allowfullscreen></iframe>
                                </div>
                                <!-- https://youtu.be/9mS8jz-kY2o -->
                                <div class="card-body">
                                    <h3 class="card-title">Shopping Game</h3>
                                    <p class="card-text text-left">A simple shopping game created using java. Completed with mySQL database management system</p>
                                    <a href="https://youtu.be/9mS8jz-kY2o" class="btn btn-primary">Youtube</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 text-center d-flex justify-content-center">
                            <div class="card" style="width: 30rem;">
                                <img src="./image/trading.jpg" class="card-img-top" alt="Image cap">
                                <div class="card-body">
                                    <h3 class="card-title">Movie Rating Prediction</h3>
                                    <p class="card-text text-left">This project used R programming language to extract large users' movie ratings from grouplens and
                                        incorporated the big data to train the algorithm for better movie rating prediction system.</p>
                                    <a href="https://github.com/yudi-alvin/Movie-Rating-Prediction" class="btn btn-primary">Github</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center d-flex justify-content-center">
                            <div class="card" style="width: 30rem;">
                                <img src="./image/trading.jpg" class="card-img-top" alt="Image cap">
                                <div class="card-body">
                                    <h3 class="card-title">Quantitative Trading Strategy with Python</h3>
                                    <p class="card-text text-left mb-0">This project works on the usage of python dataframe to devise a trading strategy for futures. </p>
                                    <p class= "text-left mt-0"> Current indicators created: Simple(exponential) moving average, Order flow, Stochastic oscillator  </p>
                                    <a href="https://github.com/yudi-alvin/Backtesting-HI-futures-.git" class="btn btn-primary">Github</a>
                                </div>
                            </div>
                        </div>
      
                    </div>
                    <br>
	
						<button type="button" class="btn btn-primary d-block mx-auto"
						data-toggle="collapse" data-target="#info">Show Me More</button>
						<div id="info" class="collapse text-center">Coming Soon!<br>
							Stay Tune!
						</div>

					<br>

                </div>
            </div>

            <div class="background-contact" id="contact">
            <div class="container" >
                <div class="d-flex justify-content-center" >
                    <h2 style="color: black;"><b>Contact </b></h2>
                </div>
                <div class="row flex-nowrap align-items-center " >
                    <div class="col-5">
                        <table >
                            <tr>
                                <td><img src="./image/phone.png" width= "36px"></td>
                                <td><h6>: 98169394</h6></td>
                            </tr>
                            <tr>
                                <td><img class="align-middle" src="./image/email.png" width= "36px"></td>
                                <td class="align-middle"><h6>: yudi.alvin.kho@gmail.com</h6></td>
                            </tr>
                            <tr>
                                <td><img src="./image/linkedin1.png" width= "32px"></td>
                                <td><a href= "https://www.linkedin.com/in/yudi-alvin/"><h6>: linkedin.com/in/yudi-alvin</h6></a></td>
                                </tr>
                        </table>
                    </div>
                    <div class="col-3 d-flex-nowrap"  >
						 <a href='https://www.symptoma.es/'>encontrar diagnóstico</a> 
						 <script src='https://www.freevisitorcounters.com/auth.php?id=ea4e7e0f87df5b73e16de7fcabe2c98f171aadef'></script>
						<script src="https://www.freevisitorcounters.com/en/home/counter/622129/t/2"></script>
                    </div>
                    <div class="col-4 d-flex-nowrap">
                        <div class=" d-flex justify-content-center">
                            <h5 style="color:black; "> <u>Follow My Youtube<br> Channel Here!</u></h5><br>
							
                        </div>
                        <div class=" d-flex justify-content-center">
                        <table >
 
                            <tr>
                                <td><img src="./image/youtube.png" width= "36px"></td>
                                <td><a href= "https://www.youtube.com/channel/UCExNhpAedndPt02G039qnjg"><h6>: Youtube/cooltech</h6></a></td>
                            </tr>
 
                        </table>
                        </div>

                    </div>

                </div>
                </div>
                
                <div class = "container" id="fine-print">
                <p class="text-center">I will always keep this website updated with new content. So, stay tune!</p>
                    <hr class="mt-0">
                    <p class = "text-center" >Author: Yudi Alvin<br>
                    Current website is created using bootstrap and css.<br> 
                    Further functions using Javascripts and vue.js will be added in future to enchance the user interface.
                    </p>
                </div>
            </div>
            


        </div>


    </body>

</html>