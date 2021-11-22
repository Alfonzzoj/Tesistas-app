<?php
// Permite enviar un mensaje desde php a javascript con la funcion console.log
function console_log($mensaje)
{
    echo '<script>console.log("' . $mensaje . '")</script>';
}
