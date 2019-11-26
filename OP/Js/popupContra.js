var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
 overlay = document.getElementById('overlay'),
 popup = document.getElementById('popup'),
 btnCerarPopup = document.getElementById('btn-cerrar-popup');

 btnAbrirPopup.addEventListener('click', function(){
 	overlay.classList.add('activar');

 btnCerarPopup.addEventListener('click', function(){
 	overlay.classList.remove('activar')
 })	
 });