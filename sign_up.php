<style>
  body {font-family: Arial, Helvetica, sans-serif;}


input[type=text], input[type=password],input[type=email],input[type=phonenumber]
{
  width:100%;
  margin:8px 0px;
  display:100%;

  
}

button {
  background-color:none;
  color: white;
  padding: 14px 20px;
  margin: 10px 20;
  border: none;
  cursor: pointer;
 
}
.loginbtn{
width: 100%;
 display: block;
    text-align: center;
    background-color: lightgreen;
    color: #ffffff;
    text-decoration: none;
    font-weight: 700;
    font-size: 16px;
    padding-left: 90px;
    padding-right: 90px;
    border-radius: 4px;
    margin-bottom: 12px;
    transition: background-color 0.2s ease;
}

 button:hover {
  opacity: 0.8;
  background-color:green;
 }

 .cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
 }
 .submitbtn{
  width: auto;
  padding: 10px 18px;
  background-color: #56f436;
  }

 .imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
   position: relative;
 }

 img.avatar {
  width: 20%;
  border-radius: 50%;
 }

 h2{
  text-align: center;
 }

 .container {
  justify:right;
  padding: 10px;
  margin-left:10px;
  margin-right:10px;
  }
  .container >input{
  
  padding: 15px;

  border: 1px solid black;
  height:2px;
  width:450px;
  aspect-ratio: 2;
  margin-right:150px;
  
 
  }

span.psw {
  float: right;
  padding-top: 16px;
}
 /* The Modal (background) */
   .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
   }

   /* Modal Content/Box */
  .modal-content {
  background-color: #fefefe;
  margin: 15% auto 25% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
  }

  /* The Close Button (x) */
   .closelogin {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
   }

    .closelogin:hover,
    .closelogoin:focus {
      color: red;
      cursor: pointer;
    }
    
    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }
    
    @-webkit-keyframes animatezoom {
      from {-webkit-transform: scale(0)} 
      to {-webkit-transform: scale(1)}
    }
      
    @keyframes animatezoom {
      from {transform: scale(0)} 
      to {transform: scale(1)}
    }

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
  </style>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"class="loginbtn">Login</button>
<div id="id01" class="modal">
<form class="modal-content animate" action="" method="post"style="height: 800px; 
width: 1500px;  margin-left:20%; backgound-color:white">
    <div class="imgcontainer">
         <span onclick="document.getElementById('id01').style.display='none'" class="closelogin" title="Close Modal">&times;</span>
    <img src="image\profil_login.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    
    <form method="POST" action="login.php">
       
       <label for= "First Name"><b>First Name:</b>
      </label>
      <input type="text" name="firstname"placeholder="Enter your first name" required><br><br>
        
      <label for= "Last Name"> <b>Last Name:</b>
      </label>
      <input type="text" name="lastname" placeholder="Enter your last name" required><br><br>
        
      <label for=" Email"><b>Email:</b>
      </label>
      <input type="email" name="email"placeholder="Enter your email" required><br><br>
       
      <label for=" Phone Number"><b>Phone Number:</b>
      </label>
      <input type="phonenumber" name="phonenumber" placeholder="Enter your phone number"required><br><br>
        
      <label for="Password"><b>Password:</b>
      </label>
      <input type="password" name="password"placeholder="Enter your password" required><br><br>
        
      <label>  
      <button type="submit"class="submitbtn">Submit</button>
      </label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label> 
  </div>

  <div class="container" style="background-color:white">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
<?php
// Database configuration
$servername = "localhost"; // Change if needed
$username   = "root";       // Your MySQL username
$password   = "";           // Your MySQL password
$dbname     = "db";     // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate and sanitize POST data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstname = trim($_POST['firstname'] ?? 'br');
    $lastname  = trim($_POST['lastname'] ?? 'br');
    $phonenumber  = trim($_POST['phonenumber'] ?? 'br ');
    $email     = trim($_POST['email'] ?? 'br');
    $user_password = $_POST['password'] ?? 'br';
    

    // Basic validation
    if (empty($firstname) || empty($lastname)|| empty($phonenumber)  || empty($email) || empty($user_password)) {
        die("All fields are required.");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }
    // Hash the password securely
    $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);


    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO users (firstname, lastname,phonenumber,email,password) VALUES (?, ?, ?,?,?)");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    // Bind parameters (s = string)
    $stmt->bind_param("sssss", $firstname, $lastname,$phonenumber, $email,$hashed_password);

    // Execute and check result
    if ($stmt->execute()) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>