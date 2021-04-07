<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="styles.css">
<title>Homepage</title>
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
            <a class="nav-link" href="ADD_STUDENT.php"><span style="color:black" class="fa fa-user-plus"></span> <span style="color:black;">Add Students</a></span>
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
  <header class="jumbotron">
  <div class="container">
        <div class="row row-header">
            <div class="col-12 col-sm-9">
                <h1>ATTENDANCE MANAGEMENT SYSTEM</h1>
                <p>This is the Homepage of AMS where the Administrator can monitor daily attendance of Students. Along with this, he/she can <br>
                  <br>
                  1. Add New Students.
                  <br>
                  2. View All the Student Users.
                  <br>
                  3. Update Information Regarding any Students.
                  <br>
                  4. Delete any Student Data.
                  
                </p>
            </div>
            <div class="col-12 col-sm-3 allign-self-center">
                <img src="https://getmyuni.azureedge.net/college-image/small/don-bosco-institute-of-technology-dbit-mumbai.jpg" alt="" class="img-fluid">                    
            </div>    
        </div>
    </div>
</header>

  <h4 style="height:30px;" class="card-title bg-dark text-white text-center">Daily Attendance of Student Users</h4>


  <br>

</div>	    
  <br>
  
    <a href ="STUDENT_ATTENDANCE.php" button type="submit" style="width:200px; height:50px; margin:0 48%;position:relative;left:-50px;" class="btn btn-info" name="submit1"><h4>Click Here</h4></button></a>
    <br>
    <br>
    <br>
   <hr>
    <br>
    <div class="col-sm-7 ml-2">
  </div>
<br>
   
  
  </div>

<br>
<br>

<div class="image">
  <div class="container">
    <div class="row-header" color: black; text-white>
        <h1 class="col-12">Procedure</h1>
    </div>
    <div class="row">
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body bg-light">
              <h5 class="card-title bg-dark text-white text-center">Step 1</h5>
              <p class="card-text">Add New Students.</p>
              <a href="ADD_STUDENT.php" class="btn btn-success col-12">Go to Step 1  </a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body bg-light">
              <h5 class="card-title bg-dark text-white text-center">Step 2</h5>
              <p class="card-text">View All the Student Users.</p>
              <a href="VIEW_ALL_STUDENT.php" class="btn btn-success col-12">Go to Step 2</a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
              <div class="card-body bg-light">
                <h5 class="card-title bg-dark text-white text-center">Step 3</h5>
                <p class="card-text">Update Info of Students.</p>
                <a href="UPDATE_STUDENT.php" class="btn btn-success col-12">Go to Step 3</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body bg-light">
                <h5 class="card-title bg-dark text-white text-center">Step 4</h5>
                <p class="card-text"> Delete any Student Data.</p>
                <a href="DELETE_STUDENT.php" class="btn   btn-success col-12">Go to Step 4</a>
              </div>
            </div>
          </div>
      </div>
  
      <br>
<hr>
        