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
    // Generar el código JavaScript para mostrar la notificación
    echo "
<script>
document.addEventListener('DOMContentLoaded', function() {
alert('$oferta');
});
</script>
";
}
?>