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
            background: black;
        }

        .box {
            position: relative;
            width: 300px;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #060c21;
            margin: 40px;
            border-radius: 8px;
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

        .box:nth-child(3):before,
        .box:nth-child(3):after {
            background: linear-gradient(235deg, #89ff00, #010615, #00bcd4);
            border-radius: 8px;
        }

        .box:nth-child(4):before,
        .box:nth-child(4):after {
            background: linear-gradient(235deg, #ff005e, #010615, #00bcd4);
            border-radius: 8px;
        }

        .box:nth-child(5):before,
        .box:nth-child(5):after {
            background: linear-gradient(235deg, #772aff, #010615, #00bcd4);
            border-radius: 8px;
        }

        .box:nth-child(6):before,
        .box:nth-child(6):after {
            background: linear-gradient(235deg, #89ff00, #010615, #00bcd4);
            border-radius: 8px;
        }

        .box .glass {
            position: absolute;
            top: 0%;
            left: 0%;
            width: 50%;
            height: 100%;
            display: block;
            background: rgba(255, 255, 255, .1);
            pointer-events: null;
        }

        .box .content {
            padding: 20px;
            color: #fff;

        }

        h2 {
            text-align: center;
            font-family: algerian;
        }

        p {
            font-family: algerian;
        }

        h1 {
            text-align: center;
            font-family: algerian;
            border-style: inset;
            width: 100%;
            color: white;
            background: green;
        }

        .navbar-nav .nav-item .nav-link:hover {
            background-color: aquamarine;
            border-radius: 4px;
        }

    </style>
    <title>Cards</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">STUDENT RECORD SYSTEM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="updateStudent.php">Update Your Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="retrieveData.php">Retrieve Data</a>
                </li>

            </ul>

        </div>
    </nav>

    <h1> Update your Personal details from this webpage</h1>
    <br>
    <div class="box">
        <div class="glass">
        </div>
        <div class="content">
            <h2>Update Mobile number</h2>
            <br>
            <br>
            <p>The student can update their mobilenumber
                By clicking on the below button.</p>

            <br>
            <br>
            <button type="button" onclick="location.href='updatemob.php'" class="btn btn-success btn-lg btn-block">Update Personal</button>
        </div>
    </div>
    <div class="box">
        <div class="glass"></div>
        <div class="content">
            <h2>Update Transport</h2>
            <br>
            <br>
            <p>The student can update their bus number
                By clicking on the below button.</p>
            <br>
            <br>
            <button type="button" onclick="location.href='updatetrans.php'" class="btn btn-success btn-lg btn-block">Update Transport</button>
        </div>
    </div>
    <div class="box">
        <div class="glass"></div>
        <div class="content">
            <h2>Update Accomodation</h2>
            <br>
            <br>
            <p>The student can update their accomodation details
                By clicking on the below button.</p>
            <br>
            <br>
            <button type="button" onclick="location.href='updateaccom.php'" class="btn btn-success btn-lg btn-block">Update Accomodation</button>
        </div>
    </div>
    <div class="box">
        <div class="glass"></div>
        <div class="content">
            <h2>Update Email Id</h2>
            <br>
            <br>
            <p>The student can update their email address
                By clicking on the below button.</p>
            <br>
            <br>
            <button type="button" onclick="location.href='updateemail.php'" class="btn btn-success btn-lg btn-block">Update Email id</button>
        </div>
    </div>
</body>

</html>
