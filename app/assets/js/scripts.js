$(document).ready(function() {
	// $("#ok").hide();

	$("#register-form").validate({
		rules: {
			dni: {
				required: true,
				minlength: 8,
				maxlength: 8,
			},
			name_lastname: {
				required: true,
				minlength: 2
			},
			age: {
				required: true,
				minlength: 1
			},
			cellphone: {
				required: true,
				minlength: 9
			},
			institution: {
				required: true,
				minlength: 2
			},
			email: {
				required:true,
				email: true
			},
			//hora_ingreso: { minlength: 2, maxlength: 15},
			reason: {
				required: false
			},
		},

		// messages: {
		//     name: "Debe introducir su nombre.",
		//     nom_ap: "Debe introducir su nombre y apellido.",
		//     edad : "Debes introducir tu edad.",
		//     celular : "Debe introducir un celular válido.",
		//     institucion : "Debe ingresar su institucion.",
		//     email : "El campo email es obligatorio.",
		//     motivo : "El campo Mensaje es obligatorio.",
		// },

		submitHandler: function(form){
			var arrayData = $(form).serializeArray()
			var data = {};

			arrayData.forEach(function (item) { data[item.name] = item.value })

			$.ajax({
				type: "POST",
				url:"/api/v1/person",
				data: data,
				success: function(result){
					$("#ok").html(data);
					$("#ok").show();
					$("#register-form").hide();
				}
			});
		}
	});
})
