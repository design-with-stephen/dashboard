<?php

// Start session
include('../../auth/sessions.php');

startSession();

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}


// DATABASE CONNECTION

include("../../config/db.php");
$conn = connectDatabase();


// HANDLE FORM SUBMISSION

include("../../functions/upload_image.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Upload</title>
</head>
<body>

<h2>Upload Profile</h2>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="profile_image" required>
    <br><br>
    <button type="submit" name="upload">Upload</button>
</form>

<hr>

<h2>All Users</h2>



</body>
</html>