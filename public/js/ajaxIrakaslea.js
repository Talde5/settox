jQuery(document).ready(function(){
	
            jQuery('#submit').click(function(e){
            	
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               jQuery.ajax({

                  url: "{{ url('/administratzailea/irakasleak/sortu/post') }}",
                  method: 'post',
                  data: {
                     name: jQuery('#izena').val(),
                     email: jQuery('#email').val(),
                     password: jQuery('#pasahitza').val(),
                     departamentua: jQuery('#departamentua').val(),

                  },
                  beforeSend: function() {
                		alert('entra a ajax');
            		},
            		error: function() {
                alert('Error');
            },
                  success: function(result){
                     jQuery('.alert').show();
                     jQuery('.alert').html(result.success);
                  }});
               });
            });