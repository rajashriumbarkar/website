

<?php
// 1. Database Connection Settings
$host = "localhost";
$username = "root"; // Default XAMPP username
$password = "";     // Default XAMPP password is empty
$dbname = "product";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Database Connection Failed: " . $e->getMessage());
}

// 2. Process User Message
if (isset($_POST['message'])) {
    // Sanitize and trim user input
    $userMessage = strtolower(trim($_POST['message']));
    $reply = "";

    try {
        // Fetch all keywords and replies from the database
        $stmt = $conn->prepare("SELECT queries, replies FROM chatbot_queries");
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $matchFound = false;

        // Loop through rows to see if user input matches database keywords
        foreach ($results as $row) {
            // Split multiple keywords using the pipe '|' delimiter
            $keywords = explode('|', $row['queries']);
            
            foreach ($keywords as $keyword) {
                // If user text contains the keyword
                if (strpos($userMessage, trim($keyword)) !== false) {
                    $reply = $row['replies'];
                    $matchFound = true;
                    break 2; // Break out of both loops since we found a match
                }
            }
        }

        // Default fallback response if no keyword matched
        if (!$matchFound) {
            $reply = "I'm sorry, I couldn't find anything about that in my database. Can you try phrasing it differently?";
        }

        // Send the final reply back to JavaScript
        echo $reply;

    } catch (PDOException $e) {
        echo "Error retrieving response: " . $e->getMessage();
    }

} else {
    echo "Direct access not allowed.";
}
?>