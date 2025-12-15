const div = document.getElementById('target');
const button = document.getElementById('toggle-button');

button.addEventListener('click', function() {
  div.classList.toggle('highlight');
});