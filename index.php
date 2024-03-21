<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/system/php/routing/User.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USUARIOS</title>
    <link rel="icon" type="image/webp" href="/assets/img/icono.webp" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />

    <link rel="stylesheet" href="/system/css/style.css">
</head>

<body>

    <!-- ======= Header ======= -->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/system/partials/header.php'; ?>
    <!-- End Header -->

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-9 col-md-9 col-sm-8">
                <h3 class="main-title">USUARIOS</h3>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4">
                <a href="newUser" class="btn btn-primary w-100"><i class="bi bi-person-plus"></i> Nuevo Usuario</a>
            </div>
            <div class="col-lg-12">
                <hr>
            </div>
        </div>

        <div class="table-responsive mt-5">
            <table class="table table-light table-striped" width="100%" id="tableUser">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Fecha registro</th>
                        <th>Fecha modificación</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $tableUsers ?>
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <form method="post">
            <div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="idUser" class="form-label">¿Esta seguro que desea eliminar el usuario?</label>
                                    <input type="hidden" class="form-control" id="idUser" name="idUser" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i> Cancelar</button>
                            <button type="submit" name="deleteUser" class="btn btn-danger"><i class="bi bi-trash"></i> Eliminar Usuario</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>

    <!-- ======= Footer ======= -->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/system/partials/footer.php'; ?>
    <!-- End Footer -->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="/system/vendor/jquery/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="/system/js/dataTable.js"></script>
    <script src="/system/js/user.js"></script>

    <?= $response ?>


</body>

</html>