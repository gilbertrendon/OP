var btnAbrirPopupM = document.getElementById('btn-abrir-popupM'),
 overlayM = document.getElementById('overlayM'),
 popupM = document.getElementById('popupM'),
 btnCerarPopupM = document.getElementById('btn-cerrar-popupM');

 btnAbrirPopupM.addEventListener('click', function(){
 	overlayM.classList.add('activarM');

 btnCerarPopupM.addEventListener('click', function(){
 	overlayM.classList.remove('activarM')
 })	
 });
