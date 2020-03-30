const button_back = document.querySelector('#button-back');
const button_1 = document.querySelector('#button-6');
const button_2 = document.querySelector('#button-7');
const button_3 = document.querySelector('#button-8');
const button_4 = document.querySelector('#button-9');

button_back.onclick = () => {
  window.location = 'index.php';
}

button_1.onclick = () => {
  window.location = 'page-content-6.php';
}

button_2.onclick = () => {
  window.location = 'page-content-7.php';
}

button_3.onclick = () => {
  window.location = 'page-content-8.php';
}

button_4.onclick = () => {
  window.location = 'page-content-9.php';
}
