<!DOCTYPE html>
<html>
<head>
	<title>
	Countries	
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>


	<script> 
	$(document).ready(function(){
	    $("#flip").click(function(){
	        $("#panel").slideToggle("slow");
	    });
	});
	</script>

</head>
<body>
	<div class="container">

		<div class="container text-center" style="margin-top:20px">

			<div class="jumbotron text-center" style="background-color: #f4511e; /* Orange */color: #ffffff;">
			    <h1>Countries <i class="fa fa-flag" aria-hidden="true"></i></h1> 
				<p>We serve you whole world.</p> 
			</div>

			  <ul class="nav nav-tabs nav-justified">
			    <li class="active"><a data-toggle="tab" href="#africa">Africa</a></li>
			    <li><a data-toggle="pill" href="#america">America</a></li>
			    <li><a data-toggle="pill" href="#asia">Asia</a></li>
			    <li><a data-toggle="pill" href="#europe">Europe</a></li>
			    <li><a data-toggle="pill" href="#oceania">Oceania</a></li>
			  </ul>
			  
			  <div class="tab-content">
			    <div id="africa" class="tab-pane fade in active">
			    	<br>
			      <!--Africa-->	
			<div class="panel panel-primary">
				<div class="panel-heading">Africa Countries</div>
				<div class="panel-body">
					
					
					<div class="list-group">
						<div class="list-group">
							
<?php 
$str = file_get_contents('https://restcountries.eu/rest/v2/region/africa');
$africa_json = json_decode($str, true);

$i=0;
while(isset($africa_json[$i]))
{
	echo '<a href="country.php?code='.$africa_json[$i]['alpha3Code'].'" class="list-group-item">
						  		<div class="media">
								  <div class="media-left">
								    <img src="'.$africa_json[$i]['flag'].'" class="media-object" style="width:60px">
								  </div>
								  <div class="media-body">
								    <h4 class="media-heading">'.$africa_json[$i]['name'].'</h4>
								    <p>'.$africa_json[$i]['nativeName'].'</p>
								  </div>
								</div></a>';

	$i++;	
}

?>
						
						</div>
					</div>
				</div>
			</div>
			<!--end of Africa-->
			    </div>
			    <div id="america" class="tab-pane fade">
			    	<br>
			    	<!--America-->
			<div class="panel panel-warning">
				<div class="panel-heading">America Countries</div>
				<div class="panel-body">

					<div class="list-group">
						<div class="list-group">
						  	
<?php 
$str = file_get_contents('https://restcountries.eu/rest/v2/region/americas');
$america_json = json_decode($str, true);

$i=0;
while(isset($america_json[$i]))
{
	echo '<a href="country.php?code='.$america_json[$i]['alpha3Code'].'" class="list-group-item">
						  		<div class="media">
								  <div class="media-left">
								    <img src="'.$america_json[$i]['flag'].'" class="media-object" style="width:60px">
								  </div>
								  <div class="media-body">
								    <h4 class="media-heading">'.$america_json[$i]['name'].'</h4>
								    <p>'.$america_json[$i]['nativeName'].'</p>
								  </div>
								</div></a>';

	$i++;	
}

?>



						</div>
					</div>
				</div>
			</div>
			<!--end of America-->
			    </div>
			    <div id="asia" class="tab-pane fade">
			    	<br>
			    	<!--Asia-->
			<div class="panel panel-success">
				<div class="panel-heading">Asia Countries</div>
				<div class="panel-body">

					<div class="list-group">
						<div class="list-group">

<?php 
$str = file_get_contents('https://restcountries.eu/rest/v2/region/asia');
$asia_json = json_decode($str, true);

$i=0;
while(isset($asia_json[$i]))
{
	echo '<a href="country.php?code='.$asia_json[$i]['alpha3Code'].'" class="list-group-item">
						  		<div class="media">
								  <div class="media-left">
								    <img src="'.$asia_json[$i]['flag'].'" class="media-object" style="width:60px">
								  </div>
								  <div class="media-body">
								    <h4 class="media-heading">'.$asia_json[$i]['name'].'</h4>
								    <p>'.$asia_json[$i]['nativeName'].'</p>
								  </div>
								</div></a>';

	$i++;	
}

?>


						</div> 
					</div>
				</div>
			</div>
			<!--end of Asia-->
			    </div>
			    <div id="europe" class="tab-pane fade">
<br>
			<!--Europe-->
			<div class="panel panel-info">
				<div class="panel-heading">Europe Countries</div>
				<div class="panel-body">

					<div class="list-group">
						<div class="list-group">

<?php 
$str = file_get_contents('https://restcountries.eu/rest/v2/region/europe');
$europa_json = json_decode($str, true);

$i=0;
while(isset($europa_json[$i]))
{
	echo '<a href="country.php?code='.$europa_json[$i]['alpha3Code'].'" class="list-group-item">
						  		<div class="media">
								  <div class="media-left">
								    <img src="'.$europa_json[$i]['flag'].'" class="media-object" style="width:60px">
								  </div>
								  <div class="media-body">
								    <h4 class="media-heading">'.$europa_json[$i]['name'].'</h4>
								    <p>'.$europa_json[$i]['nativeName'].'</p>
								  </div>
								</div></a>';

	$i++;	
}

?>


						</div>
					</div>
				</div>
			</div>
			<!--end of Europe-->
			    </div> 
			    <div id="oceania" class="tab-pane fade">
			    	<br>

<!--Oceania-->
			<div class="panel panel-danger">
				<div class="panel-heading">Oceania Countries</div>
				<div class="panel-body">

					<div class="list-group">
					  	
<?php 
$str = file_get_contents('https://restcountries.eu/rest/v2/region/oceania');
$oceania_json = json_decode($str, true);

$i=0;
while(isset($oceania_json[$i]))
{
	echo '<a href="country.php?code='.$oceania_json[$i]['alpha3Code'].'" class="list-group-item">
						  		<div class="media">
								  <div class="media-left">
								    <img src="'.$oceania_json[$i]['flag'].'" class="media-object" style="width:60px">
								  </div>
								  <div class="media-body">
								    <h4 class="media-heading">'.$oceania_json[$i]['name'].'</h4>
								    <p>'.$oceania_json[$i]['nativeName'].'</p>
								  </div>
								</div></a>';

	$i++;	
}

?>

					</div>
				</div>
			</div>
			<!--end of Oceania-->

			    </div>
			  </div>



			
			

		</div>
	</div>

</body>
</html>

