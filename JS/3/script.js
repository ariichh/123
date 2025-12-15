const ul = document.getElementById('item-list');
const input = document.getElementById('item-input');
const button = document.getElementById('add-button');

button.addEventListener('click', function() {
  const li = document.createElement('li');
  li.textContent = input.value;
  ul.appendChild(li);
  input.value = '';
});