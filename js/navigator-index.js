const iniciais = document.querySelector('#iniciais');
const finais = document.querySelector('#finais');

iniciais.onclick = () => {
  window.location = 'series-iniciais.php';
}

finais.onclick = () => {
  window.location = 'series-finais.php';
}