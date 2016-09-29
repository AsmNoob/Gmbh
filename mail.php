<?php 
if(isset($_POST['submit'])){
	echo "Error, you need to submit the form!";
}
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if (empty($name) || empty($email)) {
	echo "Name and email are mandatory!";
	exit;
}

$my_mail = 'super-naheulbeuk@hotmail.com';
$email_subject = "Contact form submission: $name";
 
$email_body = "You have received a new message. ".
 
" Here are the details:\n Name: $name \n ".
 
"Email: $email\n Message \n $message";
 
$headers = "From: $email\n";
 
$headers .= "Reply-To: $my_mail";
 
mail($my_mail,$email_subject,$email_body,$headers);
 
//redirect to the 'thank you' page

// We should add a "thank you for your message we'll answer it asap"page
 
header('Location: home.php');
 
 ?>
