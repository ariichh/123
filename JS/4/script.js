let count = 0;
const counterElement = document.getElementById('counter');
const button = document.getElementById('increment-button');

button.addEventListener('click', function() {
  count += 1;
  counterElement.textContent = 'Счетчик: ' + count;
});