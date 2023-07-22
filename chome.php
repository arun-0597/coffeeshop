<?php
	session_start();
	if( !isset($_SESSION['id']))
	{
		$_SESSION['msg'] = "<p class='alert alert-danger'>Login to enter</p>";
		header("Location:clogin.php");
	}
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
            .alert{
                position: absolute;
                left:220px;
                top:10px;
            }
            span{
                color:red;
            }
            .jumbotron{
                padding:10px 0px 0px 0px;
                background: white;
            }
            .jumbotron img{
                border:10px solid darkgray;
            }
            .card{
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
                height:200px;
            }
            .popup{
                background: rgba(0,0,0,0.6);
                width:100%;
                height:100%;
                position:absolute;
                display: none;
                top:0px;
                justify-content: center;
                align-items: center;
                text-align:center;
            }
            .popup-window{
                border:5px solid black;
                height:500px;
                width:300px;
                background:#fff;
                padding: 20px;
                border-radius: 10px;
                position: relative;
            }
            .popup input{
                margin-bottom: 10px;
            }
            .fa-window-close{
                position: absolute;
                top:2px;
                left:252px;
                cursor: pointer;
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
                 <div class="col-lg-2"></div>
                 <div class="col-lg-8">
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
                           <h1 class="text-primary">Click To order</h1>
                           <hr>
                          <br>
                          <div class="row">
                              <div class="col-lg-4">
                                  <div class="card" onclick="block1('img1.jpg','Cappuccino Coffee',179)">
                                      <img class="card-img-top" src="image/coffee/img1.jpg" class="img-responsive">
                                      <div class="card-body">
                                          <h4 class="card-title">Cappuccino Coffee</h4>
                                          <p class="card-text">
                                              Price:- RS 179
                                          </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4">
                                  <div class="card" onclick="block1('img2.jpg','Red eye Coffee','139')">
                                      <img class="card-img-top" src="image/coffee/img2.jpg" class="img-responsive img-fluid">
                                      <div class="card-body">
                                          <h4 class="card-title">Red eye Coffee</h4>
                                          <p class="card-text">
                                              Price:- RS 139
                                          </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4">
                                  <div class="card" onclick="block1('img3.jpg','Nescafe Coffee','69')">
                                      <img class="card-img-top" src="image/coffee/img3.jpg" class="img-responsive">
                                      <div class="card-body">
                                          <h4 class="card-title">Nescafe Coffee</h4>
                                          <p class="card-text">
                                              Price:- RS 69
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <br>
                          <div class="row">
                              <div class="col-lg-4">
                                  <div class="card" onclick="block1('img4.jpg','Bru Coffee','49')">
                                      <img class="card-img-top" src="image/coffee/img4.jpg" class="img-responsive">
                                      <div class="card-body">
                                          <h4 class="card-title">Bru Coffee</h4>
                                          <p class="card-text">
                                              Price:- RS 49
                                          </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4">
                                  <div class="card" onclick="block1('img5.jpg','Luwak Coffee','89')">
                                      <img class="card-img-top" src="image/coffee/img5.jpg" class="img-responsive img-fluid">
                                      <div class="card-body">
                                          <h4 class="card-title">Luwak Coffee</h4>
                                          <p class="card-text">
                                              Price:- RS 89
                                          </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4">
                                  <div class="card" onclick="block1('img6.jpg','Kicking Coffee','139')">
                                      <img class="card-img-top" src="image/coffee/img6.jpg" class="img-responsive">
                                      <div class="card-body">
                                          <h4 class="card-title">Kicking Coffee</h4>
                                          <p class="card-text">
                                              Price:- RS 139
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <br>
                          <div class="row">
                              <div class="col-lg-4">
                                  <div class="card" onclick="block1('img7.jpg','Milk Coffee','69')">
                                      <img class="card-img-top" src="image/coffee/img7.jpg" class="img-responsive">
                                      <div class="card-body">
                                          <h4 class="card-title">Milk Coffee</h4>
                                          <p class="card-text">
                                              Price:- RS 69
                                          </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4">
                                  <div class="card" onclick="block1('img8.jpg','Drip Coffee','99')">
                                      <img class="card-img-top" src="image/coffee/img8.jpg" class="img-responsive img-fluid">
                                      <div class="card-body">
                                          <h4 class="card-title">Drip Coffee</h4>
                                          <p class="card-text">
                                              Price:- RS 99
                                          </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4">
                                  <div class="card" onclick="block1('img9.jpg','Iced Coffee','79')">
                                      <img class="card-img-top" src="image/coffee/img9.jpg" class="img-responsive">
                                      <div class="card-body">
                                          <h4 class="card-title">Iced Coffee</h4>
                                          <p class="card-text">
                                              Price:- RS 79
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <br>
                          <div class="row">
                              <div class="col-lg-4">
                                  <div class="card" onclick="block1('img10.jpg','Black Coffee','49')">
                                      <img class="card-img-top" src="image/coffee/img10.jpg" class="img-responsive">
                                      <div class="card-body">
                                          <h4 class="card-title">Black Coffee</h4>
                                          <p class="card-text">
                                              Price:- RS 49
                                          </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4">
                                  <div class="card" onclick="block1('img11.jpg','Filter Coffee','169')">
                                      <img class="card-img-top" src="image/coffee/img11.jpg" class="img-responsive img-fluid">
                                      <div class="card-body">
                                          <h4 class="card-title">Filter Coffee</h4>
                                          <p class="card-text">
                                              Price:- RS 169
                                          </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4">
                                  <div class="card" onclick="block1('img12.jpg','Valentine Coffee','199')">
                                      <img class="card-img-top" src="image/coffee/img12.jpg" class="img-responsive">
                                      <div class="card-body">
                                          <h4 class="card-title">Valentine Coffee</h4>
                                          <p class="card-text">
                                              Price:- RS 199
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                       </div>
                     </div>
                    </div>
                 <div class="col-lg-2"></div>
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
          
          <div class="popup">
            <div class="popup-window">
                <div class="jumbotron">
                    <span class="fa fa-window-close fa-2x" onclick="block2()"></span>
                    <img id="img" height="200px" width="200px" class="img-responsive">
                    <br>
                    <br>
                    <h2 class="text-info" id="title"></h2>
                    <h4 id="price"></h4>
                    <input type="text" placeholder="Location">
                    <select>
                        <option>choose quantity</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                    
                    <br>
                    <br>
                    <button type="button" class="btn btn-success btn-lg" onclick="block2(),order()">Order Now</button>
                </div>
            </div>
          </div>
          <div class="icon">
              <a href="https://www.facebook.com/" target="_blank" class="fb">Facebook<i class="fab fa-facebook"></i></a>
              <a href="https://www.twitter.com/" target="_blank" class="tweet">Tweeter<i class="fab fa-twitter"></i></a>
              <a href="https://www.instagram.com/" target="_blank" class="insta">Instagram<i class="fab fa-instagram"></i></a>
              <a href="https://www.youtube.com/" target="_blank" class="yt">Youtube<i class="fab fa-youtube"></i></a>
          </div>
          <script>
            function block1(photo,name,price){
                var image = photo;
                var name = name;
                var price = price;
                var wH = $(window).height();
                $('.popup').css({height: wH});
                document.getElementById("img").src="image/coffee/"+photo;
                document.getElementById("title").innerText=name;
                document.getElementById("price").innerText="Price:- "+price;
                document.querySelector(".popup").style.display="flex";
            }
            function block2(){
                document.querySelector(".popup").style.display="none";
            }
            function order(){
                alert("your order successfully placed... we will deliver soon")
            }
        </script>
    </body>
</html>