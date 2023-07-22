<?php
	session_start();
	if( !isset($_SESSION['id']))
	{
		$_SESSION['msg'] = "<p class='alert alert-danger'>Login to enter</p>";
		header("Location:elogin.php");
	}
    $eid=$_SESSION['id'];
    include("dbconfig.php");
    $sql = "select * from eregister where eid='$eid'";
    $rel = mysqli_query($conn,$sql);
    if($rel==true){
        $row = mysqli_fetch_object($rel);
        $_SESSION['eexp'] = $row->eexp;
        $eexp = $_SESSION['eexp'];
    }
?>
<html>
	<head>
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
		<style>
            body,html{
                margin:0px;
                padding:0px;
                width:100%;
                background: #e3faf9;
            }
            .row{
                margin-right:0px;
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
            #imgdiv{
                text-align: center !important;
                height:auto;
                width:350px;
                margin:auto;
                padding:25px 0px;
            }
            #imgdiv img{
                border-radius:50px;
            }
            table{
                width:70% !important;
                margin:auto;
            }
            a{
                text-decoration: none !important;
                
            }
            #popup{
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
            #popup-content{
                height:250px;
                width:500px;
                background:#fff;
                padding: 20px;
                border-radius: 10px;
                position: relative;
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
                              <a class="nav-link" href="eprofile.php">Profile</a> 
                          </li>
                           <li class="nav-item">
                              <a class="nav-link" href="eeditprofile.php">Edit Profile</a> 
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
                    <div class="row">
                       <div class="col-lg-12 text-center">
                          <br>
                          <br>
                          <br>
                          <h2 class="text-success">Profile:- <i class="text-primary"><?php echo $_SESSION['name'] ?></i></h2>
                           <div class="" id="imgdiv">
                                <img src="image/dont-delete/<?php echo $row->eimg ?>" width="200px" class="img-thumbnail">
                            </div>
                       </div>
                     </div>
                       <div class="row">
                        <div class="col-lg-12">
                             <table class="table table-bordered table-hover">
                                <tr>
                                    <th>Name</th>
                                    <td><?php echo $row->ename ?></td>
                                </tr>
                                <tr>
                                    <th>Mobile</th>
                                    <td><?php echo $row->emobile ?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?php echo $row->eemail ?></td>
                                </tr>
                                <tr>
                                    <th>Age</th>
                                    <td><?php echo $row->eage ?></td>
                                </tr>
                                <tr>
                                    <th>Date of birth</th>
                                    <td><?php echo $row->edob ?></td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td><?php echo $row->egender ?></td>
                                </tr>
								<tr>
                                    <th>City</th>
                                    <td><?php echo $row->ecity ?></td>
                                </tr>
                                <tr>
                                    <th>State</th>
                                    <td><?php echo $row->estate ?></td>
                                </tr>
                                <tr>
                                    <th>Nationality</th>
                                    <td><?php echo $row->enation ?></td>
                                </tr>
                                <tr>
                                    <th>Marital status</th>
                                    <td><?php echo $row->emstatus ?></td>
                                </tr>
                                <tr>
                                    <th>Education Qualification</th>
                                    <td><?php echo $row->eeduqul ?></td>
                                </tr>
                                <tr>
                                    <th>Year of Joining</th>
                                    <td><?php echo $row->eyoj ?></td>
                                </tr>
                                <tr>
                                    <th>Year of Experiences</th>
                                    <td><?php echo $row->eexp ?></td>
                                </tr>
                             </table>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <a href="eeditprofile.php"><button onclick="hello()" class="btn btn-warning btn-block">Edit My Profile</button></a>
                            </div>
                            <div class="col-lg-3"></div>
                        </div>
                    </div>
                 <div class="col-lg-2"></div>
             </div>
             <br>
             <br>
          </section>
          <div id="popup">
              <div id="popup-content">
                    <h2 class="text-danger">We need more information about you...</h2>
                    <h4 class="text-info">Please fill the form</h4>
                    <br>
                    <a href="eeditprofile.php"><button type="button" class="btn btn-success btn-lg">Update information</button></a>
              </div>
          </div>
          <script type="text/javascript">
                var exp = "<?php echo $eexp ?>";
                if(exp==""){
                    document.getElementById("popup").style.display = "flex";
                }
         </script>
    </body>
</html>