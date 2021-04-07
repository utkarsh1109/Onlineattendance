<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="styles.css">
<title>Update info of students</title>
</head>
<style>
    body{
      background-image: url('222.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
  background-size: cover;
    }
    </style>
<nav class="navbar navbar-expand-lg navbar-dark background-color: darkgrey;">
    <a class="navbar-brand" href="index.php"> <div class="ml-2"><span style="color:black" class="fa fa-calendar-check-o"></span><span style="color:black;">AMS</div></a></span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" ></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php"><span style="color:black" class="fa fa-home"></span><span style="color:black;"> Home </span><span class="sr-only">(current)</span></a>
        </li>
      
        <li class="nav-item">
            <a class="nav-link" href="ADD_STUDENT.php"><span style="color:black" class="fa fa-user-plus"></span> <span style="color:black;">ADD NEW STUDENTS</a></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="VIEW_ALL_STUDENT.php"><span style="color:black" class="fa fa-check"></span><span style="color:black;"> VIEW ALL STUDENTS</a></span>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="UPDATE_STUDENT.php"><span style="color:black" class="fa fa-pencil-square"></span> <span style="color:black;">UPDATE STUDENTS INFO</a></span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="DELETE_STUDENT.php"><span style="color:black" class="fa fa-remove"></span> <span style="color:black;">DELETE STUDENTS INFO</a></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php"><span style="color:black" class="fa fa-users"></span > <span style="color:black;">About us</a></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ADMINISTRATOR.html"><span style="color:black" class="fa fa-sign-out"></span> <span style="color:black;">LOGOUT</a></span>
        </li>
      </ul>
      <span class="navbar-text">
    <h6><span style="color:black;">Project by Group 17, BE EXTC, DBIT, MUMBAI</h6></span>
      </span>
    </div>
  </nav>
  <br>
  <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="ADD_STUDENT.php">Step 1</a></li>
          <li class="breadcrumb-item"><a href="VIEW_ALL_STUDENT.php">Step 2</a></li>
          <li class="breadcrumb-item"><a href="UPDATE_STUDENT.php">Step 3</a></li>  
          <li class="breadcrumb-item"><a href="DELETE_STUDENT.php">Step 4</a></li>  

        </ol>
      </nav>
  
 
<div class="card-title bg-dark text-white text-center"><span style="color: White ;"><h4>Update Information of Students</h4></span></div>
<form method="POST">

<div class="form-row">
  <div class="form-group col-md-10">
    
  </div>
</div>

<form method="post">
      <div class="form-row">
        <div class="form-group col-md-3 ml-3" >
          <label for="inputFirstName"><span style="color: Black;"><h4><b>Full Name</b></h4></span></label>
          <input type="text" class="form-control" id="inputFullName" name="Student_name"  />
        </div>
        <div class="form-group col-md-3">
          <label for="inputLastName"><span style="color: Black;"><h4><b>Year & Department</b></h4></span></label>
          <input type="text" class="form-control" id="inputDepartment" name="Year_Branch"/>
        </div>
        <div class="form-group col-md-3">
          <label for="inputRollNo"><span style="color: Black;"><h4><b>Roll Number</b></h4></span></label>
          <input type="text" class="form-control" id="inputRollNo" name="RollNo"/>
        </div>
      </div>

            
  
    <div class="form-group col-md-3">
      <label for="inputZip"><span style="color: Black;"><h4><b>Fingerprint ID(Existing)</b></h4></span></label>
      <input type="text" class="form-control" id="inputZip"  name="Fingerprint_id">
    </div>
  



</div>

<button type="submit" name="submit" class="btn btn-primary btn-sm ml-3">Submit</button>        
</form>
<br>

<?php
      include 'connectDB.php'; 
//echo " " . $_POST[Student_name] . " ";
if (array_key_exists("Fingerprint_id", $_POST)) {
  $insertQuery = "UPDATE student SET Student_name='$_POST[Student_name]',Year_Branch='$_POST[Year_Branch]', RollNo='$_POST[RollNo]' WHERE Fingerprint_id='$_POST[Fingerprint_id]' ";       // echo $insertQuery; ";
  $result = mysqli_query($conn, $insertQuery);

  if ($result) {
    echo "Data successfully updated";
  } else {
    echo "An error occurred ";
  }


  mysqli_close($conn);
}
?>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>