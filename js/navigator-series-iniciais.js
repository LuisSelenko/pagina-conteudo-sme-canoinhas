const button_back = document.querySelector('#button-back');
const button_1_2 = document.querySelector('#button-1-2');
const button_3_4_5 = document.querySelector('#button-3-4-5');

button_back.onclick = () => {
  window.location = 'menu.php';
}

button_1_2.onclick = () => {
  window.location = 'page-content-1-2.php';
}

button_3_4_5.onclick = () => {
  window.location = 'page-content-3-4-5.php';
}
