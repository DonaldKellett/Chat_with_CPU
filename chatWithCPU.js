/*
  Chat with CPU "App"
  A fun chat simulator
  The code for this mini-project is Open Source - feel free to remix or redistribute it!
  Created by Donald Leung (https://github.com/DonaldKellett)
*/
function sendData(string) {
  if (string === "") {
    var checkChatRequest = new XMLHttpRequest();
    checkChatRequest.onreadystatechange = function () {
      if (checkChatRequest.readyState === 4 && checkChatRequest.status === 200) {
        document.getElementById("sidenote").innerHTML = checkChatRequest.responseText;
      }
    }
    checkChatRequest.open("GET", "check_chat.php", true);
    checkChatRequest.send();
  } else {
    // alert(event.keyCode);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
        document.getElementById("chat-field").innerHTML = xmlhttp.responseText;
      }
    }
    xmlhttp.open("GET", "chat_with_cpu.php?data=" + string, true);
    xmlhttp.send();
    document.getElementById("the-area").value = "";
  }
}

myInterval = setInterval(function () {
  sendData("");
}, 1000); // Check the status of the chat window every second
