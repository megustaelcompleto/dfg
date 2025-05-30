        <?php 
            // Variables para almacenar mensajes y usuario ingresado 
            $usuarioIngresado = ""; 
            $contrasena            = ""; 
            $msg                         = ""; 
        
            // Validación del formulario 
            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                $usuarioIngresado = $_POST["usuario"] ?? ""; 
                $contrasena = $_POST["contrasena"] ?? ""; 
                if($usuarioIngresado=="Yojhan" AND $contrasena=="valos234") 
                { 
                    $msg = "Excelente"; 
                    header("Location: bienvenida.php"); 
                    exit(); 
                }else{ 
                    $msg = "Contraseña incorrecta...!!!"; 
                } 
            } 
        ?> 
        
        <!DOCTYPE html> 
        <html lang="es"> 
        <head> 
            <meta charset="UTF-8"> 
            <title>Login Sudoku</title>
            <link rel="stylesheet" href="css/estilos_login.css">
        </head> 
        <body> 
        <div class="contenedor"> 
            <img class="imagen" src="logo.jpg" alt="">
                <h2 class="titulo">Iniciar Sesión</h2> 
                <form method="post"> 
                    <label class="datos">Usuario:</label><br> 
                    <input class="inputs" type="text" name="usuario"  required><br><br> 

                    <label class="datos">Contraseña:</label><br> 
                    <input class="inputs" type="password" name="contrasena" required><br><br> 
                    
                    <input class="boton" type="submit" value="Ingresar"> 
                    <br></br>

                    <p class="derechos">©Yojhan Avalos</p>

                    <span> 
                        <?php echo $msg;?> 
                    </span> 
                </form> 
            </div> 
        </body> 
        </html>