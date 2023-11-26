const card = document.querySelector('#product-card')
const popup = document.getElementById('popup')

card.addEventListener('click', () => {
  popup.style.display = 'flex';
})

card.addEventListener('blur', () => {
  popup.style.display = 'none';
})