<?php

$host = "localhost";
$user = "root";
$pass = "toor1234!";
$db = "vehicles";

$conn = mysqli_connect($host, $user, $pass,$db) or die("Connect failed: %s\n");

/* if($conn){
echo "Conected Successful <br>";
}
else{
echo "Not connected <br>";
}

$sql ="INSERT INTO test (day) VALUES('2')";

if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
    echo "<br>";
} else{
    echo "Error: Could not able to execute $sql. " . mysqli_error($conn);
}
*/

	
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
		$sql = "INSERT INTO vehicles(timestamp, car_name, engine_coolant_temperature, engine_rpm, transmission_fluid_temperature, 
		transmission_shift_time, turbo_rpm, brake_temperature, speed, battery_voltage, current_fuel_consumption) 
		VALUES('$vehicle->Timestamp', '$vehicle->Car_Name', '$vehicle->Engine_coolant_temperature', '$vehicle->Engine_RPM', 
		'$vehicle->Transmission_fluid_temperature', '$vehicle->Transmission_shift_time', '$vehicle->Turbo_RPM', '$vehicle->Brake_Temperature',
		'$vehicle->Speed', '$vehicle->Battery_Voltage', '$vehicle->Current_Fuel_Consumption')";
		
		mysqli_query($conn, $sql);	
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
// Close connection
mysqli_close($conn);
