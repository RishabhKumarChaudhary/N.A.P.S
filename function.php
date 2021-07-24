<?php 
include 'connect.php';

if(isset($_POST["okay"])){
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $email = $_POST['email'];
  $profession = $_POST['profession'];
  $message = $_POST['message'];

  $sql = "INSERT INTO contactus (fname,lname,email,profession,message,datetime) VALUES ('$fname','$lname','$email','$profession','$message',current_timestamp())";

if($conn->query($sql) === true ) {
  echo "<script>alert('We will reach out to you shortly.')</script>";
}
else {
  echo "Error: ";
}
  $conn->close();

} 
?>
<a href="contactus.php">
<button class="btn btn-danger">Go Back</button>
</a>