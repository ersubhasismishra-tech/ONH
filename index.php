<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Nursing Home</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-dark bg-primary p-3">
    <div class="container">
        <h3 class="text-white">🏥 My Nursing Home</h3>
        <a href="admin.php" class="btn btn-light">Admin</a>
    </div>
</nav>

<div class="container mt-5">
<h2 class="text-center mb-4">Book Appointment</h2>

<form action="book.php" method="POST" enctype="multipart/form-data" class="shadow p-4">

<div class="row">
<div class="col-md-6">
<label>Patient Name</label>
<input type="text" name="patient_name" class="form-control" required>
</div>

<div class="col-md-6">
<label>Mobile</label>
<input type="text" name="mobile" class="form-control" required>
</div>
</div>

<div class="row mt-3">
<div class="col-md-6">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="col-md-6">
<label>Select Doctor</label>
<select name="doctor_name" class="form-control" required>
<option value="">Choose Doctor</option>
<option>Dr. Sharma</option>
<option>Dr. Das</option>
<option>Dr. Patel</option>
</select>
</div>
</div>

<div class="row mt-3">
<div class="col-md-6">
<label>Date</label>
<input type="date" name="appointment_date" class="form-control" required>
</div>

<div class="col-md-6">
<label>Time Slot</label>
<select name="time_slot" class="form-control" required>
<option>10:00 AM</option>
<option>10:30 AM</option>
<option>11:00 AM</option>
<option>11:30 AM</option>
<option>12:00 PM</option>
</select>
</div>
</div>

<div class="mt-3">
<label>Upload Previous Report (PDF/JPG)</label>
<input type="file" name="report" class="form-control">
</div>

<button type="submit" class="btn btn-primary mt-4 w-100">Book Now</button>

</form>
</div>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/919XXXXXXXXX" class="whatsapp" target="_blank">
💬
</a>

</body>
</html>
