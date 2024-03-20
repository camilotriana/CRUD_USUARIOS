$(".btnDelete").on("click", function() {
    let idCompuesto = $(this).attr("id");
    let id = idCompuesto.split("-");
    $('#idUser').val(id[1]);

    $("#modalDelete").modal("show");
});