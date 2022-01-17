<?php

if(isset($_POST['register']))
{
$firstname=$_POST['first-name'];
$lastname=$_POST['last-name'];
$emailmobile=$_POST['email-mobile'];
$password=$_POST['up-password'];
$birthday=$_POST['birth-day'];
$birthmonth=$_POST['birth-month'];
$birthyear=$_POST['birth-year'];
$gender=$_POST['gen'];


echo 'WELCOME' .'    ' .  $firstname.'  '.$lastname.'<br>';
echo '<br>'.'Your First name is  : ' .$firstname .'<br>';
echo 'Your Last Name is  : ' .$lastname .'<br>';
echo "Your Mobile Phone or Email is  : ".$emailmobile .'<br>' ;
echo 'Your Password is  :'  . $password .'<br>';
echo 'Your Birthday is  : ' .$birthday.'/'.$birthmonth.'/'.$birthyear .'<br>';
echo 'Your Gender is  : ' .$gender .'<br>';

}

else {
    echo "error 404";
}

?>