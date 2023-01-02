<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];



if (empty($name) || empty($email) )

{
echo "Please fill all the fields";
 }
else
{

mail("albauditha@gmail.com", "modapkaya",  "From: $name < $email>"); 
echo "<script type='text/javascript'>alert('your message sent successfully'); window.history.log(-1); 
</script>";
}
?>