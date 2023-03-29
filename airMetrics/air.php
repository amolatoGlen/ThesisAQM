<?php 

    require_once("../fetchdata/fetch.php");
    $query = " select * from fetchtrial ";
    $result = mysqli_query($con,$query);

?>
<!doctype html>
<html> 
<head>
 
<title> About</title> 
<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'><link rel="stylesheet" href="./air.css">
</head>

<body>
	<header>
		<figure class="brand">USTPAQM</figure>
		<nav class="menu">
				<input type="checkbox" id="menuToggle">
				<label for="menuToggle" class="menu-icon"><i class="fa fa-bars"></i></label>
				<ul>
						<a href="../weather/index.html"><li>Home</li></a>
						<a href="#"><li>FAQ's</li></a>
						<a href="#"><li>About</li></a>
						<a href="#"><li>Contato</li></a>
				</ul>
		</nav>
</header>
	
	<section id="s-team" class="section">
		<br><br>
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
			<div class="container">
				<h2>Air Pollution Monitoring System</h2>
				<br><br>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="skill-item center-block">
							<div class="chart-container">
								<div class="chart " data-percent="<?php echo $temp?>" data-bar-color="#23afe3">
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

					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="skill-item center-block">
							<div class="chart-container">
								<div class="chart " data-percent="95" data-bar-color="#ff4241">
									<span class="percent" data-after="%">95</span>
								</div>
							</div>

							<p>PM2.5</p>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="skill-item center-block">
							<div class="chart-container">
								<div class="chart " data-percent="65" data-bar-color="#edc214">
									<span class="percent" data-after="%">265</span>
								</div>
							</div>

							<p>CO</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
        <br><br><br>

 <script src="plugins/jquery-2.2.4.min.js"></script>
 <script src="plugins/jquery.appear.min.js"></script>
 <script src="plugins/jquery.easypiechart.min.js"></script> 
 <script src="./air.js"> </script>
 
   
</body>
 
</html>
