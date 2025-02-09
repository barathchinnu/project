<?php
	include('connect.php');

	$fnamedisplay = '';
	$lnamedisplay = '';
    $birthdisplay = '';
	$emaildisplay = '';
    $passworddisplay = ''; 
	$mobiledisplay = '';
	$update_id='';
	//if(isset($_POST['update_id']))
	if($_SERVER['REQUEST_METHOD']== 'POST')
	{
    		//$uid=$_POST['update_id'];
     		  
   		 if(isset($_POST['update']))
		{
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $birth=$_POST['birth'];
                $email=$_POST['email'];
                $password=$_POST['password'];
                $mobile=$_POST['phone'];
               		$update_query="update data set Firstname='$fname', Lastname='$lname', DateofBirth='$birth',Email='$email',Password='$password',Mobile='$mobile' where Mobile=$mobile";
        		$result_query=mysqli_query($con,$update_query);
        		if($result_query)
			{
            			echo "<script>alert('Data updated successfully')</script>";
            			echo "<script>window.open('display.php','_self')</script>";
        		}
			else
			{
            			die(mysqli_error($con));
        	       }
                }
       }
    // Fetch data from database for update
if (isset($_GET['update_id'])) {
    $update_id = $_GET['update_id'];

    $fetch_query = "SELECT * FROM data WHERE Mobile='$update_id'";
    $result_fetch = mysqli_query($con, $fetch_query);

    if ($result_fetch) {
        while ($row = mysqli_fetch_assoc($result_fetch)) {
            $fnamedisplay = $row['Firstname'];
            $lnamedisplay = $row['Lastname'];
            $birthdisplay = $row['DateofBirth'];
            $emaildisplay = $row['Email'];
            $passworddisplay = $row['Password'];
            $mobiledisplay = $row['Mobile'];
        }
    }
}
?>
	
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Updating Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 15px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
   <div class="container">
       <form action="" method="post">
           <!-- Firstname field -->
           <div class="form-group">
               <label>Firstname</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter your Firstname" name="fname" value="<?php echo $fnamedisplay ?>">
           </div>
           <!-- Lastname field-->
           <div class="form-group">
               <label>Lastname</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter your Lastname" name="lname" value="<?php echo $lnamedisplay ?>">
           </div>
            <!-- Date of Birth field -->
           <div class="form-group">
               <label>Date of Birth</label>
               <input type="date" required="required" autocomplete="off" placeholder="Enter your Date of Birth" name="birth" value="<?php echo $birthdisplay ?>">
           </div>
           <!-- Email field -->
           <div class="form-group">
               <label>Email</label>
               <input type="email" required="required" autocomplete="off" placeholder="Enter your email" name="email" value="<?php echo $emaildisplay ?>">
           </div>
            
            <!-- Password field -->
           <div class="form-group">
               <label>Password</label>
               <input type="password" required="required" autocomplete="off" placeholder="Enter your Password" name="password" value="<?php echo $passworddisplay ?>">
           </div>
            <!-- Mobile field -->
            <div class="form-group">
               <label>Mobile number</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter your mobile number" name="phone" value="<?php echo $mobiledisplay ?>" minlength="10" maxlength="10">
           </div>

           <!-- Update button -->
           <button type="submit" name="update">Update</button>
       </form>
   </div>   
</body>
</html>