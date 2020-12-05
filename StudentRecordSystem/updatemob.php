<?php
ob_start();
$link=mysqli_connect('localhost','root','');
$db=mysqli_select_db($link,'student_record_system');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
    <script src="jquery-3.5.1.min.js"></script>
    <style>
        <?php include'styles/studentDetails.css';

        ?>* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-wrap: wrap;
            background-color: #060c21;
        }

        .box {
            position: relative;
            width: 100%;
            height: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #060c21;
            margin: 40px;
            border-radius: 8px;
            padding-left: 170px;
        }

        div.card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }


        .box:before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: #fff;
            border-radius: 8px;
            z-index: -1;
        }

        .box:after {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: #fff;
            z-index: -1;
            filter: blur(40px);

        }

        .box .glass {
            position: absolute;
            top: 0%;
            left: 0%;
            width: 25%;
            height: 100%;
            display: block;
            background: rgba(255, 255, 255, .1);
            pointer-events: null;
        }

        .box .content {
            padding: 10px;
            width: 50%;
            color: #fff;
        }

        .navbar-nav .nav-item .nav-link:hover {
            background-color: aquamarine;
            border-radius: 4px;
        }

    </style>
    <title>UPDATE MOBILE NUMBER</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">STUDENT RECORD SYSTEM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="updateStudent.php">Update Your Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="retrieveData.php">Student Data</a>
                </li>

            </ul>

        </div>
    </nav>
    <div class="container">
        <form method="post" action="updatemob.php">
            <div class="box offset-sm-4">
                <div class="glass">
                </div>
                <div class="content">
                    <h2 align="center">UPDATE MOBILE NUMBER</h2><br>
                    <div class="form-group">
                        <label for="regno">Register Number</label>
                        <input type="number" class="form-control" id="regno" name="registerNo" placeholder="Enter your register number" maxlength="7" required>
                        <small id="emailHelp" class="form-text text-muted">Enter your correct register number for update.</small>
                    </div>
                    <div class="form-group">
                        <label for="mobnumber">Mobile Number</label>
                        <input type="tel" class="form-control" name="phone" pattern="^\d{10}$" label="10 digits" placeholder="Enter your mobile number" required>
                    </div>
                    <br>
                    <button type="submit" name="submit" value="Data" class="form-control btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <?php
	if(isset($_POST['submit']))
	{
        $regno=$_POST['registerNo'];
		$mobnumber=$_POST['phone'];
		if($regno!="" && $mobnumber!="") 
		{ 
		   $sql = "UPDATE studentdetails SET phone='$mobnumber' WHERE registerNo='$regno'";
		   if($link->query($sql))
		  { 
			  header('Location: updateSuccessfully.php');
              ob_enf_fluch();
		  }
		   else
		  {
			  header('Location: updatefail.php');
		  }
		}
		else{
			echo "<p><font color=white>ALL FIELDS REQUIRED</font></p>";
		}
	}


?>
</body>

</html>
