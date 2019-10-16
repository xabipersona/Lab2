<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
			<?php

			//conexion a la base de datos
			$mysqli= mysqli_connect("localhost","root","","quiz");
			if(!$mysqli){
			die("FalloalconectaraMySQL:".mysqli_connect_error());}
			echo 'ConnectionOK <br>';


			//envio de variables a bd
		$correo=$_POST["correo"] ;
		$pregunta=$_POST["pregunta"];
		$correcta=$_POST["correcta"];
		$incorrecta1=$_POST["incorrecta1"];
		$incorrecta2=$_POST["incorrecta2"];
		$incorrecta3=$_POST["incorrecta3"];

		$consulta = mysqli_query($mysqli ,"SELECT * from Preguntas;");
		$num=mysqli_num_rows($consulta) + 1;
		
		


		
			$insertar="INSERT INTO Preguntas VALUES('$num','$correo', '$pregunta', '$correcta', '$incorrecta1', '$incorrecta2', '$incorrecta3')";

			if (!mysqli_query($mysqli ,$insertar)){
				die('Error: ' . mysqli_error($mysqli));
			}

			echo "Pregunta insertada correctamente <br>"; 
			echo "<a href='ShowQuestions.php'> Consultar preguntas </a>";

			
			
			mysqli_close($mysqli);
			?>

    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
