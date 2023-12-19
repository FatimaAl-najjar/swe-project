<!DOCTYPE html>
<html>
  <head>
    <title>Chatbot</title>
    <style>
        ::-webkit-scrollbar{
            display: none;
        }
      body {
      
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
      }
      #chat-container {
        max-width: 400px;
        margin: 20px auto;
        border: 1px solid #ccc;
        border-radius: 5px;
        overflow: hidden;
      }
      #chat-messages {
        height: 300px;
        overflow-y: scroll;
        padding: 10px;
      }
      #message-input {
        width: calc(100% - 70px);
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin: 10px;
        outline: none;
      }
      #send-button {
        width: 50px;
        padding: 8px;
        border: none;
        border-radius: 3px;
        margin: 10px;
        cursor: pointer;
        color: #fff;
        background-color: darkblue;
        outline: none;
      }
      #send-button:hover {
        background-color: darkgray;
      }
      .message-container {
        margin-bottom: 10px;
        overflow: auto;
      }
      .user-message {
        text-align: right;
        background-color: #007bff;
        color: #fff;
        border-radius: 10px 10px 0 10px;
        padding: 8px;
        margin-right: 10px;
        max-width: 70%;
        word-wrap: break-word;
        float: right;
      }
      .bot-message {
        text-align: left;
        background-color: #f0f0f0;
        color: #333;
        border-radius: 10px 10px 10px 0;
        padding: 8px;
        margin-left: 10px;
        max-width: 70%;
        word-wrap: break-word;
        float: left;
      }
    </style>
  </head>
  <body>
    <div id="chat-container">
      <div id="chat-messages"></div>
      <input type="text" id="message-input" placeholder="Type your message" />
      <button id="send-button">Send</button>
    </div>

    <script>
      const apiKey = "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";
//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

      async function sendMessage(message) {
        const response = await fetch(
          "https://api.openai.com/v1/chat/completions",
          {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
              Authorization: Bearer ${apiKey},
            },
            body: JSON.stringify({
              model: "gpt-3.5-turbo",
              messages: [
                { role: "system", content: "You are" },
                { role: "user", content: message },
              ],
            }),
          }
        );

        const data = await response.json();
        return data.choices[0].message.content;
      }

      document.addEventListener("DOMContentLoaded", function () {
        const messageInput = document.getElementById("message-input");
        const sendButton = document.getElementById("send-button");
        const chatMessages = document.getElementById("chat-messages");

        sendButton.addEventListener("click", async function () {
          const message = messageInput.value;
          if (message.trim() !== "") {
            displayMessage("You", message, "user-message");
            messageInput.value = "";

            // Call the sendMessage function and display the response
            const response = await sendMessage(message);
            displayMessage("ClinicStaff", response, "bot-message");
          }

        });

        function displayMessage(sender, message, className) {
          const newMessage = document.createElement("div");
          newMessage.classList.add("message-container");
          newMessage.innerHTML = <div class="${className}"><strong>${sender}:</strong> ${message}</div>;
          chatMessages.appendChild(newMessage);
          chatMessages.scrollTop = chatMessages.scrollHeight;
        }
      });
    </script>
  </body>
</html>
