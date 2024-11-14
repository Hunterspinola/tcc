function sendMessage() {
    var username = document.getElementById("username").value;
    var message = document.getElementById("message").value;

    if(username === "" || message === "") {
        alert("Please enter both username and message.");
        return;
    }

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "chat.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("message").value = "";
            loadMessages();
        }
    };
    xhr.send("user=" + username + "&message=" + message);
}

function loadMessages() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "chat.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("chat-box").innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}

setInterval(loadMessages, 1000);