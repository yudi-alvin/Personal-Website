<html lang="en">
<meta charset="utf-8">
    
	<head>
    <title>Yudi Alvin</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="./CSS/style.css" rel="stylesheet" />
    <script src='./JS/jscode.js'></script>
    </head>
    <body  >	 
 
        

        <nav id="navbar-top" class="navbar  navbar-expand-lg navbar-dark fixed-top" > <!--navbar-dark for dark bg-->
            <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="index.php">Personal Profile</a>
            <!--aria-disabled: Indicates that the element is perceivable but disabled, so it is not editable or otherwise operable
            -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse font-weight-bold w-100" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
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

        <div class="background-skills">
                
                <div class="container">
                    <h2 class="mt-3">Credentials</h2>
                    <hr />
                
                    
                        
                        <?php
                        $credentials =["Professional Certificate for Data Science (Harvard Online)"=> "Basic R, Visualisation, Probability, Inference and Mode, Productivity Tools, Wrangling, Linear Regression, Machine Learning"
						,"Bachelor of Business Management"=>"Major in Information Systems and Finance"];
						$links=["https://bit.ly/2YoJa3W","./Credentials/Degree Certificate.pdf"];
						$count=0;
                        foreach($credentials as $cr=>$description){
							$url = $links[$count];
                            echo"<div class='row' >
									<div class='col'>

                                    <div class='class-item d-flex align-items-center '>
                                        <a     class='class-item-thumbnail'>
                                            <img src='./image/$cr.png'>
                                        </a>
                                        <div class='class-item-text'>
                                            <h3 class='mb-0'><a href=$url>$cr</h3>
                                        <span>$description</span></div>
                                        </div>
                                </div>
							</div>";
							$count ++;
                        }
						
                        ?>
                    
                            
                </div>
            </div>
			
    </body>