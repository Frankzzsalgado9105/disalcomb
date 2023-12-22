<?php
include 'template/headeradmin.php';
?>
 <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #5faee3; /* Cambia el color de fondo según tus preferencias */
        }

        form {
            width: 600px;
            padding: 30px;
            margin: auto;
            border: 4px solid #0a0f66;
            border-radius: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            background-color: #ffffff; /* Cambia el color de fondo del formulario según tus preferencias */
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .h3 {
            font-size: 1.75rem;
        }

        .form-floating {
            position: relative;
            margin-bottom: 1rem;
        }

        .form-floating input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #0a0f66;
            border-radius: 4px;
            font-size: 1rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        
        .form-floating input:focus {
            border-color: #5faee3; /* Cambia el color del borde al enfocar el campo */
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(95, 174, 227, 0.25); /* Cambia el color del resplandor al enfocar el campo */
        }

        .form-floating label {
            position: absolute;
            top: 0.25rem;
            left: 0.75rem;
            pointer-events: none;
            font-size: 0.875rem;
            color: #5faee3;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out,
                box-shadow 0.15s ease-in-out;
            cursor: pointer;
        }


        .btn-primary {
            color: #fff;
            background-color: #0a0f66;
            border-color: #0a0f66;
        }

        .btn-primary:hover {
            color: #000000;
            background-color: #5faee3;
            border-color: #5faee3;
        }

        .copyright {
            margin-top: 40px;
            font-size: 0.75rem;
            color: #6c757d;
        }
    </style>
<br><br><br><br>
<form id="registroForm">
    <main class="form-signin w-100 m-auto">
    <center>
    <img class="mb-4" src="assets/logos/LogoDSC.png" alt="" width="150" height="150">
    </center>
    
    <div class="form-floating">
      <input type="email" class="form-control" name="nombreuser" id="nombreuser" >
      <label for="floatingInput">Nombre de usuario</label>
      <br>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" name="nombre" id="nombre" >
      <label for="floatingInput">Nombre completo</label>
      <br>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" name="correo" id="correo" >
      <label for="floatingInput">Correo</label>
      <br>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="contrasena" id="contrasena">
      <label for="floatingPassword">Contraseña</label>
      <br>
    </div>
    <button type="button" class="btn btn-primary" onclick="registrarUsuario()">Registrarse</button>
 
</main>
</form>

<?php
include 'template/footeradmin.php';
?>