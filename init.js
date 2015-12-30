/*
  Chat with CPU "App"
  A fun chat simulator
  The code for this mini-project is Open Source - feel free to remix or redistribute it!
  Created by Donald Leung (https://github.com/DonaldKellett)
*/
var initialRequest = new XMLHttpRequest();
initialRequest.onreadystatechange = function () {
  if (initialRequest.readyState === 4 && initialRequest.status === 200) {
    document.getElementById("chat-field").innerHTML = initialRequest.responseText;
  }
}
initialRequest.open("GET", "init.php", true);
initialRequest.send();
