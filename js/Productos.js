var bandera = false;

$(document).ready(function() {
            $('#form').dialog({
            autoOpen: false,
                        buttons: {
                            "Aceptar": function() {;
                                    $("#form").submit();

                            },
                            "Cancel": function() {
                                $(this).dialog("close");
                            }
                        }
        });
        });

$(document).ready(function() {
            $('#formTipo').dialog({
            autoOpen: false,
                        buttons: {
                            "Aceptar": function() {;
                            $("#formTipo").submit();
                            },
                            "Cancel": function() {
                                $(this).dialog("close");
                            }
                        }
        });
        });
$(document).ready(function() {
            $('#ModificarP').dialog({
            autoOpen: false,
                        buttons: {
                            "Aceptar": function() {;
                            $("#ModificarP").submit();
                            },
                            "Cancel": function() {
                                $(this).dialog("close");
                            }
                        }
        });
        });

$(document).ready(function() {
            $('#BorrarP').dialog({
            autoOpen: false,
                        buttons: {
                            "Aceptar": function() {;
                            $("#ModificarP").submit();
                            },
                            "Cancel": function() {
                                $(this).dialog("close");
                            }
                        }
        });
        });


function abrirDialogo()
{
    $('#form').dialog('open');
    return false;
}

function abrirTipo()
{
    $('#formTipo').dialog('open');
    return false;
}
function abrirModificarP()
{
    $('#ModificarP').dialog('open');
    return false;
}

function abrirBorrarP()
{
    $('#BorrarP').dialog('open');
    return false;
}