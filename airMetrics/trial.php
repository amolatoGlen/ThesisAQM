<?php 

    require_once("../fetchdata/fetch.php");
    $query = " select * from fetchtrial ";
    $result = mysqli_query($con,$query);

?>
<!doctype html>
<html> 
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet"
    />
<title> About</title> 
<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'><link rel="stylesheet" href="./trial.css">
</head>

<body>
  <input type="checkbox" id="check">
    <header>
      </div>
      <div class="navigation">
        <a href="../index.html">Home</a>
        <a href="../aboutpage/about.html">About</a>
        <a href="../infopage/info.html">Info</a>
        <a href="../contactpage/contact.html">Contact</a>
      </div>
      <h2><a href="#" class="logo">Logo</a></h2>
      <label for="check">
      <i class="fas fa-bars menu-btn"></i>
      <i class="fas fa-times close-btn"></i>
      </label>
    </header>
	<section id="s-team" class="section">
		<div class="b-skills">  
    <?php 
      while($row=mysqli_fetch_assoc($result))
            {
                $id = $row['id'];
                $temp = $row['temp'];
                $hum = $row['hum'];
                $time = $row['airtime'];
            }
            ?>
            
      <h1>Air Pollution Monitoring System</h1>
      <h2>Dashboard</h2>
      <div class="container">
      <div class="display-date">
        <span id="day">day</span>
        <span id="daynum">00</span>
        <span id="month">month</span>
        <span id="year">0000</span>
      </div>
      </div>
    <div class="display-time"></div>
    <br>
			<div class="container">
				<br><br>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="skill-item center-block">
							<div class="chart-container">
								<div class="chart " data-percent="<?php echo $temp?>" data-bar-color="#728FCE">
									<span class="percent" data-after="°C">90</span>
								</div>
							</div>

							<p>Temperature</p>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="skill-item center-block">
							<div class="chart-container">
								<div class="chart " data-percent="<?php echo $hum?>" data-bar-color="#a7d212">
									<span class="percent" data-after="%">78</span>
								</div>
							</div>

							<p>Humidity</p>
						</div>
					</div>

          <!--Insights or PM2.5 and CO -->
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="skill-item center-block">
              <div class= "insights">
                <!-- PM2.5 -->
                <div class="pm25">
                  <span class="material-icons-sharp"> air </span>
                  <div class="middle">
                    <div class="left">
                    <br>
                    <h2>PM2.5</h2>
                    <h1><?php echo $temp?></h1>
                    <h3>µg/m³</h3>
                    </div>
                  </div>
                  <small class="text-muted"> Last 24 hours </small>
              </div>
            </div>
          </div>
				</div>
  
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="skill-item center-block">
              <div class= "insights">
                <!-- C0 -->
                <div class="pm25">
                  <span class="material-icons-sharp"> air </span>
                  <div class="middle">
                    <div class="left">
                    <br>
                    <h2>CO</h2>
                    <h1><?php echo $hum?></h1>
                    <h3>µg/m³</h3>
                    </div>
                  </div>
                  <small class="text-muted"> Last 24 hours </small>
              </div>
            </div>
          </div>
				</div>
          <!--ENDInsights or PM2.5 and CO -->
			</div>
		</div>
	</section>    
        <br><br><br>
 <script src="plugins/jquery-2.2.4.min.js"></script>
 <script src="plugins/jquery.appear.min.js"></script>
 <script src="plugins/jquery.easypiechart.min.js"></script> 
 <script src="./air.js"> </script>
 <script src="./date.js"></script>
 
   
</body>
 
</html>
