<?php
    include('connect.php');


    if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
           $fname = $_POST ['fname'];
           $lname = $_POST['lname'];
           $birth = $_POST['birth'];
           $email = $_POST['email'];
           $password = $_POST['password'];
           $phone = $_POST['phone'];
        
        // echo $phone
            $sql = "select * from data where  Email='$email'";
            $selectresult = mysqli_query($con,$sql);
            $number=mysqli_num_rows($selectresult);
            if($number>0)
            {
                echo " <script>alert('username or email already exists')</script> ";

            }else{
                $insert_query="insert into data (Firstname,Lastname,DateofBirth,Email,Password,Mobile) values ('$fname','$lname','$birth', '$email', '$password', '$phone')";
                $result = mysqli_query($con,$insert_query);
                if($result)
                {
                    echo"Datebase inserted successfully";
                    echo "<script>window.open('display.php','_self')</script>";

                }else{
                    die(mysqli_query($con));
                }
            }

        }
?>