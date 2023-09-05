<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>form</title>
</head>
<body>

<div class="form-container">
  <form name="contactFormEmail" method="post">
    <div class="input-row">
      <label>Name <em>*</em></label> 
      <input type="text" name="userName" required id="userName"> 
    </div>
    <div class="input-row">
      <label>Email <em>*</em></label> 
      <input type="email" name="userEmail" required id="userEmail"> 
    </div>
    <div class="input-row">
      <label>Phone <em>*</em></label> 
      <input type="text" name="userPhone" required id="userPhone">
    </div>
    <div class="input-row">
      <label>Message <em>*</em></label> 
     <!-- <textarea name="userMessage" required id="userMessage"> -->
    </div>
    <div class="input-row">
      <input type="submit" name="send" value="Submit">
      <?php if (! empty($message)) {?>
      <div class='success'>
        <strong><?php echo $message; ?> </strong>
      </div>
      <?php } ?>
    </div>
  </form>
</div>
</body>
</html>
<?php
if(!empty($_POST["send"])) {
    $userName = $_POST["userName"];
  $userEmail = $_POST["userEmail"];
    $userPhone = $_POST["userPhone"];
    $toEmail = "irnm@irsoft.ae";
  
    $mailHeaders = "Name: " . $userName .
    "\r\n Email: ". $userEmail  . 
    "\r\n Phone: ". $userPhone  . "\r\n";
    

    if(mail($toEmail, $userName, $mailHeaders)) {
        $message = "Your contact information is received successfully.";
    }
}
?>