const infantil = document.querySelector('#infantil');
const iniciais = document.querySelector('#iniciais');
const finais = document.querySelector('#finais');
const back = document.querySelector('#back');

infantil.onclick = () => {
  window.location = 'educacao-infantil.php';
}

iniciais.onclick = () => {
  window.location = 'series-iniciais.php';
}

finais.onclick = () => {
  window.location = 'series-finais.php';
}

back.onclick = () => {
  window.location = 'index.php';
}