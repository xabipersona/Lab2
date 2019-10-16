<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
  <style type="text/css">
      body {
        background-color: green;
      }
      form {
        font: 120% caption;
        text-align: center;
        padding: 3%;
      }
      div {
        font: 100% caption;
      }
      section {
        font: 120% caption;
      }

  </style>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <h3>

      Es obligatorio rellenar todos los campos

    </h3>
    <form id="formulario" method="POST" action="AddQuestion.php">
    	Introducir correo
    	<br>
    	<input type="text" id="correo" name="correo"> <div id="error1"><div>
    	Enunciado de la pregunta
    	<br>
    	<input type="text" id="pregunta" name="pregunta">
    	<br>
    	Respuesta correcta:
    	<br>
    	<input type="text" id="correcta" name="correcta">
    	<br> 
    	Respuesta incorrecta 1:
    	<br>
    	<input type="text" id="incorrecta1" name="incorrecta1">
    	<br> 
    	Respuesta incorrecta 2:
    	<br>
    	<input type="text" id="incorrecta2" name="incorrecta2">
    	<br> 
    	Respuesta incorrecta 3:
    	<br>
    	<input type="text" id="incorrecta3" name="incorrecta3">
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
