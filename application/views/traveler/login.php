<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>CodePen - Log-in</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/compressedCss.css">

</head>

<body>

  <div class="login-card">
    <h1>Log-in</h1><br>
  <form method="post" action="<?php echo base_url();?>backOffice.html">
    <input type="text" name="log" placeholder="Username">
    <input type="password" name="pass" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>

  <div class="login-help">
   <?php $err=$this->input->get('err');  if($err!=null && $err=='1'){ ?>
					<p style="color:red;font-size: 18px;">Login or pass not valid</p>
				 <?php } ?>
    
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>