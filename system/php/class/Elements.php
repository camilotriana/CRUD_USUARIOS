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

    public static function createTable($campo1, $campo2, $campo3, $campo4, $campo5, $campo6, $campo7){
        $html = '<tr>
                    <td>'.$campo1.'</td>
                    <td>'.$campo2.'</td>
                    <td>'.$campo3.'</td>
                    <td>'.$campo4.'</td>
                    <td>'.$campo5.'</td>
                    <td>'.$campo6.'</td>
                    <td>'.$campo7.'</td>
                    <td class="text-center"><a href="editUser?user=' . $campo1 . '" class="m-1"><i class="bi bi-pencil-square"></i></a> <a class="m-1 btnDelete" role="button" id="del-' . $campo1 . '"><i class="bi bi-trash"></i></a></td>
                </tr>';

        return $html;
    }
}
?>