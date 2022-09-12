<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/data.css">

<div>
  <h1>Employee Details</h1>
  <h1> USER </h1>

  <form action="<?php echo URLROOT . "pages/main" ?>" method="post">
    <input type="submit" value="Admin"><br><br>
  </form>
  <form action="<?php echo URLROOT . "pages/guest" ?>" method="post">
    <input type="submit" value="Guest">
  </form>

</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>