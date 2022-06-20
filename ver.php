
<script src="./bucle.js"></script>
<body bgcolor="#bed7c0" >
    <div class="main">
        <h1>Mostrando imagen almacenada en MySQL</h1>
        <br>
        <h2>¿Cuantas imagenes quieres ver?</h2>
        <br>
        
        <input type="number" id="numero">
        <button onclick="prueba()" id="buscar">Buscar</button>
        
        <br>
        <div class="panel panel-primary">
            <div class="panel-body" id="info">
            </div> 
        </div>
    </div>
    <button role="link" onclick="window.location='./index.php'">Volver</button>


</body>