function encuesta(accion){
    switch(accion){
        case 'formNew':
            $.dialog({
                title: 'Nueva Encuesta',
                content: 'url:../class/classEncuesta.php?accion=',
                columnClass: 'large',
                buttons: {
                    aceptar: {
                        text: 'Registrar',
                        action: function () {
                            $.alert('que hago para insertar');
                        }
                    },
                    cancelar: function () {
                        $.alert('action is Canceled!');
                    }
                }
            });
        break;
        default: $.alert(
            {title: 'Atencion',
            content: accion+" Accion no programada."}
        )
    }
}