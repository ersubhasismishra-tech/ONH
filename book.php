<?php
include 'db.php';

$name = $_POST['patient_name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$doctor = $_POST['doctor_name'];
$date = $_POST['appointment_date'];
$slot = $_POST['time_slot'];

$check = mysqli_query($conn,"SELECT * FROM appointments 
WHERE appointment_date='$date' AND time_slot='$slot'");

if(mysqli_num_rows($check)>0){
    echo "<script>alert('Slot Already Booked');window.location='index.php';</script>";
    exit();
}

$report_name = $_FILES['report']['name'];
$target = "uploads/".$report_name;
move_uploaded_file($_FILES['report']['tmp_name'],$target);

mysqli_query($conn,"INSERT INTO appointments
(patient_name,mobile,email,doctor_name,appointment_date,time_slot,report_file)
VALUES('$name','$mobile','$email','$doctor','$date','$slot','$report_name')");

echo "<script>alert('Appointment Booked Successfully');window.location='index.php';</script>";
?>
