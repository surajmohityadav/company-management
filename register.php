<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<style>
    body {
        background-image: url(bi.jpg);
        background-size: cover;
        width:100%;
        width:100%;
        height: calc(100%);
        display: flex;
    }

    form {
        background-color: #ffffff;
        padding: 20px;
        max-width: 500px;
        height: 680px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        border-radius: 5px;
        float: left;
        margin-left: 500px; /* Add margin-left */
        border-radius: 10px;
    }

    input[type=text], input[type=email], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button {
        background-color: #4CAF50;
        color: #ffffff;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }

   

    .container {
        padding: 16px;
        float: left;
        align-items: right;
       
    }

    span {
        float: right;
        padding-top: 16px;
    }

    @media screen and (max-width: 600px) {
        form {
            margin-top: 30%;
        }
    }
    h2{
        margin:0%
    }
    .btnn {
        background-color: purple;
        color: white;
        padding: 10px 200px;
        border: none;
        border-radius: 5px;
        font-size: 15px;
        cursor: pointer;
    }

    .btn{
		position: relative;
    background-image: var(--gradient-1);
    color: var(--text-white);
    font-size: var(--fontSize-6);
    font-weight: var(--weight-semiBold);
    max-width: max-content;
    min-width: 180px;
    height: 50px;
    display: grid;
    place-items: center;
    padding-inline: 30px;
    clip-path: var(--clip-path-3);
    overflow: hidden;
    text-decoration: none;
	}


	
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}



.btn-hover {
    width: 200px;
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    margin: 10px;
    height: 55px;
    text-align:center;
    border: none;
    background-size: 300% 100%;
    text-decoration: none;
    border-radius: 50px;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;

}

.btn-hover:hover {
    background-position: 100% 0;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.btn-hover:focus {
    outline: none;
}


.btn-hover.color-3 {
    background-image: linear-gradient(to right, #667eea, #764ba2, #6B8DD6, #8E37D7);
    box-shadow: 0 4px 15px 0 rgba(116, 79, 168, 0.75);
}
</style>

</head>
<body>
    
<div class="buttons">
<button class=" btn-hover color-3 btn-sm btn-block btn-wave col-md-4 btn-primary" type="submit"><a href="indexhome.php" style="color:white; text-decoration:none;">Go back to Home</a></button>
			</div>
	<form action="register.php" method="POST">
			
			<div class="container">
				<label for="firstname"><b>First Name</b></label>
				<input type="text" placeholder="Enter First Name" name="firstname" required>

				<label for="middlename"><b>Middle Name</b></label>
				<input type="text" placeholder="Enter Middle Name" name="middlename">

				<label for="lastname"><b>Last Name</b></label>
				<input type="text" placeholder="Enter Last Name" name="lastname" required>

				<label for="contact"><b>Contact</b></label>
				<input type="text" placeholder="Enter Contact" name="contact" required>

				<label for="address"><b>Address</b></label>
				<input type="text" placeholder="Enter Address" name="address" required>

				<label for="email"><b>Email</b></label>
				<input type="email" placeholder="Enter Email" name="email" required>

				<label for="password"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				
				<center><button class=" btn-hover color-3 btn-sm btn-block btn-wave col-md-4 btn-primary" type="submit">Register</button></center>
                <center text-color="blue"><a class="grey"  href="./login.php">__ Login ? _</a></center>
  					
			</div>
	</form>
	<script>
		// You can add JavaScript code here to validate the form inputs or add additional functionality
	</script>
</body>
</html>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$servername = "localhost"; // Replace with your servername if necessary
$username = "root"; // Replace with your username for the database
$password = ""; // Replace with your password for the database
$dbname = "css_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  print("!");
}

// Check if required fields are filled in
if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['contact']) || empty($_POST['address']) || empty($_POST['email']) || empty($_POST['password'])) {
  die(".");
}

// Prepare SQL query
$sql = "INSERT INTO customers (firstname, middlename, lastname, contact, address, email, password, date_created) VALUES (?, ?, ?, ?, ?, ?, ?, NOW())";

$stmt = $conn->prepare($sql);

if(!$stmt) {
  die("Error in statement preparation: " . $conn->error());
}

// Bind parameters and execute statement
$stmt->bind_param("sssssss", $firstname, $middlename, $lastname, $contact, $address, $email, $password);

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$email = $_POST['email'];
$password = md5($_POST['password']);

if($stmt->execute()) {
    echo "<script>location.href='login.php'</script>";
 
} else {
  echo "Error: " . $sql . "<br>" . $stmt->error;
}


$stmt->close();

// Close connection
$conn->close();
?>
