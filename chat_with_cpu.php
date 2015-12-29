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

// The Server's Possible responses

$server_responses = array("Sorry, I don't know what you mean!", "Ok cool thanks :)", "Yeah, why not?", "Hell yes that's a good idea! :D", "Hmmmm ... i'm not sure about that ... ");

$rand = rand(0,4);

// Parse Data

$data = $_REQUEST['data'];
if (!empty($data)) {
  if ($conn->query("INSERT INTO live_cpu_chat_content (user_name, chat_content) VALUES (" . htmlspecialchars_decode("&quot;") . "You" . htmlspecialchars_decode("&quot;") . ", " . htmlspecialchars_decode("&quot;") . "" . $data . "" . htmlspecialchars_decode("&quot;") . ")") == true) {
    if ($conn->query("INSERT INTO live_cpu_chat_content (user_name, chat_content) VALUES (" . htmlspecialchars_decode("&quot;") . "The Server" . htmlspecialchars_decode("&quot;") . ", " . htmlspecialchars_decode("&quot;") . "" . $server_responses[$rand] . "" . htmlspecialchars_decode("&quot;") . ")") == true) {
      $full_chat_details = $conn->query("SELECT * FROM live_cpu_chat_content");
      while ($each_chat_row = $full_chat_details->fetch_assoc()) {
        ?>
        <p class="user-metadata">
          <span class="username"><?php echo $each_chat_row['user_name']; ?></span> said at <?php echo $each_chat_row['date']; ?>:
        </p>
        <p class="chat-content">
          <?php echo $each_chat_row['chat_content']; ?>
        </p>
        <?php
      }
    }
  }
}

?>
