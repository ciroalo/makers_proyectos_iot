<?php
    $serverName = "localhost";
    $userName = "ciroaloaqu";
    include = 'passwords.php';
    $dbName = "ciroaloaqu";

    $nombre =$_GET['name'];
    $description =$_GET['description'];
    $sensor1 =$_GET['sensor1'];
    $sensor2 =$_GET['sensor2'];
    $noSensors =$_GET['NoSensor'];

    // Create connection
    $conn = new mysqli($serverName, $userName, $password, $dbName);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

    $sql = 'INSERT INTO cloud-boards (Name, Description, Sensor1, Sensor2, Nosensor) VALUES ($nombre, $description, $sensor1, $sensor2, $noSensors)';

    // if ($conn->query($sql) == TRUE){
    //     echo"New  record created successfully";
          
    //    }else{
    //       echo "Error: " . $sql . "<br>" . $conn->error;
    //    }
      
       $conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Board saved</title>
</head>
<body>
<nav class="navbar is-link">
    <div class="navbar-brand">
        <a class="navbar-item title is-4">
            <span class="icon">
                <i class="fas fa-cloud"></i>
            </span>
        <span> TechCloud </span>
        </a>
     </div>

        <div class="navbar-end">

        <div class="navbar-item">
          <a href="index.php" class="navbar-link ">Inicio</a>
         </div>

         <div class="navbar-item">
         <a href="https://github.com/IonutMorariu/makers_proyectos_iot" class="button is-dark" target="_blank"> 
        <span class="icon">
        <i class="fab fa-github-alt"></i>
        </span>
        <span>GitHub </span>
        </a>
        </div>
        </div>
</nav>  






    <div class="container">
        <div class="columns is-cantered">
            <div class="column is-half is-narrow">
                <div class="box">
                    <h4 class="title is-4 has-text-centered"> Guardado con exito </h4>
                </div>
            </div>
        </div>
    </div>
</body>
</html>