<?php
	//connection
	$conn = new mysqli('localhost', 'root', '', 'mydatabase');
 
	$data = array();
	$sql = "SELECT * FROM members";
	$query = $conn->query($sql);
	while($row = $query->fetch_assoc()){
		$data[] = $row;
	}
 
	//convert to json
	$data = json_encode($data);
 
	//create json file
	$filename = 'members.json';
	if(file_put_contents($filename, $data)){
		echo 'Json file created';
	} 
	else{
		echo 'An error occured in creating the file';
	}
 
?>
