<?php
class Elements{
    public static function crearMensaje($mensaje, $icon)
    {
        $script = '<script>
                        Swal.fire({
                            title: "'.$mensaje.'",
                            icon: "'.$icon.'",
                            confirmButtonText: "Aceptar",
                            confirmButtonColor: "#3085d6"
                        });
                    </script>';

        return $script;
    }
}
?>