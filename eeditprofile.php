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
    }
?>
<html>
	<head>
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
		<style>
            body,html{
                margin:0px;
                padding:0px;
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
            table{
                width:70% !important;
                margin:auto;
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
                          <h2 class="text-success">Edit Profile</h2>
                       </div>
                     </div>
                       <div class="row">
                        <div class="col-lg-12">
                           <?php  
                                if(isset($_SESSION['upmsg']))
                                {
                                    echo $_SESSION['upmsg'];
                                    unset($_SESSION['upmsg']);
                                }
                            ?>
                            <form action="eupdateprofile.php" method="POST" enctype="multipart/form-data">
                                 <table class="table table-bordered table-hover">
                                    <tr>
                                        <th>Name</th>
                                        <td><input type="text" class="form-control" value="<?php echo $row->ename?>" name="ename" required></td>
                                    </tr>
                                    <tr>
                                        <th>Mobile</th>
                                        <td><input type="tel" class="form-control" value="<?php echo $row->emobile?>" name="emobile" required></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><input type="email" class="form-control" value="<?php echo $row->eemail?>" name="eemail" required></td>
                                    </tr>
                                    <tr>
                                        <th>Your Recent Images</th>
                                        <td><input type="file" class="form-control" name="eimg" required></td>
                                    </tr>
                                    <tr>
                                        <th>Age</th>
                                        <td><input type="number" class="form-control" value="<?php echo $row->eage?>" name="eage" required></td>
                                    </tr>
                                    <tr>
                                        <th>Date of birth</th>
                                        <td><input type="date" class="form-control" value="<?php echo $row->edob?>" name="edob" required></td>
                                    </tr>
                                    <tr>
                                        <th>Gender</th>
                                        <td>
                                            <input type="radio" name="egen" value="male" required checked> Male
                                            <input type="radio" name="egen" value="female" required> Female
                                            <input type="radio" name="egen" value="other" required> other
                                        </td>
                                    </tr>
									<tr>
                                        <th>City</th>
                                        <td><input type="text" class="form-control" value="<?php echo $row->ecity?>" name="ecity" required></td>
                                    </tr>
                                    <tr>
                                        <th>State</th>
                                        <td><input type="text" class="form-control" value="<?php echo $row->estate?>" name="estate" required></td>
                                    </tr>
                                    <tr>
                                        <th>Nationality</th>
                                        <td><input type="text" class="form-control" value="<?php echo $row->enation?>" name="enation" required></td>
                                    </tr>
                                    <tr>
                                        <th>Marital status</th>
                                        <td>
                                            <select name="emstatus" class="form-control">
                                                <option>choose</option>
                                                <option value="single">Single</option>
                                                <option value="Married">Married</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Education Qualification</th>
                                         <td><input type="text" class="form-control" value="<?php echo $row->eeduqul?>" name="eeduqul" required></td>
                                    </tr>
                                    <tr>
                                        <th>Year of Joining</th>
                                        <td><input type="text" class="form-control" value="<?php echo $row->eyoj?>" name="eyoj" required></td>
                                    </tr>
                                    <tr>
                                        <th>Year of Experiences</th>
                                        <td><input type="number" class="form-control" value="<?php echo $row->eexp?>" name="eexp" required></td>
                                    </tr>
                                    <tr>
                                        <th colspan="2"><button type="submit" class="btn btn-block btn-success">Update</button></th>
                                    </tr>
                                 </table>
                             </form>
                        </div>
                        </div>
                    </div>
                 <div class="col-lg-2"></div>
             </div>
             <br>
             <br>
          </section>
    </body>
</html>