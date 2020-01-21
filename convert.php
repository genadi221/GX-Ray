<?php 

$servername = "localhost";
$dbname = "data";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT lat, log, uSv FROM table1";
$result = $conn->query($sql);

$myfile = fopen("realberlin.json", "w") or die("Unable to open file!");
$head = "var addressPoints = [\n";
fwrite($myfile, $head);


if ($result->num_rows > 0) {
    //[52.520008, 13.404954, "500"],  #In diese Form
    
    while($row = $result->fetch_assoc()) 
		$mem[]= "[" . $row["lat"]  . "," . $row["log"] . "," . "\"" . $row["uSv"] . "\"],\n";    
    }
	
	foreach($mem as $line){
	//echo "$line<p>";
	//print_r($line);
	//echo "here";
	$data = $line;
	fwrite($myfile, $data);
}

$end ="[0,  0, \"0\"]" . "];";	
fwrite($myfile, $end);

fclose($myfile);
$conn->close();

?>