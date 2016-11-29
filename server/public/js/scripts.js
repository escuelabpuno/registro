$(document).ready(function(){

	$('#dni').blur(function(){
		var dni  = $("#dni").val();
		var dataString = 'dni='+dni;
		$.ajax({
	        type: "POST",
	        url: "../models/validar.php",
	        data: dataString,
	        success: function(data) {
	            $('#Info').fadeIn(1000).html(data);
	        }
	    });


	});
	$("#enviar").click(function() {
		//Obtenemos el valor del campo nombre
		var dni  = $("#dni").val();
		var nom_ap = $("#nom_ap").val();
		var edad = $("#edad").val();
		var celular = $("#celular").val();
		var institucion = $("#institucion").val();
		var email = $("#email").val();
		var hora_ingreso = $("#hora_ingreso").val();
		var motivo = $("#motivo").val();


		debugger

		var dataString = {'dni' : dni,
						 'nom_ap' : nom_ap,
						 'edad' : edad,
						 'celular' : celular,
						 'institucion' : institucion,
						 'email' : email,
						 'hora_ingreso' : hora_ingreso,
						 'motivo' : motivo};
		$.ajax({
			type: "POST",
			url: "../models/registrar.php",
			data : dataString,
			success: function() {
		    	$('#register_form').html("<div id='message'></div>");
		        $('#message').html("<h2>Tus datos han sido guardados correctamente!</h2>").hide().fadeIn(1500, function() {
					$('#message').append("<a href='index.php?action=see'>Ver usuarios registrados</a>");
		        });
		    }
		});
		return false;
	});


});

/*$(document).ready(function() {
    $("#ok").hide();

    $("#register-form").validate({
        rules: {
        	dni: {required: true, maxlength:8},
            nom_ap: { required: true, minlength: 2},
            edad: { required: true, minlength: 2},
            celular: {required: true, minlength: 9},
            institucion: { required: true, minlength: 2},
            email: { required:true, email: true},
            //hora_ingreso: { minlength: 2, maxlength: 15},
            motivo: { required: false},
        },
        messages: {
            name: "Debe introducir su nombre.",
            nom_ap: "Debe introducir su nombre y apellido.",
            edad : "Debes introducir tu edad.",
            celular : "Debe introducir un celular válido.",
            institucion : "Debe ingresar su institucion.",
            email : "El campo email es obligatorio.",
            motivo : "El campo Mensaje es obligatorio.",
        },
        submitHandler: function(form){
            var dataString = {'dni' : dni,
						 'nom_ap' : nom_ap,
						 'edad' : edad,
						 'celular' : celular,
						 'institucion' : institucion,
						 'email' : email,
						 'hora_ingreso' : hora_ingreso,
						 'motivo' : motivo};
            $.ajax({
                type: "POST",
                url:"../models/registrar.php",
                data: dataString,
                success: function(data){
                    $("#ok").html(data);
                    $("#ok").show();
                    $("#register-form").hide();
                }
            });
        }
    });
});





*/
