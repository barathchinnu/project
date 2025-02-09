<?php include('connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;   
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .text-center {
            text-align: center;
        }
        .btn {
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }
        .btn-dark {
            background-color: #333;
            color: #fff;
        }
        .btn-danger {
            background-color: #d9534f;
            color: #fff;
        }
        .btn:hover {
            opacity: 0.9;
        }
        .text-light {
            color: #fff;
        }
        .text-decoration-none {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Sl no</th>
                    <th>First Name</th>
                    <th>Last name</th>
                    <th>Date of Birth</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Mobile</th>
                    <th class="text-center">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $select_query="Select * from data";
                    $result=mysqli_query($con,$select_query);
                    $i=1;
                    if($result) {
                        while($row=mysqli_fetch_assoc($result)) {
                            $id = isset($row['id']) ? $row['id'] : null;
                            echo $id;
                            $fname=$row['Firstname'];
                            $lname=$row['Lastname'];
                            $birth=$row['DateofBirth'];
                            $email=$row['Email'];
                            $password=$row['Password'];
                            $mobile=$row['Mobile'];
                            echo " <tr>
                                    <td>$i</td>
                                    <td>$fname</td>
                                    <td>$lname</td>
                                    <td>$birth</td>
                                    <td>$email</td>
                                    <td>$password</td>
                                    <td>$mobile</td>
                                    <td class='text-center'>
                                        <button class='btn btn-dark'><a href='update.php?update_id=$mobile' class='text-light text-decoration-none'>Update</a></button>
                                        <button class='btn btn-danger'><a href='delete.php?delete_id=$mobile' class='text-light text-decoration-none'>Delete</a></button>
                                    </td>
                                </tr>";
                            $i++;
                        }
                    } else {
                        die(mysqli_error($con));
                    }
                ?>  
            </tbody>
        </table>
    </div>
</body>
</html>