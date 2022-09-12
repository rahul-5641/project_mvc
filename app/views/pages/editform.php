<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/data.css">
<h1> Update details</h1>
       <div>
              <form action="<?php echo URLROOT . 'Pages/updatedEntry' ?>" method="post">
                     <input style="display: none;" type="number" name="id" value='<?php echo $data->empid ?>'><br><br><br>
                     <p>First Name</p>
                     <input type="text" name="firstname" value='<?php echo $data->firstname ?>'><br>
                     <p>Last Name</p>
                     <input type="text" name='lastname' value='<?php echo $data->lastname ?>'><br>
                     <p>Email</p>
                     <input type="email" name="email" value='<?php echo $data->email ?>'><br>
                     <p>phonenumber</p>
                     <input type="tel" minlength="10" maxlength="10" name="phonenumber" value='<?php echo $data->phonenumber ?>'><br>
                     <p>Street</p>
                     <input type="text" name="street" value='<?php echo $data->street ?>'><br>
                     <p>City</p>
                     <input type="text" name="city" value='<?php echo $data->city ?>'><br>
                     <p>State</p>
                     <input type="text" name="state" value='<?php echo $data->state ?>'><br>
                     <p>Country</p>
                     <input type="text" name="country" value='<?php echo $data->country ?>'><br>
                     <p>File</p>
                     <input type="file" name="file" value=<img src="<? echo '../public/img/' . $data->photo ?>" width="100px" height="100px"><br>
                     <button type="submit">submit</button>
              </form>
       </div>
      