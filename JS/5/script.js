const imageUrls = [
  'https://placehold.co/200x200',
  'https://placehold.co/200x200/000000/FFFFFF?text=Image+2',
  'https://placehold.co/200x200/FF0000/FFFFFF?text=Image+3',
  'https://placehold.co/200x200/00FF00/000000?text=Image+4',
  'https://placehold.co/200x200/0000FF/FFFFFF?text=Image+5'
];

let currentImageIndex = 0;

const img = document.getElementById('image');
const button = document.getElementById('change-button');

button.addEventListener('click', function() {
  currentImageIndex = (currentImageIndex + 1) % imageUrls.length;
  img.src = imageUrls[currentImageIndex];
});