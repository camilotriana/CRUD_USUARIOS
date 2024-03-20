<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/system/php/routing/User.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUEVO USUARIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="/system/css/style.css">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-10">
                <h3>NUEVO USUARIO</h3>
            </div>
            <div class="col-lg-2 d-grid gap-2">
                <a href="index" class="btn btn-secondary"><i class="bi bi-arrow-left-circle"></i> Atras</a>
            </div>

            <div class="col-lg-12">
                <hr>
            </div>
        </div>

        <form method="post">
            <div class="row g-3 mt-3">
                <div class="col-lg-6">
                    <label for="name" class="form-label">Nombres</label>
                    <input type="text" class="form-control" id="name" name="name" maxlength="100" required>
                </div>

                <div class="col-lg-6">
                    <label for="last_name" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" maxlength="100" required>
                </div>

                <div class="col-lg-6">
                    <label for="phone" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" id="phone" name="phone" maxlength="12" required>
                </div>

                <div class="col-lg-6">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" maxlength="255" required>
                </div>

                <div class="col-lg-12 d-grid gap-2 mt-5">
                    <button class="btn btn-primary" name="newUser" type="submit"><i class="bi bi-plus-circle-dotted"></i> Crear Usuario</button>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="/system/js/validateForms.js"></script>

    
    <?= $response ?>
</body>

</html>