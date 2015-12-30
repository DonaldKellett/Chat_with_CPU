<?php
$conn = new mysqli("localhost", "root", "root", "cpu_chat");
if ($conn->connect_error) {
  echo $conn->connect_error;
}
?>
<!DOCTYPE html>
<!--
  Chat with CPU "App"
  A fun chat simulator
  The code for this mini-project is Open Source - feel free to remix or redistribute it!
  Created by Donald Leung (https://github.com/DonaldKellett)
-->
<html>
  <head>
    <meta charset="utf-8">
    <title>Chat With CPU "App"</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h2>Chat With CPU</h2>
    <p>
      Enter text into the form field below and click "Send Message" to submit chat content.  If you have previously started the chat already you will have to type in new content in order to view the entire chat again.
    </p>
    <div id="chat-field">
      <!-- <p class="user-metadata">
        <span class="username">The Server</span> said at &lt;publish_time&gt;:
      </p>
      <p class="chat-content">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <p class="user-metadata">
        <span class="username">You</span> said at &lt;publish_time&gt;:
      </p>
      <p class="chat-content">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p> -->
    </div>
    <div class="sidenote">
      <!-- <p>
        The server updated the chat window at &lt;publish_time&gt;.
      </p> -->
      <p id="sidenote"></p>
    </div>
    <form>
      <p>
        <textarea id="the-area" placeholder="Enter some words here ... "></textarea>
      </p>
      <p>
        <a href="javascript:void(0)" id="the-button" onclick="sendData(document.getElementById('the-area').value)">Send Message</a>
      </p>
    </form>
    <script src="init.js"></script>
    <script src="chatWithCPU.js"></script>
  </body>
</html>
