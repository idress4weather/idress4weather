<?php



// submitted to server through form

// build the email message by using
// info received by the HTML form
/*$msg = 'Name: ' .$_POST['name'] ."\n"
	'Email: ' .$_POST['email'] ."\n"
	'Phone: ' ."\n" .$_POST['phone'];

// send email using PHP's built in 
// command, mail()
mail('innadanylevska@gmail.com', 
	'idress4weatherTHESAME', $msg);

// redirect to the thank you page
header('location: contact-us-thank-you.html');

// exit this script - just to make sure nothing else gets run
exit(0);
*/



// Emails form data to you and the person submitting the form
// This version requires no database.
// Set your email below
$myemail = "innadanylevska@gmail.com"; // Replace with your email, please

// Receive and sanitize input
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// set up email
$msg = "New contact form submission!\nName: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nEmail: " . $email;
$msg = wordwrap($msg,70);
mail($myemail,"idress4weatherTHESAME",$msg);
mail($email,"Thank you for your form submission",$msg);
echo 'Thank you for your submission.  Please <a href="dressing.php">Click here to return to our homepage.';

?>
