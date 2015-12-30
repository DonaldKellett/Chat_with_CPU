<?php
/*
  Chat with CPU "App"
  A fun chat simulator
  The code for this mini-project is Open Source - feel free to remix or redistribute it!
  Created by Donald Leung (https://github.com/DonaldKellett)
*/

// Establish connection

$conn = new mysqli("localhost", "root", "root", "cpu_chat");
if ($conn->connect_error) {
  echo $conn->connect_error;
}

$all_chat_details = $conn->query("SELECT * FROM live_cpu_chat_content");
while ($each_chat_row = $all_chat_details->fetch_assoc()) {
  ?>
  <p class="user-metadata">
    <span class="username"><?php echo $each_chat_row['user_name']; ?></span> said at <?php echo $each_chat_row['date']; ?>:
  </p>
  <p class="chat-content">
    <?php echo $each_chat_row['chat_content']; ?>
  </p>
  <?php
}
?>
