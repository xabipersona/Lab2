<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>

      Es obligatorio rellenar todos los campos.

    </div>
    <form id="formulario">
    	Introducir correo
    	<br>
    	<input type="text" id="correo"> <div id="error1"><div>
    	<br>
    	Enunciado de la pregunta
    	<br>
    	<input type="text" id="pregunta">
    	<br>
    	Respuesta correcta:
    	<br>
    	<input type="text" id="correcta">
    	<br> 
    	Respuesta incorrecta 1:
    	<br>
    	<input type="text" id="incorrecta1">
    	<br> 
    	Respuesta incorrecta 2:
    	<br>
    	<input type="text" id="incorrecta2">
    	<br> 
    	Respuesta incorrecta 3:
    	<br>
    	<input type="text" id="incorrecta3">
    	<br>

    	Valora la dificultad de la pregunta:
    	<br>
    	<input type="radio" name="dificultad" value="1"> Baja
    	<input type="radio" name="dificultad" value="2" checked> Media	    			
    	<input type="radio" name="dificultad" value="3"> Alta	    			
    	<br><br>

    	<input type="submit" id="confirmar" value="Enviar">
    </form>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/ValidateFieldsQuestion.js"></script>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
