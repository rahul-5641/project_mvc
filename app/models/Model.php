<?php
class Model extends Database
{
    public function insert($postData)
    {
        $id = $postData['empid'];
        $fname = $postData['firstname'];
        $lname = $postData['lastname'];
        $email = $postData['email'];
        $phonenumber = $postData['phonenumber'];
        $street = $postData['street'];
        $city = $postData['city'];
        $state = $postData['state'];
        $country = $postData['country'];

        $photo = $postData['photo'];


        $this->query("INSERT INTO employee(empid,firstname,lastname,email,phonenumber,street,city,state,country,photo)values('$id','$fname','$lname','$email','$phonenumber','$street','$city','$state','$country','$photo')");
        $this->execute();
    }

    public function allDetails()

    {
        $this->query("select * from employee");
        return $this->resultSet();
    }
    public function modelsave($data)
    {
        //    print_r($data);
        //    exit;
        $id = ($data[0]);
        $firstname = ($data[1]);
        $lastname = ($data[2]);
        $email = ($data[3]);
        $phonenumber = ($data[4]);
        $street = ($data[5]);
        $city = ($data[6]);
        $state = ($data[7]);
        $country = ($data[8]);
        $photo = ($data[9]);

        $this->query("UPDATE employee SET empid=$id,firstname ='$firstname',lastname ='$lastname',email ='$email',phonenumber ='$phonenumber',street='$street',city ='$city',state ='$state',country ='$country',photo='$photo' WHERE empid = '$id'");
        $this->execute();
    }

    public function deletingEntry()
    {
        error_reporting(E_ERROR | E_PARSE);
        $fname = $_POST[''];
        $this->query("DELETE FROM employee where firstname='$fname'");
        $this->execute();
        echo "delete row succesfully";
    }

    public function disp($data)
    {

        $fname = $data['search'];
        // print_r($fname);
        // exit;
        $this->query("SELECT * FROM employee where firstname='$fname'");
        return $this->resultSet();
    }

    public function empDetail($id)
    {
        // print_r($id);
        // exit;
        $this->query("SELECT * FROM employee where empid=$id");
        return $this->single();
    }
}
