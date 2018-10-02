<?php $example = $_POST['example'];
$location = $_POST['location'];
$website = $_POST['website'];
$name = $_POST['name'];
$email = $_POST['email'];
$dropdown = $POST['dropdown'];
$message = $_POST['description'];
$formcontent="Name of Example: $example \n Location: $location \n Website: $website \n Name: $name \n Email: $email \n Chapter: $dropdown \n Description: $message";
$recipient = "p.chatterton@leeds.ac.uk";
$subject = "Unlocking Sustainable Cities Form Submission";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! Click return to go back";
?>
