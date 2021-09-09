
<?php


$first_name=$_POST["fname"];
$last_name=$_POST["lname"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$date=$_POST["dd"];
$month=$_POST["nn"];
$year=$_POST["yyyy"];
$username=$_POST["uname"];
$password=$_POST["pword"];

// =======================AUTOMATED====MAIL==================================

$email=$_POST['email'];
$subject = 'Your subject for email';
// $message = 'Body of your message';

$body=("Your name is ".$first_name.$last_name." email is ".$email." phone number is ".$phone. "date of birth is" .$date. $month. $year. "username is" .$username. "password is" .$password);
// mail($email,'HELLO! hope you are doing well',$body,'2020@nsec.ac.in');
// mail($email, $subject, $message);
mail($email, $subject, $body);
  

    

// =====================//AUTOMATED======//MAIL====================================
// echo ("Your name is ".$first_name. " " .$last_name." email is".$email." phone number is ".$phone. "date of birth is" .$date. " ".$month. " ".$year. "username is" .$username. "password is" .$password );

// echo("Your name is ".$first_name. " " .$last_name." email is".$email." phone is ".$mobile);

echo("Your name is ".$first_name.$last_name." email is ".$email." phone number is ".$phone. "date of birth is" .$date. $month. $year. "username is" .$username. "password is" .$password);


$connection=mysqli_connect("localhost","id16678162_debarati_202122","h\p]XE6=nHrkA@Q#","id16678162_debarati_21"); 
//my db name
$insert="INSERT INTO assign130621 SET first_name='$first_name',last_name='$last_name' , email='$email' , phone='$phone',date='$date', month='$month',year='$year',username='$username',password='$password' ";
//my tb name
$connection->query($insert);
?>