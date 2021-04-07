<?php  
//Connect to database
require'connectDB.php';
	$conn = new mysqli($servername, $username, $password, $dbname);

	
	$dbname = "ams";
    
	$conn = new mysqli($servername, $username, $password, $dbname);

		// sql to create table
		$sql = "CREATE TABLE IF NOT EXISTS `administrator` (
			`administrator_id` int(20) NOT NULL AUTO_INCREMENT,
			`username` varchar(20) NOT NULL UNIQUE,
			`password` varchar(20) NOT NULL,
		) ENGINE=InnoDB DEFAULT CHARSET=latin1";

	if ($conn->query($sql) === TRUE) {
	    echo "Table administrator created successfully";
	} else {
	    echo "Error creating table: " . $conn->error;
	}

	// sql to create table
	$sql = "CREATE TABLE IF NOT EXISTS `student` (
			`Student_id` int(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`Student_name` varchar(100) NOT NULL,
			`Year_Branch` varchar(50) NOT NULL,
			`RollNo` int(20) NOT NULL,
			`Fingerprint_id` int(20) NOT NULL,
			`Fingerprint_select` tinyint(1) NOT NULL DEFAULT '0',
			`User_date` date NOT NULL,
			`Del_fingerid` tinyint(1) NOT NULL DEFAULT '0',
			`Add_fingerid` tinyint(1) NOT NULL DEFAULT '0'
	) ENGINE=InnoDB DEFAULT CHARSET=latin1";

	if ($conn->query($sql) === TRUE) {
	    echo "Table student created successfully";
	} else {
	    echo "Error creating table: " . $conn->error;
	}

				// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS `student_logs` (
			`Student_logs_id` int(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`Student_name` varchar(100) NOT NULL,
			`Year_Branch` varchar(50) NOT NULL,
			`RollNo` int(20) NOT NULL,
			`Fingerprint_id` int(20) NOT NULL,
	`checkindate` date NOT NULL,
	`timein` time NOT NULL,
	`timeout` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
	echo "Table student_logs created successfully";
} else {
	echo "Error creating table: " . $conn->error;
}
	$conn->close();
?>