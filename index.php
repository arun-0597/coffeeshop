<html>
    <head>
        <link href="dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
           body{
                background: url("image/img1.jpg");
                background-position: center;
                background-size: cover;
            }
           .jumbotron h3{
                color:#BE8CFF;
            }
            .jumbotron{
                border:1px solid black;
                padding:100px 50px !important;
                background: #392A4C;
                transition: box-shadow 0.5s;
            }
            .jumbotron:hover{
                box-shadow: 8px 8px 29px -8px black;
                cursor: pointer;
            }
            a{
                text-decoration: none !important;
            }
        </style>
    </head>
    <body>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
            <div class="container-fluid">
                <div class="row">
					<div class="col-lg-1"></div>
					<div class="col-lg-10">
						<div class="row text-center">
						   <div class="col-lg-1"></div>
							<div class="col-lg-5">
								<a href="clogin.php">
									<div class="jumbotron">
										<h3>I am a Customer</h3>
									</div>
								</a>
							</div>

							<div class="col-lg-5">
							   <a href="elogin.php">
									<div class="jumbotron">
										<h3>I am a Employee</h3>
									</div>
								</a>
							</div>
							<div class="col-lg-1"></div>
						</div>
					</div>
					<div class="col-lg-1"></div>
				</div>
            </div>
    </body>
</html>