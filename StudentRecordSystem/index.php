<?php
// Initialize the session
session_start();
$link=mysqli_connect('localhost','root','');
$db=mysqli_select_db($link,'student_record_system');
// Check if the user is logged in, if not then redirect him to login page

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STUDENT | DETAILS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />

    <style>
        <?php include'styles/studentDetails.css';

        ?>.navbar-nav .nav-item .nav-link:hover {
            background-color: aquamarine;
            border-radius: 4px;
        }

    </style>
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
        <h1 class="brand"><span>STUDENT DETAILS</span></h1>
        <div class="wrapper">
            <div class="company-info">
                <h3></h3>
                <ul>
                    <li><i class="fa fa-road"></i> Student can insert and update his/her details through this website.</li>

                </ul>
            </div>
            <div class="contact">
                <h3>Fill Details</h3>
                <div class="alert">Your message has been registered successfully!</div>
                <form id="studentForm" method="post" action="studentDetailsDb.php">
                    <p>
                        <label>Student Name</label>
                        <input type="text" name="Student_Name" required>
                    </p>
                    <p>
                        <label>Father Name</label>
                        <input type="text" name="fatherName" required>
                    </p>
                    <p>
                        <label>Mother Name</label>
                        <input type="text" name="MotherName" required>
                    </p>
                    <p>
                        <label>Mobile Number</label>
                        <input type="text" name="phone" pattern="^\d{10}$" label="10 digits" required>
                    </p>
                    <p>
                        <label>Email Address</label>
                        <input type="email" name="email" pattern=".+@gmail.com" placeholder="example@gmail.com" required>
                    </p>
                    <p class="full">
                        <label>Communication Address</label>
                        <textarea name="Address" rows="5"></textarea>
                    </p>
                    <p>
                        <label>Register Number</label>
                        <input type="text" name="registerNo" required>
                    </p>
                    <p>
                        <label>Date of Birth</label>
                        <input type="date" name="dateOfBirth" required>
                    </p>
                    <p>
                        <label>Medium</label>
                        <input type="text" name="Medium" placeholder="English/Tamil" required>
                    </p>
                    <p>
                        <label>Blood Group</label>
                        <input type="text" name="BloodGroup" placeholder="B-VE" required>
                    </p>
                    <p>
                        <label>Gender</label>
                        <input type="text" name="Gender" placeholder="Male/Female" required>
                    </p>
                    <p>
                        <label>Nationality</label>
                        <input type="text" name="Nationality" required>
                    </p>
                    <p>
                        <label>Mother Tongue</label>
                        <input type="text" name="MotherTounge" required>
                    </p>
                    <p>
                        <label>Community</label>
                        <input type="text" name="Community" required>
                    </p>
                    <p>
                        <label>Religion</label>
                        <input type="text" name="Religion" required>
                    </p>
                    <p>
                        <label>Caste</label>
                        <input type="text" name="caste" required>
                    </p>
                    <p>
                        <label>Accomodation</label>
                        <input type="text" name="Accomodation" placeholder="Hostel/Dayscholar" required>
                    </p>
                    <p>
                        <label>Transport Number</label>
                        <input type="text" name="Transport" placeholder="102">
                    </p>
                    <p>
                        <label>Class</label>
                        <input type="text" name="class" placeholder="VI" required>
                    </p>
                    <p>
                        <label>Board</label>
                        <input type="text" name="board" required>
                    </p>

                    <p class="full">
                        <input type="submit" value="REGISTER" name="submit" class="btn btn-primary">
                    </p>
                </form>
            </div>
        </div>
    </div>

    <!--    <script src="https://www.gstatic.com/firebasejs/4.3.0/firebase.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>
