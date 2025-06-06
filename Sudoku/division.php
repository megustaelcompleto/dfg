    <?php 
    
    ?> 
    
    <!DOCTYPE html> 
    <html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Diviones</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script> 
        <link rel="stylesheet" href="css/menu_sumar.css"> 
        <link rel="stylesheet" href="css/sumar.css"> 
        <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js"></script> 
    </head> 
    <body> 
    
        <header class="menu-header"> 
            <nav class="main-nav"> 
                <ul> 
                    <li><a href="bienvenida.php">Inicio</a></li> 
                    <li><a href="sumar.php">Sumar</a></li> 
                    <li><a href="restar.php">Restar</a></li> 
                    <li><a href="multiplicacion.php">Multiplicar</a></li> 
                    <li><a href="division.php">División</a></li> 
                    <li><a href="mixto.php">Mixto</a></li> 
                    <li><a href="index.php">Cerrar</a></li> 
                    <li><a href="autor.html">Autor</a></li> 
                </ul> 
            </nav> 
        </header> 

            <br> 
        <div class="contenedor"> 
            <h1>Divisiones</h1>
            <!-- Elaboramos una tabla de 5 columnas y 5 filas --> 
            <table> 
                <!-- ondrop=que pasa cuando se suelta el elemento arrastrado --> 
                <!-- ondragover= especifico donde se suelta el elemento arrastrado --> 
                <tr> 
                    <td class="no-contiene" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></td> 
                    <td class="contiene">=</td> 
                    <td class="contiene">2</td> 
                    <td class="contiene">÷</td> 
                    <td class="contiene">20</td> 
                </tr> 
                <tr> 
                    <td class="contiene">÷</td> 
                    <td></td> 
                    <td class="contiene">=</td> 
                    <td></td> 
                    <td></td> 
                </tr> 
                <tr> 
                    <td class="contiene">2</td> 
                    <td class="contiene">=</td> 
                    <td class="no-contiene" id="1" ondrop="drop(event)" ondragover="allowDrop(event)"></td> 
                    <td class="contiene">÷</td> 
                    <td class="contiene">10</td> 
                </tr> 
                <tr> 
                    <td class="contiene">=</td> 
                    <td></td> 
                    <td class="contiene">÷</td> 
                    <td></td> 
                    <td></td> 
                </tr> 
                <tr> 
                    <td class="no-contiene" id="2" ondrop="drop(event)" ondragover="allowDrop(event)"></td> 
                    <td class="contiene">=</td> 
                    <td class="contiene">10</td> 
                    <td class="contiene">÷</td> 
                    <td class="no-contiene" id="3" ondrop="drop(event)" ondragover="allowDrop(event)"></td> 
                </tr>             
            </table> 
            <br> 
            <div class="contenedor-alternativa"> 
                <!-- ondragstart=que debe suceder cuando se arrastra el elemento --> 
                <!-- draggable=el elemento se puede arrastrar--> 
                <div class="caja" draggable="true" ondragstart="drag(event)" id="c">2</div> 
                <div class="caja" draggable="true" ondragstart="drag(event)" id="a">10</div> 
                <div class="caja" draggable="true" ondragstart="drag(event)" id="d">20</div> 
                <div class="caja" draggable="true" ondragstart="drag(event)" id="b">5</div> 
            </div>       
            <br> 
            <!--visualizar resultado --> 
            <div class="resultado"> 
                <h2 ></h2> 
            </div> 
            <!-- fin visualizar resultado --> 
        </div> 
        <script src="js/dividir.js"></script>
    </body> 
    </html>