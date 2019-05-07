<!DOCTYPE html>
<html>
<head>
  <title>Inicio</title>
  <meta charset="utf-8">
  <script type="text/javascript" src="inicio.js"></script>
</head>
<body>
  <div class="header">
      <img src="images/nueva_r_brica/u59.jpg">
    </div>
	<p><span>Continuar rúbrica</span></p>
  <select id="grado">
  	<option selected value="Seleccione el Grado">Seleccione el Grado</option>
  	<option value="Grado en Diseño Animación y Arte Digital">Grado en Diseño Animación y Arte Digital</option>
  	<option value="Grado en Multimedia">Grado en Multimedia</option>
  	<option value="Grado en Diseño y Desarrollo de Videojuegos">Grado en Diseño y Desarrollo de Videojuegos</option>
  </select>  
  <select id="estudiante">
    <option selected value="Seleccione al estudiante">Seleccione al estudiante</option>
    <option value="Estudiante 1">Estudiante 1</option>
    <option value="Estudiante 2">Estudiante 2</option>
    <option value="Rosa María Puig i Tresserres">Rosa María Puig i Tresserres</option>
    <option value="Estudiante 3">Estudiante 3</option>
    <option value="Jacinto González López">Jacinto González López</option>
    <option value="Estudiante 5">Estudiante 5</option>
    <option value="Estudiante 6">Estudiante 6</option>
  </select>
  <select id="rubrica">
    <option value="Seleccione la rúbrica">Seleccione la rúbrica</option>
    <option value="Primera rúbrica">Primera rúbrica</option>
    <option value="Segunda rúbrica">Segunda rúbrica</option>
    <option value="Tribunal">Tribunal</option>
  </select>
  <button onclick="redirecRubrica()">Ir a la rubrica</button>  
</body>
</html>