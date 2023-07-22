<html>
    <head>
        <link href="dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
           body{
                background: url("image/img1.jpg");
                background-position: center;
                background-size: cover;
            }
            a{
                font-weight: bold;
                text-decoration: none;
            }
            a:hover{
                text-decoration: none;
                color:blue !important;
            }
            .alert{
                padding:3px 5px;
                margin-bottom:2px;
                font-size: 20px !important;
            }
            hr{
                border-bottom:2px solid black;
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
               <br>
               <br>
               <br>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-4 jumbotron">
                          <h3 class="text-center text-primary">Employee Login</h3>
                          <?php
                            session_start();
                            if(isset($_SESSION['msg'])){
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                            }
                          ?>
                          <hr>
                           <form action="elogincheck.php" method="POST">
                               <div class="row form-group">
                                    <div class="col-lg-4">
                                        <label>Email-id</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="email" name="lemail" class="form-control" required autocomplete="on">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-lg-4">
                                        <label>Password</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="password" name="lpass" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-success btn-block">
                                            Login
                                        </button>
                                        <hr>
                                        <a class="text-warning" href="esignup.php">I am a new user</a>
                                    </div>
                                </div>
                           </form>
                        </div>
                        <div class="col-sm-7"></div>
                    </div>
                </div>
    </body>
</html>