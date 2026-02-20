<?php
include 'db.php';

// Delete appointment
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn,"DELETE FROM appointments WHERE id=$id");
    header("Location: admin.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f4f6f9;">

<nav class="navbar navbar-dark bg-dark p-3">
<div class="container">
<h4 class="text-white">🏥 Admin Dashboard</h4>
<a href="index.php" class="btn btn-light">Back to Home</a>
</div>
</nav>

<div class="container mt-5">

<h3 class="mb-4">All Appointments</h3>

<table class="table table-bordered table-striped shadow">
<tr class="table-dark">
<th>ID</th>
<th>Patient</th>
<th>Mobile</th>
<th>Doctor</th>
<th>Date</th>
<th>Slot</th>
<th>Report</th>
<th>Action</th>
</tr>

<?php
$result = mysqli_query($conn,"SELECT * FROM appointments ORDER BY id DESC");

while($row = mysqli_fetch_assoc($result)){
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['patient_name']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td><?php echo $row['doctor_name']; ?></td>
<td><?php echo $row['appointment_date']; ?></td>
<td><?php echo $row['time_slot']; ?></td>

<td>
<?php if($row['report_file']){ ?>
<a href="uploads/<?php echo $row['report_file']; ?>" target="_blank" class="btn btn-sm btn-info">View</a>
<?php } else { echo "No File"; } ?>
</td>

<td>
<a href="admin.php?delete=<?php echo $row['id']; ?>" 
class="btn btn-sm btn-danger"
onclick="return confirm('Are you sure?')">
Delete
</a>
</td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>
