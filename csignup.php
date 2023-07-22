<html>
	<head>
		<link rel="stylesheet" href="dist/css/bootstrap.css">
		<style>
            body{
                background: url("image/img1.jpg");
                background-position: center;
                background-size: cover;
            }
            hr{
                border-bottom: 2px solid black;
            }
            .alert{
                padding:3px 5px;
                margin-bottom:2px;
            }
			 a{
                font-weight: bold;
                text-decoration: none;
                font-size:18px;
            }
            a:hover{
                text-decoration: none;
                color:blue !important;
            }
            .jumbotron{
                transition: box-shadow 0.5s;
            }
            .jumbotron:hover{
                box-shadow: 0px 2px 10px 2px red;
            }
		</style>
	</head>
	<body>
        <br>
       <br>
       <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-5 jumbotron">
                  <h2 class="text-center text-success">Customer Register</h2>
                  <?php
                    session_start();
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                  ?>
                  <hr>
                   <form action="csaveuser.php" method="POST">
                       <div class="row form-group">
                            <div class="col-lg-4">
                                <label>Name</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-4">
                                <label>Mobile Number</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="tel" name="tel" class="form-control" required>
                            </div>
                        </div>
                       <div class="row form-group">
                            <div class="col-lg-4">
                                <label>Email-id</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-4">
                                <label>Password</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="password" name="pass" class="form-control" required>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-success btn-block">
                                    Register
                                </button>
                                <hr>
                                <a class="text-warning" href="clogin.php">I have a account</a>
                            </div>
                        </div>
                        
                   </form>
                </div>
                <div class="col-lg-6"></div>
            </div>
        </div>
	</body>
</html>