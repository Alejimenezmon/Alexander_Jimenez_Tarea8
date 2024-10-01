<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia de Viajes - Búsqueda de Paquetes</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Busca tu Paquete de Viaje Ideal</h1>
    <form method="post" action="">
        <div class="search-container">
            <label for="destination">Destino:</label>
            <input type="text" id="destination" name="destination" placeholder="Destino" required>
            <label for="travel_date">Fecha de Viaje:</label>
            <input type="date" id="travel_date" name="travel_date" required>
            <button type="submit">Buscar</button>
        </div>
    </form>
    <?php include 'notificaciones.php'; ?>
    <?php mostrarNotificacionOferta(); ?>
    <div id="results-container">
    </div>
    <div class="form-container">
        <h2>Registro de Intención de Viaje</h2>
        <form action="procesar_registro.php" method="post">
            <div class="form-group">
                <label for="hotel-name">Nombre del Hotel:</label>
                <input type="text" id="hotel-name" name="hotel_name" placeholder="Nombre del hotel" required>
            </div>
            <div class="form-group">
                <label for="city">Ciudad:</label>
                <input type="text" id="city" name="city" placeholder="Ciudad de destino" required>
            </div>
            <div class="form-group">
                <label for="country">País:</label>
                <input type="text" id="country" name="country" placeholder="País de destino" required>
            </div>
            <div class="form-group">
                <label for="travel-date">Fecha de Viaje:</label>
                <input type="date" id="travel-date" name="travel_date" required>
            </div>
            <div class="form-group">
                <label for="duration">Duración del Viaje (días):</label>
                <input type="number" id="duration" name="duration" min="1" required>
            </div>
            <button type="submit">Registrar Viaje</button>
        </form>
    </div>
    <div class="package-container">
        <h2>Paquetes Turísticos Disponibles</h2>
        <form action="carrito.php" method="post">
            <div class="package-item">
                <div class="package-info">
                    <strong>Paquete a París</strong><br>
                    Destino: París, Francia
                </div>
                <div class="package-price">$1500</div>
                <div class="package-button">
                    <input type="hidden" name="package_name" value="Paquete a París">
                    <input type="hidden" name="destination" value="París, Francia">
                    <input type="hidden" name="price" value="1500">
                    <button type="submit">Agregar al Carrito</button>
                </div>
            </div>
            <div class="package-item">
                <div class="package-info">
                    <strong>Paquete a Tokio</strong><br>
                    Destino: Tokio, Japón
                </div>
                <div class="package-price">$2000</div>
                <div class="package-button">
                    <input type="hidden" name="package_name" value="Paquete a Tokio">
                    <input type="hidden" name="destination" value="Tokio, Japón">
                    <input type="hidden" name="price" value="2000">
                    <button type="submit">Agregar al Carrito</button>
                </div>
        </form>
    </div>
    <div class="package-container">
        <h2>Contenido del Carrito</h2>
        <form action="ver_carrito.php" method="post">
            <button type="submit">Ver Carrito</button>
        </form>
    </div>
    <script>
        // Validación en JavaScript
        function validarVuelo() {
            var origen = document.getElementById("origen").value;
            var destino = document.getElementById("destino").value;
            var fecha = document.getElementById("fecha").value;
            var plazas = document.getElementById("plazas_disponibles").value;
            var precio = document.getElementById("precio").value;
            if (origen === "" || destino === "" || fecha === "" || plazas === "" || precio === "") {
                alert("Todos los campos son obligatorios");
                return false;
            }
            if (isNaN(plazas) || plazas <= 0) {
                alert("Plazas disponibles debe ser un número válido mayor a 0");
                return false;
            }
            if (isNaN(precio) || precio <= 0) {
                alert("El precio debe ser un número válido mayor a 0");
                return false;
            }
            return true;
        }
    </script>
    <div class="formularios-gestion">
        <h2>Registrar un nuevo vuelo</h2>
        <form action="insertar_vuelo.php" method="POST" onsubmit="return validarVuelo()">
            <label for="origen">Origen:</label>
            <input type="text" id="origen" name="origen"><br><br>
            <label for="destino">Destino:</label>
            <input type="text" id="destino" name="destino"><br><br>
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha"><br><br>
            <label for="plazas_disponibles">Plazas Disponibles:</label>
            <input type="number" id="plazas_disponibles" name="plazas_disponibles"><br><br>
            <label for="precio">Precio:</label>
            <input type="text" id="precio" name="precio"><br><br>
            <input type="submit" value="Registrar Vuelo">
        </form>
    </div>
    <script>
        // Validación en JavaScript
        function validarHotel() {
            var nombre = document.getElementById("nombre").value;
            var ubicacion = document.getElementById("ubicacion").value;
            var habitaciones = document.getElementById("habitaciones_disponibles").value;
            var tarifa = document.getElementById("tarifa_noche").value;
            if (nombre === "" || ubicacion === "" || habitaciones === "" || tarifa === "") {
                alert("Todos los campos son obligatorios");
                return false;
            }
            if (isNaN(habitaciones) || habitaciones <= 0) {
                alert("Habitaciones disponibles debe ser un número válido mayor a 0");
                return false;
            }
            if (isNaN(tarifa) || tarifa <= 0) {
                alert("La tarifa por noche debe ser un número válido mayor a 0");
                return false;
            }
            return true;
        }
    </script>
    <div class="formularios-gestion">
        <h2>Registrar un nuevo hotel</h2>
        <form action="insertar_hotel.php" method="POST" onsubmit="return validarHotel()">
            <label for="nombre">Nombre del Hotel:</label>
            <input type="text" id="nombre" name="nombre"><br><br>
            <label for="ubicacion">Ubicación:</label>
            <input type="text" id="ubicacion" name="ubicacion"><br><br>
            <label for="habitaciones_disponibles">Habitaciones Disponibles:</label>
            <input type="number" id="habitaciones_disponibles" name="habitaciones_disponibles"><br><br>
            <label for="tarifa_noche">Tarifa por Noche:</label>
            <input type="text" id="tarifa_noche" name="tarifa_noche"><br><br>
            <input type="submit" value="Registrar Hotel">
        </form>
    </div>
</body>

</html>
