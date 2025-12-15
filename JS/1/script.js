const heading = document.getElementById('main-heading');
const button = document.getElementById('change-button');

button.addEventListener('click', function() {
  heading.textContent = 'Заголовок изменен!';
});