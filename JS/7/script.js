const form = document.getElementById('my-form');
const nameInput = document.getElementById('name-input');
const emailInput = document.getElementById('email-input');
const messageDiv = document.getElementById('message');

form.addEventListener('submit', function(event) {
  event.preventDefault();

  const name = nameInput.value.trim();
  const email = emailInput.value.trim();

  if (name === '' || email === '') {
    messageDiv.textContent = 'Все поля должны быть заполнены.';
    messageDiv.style.color = 'red';
    return;
  }

  const formData = new FormData(form);
  console.log(Object.fromEntries(formData));

  messageDiv.textContent = 'Форма успешно отправлена (в консоль)!';
  messageDiv.style.color = 'green';
});