<?php
if($_POST["submit"]) {
  $recipient="p.chatterton@leeds.ac.uk";
  $subject="Unlocking Sustainable Cities Form Submission";
  $example=$_POST["example"];
  $location=$_POST["location"];
  $website=$_POST["website"];
  $sender=$_POST["name"];
  $senderEmail=$_POST["email"];
  $message=$_POST["description"];

  $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

  mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

  $thankYou="<p>Thank you! Your message has been sent.</p>";
}
