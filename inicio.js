function redirec(){
	var value=document.getElementById("accion").value;
	if (value == "Continuar una rúbrica ya iniciada") {
		location.href='continuar_rubrica.php';
	} else if (value == "Iniciar una nueva rúbrica") {
		location.href='nueva_rubrica.php';
	}
}
function redirecRubrica(){
	location.href='rubrica.php';
}