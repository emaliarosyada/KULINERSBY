<!DOCTYPE html>
<html>
<body>

<h2>Registration</h2>



<form action="submitform.html" target="_blank">
  <label for="email">Email Address </label><br>
  <input class="form-control" type="email" id="email" name="email" value="" required><br>
  <label for="password">Create Password:</label><br>
  <input type="password" id="password" name="password" value=""><br><br>
  <input type="submit" value="register">

</form> 

<p></p>

<form action="submitform.html" target="_blank">
  <label for="email">Email Address </label><br>
  <input class="form-control" type="email" id="email" name="email" value="" required><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password" value=""><br><br>
  <input type="submit" value="login">

</form> 

</body>
</html>

<?php

  if (isset($_POST['submit'])) {
    $un=$_POST['username'];
    $pw=$_POST['password'];

    if ($un=='username' && $pw=='password'){
        header("location:submitform.html");
    }
  }
?>