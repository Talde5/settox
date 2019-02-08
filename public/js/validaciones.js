$( document ).ready(function() {


	$('#adminIrakSortu').validate({
			debug: false,
			rules: {
			"Name": {
			required: true
			},
			"email": {
			required: true,
			email: true
			},
			"pasahitza": {
			required: true,
			minlength: 8		
			},
			"departamentua": {
				required: true
			}
		},
		messages: {
			"Name": {
			required: "Sartu izen bat."
			},
			"email": {
			required: "Sartu emaila.",
			email: "Sartu balio duen formatoan."
			},
			"pasahitza": {
			required: "Pasahitza sartu.",
			minlength: "Gutxienez 8 karaktere izan behar ditu."
			},
			"departamentua": {
				required: "Sartu departamentua."
			}
		},
		submitHandler: function(form) {
      form.submit();
    }

	});

	$('#CV').validate({
			debug: false,
			rules: {
			"izena": {
			required: true
			},
			"abizena": {
			required: true
			},
			"dni": {
			required: true
			},
			"email": {
			required: true,
			email: true
			},
			
			"jaiotze_Data": {
			required: true,
			date: true		
			},
			"departamentua": {
				required: true
			},
			"helbidea": {
				required: true
			},
			"kontaktua": {
				required: true
			}

		},
		messages: {
			"izena": {
			required: "Sartu zeure izena"
			},
			"abizena": {
			required: "Sartu zeure abizena"
			},
			"email": {
			required: "Sartu emaila.",
			email: "Sartu balio duen formatoan."
			},
			"dni": {
				required: "Sartu zeure NANa."
			},
			"departamentua": {
				required: "Sartu departamentua."
			},
			"jaiotze_Data": {
			required: "Sartu zeure jaiotze data.",
			date: "Sartu balio duen formatoan."
			},
			"helbidea": {
				required: "Sartu helbidea"
			},
			"kontaktua": {
				required: "Sartu zeure telefonoa."
			}
		},
		submitHandler: function(form) {
      form.submit();
    }

	});

	$('#perfila').validate({
			debug: false,
			rules: {
			"izena": {
			required: true
			},
			"abizena": {
			required: true
			},
			"dni": {
			required: true
			},
			"email": {
			required: true,
			email: true
			},
			
			"jaiotze_Data": {
			required: true,
			date: true		
			},
			"departamentua": {
				required: true
			},
			"helbidea": {
				required: true
			},
			"kontaktua": {
				required: true
			}

		},
		messages: {
			"izena": {
			required: "Sartu zeure izena"
			},
			"abizena": {
			required: "Sartu zeure abizena"
			},
			"email": {
			required: "Sartu emaila.",
			email: "Sartu balio duen formatoan."
			},
			"dni": {
				required: "Sartu zeure NANa."
			},
			"departamentua": {
				required: "Sartu departamentua."
			},
			"jaiotze_Data": {
			required: "Sartu zeure jaiotze data.",
			date: "Sartu balio duen formatoan."
			},
			"helbidea": {
				required: "Sartu helbidea"
			},
			"kontaktua": {
				required: "Sartu zeure telefonoa."
			}
		},
		submitHandler: function(form) {
      form.submit();
    }

	});
	$('#eskaintzaSortu').validate({
			debug: false,
			rules: {
			"enpresa_Izena": {
			required: true
			},
			"lan_Postua": {
			required: true
			},
			"deskripzioa": {
			required: true
			},
			"amaierako_Data": {
			required: true,
			date: true		
			},
			"departamentua": {
				required: true
			},
			"plaza_Hutsak": {
				required: true
			},
			

		},
		messages: {
			"enpresa_Izena": {
			required: "Sartu enpresaren izena"
			},
			"lan_Postua": {
			required: "Sartu lan postua"
			},
			"deskripzioa": {
				required: "Sartu enpresaren deskribapen bat"
			},
			"departamentua": {
				required: "Sartu eskaintzaren departamentua."
			},
			"amaierako_Data": {
			required: "Sartu amaituko den eskaintza",
			date: "Sartu balio duen formatoan."
			},
			"plaza_Hutsak": {
				required: "Sartu zenbat plaza dauden."
			}
			
		},
		submitHandler: function(form) {
      form.submit();
    }

	});
});