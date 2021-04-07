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
      <header class="jumbotron">
            <div class="container">
                <div class="row row-header">
                    <div class="col-12 col-sm-9">
                        <h1>Group 17</h1>
                        <p> 
                            Group 17 is a team of enthusiastic students from Electronics and Telecommunications Department of Don Bosco Institute of Technology, Mumbai.
                            We took up 'IoT Based Biometric Attendance System Using Cloud Computing' as our Final Year Project and for that we had to develop this Web Application onto which our output data will be reflected.
                            This Web Application is an Online Attendance Recording System in which the attendance of the users will be marked according to their biometric data.
                            We expect our system to be more convenient than the conventional methods currently existing in organisations to record attendance. 
                        </p>
                     </div>
                    <div class="col-12 col-sm-3 allign-self-center">
                    <img src="11.jpg" alt="" class="img-fluid">                    
                </div>    
            </div>
            </div>
     </header>
     <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="ADD_STUDENT.php">Step 1</a></li>
          <li class="breadcrumb-item"><a href="VIEW_ALL_STUDENT.php">Step 2</a></li>
          <li class="breadcrumb-item"><a href="UPDATE_STUDENT.php">Step 3</a></li>  
          <li class="breadcrumb-item"><a href="DELETE_STUDENT.php">Step 4</a></li>  

          <li class="breadcrumb-item active" aria-current="page">About us</li>
        </ol>
      </nav>
     <div class="card">
         <div class="card-header bg-dark text-center text-white">
            <h3>Team Members</h3>
         </div>
         <div class="card-body">
            <div class="container-fluid bg-3 text-center">
                <div class="card-group">
                    <div class="card bg-dark text-white">
                      <img class="card-img-top" src="Sumithra.jpeg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Sumithra Naidu</h5>
                        <p class="card-text ">Final Year student at Department of electronics and Telecommunications Engineering at Don Bosco Institute Of Technology</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-white-muted">Web Designer</small>
                      </div>
                    </div>
                    <div class="card bg-dark text-white">
                    <img class="card-img-top" src="Utkarsh.jpeg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Utkarsh Likhar</h5>
                        <p class="card-text">Final Year student at Department of electronics and Telecommunications Engineering at Don Bosco Institute Of Technology</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-white-muted">FrontEnd Developer</small>
                      </div>
                    </div>
                    <div class="card bg-dark text-white">
                    <img class="card-img-top" src="Aniketh.jpeg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Aniketh Rao</h5>
                        <p class="card-text">Final Year student at Department of electronics and Telecommunications Engineering at Don Bosco Institute Of Technology</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-white-muted">Database Programmer</small>
                      </div>
                    </div>
                    <div class="card bg-dark text-white">
                        <img class="card-img-top" src="Raul.jpeg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Raul Braz</h5>
                          <p class="card-text">Final Year student at Department of electronics and Telecommunications Engineering at Don Bosco Institute Of Technology</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-white-muted">Database & Hardware Designer</small>
                        </div>
                      </div>
                  </div>
            </div>

     </div>

     





      <footer class="footer m-3">
        <br>
          <div class="container">
              <div class="row">             
                  <div class="col-4 offset-1 col-sm-2">
                      <h5>Links</h5>
                      <ul class="list-unstyled">
                          <li><a href="index.php">Home</a></li>
                          <li><a href="https://www.dbit.in/">DBIT</a></li>
                          <li><a href="http://moodle.dbit.in/">Moodle</a></li>
                      </ul>
                  </div>
                  <div class="col-7 col-sm-5">
                      <h5>Our Address</h5>
                      <address>
                          Premier Automobiles Road<br>
                          Opp. HDIL Premier Exotica,<br>
                          Kurla, w, Maharashtra 400070<br>
                        <span class="fa fa-phone fa-lg"></span>:  022 2504 2018<br>
                        <span class="fa fa-envelope fa-lg"></span>: <a href="mailto:dbit@dbit.in">dbit@dbit.in</a>
                     </address>
                  </div>
                  <div class="col-12 col-sm-4 align-self-center">
                      <div class="text-center">
                          <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><span class="fa fa-facebook fa-lg"></span></a>
                          <a class="btn btn-social-icon btn-linkdin" href="http://www.linkedin.com/in/"><span class="fa fa-linkedin fa-lg"></span></a>
                          <a class="btn btn-social-icon btn-twitter"href="http://twitter.com/"><span class="fa fa-twitter fa-lg"></span>r</a>
                          <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><span class="fa fa-youtube fa-lg"></span></a>
                          <a class="btn btn-social-icon" href="mailto:"><span class="fa fa-envelope-o fa-lg"></span></a>
                      </div>
                  </div>
             </div>
             <div class="row justify-content-center">             
                  <div class="col-auto">
                      <p>© Copyright 2021 Group 17 EXTC Dept</p>
                  </div>
             </div>
          </div>
      </footer>
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>