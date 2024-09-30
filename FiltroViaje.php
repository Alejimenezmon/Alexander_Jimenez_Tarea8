<?php
class FiltroViaje
{
    // Propiedades de la clase
    private $nombreHotel;
    private $ciudad;
    private $pais;
    private $fechaViaje;
    private $duracionViaje;
    // Constructor de la clase
    public function __construct($nombreHotel, $ciudad, $pais, $fechaViaje, $duracionViaje)
    {
        $this->nombreHotel = $nombreHotel;
        $this->ciudad = $ciudad;
        $this->pais = $pais;
        $this->fechaViaje = $fechaViaje;
        $this->duracionViaje = $duracionViaje;
    }
    // Métodos getters para acceder a las propiedades
    public function getNombreHotel()
    {
        return $this->nombreHotel;
    }
    public function getCiudad()
    {
        return $this->ciudad;
    }
    public function getPais()
    {
        return $this->pais;
    }
    public function getFechaViaje()
    {
        return $this->fechaViaje;
    }
    public function getDuracionViaje()
    {
        return $this->duracionViaje;
    }
    // Método para realizar una búsqueda personalizada por destino y fecha
    public function buscarPaquetes($destino, $fecha)
    {
        if (strtolower($this->ciudad) === strtolower($destino) && $this->fechaViaje === $fecha) {
            return true;
        }
        return false;
    }
    // Método para mostrar la información del paquete de viaje
    public function mostrarInformacionPaquete()
    {
        return "Hotel: " . $this->nombreHotel . "<br>" .
            "Ciudad: " . $this->ciudad . "<br>" .
            "País: " . $this->pais . "<br>" .
            "Fecha de Viaje: " . $this->fechaViaje . "<br>" .
            "Duración: " . $this->duracionViaje . " días<br>";
    }
    // Método para filtrar paquetes según la duración mínima del viaje
    public function filtrarPorDuracion($minDuracion)
    {
        return $this->duracionViaje >= $minDuracion;
    }
}
?>