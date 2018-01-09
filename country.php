<?php
$flag_url;
$name;
$local_name;
$capital_city;
$region;
$xCoordinate;
$yCoordinate;
$currency;
$language;
$population;
if(isset($_GET["code"]))
{
	//Get everything about country from given id

	$GLOBALS['country_code']=$_GET["code"];
	$str = file_get_contents('https://restcountries.eu/rest/v2/alpha/'.$GLOBALS['country_code']);
	$json = json_decode($str, true);

	
	$GLOBALS['flag_url']=$json['flag'];
	$GLOBALS['name']= $json['name'];
	$GLOBALS['local_name']=$json['nativeName']; 
	$GLOBALS['capital_city']=$json['capital'];
	$GLOBALS['region']=$json['region'];
	$GLOBALS['xCoordinate']=$json['latlng'][0];
	$GLOBALS['yCoordinate']=$json['latlng'][1];
	$GLOBALS['currency']=$json['currencies'][0]['name'];
	$GLOBALS['language']=$json['languages'];//[0]['name'];
	$GLOBALS['population']=$json['population'];
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>
	<?php 
	echo $name;
	?>
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

	
</head>
<body>
	<div class="container">
		<div class="container text-center" style="margin-top:10px">
			
			<div class="panel panel-success text-center">
		        <div class="panel-heading">
		          <h3 style="color:black"><img style="width:50px;" src="<?php echo $flag_url;?>" alt="Random Name"> &nbsp;&nbsp;<?php echo $name; ?> </h3>
		        </div>
		        <div class="panel-body">
		          
		          <table class="table table-hover text-left">
				    <tbody>
				      <tr>
				        <td><h5><b>Name:</b></h5></td>
				        <td><h4><i style="color:#81DAF5;"class="fa fa-universal-access" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $name; ?></h4></td>
				      </tr>
				      <tr>
				        <td><h5><b>Native Name:</b></h5></td>
				        <td><h4><i style="color:#C6A71B;" class="fa fa-font" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $local_name; ?></h4></td>
				      </tr>
				      <tr>
				        <td><h5><b>Flag:</b></h5></td>
				        <td><h4><img class="thumbnail" style="display: inline-block;width:100px;" src="<?php echo $flag_url; ?>" alt="<?php echo $name; ?>"></h4></td>
				      </tr>
				      <tr>
				        <td><h5><b>Capital-City:</b></h5></td>
				        <td><h4><i style="color:#FF8000;" class="fa fa-map-signs" aria-hidden="true"></i> &nbsp;&nbsp;<?php echo $capital_city; ?></h4></td>
				      </tr>
				      <tr>
				        <td><h5><b>Region:</b></h5></td>
				        <td><h4><i style="color:#0080FF;" class="fa fa-globe" aria-hidden="true"></i> &nbsp;&nbsp;<?php echo $region; ?></h4></td>
				      </tr>
				      <tr>
				        <td><h5><b>Coordinates:</b></h5></td>
				        <td><h4><i style="color:#FF0040;" class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;&nbsp;<?php echo $xCoordinate.'&nbsp;,&nbsp;'.$yCoordinate; ?></h4></td>
				      </tr>
				      <tr>
				        <td><h5><b>Currency:</b></h5></td>
				        <td><h4><i style="color:#109302;" class="fa fa-money" aria-hidden="true"></i> &nbsp;&nbsp;<?php echo $currency; ?></h4></td>
				      </tr>
				      <tr>
				        <td><h5><b>Language:</b></h5></td>
				        <td><h4><i style="color:#443317;" class="fa fa-language" aria-hidden="true"></i> &nbsp;&nbsp;
				        	
				        	<?php
				        //	echo $language[0]['name'].'&nbsp;&nbsp;'; 
				        	$k=0;
				        	while(isset($language[$k])){
				        		echo $language[$k]['name'].'&nbsp;&nbsp;';
				        		$k++;
				        	}
						
				        	?>

				        </h4></td>
				      </tr>
				      <tr>
				        <td><h5><b>Population:</b></h5></td>
				        <td><h4><i style="color:#22a7b8;" class="fa fa-users" aria-hidden="true"></i> &nbsp;&nbsp;<?php echo $population; ?></h4></td>
				      </tr>

				    </tbody>
				  </table>

		        </div>
		    </div>
			
			<button onclick="window.history.back();" style="margin-bottom: 20px" href="" type="button" class="btn btn-info"><i class="fa fa-chevron-left " aria-hidden="true"></i> &nbsp;Back To Menu </button>
	      		
		</div>
		
	</div>
</body>
</html>