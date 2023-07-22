<?php
	session_start();
	if( !isset($_SESSION['id']))
	{
		$_SESSION['msg'] = "<p class='alert alert-danger'>Login to enter</p>";
		header("Location:clogin.php");
	}
    include("dbconfig.php");
    $sql = "select * from eregister order by eid asc";
    $res = mysqli_query($conn,$sql);
?>
<html>
	<head>
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="fontawesome/css/all.css">
        <script src="js/jquery.min.js"></script>
		<style>
            body,html{
                margin:0px;
                padding:0px;
                height: 100%;
                
            }
            section{
                min-height: 46%;
            }
            .row{
                margin:0px;
            }
            .navbar-brand{
                padding:0px 0px 0px 0px;
            }
            .nav-item>a{
                color: white !important;
                margin-right:20px;
                font-weight: bold;
                letter-spacing: 2px;
                transition: color 0.5s;
            }
            .nav-item>a:hover{
                color: #eeff00 !important;
            }
            .nav-item>a#elog{
                color:#ff0000 !important;
                transition: color 0.5s;
            }
            .nav-item>a#elog:hover{
                color:#f7773b !important;
            }
            hr{
                color:black;
                border-bottom: 2px solid black;
                width:50%;
            }
            .jumbotron{
                height:250px;
                width:500px;
                background: darkgray;
                padding: 5px !important;
                display:flex;
                align-items:center;
            }
            .alert{
                position: absolute;
                left:220px;
                top:10px;
            }
            
            .card{
                height:auto;
                width: 150px;
                background: darkgray !important;
                cursor: pointer;
                transition: transform 0.5s;
            }
            .card:hover{
                transform: scale(1.1,1.1);
                box-shadow: 8px 8px 29px -8px gray;
            }
            .card h4{
                color:#4a2c2a;
            }
            .card p{
                color:#00FFFF;
                font-weight: bold;
            }
            .card img{
                height:auto;
                width: 150px;
            }
            span{
                color:white;
            }
            #span1{
                font-size: 16px;
            }
            b{
                color:black;
            }
            #p1,#p2,#p3{
                margin:2px 0px;
                color:white;
            }
            
            
            
            .icon{
                position:fixed;
                top:30%;
                left:0px; 
                width:200px;
                display:flex;
                flex-direction: column;
            }
            .icon a{
                text-decoration:none;
                text-transform: uppercase;
                padding:10px;
                font-size: 19px;
                font-family: 'oswald',sans-serif;
                margin:2px 0px 2px 0px;
                text-align: right;
				border-radius:0px 30px 30px 0px;
				transform:translate(-130px,0px);
				transition:all 1s;
            }
			.icon a:hover{
				color:white;
				transform:translate(0px,0px);
			}
			
            .icon a i{
                margin-left:20px;
                background-color: white;
                height:40px;
                width:40px;
                text-align:center;
                line-height: 40px;
                border-radius: 20px;
                font-size:25px;
				transition:all 1.5s;
            }
			.icon a:hover i{
				transform:rotate(360deg);
			}
            .fb{
                background:#3b5998;
                color:white;
            }
            .tweet{
                background:#00ACEE;
                color:white;
            }
            .insta{
                background:#E1306C;
                color:white;
            }
            .yt{
                background:#FF0000;
                color:white;
            }
            .fa-facebook{
				color:#3b5998;
			}
            .fa-twitter{
				color:#00ACEE;
			}
			.fa-instagram{
				color:#E1306C;
			}
			.fa-youtube{
				color:#FF0000;
			}
            
            footer{
                background: #392A4C;
            }
            footer p{
                color:white;
            }
            #fimg{
                height:50px;
                width:auto;
            }
            hr.light{
                width:95%;
                border-top:1px solid #d5d5d5;
            }
            footer h4{
                margin:27px auto !important;
                color:#FFFF33;
            }
        </style>
	</head>
	<body>
		  <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
                  <a class="navbar-brand" href="#">
                      <img src="image/logo.jpg" height="40px" width="200px">
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#responsive">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="navbar-collapse collapse" id="responsive">
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item">
                              <a class="nav-link" href="chome.php">Home</a>
                          </li>
                           <li class="nav-item">
                              <a class="nav-link" href="caboutus.php">About Us</a> 
                          </li>
                           <li class="nav-item">
                              <a id="elog" class="nav-link" href="logout.php">logout:- <?php echo $_SESSION['name']; ?></a> 
                          </li>
                      </ul>
                  </div>
          </nav>
          <section>
                 <div class="row">
                 <div class="col-lg-1"></div>
                 <div class="col-lg-10">
                   <?php 
                        if(isset($_SESSION['welcome'])){
                            echo $_SESSION['welcome'];
                            unset($_SESSION['welcome']);   
                        }
                     ?>
                     <div class="row">
                        <div class="col-lg-12 text-center">
                          <br>
                          <br>
                          <br>
                          <h1 class="text-center text-primary">About Us</h1>
                          <hr>
                          <p class="lead">
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                          </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                          <br>
                          <br>
                          <br>
                          <h1 class="text-center text-warning">Meet Our Team</h1>
                          <hr>
                          <br>
                        </div>
                    </div>
                    <div class="row">
                      <?php 
                        while($row=mysqli_fetch_object($res)){
                            echo "<div class='col-lg-6 text-center'>";
                            echo "<div class='row text-center'>";
                            echo "<div class='col-lg-12'>";
                            echo "<div class='jumbotron'>";
                            echo "<div class='col-lg-4'>";
                            echo "<div class='card'>";
                            echo "<img class='card-img-top img-thumbnail' src='image/dont-delete/$row->eimg'>";
                            echo "</div>";
                            echo "</div>";
                            echo "<div class='col-lg-8 text-left'>";
                            echo "<h3>Name:- <span>$row->ename;</span></h3>";
                            echo "<h5>Email:- <span id='span1'>$row->eemail</span></h5>";
                            echo "<p id='p1'><b>Education qualification:-</b> $row->eeduqul</p>";
                            echo "<p id='p2'><b>Native:-</b> $row->ecity</p>";
                            echo "<p id='p3''><b>Age:-</b> $row->eage</p>";

                            
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                        }
                      ?>
                     </div>
                    </div>
                 <div class="col-lg-1"></div>
             </div>
             <br>
             <br>
          </section>
          <footer>
              <div class="row">
                  <div class="col-lg-1"></div>
                  <div class="col-lg-10 text-center">
                      <div class="row">
                          <div class="col-lg-4">
                               <hr class="light">
                               <img id="fimg" src="image/logo.jpg">
                                <hr class="light">
                                <p>+94-765-5566</p>
                                <p>email@myemail.com</p>
                                <p>100,Sri Jayawardenapura</p>
                                <p>Colombo,Western Province,00130</p>
                          </div>
                          <div class="col-lg-4">
                              <hr class="light">
                              <h4>Our hours</h4>
                              <hr class="light">
                              <p>Monday: 9am - 5pm</p>
                              <p>Saturday: 10am - 4pm</p>
                              <p>Sunday: closed</p>
                          </div>
                          <div class="col-lg-4">
                              <hr class="light">
                              <h4>Our Branches</h4>
                              <hr class="light">
                              <p>Anuradhapura, North Center Province, 50000</p>
                              <p>Galle, Southern Province, 80000</p>
                              <p>Kandy, Central Province, 20000</p>
                              <p>Nuwara Eliya, Central Province, 22200</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-1"></div>
              </div>
          </footer>
          <div class="icon">
              <a href="https://www.facebook.com/" target="_blank" class="fb">Facebook<i class="fab fa-facebook"></i></a>
              <a href="https://www.twitter.com/" target="_blank" class="tweet">Tweeter<i class="fab fa-twitter"></i></a>
              <a href="https://www.instagram.com/" target="_blank" class="insta">Instagram<i class="fab fa-instagram"></i></a>
              <a href="https://www.youtube.com/" target="_blank" class="yt">Youtube<i class="fab fa-youtube"></i></a>
          </div>
    </body>
</html>