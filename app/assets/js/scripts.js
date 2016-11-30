$(document).ready(function() {

	// Add an event listener to show message component.
	document.addEventListener('newPerson', function(e) {
		var $message = $('.message')
		var $description = $message.find('.message__content___description')

		$description.html(`<strong>${ e.detail.fullname }</strong> fue registrado exitosamente.`)
		$message.addClass('message--show')

		setTimeout( function(){
			$message.removeClass('message--show')
		}, 2000)
	})


	$('#register-form').validate({
		rules: {
			pid: {
				required: true,
				minlength: 8,
				maxlength: 8,
			},
			fullname: {
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
			reason: {
				required: false
			},
		},

		// messages: {
		//     name: 'Debe introducir su nombre.',
		//     nom_ap: 'Debe introducir su nombre y apellido.',
		//     edad : 'Debes introducir tu edad.',
		//     celular : 'Debe introducir un celular válido.',
		//     institucion : 'Debe ingresar su institucion.',
		//     email : 'El campo email es obligatorio.',
		//     motivo : 'El campo Mensaje es obligatorio.',
		// },

		submitHandler: function(form) {
			var arrayData = $(form).serializeArray()
			var data = {}

			arrayData.forEach(function (item) { data[item.name] = item.value })

			// Reset form.
			form.reset()

			$.ajax({
				type: 'POST',
				url:'/api/v1/person',
				data: data,
				success: function(result){
					// Create the event
					var event = new CustomEvent('newPerson', { detail: result })

					// Dispatch/Trigger/Fire the event
					document.dispatchEvent(event)
				}
			})
		}
	})
})
