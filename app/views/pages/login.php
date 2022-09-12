<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/data.css">

<div>
  <form action="<?php echo URLROOT . "pages/login" ?>" method="post">
    <h1>ADMIN DETAILS</h1>
    <p>Enter email</p>
    <input type="email" name="email">
    <p>Password</p>
    <input type="password" name="password"><br><br>
    <?php
    if (isset($_SESSION['err'])) {
      echo  $_SESSION['err'];
    }
    ?>
    <div>
      <input type="submit" value="login">
    </div>
  </form>
</div>