<?php

require_once 'config.php';

	
	// Create a stream
	$opts = array(
	  'http'=>array(
		'method'=>"GET",
		'header'=>"Accept-language: en\r\n" .
				  "Cookie: foo=bar\r\n"
	  )
	);

	$context = stream_context_create($opts);

	$file = file_get_contents('https://clarity.beyondmachines.net/api/getFleet', false, $context);
	$vehicles = json_decode($file); 
	//echo $file; 
	
	$time = date("d m Y, g:i a");
	?>
	
	<table>
		<tr>
			<td>Timestamp</td>
			<td>Car Name</td>
			<td>Engine coolant temperature</td>
			<td>Engine RPM</td>
			<td>Transmission fluid temperature</td>
			<td>Transmission shift time</td>
			<td>Turbo RPM</td>
			<td>Brake Temperature</td>
			<td>Speed</td>
			<td>Battery Voltage</td>
			<td>Current Fuel Consumption</td>
		</tr>
	
	
	<?php foreach ($vehicles->vehicles as $vehicle) {
	?>

		<tr>
			<td><?php echo $vehicle->Timestamp; ?></td>
			<td><?php echo $vehicle->Car_Name; ?></td>
			<td><?php echo $vehicle->Engine_coolant_temperature; ?></td>
			<td><?php echo $vehicle->Engine_RPM; ?></td>
			<td><?php echo $vehicle->Transmission_fluid_temperature; ?></td>
			<td><?php echo $vehicle->Transmission_shift_time; ?></td>
			<td><?php echo $vehicle->Turbo_RPM; ?></td>
			<td><?php echo $vehicle->Brake_Temperature; ?></td>
			<td><?php echo $vehicle->Speed; ?></td>
			<td><?php echo $vehicle->Battery_Voltage; ?></td>
			<td><?php echo $vehicle->Current_Fuel_Consumption; ?></td>
	
		</tr>
	
	<?php }
	exit(); ?>
	
	</table>
	
	
<?php
