const box = document.getElementById('box');
const button = document.getElementById('toggle-button');

button.addEventListener('click', function() {
  box.classList.toggle('hidden');
});