<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Users.css">
<title>Student Logs</title>
</head>

<style>
      table {
        border-collapse: collapse;
        width: 100%;
        color: black; 
        font-size: 20px;        
      } 
      th {
        background-color: darkgrey;
        text-align:left;
      }
      tr:nth-child(even) {
        background-color: lightblue;
        text-align:left;
      }
      tr:nth-child(odd) {
        background-color: white ;
        text-align:left;
      }

    </style>
    <script>
  $(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>
<script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha1256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
</script>
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/STUDENT_LOG.js"></script>
<script>
  $(document).ready(function(){
      $.ajax({
        url: "STUDENT_LOG_UP.php",
        type: 'POST',
        data: {
            'select_date': 1,
        }
      });
    setInterval(function(){
      $.ajax({
        url: "STUDENT_LOG_UP.php",
        type: 'POST',
        data: {
            'select_date': 0,
        }
        }).done(function(data) {
          $('#studentlog').html(data);
        });
    },5000);
  });
</script>
</head>
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
          <li class="breadcrumb-item"><a href="ADD_FACULTY.php">Step 1</a></li>
          <li class="breadcrumb-item"><a href="VIEW_ALL_FACULTY.php">Step 2</a></li>
          <li class="breadcrumb-item"><a href="ADD_STUDENT.php">Step 3</a></li>
          <li class="breadcrumb-item"><a href="VIEW_ALL_STUDENT.php">Step 4</a></li>

        </ol>
      </nav>
<br>
  <main>
  <section>
  <!--User table-->
  <div class="card-title bg-dark text-white text-center"><span style="color: White ;"><h3>Attendance</h3></span></div>
  	<div class="form-style-5 slideInDown animated">
  		<form method="POST" action="STUDENT_EXPORT.php">
  			<input type="date" name="date_sel" id="date_sel">
        <button type="button" name="STUDENT_ATTENDANCE" id="STUDENT_ATTENDANCE">Select Date</button>
  			<input type="submit" name="STUDENT_EXPORT" value="Export to Excel">
  		</form>
  	</div>
  <div class="tbl-header slideInRight animated">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Student ID</th>
          <th>Full Name</th>
          <th>Year & Branch</th>
          <th>Roll Number</th>
          <th>Fingerprint ID</th>
          <th>Date</th>
          <th>Time In</th>
          <th>Time Out</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content slideInRight animated">
    <div id="STUDENT_ATTENDANCE"></div>
  </div>
</section>
</main>
</body>
</html>