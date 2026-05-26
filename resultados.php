<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Resultados de Datos!</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <div class="dive2">
        <h1>Resultados</h1>
        <center>
            <img src="img/OnePiece.jpg" alt="OnePiece" width="150">
            <?php
                $nombre = $_POST['Name'];
                $edad = $_POST['Age'];
                $ciudad = $_POST['City'];
                $pasatiempo = $_POST['Hobby'];

                echo '<p><b>Nombre:</b> '.$nombre.'</p><br>';
                echo '<p><b>Edad:</b> '.$edad.'</p><br>';
                echo '<p><b>Ciudad:</b> '.$ciudad.'</p><br>';
                echo '<p><b>Pasatiempo:</b> '.$pasatiempo.'</p><br>';
            ?>
        </center>
        <h2>¡Bien Hecho!</h2>
        <div id="popUpOverlay"></div>
        <div id="popUpBox">
            <div id="box">
                <i class="fas fa-question-circle fa-5x"></i>
                <h1>¿Volver a ingresar datos?</h1>
                <div id="closeModal"></div>
        </div>
   </div>
   <button onclick="Alert.render('You look very pretty today.')" class="btn">¡Volver a Ingresar!</button>
   <script src="js/app.js"></script>
   </body>
</html>
