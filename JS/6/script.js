const ul = document.getElementById('item-list');
const button = document.getElementById('remove-button');

button.addEventListener('click', function() {
  const lastChild = ul.lastElementChild;
  if (lastChild) {
    ul.removeChild(lastChild);
  }
});