
// 3. The Toggle Function
function toggleChat() {
    const chatContainer = document.getElementById("chatContainer");
    
    // Checks current status and flips it
    if (chatContainer.style.display === "none" || chatContainer.style.display === "") {
        chatContainer.style.display = "flex";
    } else {
        chatContainer.style.display = "none";
    }
}

// Keep your existing sendMessage() function here below...


 


async function sendMessage() {
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
        const response = await fetch("chatbot.php", {
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
});


