<html lang="en">
<meta charset="utf-8">
<meta name='viewport'content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />
	<head>
    <title>Yudi Alvin</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="./CSS/style.css" rel="stylesheet" />
    
    </head>
	<body data-spy="scroll" data-target="#navbarSupportedContent">	 
 
        <nav id="navbar-top" class="navbar  navbar-expand-lg navbar-dark fixed-top" > <!--navbar-dark for dark bg-->
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="index.php">Personal Profile</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse font-weight-bold w-100" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link " href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                            <a class="nav-link" href="./credentials.php">Credentials</a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link" href="./dataViz.php">Data Viz</a>
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
			
			<div class="container-fluid" >
				<h2>Project Highlight</h2>
				<hr />
				<?php
				
				$countries = ["US","CA","MX","DE","IT","ES","FR","JP","AU","NZ","CH"];
				$newCasesByCountry=[];
				$count=0;
				foreach ($countries as $country){
					$url = "https://api.thevirustracker.com/free-api?countryTimeline=".$country;
					try {
						$content = file_get_contents($url);
						if($content === FALSE) {
							$data = "No data!";
						} else {
							$startPos= strpos($content,"{");
							$content = substr($content,$startPos);
							$phpObj = json_decode($content);
					
							$newCaseList=[];
						
							foreach($phpObj->timelineitems[0] as $key =>$val){
								if($key != "stat" && $key > "2020-03-01"){
									$date=$key;
									$newCases= $val->new_daily_cases;
									array_push($newCaseList,[$date,$newCases]);
						
								}
							}
							//print_r($newCaseList);
							$newCasesByCountry[$country] = $newCaseList;
							//var_dump($newCasesByCountry);
							
						}
					} catch (Exception $e) {
						$data = "No data!";
					}
					$countryID = $country . "NewCases";
					if($count %2 ==0){
						echo"<div class='row'>";
					}
					echo"<div class='col-md-6 col-xs-12 text-center d-flex justify-content-center'>
						<div id=$countryID style='width: 400px; height: 300px;' class='mx-auto' ></div>
					</div>";
					if($count %2 !=0){
						echo"</div><br>";
					}
					$count++;
				}
			?>
			</div>


        </div>

	
    </body>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
       
<script>

    var arr = <?php echo json_encode($newCasesByCountry); ?>;


    function drawStuff() {
        for(var cName in arr){
        var dailyCases = [];
        dailyCases = dailyCases.concat([["Date","Cases"]],arr[cName]);
        
            var data = new google.visualization.arrayToDataTable(dailyCases,false);
            var options = {
            title: cName+' Daily New Cases',
            width: 600,
            height: 400,
            legend: { position: 'none' },
            chart: { title: cName +' Covid Cases',
                    subtitle: 'Daily New Cases' },
            bars: 'vertical', // Required for Material Bar Charts.
            axes: {
                x: {
                0: { side: 'bottom', label: 'Date'} // Top x-axis.
                }
            },
            bar: { groupWidth: "60%" }
            };

            var chart = new google.charts.Bar(document.getElementById(cName+'NewCases'));
            chart.draw(data, options);
        }
    };
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawStuff);
</script>
</html>