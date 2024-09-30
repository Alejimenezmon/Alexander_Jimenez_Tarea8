<?php
// Función para generar notificaciones emergentes de ofertas especiales
function mostrarNotificacionOferta()
{
    $ofertasEspeciales = [
        "¡Descuento del 20% en vuelos a París!",
        "Reserva 3 noches en Tokio y obtén la cuarta noche gratis.",
        "Paquete especial a Nueva York con visitas guiadas incluidas."
    ];
    
    // Elegir una oferta al azar para mostrar
    $oferta = $ofertasEspeciales[array_rand($ofertasEspeciales)];
    
    // Código JavaScript y HTML para mostrar la notificación
    echo "
    <style>
        .notificacion-oferta {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 15px;
            background-color: #f44336;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            z-index: 1000;
        }
        .notificacion-oferta button {
            background: none;
            border: none;
            color: white;
            font-size: 16px;
            float: right;
            cursor: pointer;
        }
    </style>

    <div class='notificacion-oferta' id='notificacionOferta'>
        $oferta
        <button id='cerrarNotificacion'>X</button>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Cerrar notificación al hacer clic en el botón
        document.getElementById('cerrarNotificacion').addEventListener('click', function() {
            document.getElementById('notificacionOferta').style.display = 'none';
        });

        // Desaparecer automáticamente después de 5 segundos
        setTimeout(function() {
            document.getElementById('notificacionOferta').style.display = 'none';
        }, 5000);
    });
    </script>
    ";
}
?>
