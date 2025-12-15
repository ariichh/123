const pElement = document.getElementById('color-text');
const selectElement = document.getElementById('color-select');

selectElement.addEventListener('change', function() {
  pElement.style.color = selectElement.value;
});