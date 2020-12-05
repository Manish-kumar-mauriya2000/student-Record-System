<?php
// Initialize the session
session_start();
$link=mysqli_connect('localhost','root','');
$db=mysqli_select_db($link,'student_record_system');

?>
<?php
$result = mysqli_query($link,"SELECT * FROM studentdetails");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="jquery-3.5.1.min.js"></script>
    <title>ALL STUDENT RECORD</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        #customer {

            border-collapse: collapse;
            width: 100%;
        }

        #customer td,
        #customer th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        #customer tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customer tr:hover {
            background-color: #ddd;
        }

        #customer th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #4CAF50;
            color: white;
            width: 100%;
        }

        .navbar-nav .nav-item .nav-link:hover {
            background-color: aquamarine;
            border-radius: 4px;
        }

    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">STUDENT RECORD SYSTEM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="updateStudent.php">Update Your Details</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="retrieveData.php">Student Data</a>
                </li>

            </ul>

        </div>
    </nav>
    <?php
if (mysqli_num_rows($result) > 0) {
?>
    <center>
        <h1 style="font: 35px Algerian"> ALL STUDENTS DATA</h1>
    </center>
    <table id="customer">

        <tr>
            <th>S.NO</th>
            <th>Student Name</th>
            <th>Father Name</th>
            <th>Mother Name</th>
            <th>Mobile Number</th>
            <th>Email Address</th>
            <th>Communication Address</th>
            <th>Register Number</th>
            <th>Date of Birth</th>
            <th>Medium</th>
            <th>Blood Group</th>
            <th>Gender</th>
            <th>Nationality</th>
            <th>Mother Tongue</th>
            <th>Community</th>
            <th>Religion</th>
            <th>Caste</th>
            <th>Accomdation</th>
            <th>Transport Number</th>
            <th>Class</th>
            <th>Board</th>

        </tr>
        <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
        <tr>
            <td><?php echo $row["S.No"]; ?></td>
            <td><?php echo $row["student_Name"]; ?></td>
            <td><?php echo $row["fatherName"]; ?></td>
            <td><?php echo $row["MotherName"]; ?></td>
            <td><?php echo $row["phone"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["Address"]; ?></td>
            <td><?php echo $row["registerNo"]; ?></td>
            <td><?php echo $row["dateOfBirth"]; ?></td>
            <td><?php echo $row["Medium"]; ?></td>
            <td><?php echo $row["BloodGroup"]; ?></td>
            <td><?php echo $row["Gender"]; ?></td>
            <td><?php echo $row["Nationality"]; ?></td>
            <td><?php echo $row["MotherTounge"]; ?></td>
            <td><?php echo $row["Community"]; ?></td>
            <td><?php echo $row["Religion"]; ?></td>
            <td><?php echo $row["caste"]; ?></td>
            <td><?php echo $row["Accomodation"]; ?></td>
            <td><?php echo $row["Transport"]; ?></td>
            <td><?php echo $row["class"]; ?></td>
            <td><?php echo $row["board"]; ?></td>


        </tr>
        <?php
$i++;
}
?>
    </table>
    <?php
}
else{
    echo "No data found";
}
?>


</body>

</html>
