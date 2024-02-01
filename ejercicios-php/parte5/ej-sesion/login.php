<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Inicio de sesion</title>
</head>

<body>
    <form action="autenticacion.php" method="POST">
        <h1>INICIAR SESION</h1>
        
        <hr>
        <i class="fa-solid fa-user"></i>
        <label>Usuario</label>
        <input type="text" name="nombre-usuario" id="nombre-usuario" placeholder="Nombre de usuario">

        <i class="fa-solid fa-unlock"></i>
        <label>Clave</label>
        <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña">
        <hr>
        <button id="iniciar-sesion" type="submit" >Iniciar Sesi&oacute;n</button>
        
    </form>

    <footer>
        <a id="volver" href="../index.html">Volver</a>
    </footer>
</body>
</html>

