<?php  
//Connect to database
require 'connectDB.php';

if (isset($_POST['Fingerprint_id'])) {
	
	$Fingerprint_id = $_POST['Fingerprint_id'];

	$sql = "SELECT * FROM student WHERE Fingerprint_id=?";
    $result = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($result, $sql)) {
        echo "SQL_Error_Select_card";
        exit();
    }
    else{
    	mysqli_stmt_bind_param($result, "s", $Fingerprint_id);
        mysqli_stmt_execute($result);
        $resultl = mysqli_stmt_get_result($result);
        if ($row = mysqli_fetch_assoc($resultl)){
        	//*****************************************************
            //An existed fingerprint has been detected for Login or Logout
            if (!empty($row['Student_name'])){
            	$Student_name = $row['Student_name'];
                $RollNo = $row['RollNo'];
                $sql = "SELECT * FROM student_logs WHERE Fingerprint_id=? AND checkindate=CURDATE() AND timeout=''";
                $result = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($result, $sql)) {
                    echo "SQL_Error_Select_logs";
                    exit();
                }
                else{
                	mysqli_stmt_bind_param($result, "i", $Fingerprint_id);
                    mysqli_stmt_execute($result);
                    $resultl = mysqli_stmt_get_result($result);
                    //*****************************************************
                    //Login
                    if (!$row = mysqli_fetch_assoc($resultl)){

                    	$sql = "INSERT INTO student_logs (Student_name, Year_Branch, RollNo, Fingerprint_id, checkindate, timein, timeout) VALUES (?, ?, ?, ?, CURDATE(), CURTIME(), ?)";
                        $result = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($result, $sql)) {
                            echo "SQL_Error_Select_login1";
                            exit();
                        }
                        else{
                        	$timeout = "";
                            mysqli_stmt_bind_param($result, "sdis", $Student_name, $RollNo, $Fingerprint_id, $timeout);
                            mysqli_stmt_execute($result);

                            echo "login".$Student_name;
                            exit();
                        }
                    }
                    //*****************************************************
                    //Logout
                    else{
                    	$sql="UPDATE student_logs SET timeout=CURTIME() WHERE Fingerprint_id=? AND checkindate=CURDATE()";
                        $result = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($result, $sql)) {
                            echo "SQL_Error_insert_logout1";
                            exit();
                        }
                        else{
                            mysqli_stmt_bind_param($result, "i", $Fingerprint_id);
                            mysqli_stmt_execute($result);

                            echo "logout".$Student_name;
                            exit();
                        }
                    }
                }
            }
            else{
                echo "nothing";
                exit();
            }
        }
	}
	
		exit();
	
}
?>