var btnAbrirPopupMT = document.getElementById('btn-abrir-popupMT'),
 overlayMT = document.getElementById('overlayMT'),
 popupMT = document.getElementById('popupMT'),
 btnCerarPopupMT = document.getElementById('btn-cerrar-popupMT');

 btnAbrirPopupMT.addEventListener('click', function(){
 	overlayMT.classList.add('activarMT');

 btnCerarPopupMT.addEventListener('click', function(){
 	overlayMT.classList.remove('activarMT')
 })	
 });
