<?php
// variable setting
$fname = $-REQUEST['Enter Your First Name'];
$lname = $-REQUEST['Enter Your Last Name'];
$email = $-REQUEST['Enter Your Email'];
$message = $-REQUEST['Enter Message'];

//check input fields

if (empty($name) || empty($email) || empty($message))
{
    echo "Please fill all the fields";
}
else
{
  mail("aditi12489@gmail.com", "Webtech Message", $message ,"From: $name < $email>"); 
    echo <script type='text/javascript'>alert('your message sent successfully')
    window.history.log(-1);
    </script>;
}
?>