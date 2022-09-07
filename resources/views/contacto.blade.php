<!DOCTYPE html>
<?php /* include('conexion.php'); */ ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de contacto</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}"> <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/templatemo-ocean-vibes.css')}}">
</head>
<body style="display: grid; place-content: center;">
    <!-- <div>
        <h1>Contacto</h1>
        </br>
        <form method="GET">
            <label for="nombre">Nombre</label></br>
            <input type="text" name="nombre"></br>

            <label for="correo">Correo electronico</label></br>
            <input type="text" name="correo"></br>

            <label for="comentario">Comentario</label></br>
            <textarea name="Comentario"></textarea></br>

            <input class="tm-btn" type="submit" value="Enviar"></br>
        </form>
    </div> -->
    <h1>Formulario de Contacto</h1>

    @if(!empty($std_field))
        <form id="contact-form" action="" method="GET" class="tm-contact-form">
            <div class="form-group">
                <input type="text" name="name" class="form-control rounded-0" placeholder="Nombre" value="{{$std_field[0]}}" required />
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control rounded-0" placeholder="Correo electronico" value="{{$std_field[1]}}" required />
            </div>
            </div>
            <div class="form-group">
                <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Comentario" required></textarea>
            </div>

            <div class="form-group tm-text-right">
                <button type="submit" class="tm-btn tm-btn-primary">Enviar</button>
            </div>
        </form>
    @else
        <form id="contact-form" action="" method="GET" class="tm-contact-form">
            <div class="form-group">
                <input type="text" name="name" class="form-control rounded-0" placeholder="Nombre" required />
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control rounded-0" placeholder="Correo electronico" required />
            </div>
            </div>
            <div class="form-group">
                <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Comentario" required=></textarea>
            </div>

            <div class="form-group tm-text-right">
                <button type="submit" class="tm-btn tm-btn-primary">Enviar</button>
            </div>
        </form>
    @endif
    <?php
        /* $sql = "SELECT * FROM persona";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        echo "<table border='1'>";
        echo "<tr> <th>Nombre</th> <th>Correo</th> </tr>";
        foreach($stmt->fetchAll() as $persona){
            echo "<tr>
                    <td>" . $persona['nombre'] . "</td>
                    <td>" . $persona['correo'] . "</td>
                </tr>";
        }
        echo"</table>"; */
    ?>

</body>
</html>