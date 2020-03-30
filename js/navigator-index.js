const iniciais = document.querySelector('#iniciais');
const finais = document.querySelector('#finais');
const infantil = document.querySelector('#infantil');

iniciais.onclick = () => {
  window.location = 'series-iniciais.php';
}

finais.onclick = () => {
  window.location = 'series-finais.php';
}

infantil.onclick = () => {
  window.location = 'educacao-infantil.php';
}