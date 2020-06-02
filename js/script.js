let hitButton = document.getElementById('hit-button');
let message = document.getElementById('message');

let messageText = message.textContent || message.innerText;

if (messageText.includes('押して')) {
  message.classList.add('inactive');
} else if(messageText.includes('凶')) {
  message.classList.add('bad-luck');
} else {
  message.classList.remove('inactive');
}