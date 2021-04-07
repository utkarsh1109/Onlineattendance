<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="styles.css">
<title>Remove Students Info</title>
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

  <?php
      include 'connectDB.php';         

      if(isset($_POST['submit1'])){ 
        //print_r ($_POST);
        $selectQuery = "SELECT *FROM student"; 
        $result1 = mysqli_query($conn,$selectQuery);

        if (mysqli_num_rows($result1) > 0) 
        { 
          echo " <table>
          <tr>
            <th>Student ID</th> 
            <th>Student Name</th>
            <th>Year & Branch</th> 
            <th>Roll Number</th>
            <th>Fingerprint ID</th> 
            <th>Date</th> 

           </tr>";

          while($row = mysqli_fetch_array($result1)) 
          {
            echo "<tr><td>" . $row["Student_id"] . "</td><td>" . $row["Student_name"]. "</td><td>" . $row["Year_Branch"] . "</td><td>" . $row["RollNo"] . "</td><td>" . $row["Fingerprint_id"] . "</td><td>" . $row["User_date"] . "</td></tr>";
          }
          echo "</table>";
        }
        else{
        echo "0 results";
        }
        $conn->close();
      }
    ?>
  
  <br>

  <div class="card-title bg-dark text-white text-center"><span style="color: White ;"><h4>Delete Information of Students</h4></span></div>
 
      <form method="post">
      <div class="form-row">
        <div class="form-group col-md-3"> 
          <input type="tel" class="form-control ml-3"  id="inputID" placeholder="Enter Fingerprint ID" name="Fingerprint_id" />
        </div>
      </div> 
      <button type="submit" class="btn btn-info ml-3" style=" background-color: red" name="submit2"><h5>Delete</h5></button>
    </form>
    <br>    

    <?php
      include 'connectDB.php';
      $success = "";
      $failure = "";     

      if(array_key_exists("Fingerprint_id",$_POST)){ 

        //print_r ($_POST);
        $deletewhereQuery = "DELETE FROM student WHERE Fingerprint_id = $_POST[Fingerprint_id]";
        $result2 = mysqli_query($conn,$deletewhereQuery);
 
        if ($result2){
          $success = "Data row deleted successfully!";  
        }else{
          $failure = "Error deleting data. Please check Fingerprint ID again!!";
        }
        $conn->close();
      }

      if($success){
        echo "<div class='alert alert-success col-sm-3' role='alert'>".$success."</div>";
      } 
      if($failure){
        echo "<div class='alert alert-danger col-sm-4' role='alert'>".$failure."</div>";
      }  
    ?>
 
 
    
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>