const button_back = document.querySelector('#button-back');
const button_1 = document.querySelector('#button-1');
const button_2 = document.querySelector('#button-2');
const button_3 = document.querySelector('#button-3');
const button_4 = document.querySelector('#button-4');
const button_5 = document.querySelector('#button-5');

button_back.onclick = () => {
  window.location = 'index.php';
}

button_1.onclick = () => {
  window.location = 'page-content-1.php';
}

button_2.onclick = () => {
  window.location = 'page-content-2.php';
}

button_3.onclick = () => {
  window.location = 'page-content-3.php';
}

button_4.onclick = () => {
  window.location = 'page-content-4.php';
}

button_5.onclick = () => {
  window.location = 'page-content-5.php';
}