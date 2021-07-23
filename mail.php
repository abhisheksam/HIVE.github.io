<?php

//get data from form  

$name = $_POST['name'];

$email= $_POST['email'];

$number= $_POST['number'];

$message= $_POST['message'];

// 

$to = "mkm16207@gmail.com";  

$subject = "Mail From THE BAKER'S TALE";

$txt = "Name = ". $name . "\r\n  Email = " . $email . "\r\n Message = " . $message . "\r\n Number = " . $number;

$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";


if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>