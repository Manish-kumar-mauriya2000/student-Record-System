<?php
$link=mysqli_connect('localhost','root','');
$db=mysqli_select_db($link,'student_record_system');
if(isset($_POST['submit'])){
   $Student_Name=$_POST['Student_Name'];
    $fatherName=$_POST['fatherName'];
    $MotherName=$_POST['MotherName'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $Address=$_POST['Address'];
    $registerNo=$_POST['registerNo'];
    $dateOfBirth=$_POST['dateOfBirth'];
    $Medium=$_POST['Medium'];
    $BloodGroup=$_POST['BloodGroup'];
    $Gender=$_POST['Gender'];
    $Nationality=$_POST['Nationality'];
    $MotherTounge=$_POST['MotherTounge'];
    $Community=$_POST['Community'];
    $Religion=$_POST['Religion'];
    $caste=$_POST['caste'];
    $Accomodation=$_POST['Accomodation'];
    $Transport=$_POST['Transport'];
    $class=$_POST['class'];
    $board=$_POST['board'];
    $result=mysqli_query($link,"insert into studentdetails(Student_Name,fatherName,MotherName,phone,email,Address,registerNo,dateOfBirth,Medium,BloodGroup,Gender,Nationality,MotherTounge,Community,Religion,caste,Accomodation,Transport,class,board) values('$Student_Name','$fatherName','$MotherName','$phone','$email','$Address','$registerNo','$dateOfBirth','$Medium','$BloodGroup','$Gender','$Nationality','$MotherTounge','$Community','$Religion','$caste','$Accomodation','$Transport','$class','$board')");
   if($result==true){
       header('Location: thanku.php');
    
    }
   else{
       echo"Unable to insert. Try again!!";
   }
}
?>
