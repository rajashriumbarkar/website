<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  border-radius:5px;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The profile (background) */
.profile {
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

/* profile Content/Box */
.profile-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
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
@proscreen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>profile Login Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="profile">
  
  <form class="profile-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close profile">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the profile
var profile = document.getElementById('id01');

// When the user clicks anywhere outside of the profile, close it
window.onclick = function(event) {
    if (event.target == profile) {
        profile.style.display = "none";
    }
}
</script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Chatbot</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .chat-container { width: 400px; background: white; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); overflow: hidden; }
        .chat-header { background: #007bff; color: white; padding: 15px; text-align: center; font-weight: bold; }
        .chat-box { height: 300px; padding: 15px; overflow-y: auto; display: flex; flex-direction: column; gap: 10px; border-bottom: 1px solid #ddd; }
        .message { padding: 10px; border-radius: 5px; max-width: 75%; word-wrap: break-word; }
        .user-msg { background: #007bff; color: white; align-self: flex-end; }
        .bot-msg { background: #e9ecef; color: #333; align-self: flex-start; }
        .input-area { display: flex; padding: 10px; background: #fff; }
        .input-area input { flex: 1; padding: 10px; border: 1px solid #ddd; border-radius: 4px; outline: none; }
        .input-area button { background: #007bff; color: white; border: none; padding: 10px 15px; margin-left: 5px; border-radius: 4px; cursor: pointer; }
        .input-area button:hover { background: #0056b3; }
    </style>
</head>
<body>

<div class="chat-container">
    <div class="chat-header">Support Chatbot</div>
    <div class="chat-box" id="chatBox">
        <div class="message bot-msg">Hello! How can I help you today?</div>
    </div>
    <div class="input-area">
        <input type="text" id="userInput" placeholder="Type a message..." autocomplete="off">
        <button onclick="sendMessage()">Send</button>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>
<script>async function sendMessage() {
    const inputField = document.getElementById("userInput");
    const chatBox = document.getElementById("chatBox");
    const userText = inputField.value.trim();

    if (userText === "") return;

    // 1. Display User Message
    const userDiv = document.createElement("div");
    userDiv.className = "message user-msg";
    userDiv.textContent = userText;
    chatBox.appendChild(userDiv);

    // Clear input and scroll down
    inputField.value = "";
    chatBox.scrollTop = chatBox.scrollHeight;

    try {
        // 2. Send Message to PHP Backend
        const response = await fetch("bot.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: "message=" + encodeURIComponent(userText)
        });

        const botReply = await response.text();

        // 3. Display Bot Reply
        const botDiv = document.createElement("div");
        botDiv.className = "message bot-msg";
        botDiv.textContent = botReply;
        chatBox.appendChild(botDiv);

        // Scroll down again
        chatBox.scrollTop = chatBox.scrollHeight;

    } catch (error) {
        console.error("Error connecting to the bot server:", error);
    }
}

// Allow pressing 'Enter' to send
document.getElementById("userInput").addEventListener("keypress", function(e) {
    if (e.key === "Enter") sendMessage();
});</script>
<?php
// Check if the message is received via POST
if (isset($_POST['message'])) {
    $userMessage = strtolower(trim($_POST['message']));
    $reply = "";

    // Simple keyword matching logic
    if (strpos($userMessage, 'hello') !== false || strpos($userMessage, 'hi') !== false) {
        $reply = "Hey there! How's it going?";
    } elseif (strpos($userMessage, 'your name') !== false) {
        $reply = "I'm PHPBot, your friendly neighborhood script.";
    } elseif (strpos($userMessage, 'help') !== false) {
        $reply = "Sure! You can ask me about my name, or just say hello.";
    } elseif (strpos($userMessage, 'bye') !== false) {
        $reply = "Goodbye! Have a great day!";
    } else {
        // Default fallback response
        $reply = "I'm sorry, I didn't quite catch that. Could you try phrasing it differently?";
    }

    // Echo the reply back to JavaScript
    echo $reply;
} else {
    echo "Direct access not allowed.";
}
?>