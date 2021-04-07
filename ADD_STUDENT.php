<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="styles.css">
<title>Register New Students</title>
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
  <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="ADD_STUDENT.php">Step 1</a></li>
          <li class="breadcrumb-item"><a href="VIEW_ALL_STUDENT.php">Step 2</a></li>
          <li class="breadcrumb-item"><a href="UPDATE_STUDENT.php">Step 3</a></li>  
          <li class="breadcrumb-item"><a href="DELETE_STUDENT.php">Step 4</a></li>  

        </ol>
      </nav>
      <div class="card-title bg-dark text-white text-center"><span style="color: White;"><h4>ENTER THE DETAILS BELOW</h4></span></div>
  <br>
  
  <form method="post">
      <div class="form-row">
        <div class="form-group col-md-3 ml-3" >
          <label for="inputFirstName"><span style="color: Black;"><h4><b>Full Name</b></h4></span></label>
          <input type="text" class="form-control" id="inputStudent_name" name="Student_name"  />
        </div>
        <div class="form-group col-md-3">
          <label for="inputYear_Branch"><span style="color: Black;"><h4><b>Department & Year</b></h4></span></label>
          <input type="text" class="form-control" id="inputYear_Branch" placeholder="SE_MECH,BE_EXTC,.." name="Year_Branch"/>
        </div>
      </div>
      <div class="form-group col-md-3">
          <label for="inputRollNo"><span style="color: Black;"><h4><b>Roll Number</b></h4></span></label>
          <input type="text" class="form-control" id="inputRollNo" name="RollNo"/>
        </div>
      <div class="form-row">
        <div class="form-group col-md-3 ml-3">
          <label for="inputID"><span style="color: Black;"><h4><b>Fingerprint ID</b></h4></span></label>
          <input type="ID" class="form-control" id="inputID" name="Fingerprint_id"/>
        </div>
      </div> 
       
      

    <div class="form-group col-md-3">
      <label for="inputZip"><span style="color: Black;"><h4><b>Date</b></h4></span></label>
      <input type="date" class="form-control" id="inputDate" placeholder="Your Address" name="User_date">
    </div>
                                            
                       <div class="form-row">
                            <button type="button" class="btn btn-secondary btn-sm ml-4" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="submit" class="btn btn-primary btn-sm ml-3">Submit</button>        
                        </div>
                    </form>
                </div>
            </div>
      </div>  


      <?php
      include 'connectDB.php'; 
//print_r ($_POST);

if(array_key_exists ("Year_Branch",$_POST))
{

$insertQuery = "INSERT INTO student (Student_name, Year_Branch, RollNo, Fingerprint_id, User_date)values ('$_POST[Student_name]','$_POST[Year_Branch]', '$_POST[RollNo]', '$_POST[Fingerprint_id]', '$_POST[User_date]')";


//echo $insertQuery;


$result = mysqli_query($conn,$insertQuery);

if($result){
  echo "Data submitted successfully!";
}else {
  echo "Data NOT inserted!!";
}

}
?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>