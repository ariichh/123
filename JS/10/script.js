const ul = document.getElementById('list');
const addButton = document.getElementById('add-item');

let itemCounter = 4;

addButton.addEventListener('click', function() {
  const li = document.createElement('li');
  li.textContent = 'Пункт ' + itemCounter;
  ul.appendChild(li);
  itemCounter++;
});

ul.addEventListener('click', function(event) {
  if (event.target.tagName === 'LI') {
    event.target.textContent = 'Нажато!';
    event.target.classList.add('clicked');
  }
});