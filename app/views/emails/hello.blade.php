<!--This is a blade template that goes in email message to site administrator-->
<?php
//get the first name
$first_name = Input::get('nome');
$email = Input::get ('email');
$message = Input::get ('message');
$date_time = date("F j, Y, g:i a");
$userIpAddress = Request::getClientIp();
?> 
<p>
Nome: <?php echo ($first_name); ?> <br>
Email address: <?php echo ($email);?> <br>
Message: <?php echo ($message);?><br>

Date: <?php echo($date_time);?><br>
User IP address: <?php echo($userIpAddress);?><br>

</p>