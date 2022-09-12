<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
  </script>
</head>

<body>


  <form action="<?php echo URLROOT . 'pages/save' ?>" method="post" style="width:30em ; margin-left: 33em;">

    <div class="form-group">
      <label>ID:</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="id" placeholder="ID">
    </div>
    <br>
    <div class="form-group">
      <label>FIRST NAME</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="firstname" placeholder="Firstname">
    </div>
    <br>
    <div class="form-group">
      <label>LAST NAME</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="lastname" placeholder="lastname">
    </div>
    <br>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" eclass="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <br>
    <div class="form-group">
      <label>PHONE NUMBER</label>
      <input type="number" class="form-control" id="exampleInputPassword1" name="phonenumber" placeholder="phonemubner">
    </div>
    <br>
    <div class="form-group">
      <label>STREET</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="street" placeholder="street">
    </div>
    <br>
    <div class="form-group">
      <label>CITY</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="city" placeholder="city">
    </div>
    <br>
    <div class="form-group">
      <label>STATE</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="state" placeholder="state">
    </div>
    <br>

    <div class="form-group">
      <label>country</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="country" placeholder="country">
    </div>
    <br>
    <div class="form-group">
      <label>PHOTOS</label>
      <input type="file" class="form-control" id="exampleInputPassword1" accept="image/jpg, image/jpeg, image/png" name="photo">
    </div>
    <br>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>

</html>