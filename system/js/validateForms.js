$("form").submit(function(event) {
    if (validateName() && validateLastName() && validatePhone() && validateEmail()) {
        return true;
    } else {
        return false;
    }
});

function validateName() {
    let name = $("#name").val();

    if (name.length >= 3 && name.length <= 100) {
        return true;
    } else {
        Swal.fire({
            title: "Los nombres deben tener entre 3 y 100 caracteres",
            icon: "warning",
            confirmButtonText: "Aceptar",
            confirmButtonColor: "#3085d6"
        });

        return false;
    }
}

function validateLastName() {
    let last_name = $("#last_name").val();

    if (last_name.length >= 3 && last_name.length <= 100) {
        return true;
    } else {
        Swal.fire({
            title: "Los apellidos deben tener entre 3 y 100 caracteres",
            icon: "warning",
            confirmButtonText: "Aceptar",
            confirmButtonColor: "#3085d6"
        });

        return false;
    }
}

function validatePhone() {
    let phone = $("#phone").val();

    if (phone.length >= 5 && phone.length <= 12) {
        return true;
    } else {
        Swal.fire({
            title: "El teléfono debe tener entre 5 y 12 dígitos",
            icon: "warning",
            confirmButtonText: "Aceptar",
            confirmButtonColor: "#3085d6"
        });

        return false;
    }
}

function validateEmail() {
    let email = $("#email").val();
    let regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

    if (regex.test(email)) {
        if (email.length >= 15 && email.length <= 255) {
            return true;
        } else {
            Swal.fire({
                title: "El correo debe tener entre 15 y 255 caracteres",
                icon: "warning",
                confirmButtonText: "Aceptar",
                confirmButtonColor: "#3085d6"
            });
            return false;
        }
    } else {
        Swal.fire({
            title: "El correo ingresado no es valido",
            text: "Ejemplo: nombre_apellido@gmail.com",
            icon: "warning",
            confirmButtonText: "Aceptar",
            confirmButtonColor: "#3085d6"
        });
        return false;
    }

}

$('#name').on('input', function() {
    this.value = this.value.replace(/[^A-Za-z\s]/g, '');
});

$('#last_name').on('input', function() {
    this.value = this.value.replace(/[^A-Za-z\s]/g, '');
});

$('#phone').on('input', function() {
    this.value = this.value.replace(/[^0-9]/g, '');
});